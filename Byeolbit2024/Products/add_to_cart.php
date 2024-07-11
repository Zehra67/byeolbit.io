<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $quantity = 1;

    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] += $quantity;
    } else {
        $_SESSION['cart'][$product_id] = $quantity;
    }

    echo json_encode(['success' => true, 'total_items' => array_sum($_SESSION['cart'])]);
}

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$product_id = $data['product_id'];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_SESSION['cart'][$product_id])) {
    $_SESSION['cart'][$product_id]++;
} else {
    $_SESSION['cart'][$product_id] = 1;
}

$total_items = array_sum($_SESSION['cart']);
$cart_items = [];

$conn = new mysqli('localhost', 'username', 'password', 'database');
foreach ($_SESSION['cart'] as $id => $quantity) {
    $result = $conn->query("SELECT * FROM products WHERE id = $id");
    $product = $result->fetch_assoc();
    $product['quantity'] = $quantity;
    $cart_items[] = $product;
}

echo json_encode(['success' => true, 'total_items' => $total_items, 'cart_items' => $cart_items]);
?>
