<?php if(isset($_COOKIE["username"])): ?>
<?php require "includes/header.php";
      require "connection.php"; 
      require "fill_input.php"; 
      ?>
                         
<body>
 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createmodal">
    Create Task
</button>

<!-- Modal -->
<div class="modal fade" id="createmodal" tabindex="-1" aria-labelledby="createmodalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createmodalLabel">Create New Task</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="taskForm" method="post">
                    <label for="taskname">Task Name:</label>
                    <input type="text" id="taskname" name="taskname"><br>
                    <label for="description">Description:</label>
                    <input type="text" id="description" name="description"><br>
                    <label for="date_started">Date Started:</label>
                    <input type="date" id="date_started" name="date_started"><br>
                    <label for="due_date">Due Date:</label>
                    <input type="date" id="due_date" name="due_date"><br>
                    <label for="_status">Status:</label>
                    <select id="_status" name="_status">
                        <option value="to do">To Do</option>
                        <option value="doing">Doing</option>
                        <option value="done">Done</option>
                    </select><br>
                    <label for="_category">Category:</label>
                    <select id="_category" name="_category">
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
                        <?php endforeach; ?>
                    </select><br>
                    <label for="ID_user">User:</label>
                    <select id="ID_user" name="ID_user">
                        <?php foreach ($users as $user): ?>
                            <option value="<?php echo $user['ID_user']; ?>"><?php echo $user['username']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" id="create" class="btn btn-primary" value="Submit">
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Task Name</th>
            <th scope="col">Description</th>
            <th scope="col">Date Started</th>
            <th scope="col">Due Date</th>
            <th scope="col">User</th>
            <th scope="col">Category</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody id="taskTable">
        <!-- Tasks will be dynamically inserted here -->
    </tbody>
</table>

    <p id="show"></p>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Your custom script -->
    <script src="js/index.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
<?php else: ?>
    <?php
    header("location:log-in/log_in.php");
    exit();
    ?>
<?php endif; ?>
