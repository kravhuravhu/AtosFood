/*** 
 ========================================================================
                     Direct Chat 
 ========================================================================
//  ***/
// // scripts.js
// // Your web app's Firebase configuration
//  // Your web app's Firebase configuration
//  const firebaseConfig = {
//   apiKey: "",
//   authDomain: "todo-99061.firebaseapp.com",
//   projectId: "todo-99061",
//   storageBucket: "todo-99061.appspot.com",
//   messagingSenderId: "762103887675",
//   appId: "1:762103887675:web:1688aaa42705037045691e"
// };
// // Initialize Firebase
// firebase.initializeApp(firebaseConfig);

// const database = firebase.database();


let currentUser = "admin2"; // Default to Admin1

// Switch user for demonstration (toggle between Admin1 and Admin2)
function switchUser() {
currentUser = currentUser === "Admin1" ? "Admin2" : "Admin1";
}

// Send message to Firebase
function sendMessage() {
const messageInput = document.querySelector('input[name="message"]');
const message = messageInput.value;

if (message.trim() === "") return;

const newMessageRef = database.ref('messages').push();
newMessageRef.set({
  text: message,
  timestamp: Date.now(),
  user: currentUser
});

messageInput.value = '';
messageInput.focus();
}

document.getElementById('sendMessageBtn').addEventListener('click', sendMessage);

// Display message
function displayMessage(id, text, timestamp, user) {
const messagesContainer = document.querySelector('.direct-chat-messages');
const messageElement = document.createElement('div');
messageElement.classList.add('direct-chat-msg');
if (user === 'Admin2') {
  messageElement.classList.add('right');
}
messageElement.dataset.id = id;

const imgSrc = user === "Admin1" ? 'k.png' : 'R.png';

const messageInfo = `
  <div class="direct-chat-infos clearfix">
    <span class="direct-chat-name ${user === 'Admin2' ? 'float-right' : 'float-left'}">${user}</span>
    <span class="direct-chat-timestamp ${user === 'Admin2' ? 'float-left' : 'float-right'}">${new Date(timestamp).toLocaleString()}</span>
  </div>
  <img class="direct-chat-img" src="${imgSrc}" alt="message user image">
  <div class="direct-chat-text">
    ${text}
  </div>
  <div class="message-actions">
    <button class="edit-btn">Edit</button>
    <button class="delete-btn">Delete</button>
  </div>
`;

messageElement.innerHTML = messageInfo;
messagesContainer.appendChild(messageElement);
messagesContainer.scrollTop = messagesContainer.scrollHeight; // Scroll to the bottom

messageElement.querySelector('.edit-btn').addEventListener('click', () => editMessage(id, messageElement));
messageElement.querySelector('.delete-btn').addEventListener('click', () => deleteMessage(id));
}

// Listen for new messages
database.ref('messages').on('child_added', (snapshot) => {
const message = snapshot.val();
displayMessage(snapshot.key, message.text, message.timestamp, message.user);
});

// Edit message
function editMessage(id, messageElement) {
const text = prompt("Edit your message:", messageElement.querySelector('.direct-chat-text').textContent);
if (text !== null) {
  database.ref('messages').child(id).update({ text });
}
}

// Delete message
function deleteMessage(id) {
if (confirm("Are you sure you want to delete this message?")) {
  database.ref('messages').child(id).remove();
}
}

// Listen for message updates
database.ref('messages').on('child_changed', (snapshot) => {
const message = snapshot.val();
const messageElement = document.querySelector(`.direct-chat-msg[data-id='${snapshot.key}'] .direct-chat-text`);
messageElement.textContent = message.text;
});

// Listen for message deletions
database.ref('messages').on('child_removed', (snapshot) => {
const messageElement = document.querySelector(`.direct-chat-msg[data-id='${snapshot.key}']`);
messageElement.remove();
});

// Allow pressing Enter to send message
document.querySelector('input[name="message"]').addEventListener('keydown', (e) => {
if (e.key === 'Enter') {
  sendMessage();
}
});