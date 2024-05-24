<?php
// Prepare and execute SQL statement to fetch all data from the tasks table

require "connection.php";
if($_COOKIE["role"]=="Admin"){
$sql = "SELECT * FROM tasks";
$stmt = $conn->query($sql);
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
else{
    $id_user=$_COOKIE["ID_user"];
    $stmt = $conn-> prepare("SELECT * FROM tasks WHERE user_id = :id_user ");
    $stmt->execute([
        ':id_user'=>$id_user
    ]);
    $tasks= $stmt ->fetchAll(PDO::FETCH_ASSOC);
    }
//     header('Content-Type: application/json');
 echo json_encode($tasks);
?>