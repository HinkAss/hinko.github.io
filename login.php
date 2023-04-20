<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $login = $_POST["login"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM user WHERE user_name = '$login' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION["login"] = $login;
    if($row['role'] == 'admin'){
        header("Location: indexAdmin.php");
    }
      else {
        header("Location: index.php");
    }
    exit;
  } else {
    $error = "Неверный логин или пароль";
  }
}

mysqli_close($conn);
?>