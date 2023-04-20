<?php
session_start();
include 'function/connect.php';

if (isset($_GET['cart'])) {
    switch ($_GET['cart']) {
        case 'add':
            $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
            $sql = "SELECT * FROM pizzas WHERE id=$id";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $pizza = [
                'id' => $id,
                'name' => $row['name'],
                'price' => $row['price']
            ];
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
            array_push($_SESSION['cart'], $pizza);
            echo json_encode(['code' => 'ok', 'answer' => $id]);
            break;
        default:
            echo 'Unknown action';
            break;
    }
}
?>
