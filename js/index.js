$(document).ready(function() {
    $("#create").on("click",function(event) {
        // Prevent the form from submitting normally
        event.preventDefault();

        // Serialize form data
        var formData = $("#taskForm").serialize();

        // Perform AJAX request
        $.ajax({
            url: "insert_task.php", // Path to your PHP script
            type: "POST",
            data: formData,
            success: function(response) {
                // Handle successful response
                alert(response);
            
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(error);
            }
        });
        // Fetch tasks every 
        fetchTasks();
    });
});
$(function(){
    $("#show").load("task.php");
});


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
                        <button class="btn btn-danger delete-task" data-task-id="${task.Task_id}">Delete</button>
                    </td>
                </tr>`;
                taskTable.append(row);
            });
        }
    });
}


// Initial fetch
fetchTasks();

$(document).on("click", ".delete-task", function() {
    var taskId = $(this).data("task-id");
    deleteTask(taskId);
});

function deleteTask(taskId) {
    $.ajax({
        url: 'delete_task.php',
        method: 'POST',
        data: { task_id: taskId },
        dataType: 'json',
        success: function(response) {
            if (response.status === 'success') {
                fetchTasks(); // Refresh the task list
            } else {
                alert('Failed to delete task.');
            }
        },
        error: function(xhr, status, error) {
            console.error("Error deleting task:", status, error);
            alert("Failed to delete task: " + error);
        }
    });
}