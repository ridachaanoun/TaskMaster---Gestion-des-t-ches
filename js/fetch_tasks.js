function fetchTasks() {
    $.ajax({
        url: 'fetch_tasks.php',
        method: 'GET',
        dataType: 'json',
        success: function(tasks) {
            var taskTable = $('#taskTable');
            taskTable.empty(); // Clear existing data
            tasks.forEach(function(task) {
                var row = `<tr>
                    <th scope="row">${task.Task_id}</th>
                    <td>${task.taskname}</td>
                    <td>${task.description}</td>
                    <td>${task.date_started}</td>
                    <td>${task.Due_date}</td>
                    <td>${task.user_id}</td>
                    <td>${task.category_id}</td>
                    <td>${task._status}</td>
                    <td>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>`;
                taskTable.append(row);
            });
        }
    });
}

// Fetch tasks every 5 seconds
// setInterval(fetchTasks, 5000);

// Initial fetch
fetchTasks();