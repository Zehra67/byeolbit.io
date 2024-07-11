<?php
$conn = new mysqli('localhost', 'username', 'password', 'database');

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

echo json_encode($products);


$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

echo json_encode($products);
?>