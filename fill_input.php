
<?php
$stmt = $conn->query("SELECT category_name,category_id FROM categories");
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $conn->query("SELECT username,ID_user FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// foreach ($categories as $category) {
//     echo $category['category_name'] . "<br>";
//     echo $category['category_id'] . "<br>";
// }
?>