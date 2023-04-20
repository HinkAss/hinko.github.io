<?php
include 'function/connect.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "DELETE FROM pizzas WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
    echo "<p>Блюдо успешно удалено!</p>";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
}

header("Location: admin.php");
exit();
?>
