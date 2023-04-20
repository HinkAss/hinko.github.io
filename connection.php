<?php
// подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";
$conn = new mysqli($servername, $username, $password, $dbname);

// проверка соединения
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// обработка данных формы и вставка их в БД
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"]; 
  $email = $_POST["email"];
  $password = $_POST["password"];
  $phone = $_POST["phone"];

  $sql = "INSERT INTO user (user_name, email, password, phone)
  VALUES ('$username', '$email', '$password', '$phone')";

  if ($conn->query($sql) === TRUE) {
    echo "Данные успешно внесены в БД";
  } else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
