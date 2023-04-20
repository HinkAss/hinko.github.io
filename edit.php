<head>
  <link rel="stylesheet" href='css/admin.css'>
</head>
<?php
include 'function/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $image = $_POST['image'];

  $sql = "UPDATE pizzas SET name='$name', description='$description', price='$price', image='$image' WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
    echo "<p>Блюдо успешно обновлено!</p>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
} else {
  $id = $_GET['id'];
  $sql = "SELECT * FROM pizzas WHERE id='$id'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $description = $row['description'];
    $price = $row['price'];
    $image = $row['image'];
  } else {
    echo "<p>Блюдо не найдено!</p>";
    exit();
  }
}
?>

<h2>Редактирование блюда "<?php echo $name; ?>"</h2>
<form method="post">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <label>Название:</label>
  <input type="text" name="name" value="<?php echo $name; ?>" required><br><br>
  <label>Описание:</label>
  <textarea name="description" required><?php echo $description; ?></textarea><br><br>
  <label>Цена:</label>
  <input type="number" name="price" value="<?php echo $price; ?>" required><br><br>
  <label>Ссылка на изображение:</label>
  <input type="text" name="image" value="<?php echo $image; ?>" required><br><br>
  <button type="submit">Сохранить</button>
</form>
