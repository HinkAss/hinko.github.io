<head>
<link rel="stylesheet" href="css/admin.css">
  
  <link rel='icon' href='image/icon.png' type='image/x-icon'>
</head>

<body>
<header class="header">
        <div class="container">
            <div class="header_inner">
                <nav class="nav">
                    <a href="assortimentAdmin.php" class='nav_link' >Ассортимент</a>
                    <a href="#" class='nav_link'>Корзина</a>
                    <a href="aboutAdmin.php" class='nav_link'>О нас</a>
                    <a href="indexAdmin.php" class='nav_link'>На главную</a>
                </nav>
            </div>
        </div>
  <?php
  include 'function/connect.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $sql = "INSERT INTO pizzas (name, description, price, image) VALUES ('$name', '$description', '$price', '$image')";

    if ($conn->query($sql) === TRUE) {
      echo "<p>Блюдо успешно добавлено!</p>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  ?>

  <h2>Добавление нового блюда в меню</h2>
  <form method="post">
    <label>Название:</label>
    <input type="text" name="name" required><br><br>
    <label>Описание:</label>
    <textarea name="description" required></textarea><br><br>
    <label>Цена:</label>
    <input type="number" name="price" required><br><br>
    <label>Ссылка на изображение:</label>
    <input type="text" name="image" required><br><br>
    <button type="submit">Добавить</button>
  </form>

  <h2>Редактирование меню</h2>
  <table>
    <thead>
      <tr>
        <th>Название</th>
        <th>Описание</th>
        <th>Цена</th>
        <th>Изображение</th>
        <th>Действия</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM pizzas";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["name"] . "</td>";
          echo "<td>" . $row["description"] . "</td>";
          echo "<td>" . $row["price"] . " руб.</td>";
          echo "<td><img src='" . $row["image"] . "' alt='" . $row["name"] . "' width='100'></td>";
          echo "<td><a class = 'echo' href='edit.php?id=" . $row["id"] . "'>Редактировать</a> <a class = 'echo' href='delete.php?id=" . $row["id"] . "'>Удалить</a></td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='5'>Меню пусто</td></tr>";
      }
      ?>
    </tbody>
  </table>

</body>
