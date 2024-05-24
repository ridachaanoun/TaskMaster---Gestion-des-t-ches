<?php
$dns = "mysql:host=localhost;dbname=TaskMaster";
$bduser ="root";
$bdpass ="";

try {
    $conn = new PDO($dns,$bduser,$bdpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "<br>Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed:" . $e->getMessage();
  }
?>