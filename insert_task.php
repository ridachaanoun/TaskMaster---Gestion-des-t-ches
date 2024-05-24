<?php
require "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $taskname = $_POST['taskname'];
    $description = $_POST['description'];
    $date_started = $_POST['date_started'];
    $due_date = $_POST['due_date'];
    $_status = $_POST['_status'];
    $_category = $_POST['_category'];
    $ID_user = $_POST['ID_user'];

    // Prepare and execute SQL statement to insert data into the database
    $sql = "INSERT INTO tasks (taskname, description, date_started, due_date, _status, category_id,user_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $taskname);
    $stmt->bindValue(2, $description);
    $stmt->bindValue(3, $date_started);
    $stmt->bindValue(4, $due_date);
    $stmt->bindValue(5, $_status);
    $stmt->bindValue(6, $_category);
    $stmt->bindValue(7, $ID_user);

    // Error handling
    if ($stmt->execute()) {
        echo "Task inserted successfully";
    } else {
        echo "Error: Failed to insert task";
    }
} else {
    // Invalid request method
    echo "Error: Invalid request method";
}
?>
