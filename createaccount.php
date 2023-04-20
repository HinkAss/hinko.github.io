<!DOCTYPE html>
<head>
    <title>Tasty Pizza | Authorization</title>
    <link rel='icon' href='C:\Users\User\Desktop\Site\image\icon.png' type='image/x-icon'>
    <link rel="stylesheet" href="./css/authorization.css">
</head>
<body>
    <div class="container"><div class="header_inner">
        <nav class="nav">
            <a href="assortiment.php" class='nav_link'>Ассортимент</a>
            <a href="#" class='nav_link'>Корзина</a>
            <a href="about.php"  class='nav_link'>О нас</a>
            <a href="index.php" class='nav_link'>На главную</a>
        </nav>
    </div>
</div>
<div class="container">
    <h1>РЕГИСТРАЦИЯ</h1>
    <p>Зарегистрируйте новый аккаунт</p>
    <form method="post" action="connection.php">
  <input type="text" name="username" placeholder="Введите имя пользователя" required>
  <input type="email" name="email" placeholder="Введите email" required>
  <input type="password" name="password" placeholder="Введите пароль" minlength="6" required>
  <input type="tel" name="phone" pattern="^\+7\(\d{3}\)\d{3}-\d{2}-\d{2}$" placeholder="+7(XXX)XXX-XX-XX" required>
  <p class="recover"><a href="">Забыли пароль</a></p>
  <button type="submit">Зарегистрироваться</button>
</form>

    <div class="signup">
        Зарегестрированы? <a href="authorization.php">Войти в аккаунт</a>
    </div>

</div>

</body>
</html>