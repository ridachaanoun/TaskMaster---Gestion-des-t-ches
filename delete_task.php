<?php
require "connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task_id = $_POST['task_id'];
    echo  $task_id; 

    $sql = "DELETE FROM tasks WHERE Task_id = :task_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':task_id', $task_id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success']);

    // } else {
        echo json_encode(['status' => 'error ']);
    }
}
?>
