/*-----------------------------------------------------------------------------------------------------

To List 
------------------------------------------------------------------------------------------------------*/
function addTask() {
  const taskInput = document.getElementById('todo-taskInput');
  const taskText = taskInput.value.trim();
  
  if (taskText === '') {
      alert('Please enter a task.');
      return;
  }

  const taskList = document.getElementById('todo-taskList');
  
  const li = document.createElement('li');
  li.className = 'todo-item';
  
  const checkbox = document.createElement('input');
  checkbox.type = 'checkbox';
  checkbox.onclick = function() {
      if (checkbox.checked) {
          li.classList.add('completed');
      } else {
          li.classList.remove('completed');
      }
  };

  const dragHandle = document.createElement('span');
  dragHandle.className = 'todo-drag-handle';

  const taskSpan = document.createElement('span');
  taskSpan.textContent = taskText;
  taskSpan.className = 'todo-span';

  const timestamp = document.createElement('span');
  timestamp.className = 'todo-timestamp';
  const now = new Date();
  timestamp.dataset.timestamp = now.getTime();
  updateTimestamp(timestamp);
  setInterval(() => updateTimestamp(timestamp), 60000); // Update every minute

  const editButton = document.createElement('button');
  editButton.textContent = 'Edit';
  editButton.className = 'todo-edit';
  editButton.onclick = function() {
      editTask(taskSpan);
  };

  const deleteButton = document.createElement('button');
  deleteButton.textContent = 'Delete';
  deleteButton.className = 'todo-delete';
  deleteButton.onclick = function() {
      deleteTask(li);
  };

  li.appendChild(dragHandle);
  li.appendChild(checkbox);
  li.appendChild(taskSpan);
  li.appendChild(editButton);
  li.appendChild(deleteButton);
  li.appendChild(timestamp);
  taskList.appendChild(li);

  taskInput.value = '';

  // Fetch API request to add task to database
  fetch('add_task.php', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json',
      },
      body: JSON.stringify({ task_text: taskText }),
  })
  .then(response => response.json())
  .then(data => {
      console.log('Task added | Worked!:', data);
  })
  .catch(error => {
      console.error('Error adding task:', error);
  });
}

  function editTask(taskSpan) {
    const newText = prompt('Edit the task:', taskSpan.textContent);
    if (newText !== null && newText.trim() !== '') {
        taskSpan.textContent = newText.trim();
    }
  }
  
  function deleteTask(taskItem) {
    const confirmation = confirm('Are you sure you want to delete this task?');
    if (confirmation) {
        taskItem.parentNode.removeChild(taskItem);
    }
  }
  
  function updateTimestamp(timestampElement) {
    const now = new Date();
    const taskTime = new Date(parseInt(timestampElement.dataset.timestamp));
    const diffMs = now - taskTime;
    const diffMins = Math.floor(diffMs / 60000);
    timestampElement.textContent = `${diffMins} minute(s) ago`;
  }
  
  document.getElementById('todo-taskInput').addEventListener('keydown', function(event) {
    if (event.key === 'Enter') {
        addTask();
    }
  });
  
  // Enable sortable list with handle
  new Sortable(document.getElementById('todo-taskList'), {
    animation: 150,
    ghostClass: 'todo-sortable-ghost',
    handle: '.todo-drag-handle'
  });
  
  
  // End Of To Do LIst