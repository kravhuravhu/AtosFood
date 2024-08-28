//  // Firebase configuration
//  const firebaseConfig = {
//     apiKey: "YOUR_API_KEY",
//     authDomain: "todo-99061.firebaseapp.com",
//     projectId: "todo-99061",
//     storageBucket: "todo-99061.appspot.com",
//     messagingSenderId: "762103887675",
//     appId: "1:762103887675:web:1688aaa42705037045691e"
// };

// // Initialize Firebase
// firebase.initializeApp(firebaseConfig);

// const db = firebase.firestore();
// const loadingSpinner = document.getElementById('loadingSpinner');

// // Function to show loading spinner
// function showLoadingSpinner() {
//     loadingSpinner.style.display = 'block';
// }

// // Function to hide loading spinner
// function hideLoadingSpinner() {
//     loadingSpinner.style.display = 'none';
// }

// // Function to add task to Firestore
// function addTask() {
//     const taskInput = document.getElementById('todo-taskInput');
//     const taskText = taskInput.value.trim();

//     if (taskText === '') {
//         alert(' the input field is empty, type to add task!');
//         return; // Exit function if input is empty
//     }

//     showLoadingSpinner(); // Show spinner while adding task

//     // Get total number of tasks to determine new order
//     db.collection('todo').get().then(snapshot => {
//         const order = snapshot.size; // Use number of tasks as the order

//         db.collection('todo').add({
//             task: taskText,
//             completed: false,
//             order: order,
//             timestamp: firebase.firestore.FieldValue.serverTimestamp()
//         })
//         .then(() => {
//             taskInput.value = '';
//             taskInput.focus();
//         })
//         .catch(error => {
//             console.error('Error adding task: ', error);
//         })
//         .finally(() => {
//             hideLoadingSpinner(); // Hide spinner after task is added
//         });
//     });
// }

// // Function to toggle task completion status
// function toggleTaskCompleted(taskItem, completed) {
//     const taskId = taskItem.getAttribute('data-id');
//     db.collection('todo').doc(taskId).update({
//         completed: completed
//     })
//     .then(() => {
//         taskItem.classList.toggle('completed', completed);
//     })
//     .catch(error => {
//         console.error('Error updating task: ', error);
//     });
// }

// // Function to edit a task in Firestore
// function editTask(taskItem, currentTaskText) {
//     const taskId = taskItem.getAttribute('data-id');
//     const newTaskText = prompt('Edit Task:', currentTaskText);
//     if (newTaskText && newTaskText.trim() !== '') {
//         db.collection('todo').doc(taskId).update({
//             task: newTaskText.trim(),
//             timestamp: firebase.firestore.FieldValue.serverTimestamp()
//         })
//         .then(() => {
//             taskItem.querySelector('.todo-span').textContent = newTaskText.trim();
//             taskItem.querySelector('.todo-timestamp').textContent = formatDate(new Date());
//         })
//         .catch(error => {
//             console.error('Error updating task: ', error);
//         });
//     }
// }

// // Function to delete a task from Firestore
// function deleteTask(taskItem) {
//     const taskId = taskItem.getAttribute('data-id');
//     db.collection('todo').doc(taskId).delete()
//         .then(() => {
//             taskItem.remove();
//         })
//         .catch(error => {
//             console.error('Error deleting task: ', error);
//         });
// }

// // Function to format date as "DD/MM/YYYY HH:MM:SS"
// function formatDate(date) {
//     const options = { 
//         day: '2-digit', 
//         month: '2-digit', 
//         year: 'numeric',
//         hour: '2-digit',
//         minute: '2-digit',
//         second: '2-digit' 
//     };
//     return date.toLocaleDateString('en-GB', options);
// }

// // Function to handle updating task order after drag and drop
// function updateTaskOrder(event) {
//     const { oldIndex, newIndex } = event;
//     const taskList = document.getElementById('todo-taskList');
//     const tasks = taskList.querySelectorAll('.todo-item');

//     // Reorder DOM elements
//     const draggedTask = tasks[oldIndex];
//     const siblingTask = tasks[newIndex];

//     if (!draggedTask || !siblingTask) {
//         console.error('Invalid drag operation.');
//         return;
//     }

//     taskList.insertBefore(draggedTask, siblingTask);

//     // Update task order in Firestore
//     const batch = db.batch();

//     tasks.forEach((task, index) => {
//         const taskId = task.getAttribute('data-id');
//         const taskRef = db.collection('todo').doc(taskId);
//         batch.update(taskRef, { order: index });
//     });

//     batch.commit().then(() => {
//         console.log('Task order updated successfully.');
//     }).catch(error => {
//         console.error('Error updating task order: ', error);
//     });
// }

// // Load tasks when the page loads
// window.onload = function() {
//     const taskList = document.getElementById('todo-taskList');

//     showLoadingSpinner(); // Show spinner while loading tasks

//     // Load tasks from Firestore
//     db.collection('todo').orderBy('order').onSnapshot(snapshot => {
//         taskList.innerHTML = ''; // Clear existing tasks

//         snapshot.forEach(doc => {
//             const task = doc.data();
//             const taskId = doc.id;

//             // Check if task.timestamp exists and is valid before using it
//             const timestamp = task.timestamp ? task.timestamp.toDate() : new Date();

//             // Create task item
//             const taskItem = document.createElement('li');
//             taskItem.setAttribute('data-id', taskId);
//             taskItem.className = `todo-item ${task.completed ? 'completed' : ''}`;

//             const dragHandle = document.createElement('span');
//             dragHandle.className = 'todo-drag-handle';
//             dragHandle.textContent = '';

//             const checkbox = document.createElement('input');
//             checkbox.type = 'checkbox';
//             checkbox.checked = task.completed;
//             checkbox.addEventListener('change', () => toggleTaskCompleted(taskItem, checkbox.checked));

//             const span = document.createElement('span');
//             span.textContent = task.task;
//             span.className = 'todo-span';

//             const editButton = document.createElement('button');
//             editButton.textContent = 'Edit';
//             editButton.className = 'todo-edit';
//             editButton.addEventListener('click', () => editTask(taskItem, task.task));

//             const deleteButton = document.createElement('button');
//             deleteButton.textContent = 'Delete';
//             deleteButton.className = 'todo-delete';
//             deleteButton.addEventListener('click', () => deleteTask(taskItem));

//             const timestampSpan = document.createElement('span');
//             timestampSpan.textContent = formatDate(timestamp);
//             timestampSpan.className = 'todo-timestamp';

//             taskItem.appendChild(dragHandle);
//             taskItem.appendChild(checkbox);
//             taskItem.appendChild(span);
//             taskItem.appendChild(editButton);
//             taskItem.appendChild(deleteButton);
//             taskItem.appendChild(timestampSpan);

//             taskList.appendChild(taskItem);
//         });

//         hideLoadingSpinner(); // Hide spinner after tasks are loaded

//         // Initialize Sortable after tasks are loaded
//         new Sortable(taskList, {
//             handle: '.todo-drag-handle',
//             animation: 150,
//             onEnd: updateTaskOrder,
//             swapThreshold: 0.5, // Percentage of swap overlap needed to trigger swap
//             draggable: '.todo-item' // Specify which items are draggable
//         });
//     }, error => {
//         console.error('Error loading tasks: ', error);
//         hideLoadingSpinner(); // Hide spinner in case of error
//     });
// };