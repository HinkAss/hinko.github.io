

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
<h1>АВТОРИЗАЦИЯ</h1>
    <?php if(isset($error)) { ?>
      <p class="error"><?php echo $error; ?></p>
    <?php } ?>
    <form method="post" action="login.php">
        <input type="text" name="login" placeholder="Введите логин" required>
        <input type="password" name="password" placeholder="Введите пароль" minlength="6" required>
        <p class="recover"><a href="">Забыли пароль</a></p>
        <button>Войти</button>
    </form>

    
    <div class="signup">
        Нет аккаунта? <a href="createaccount.php">Создать акканут</a>
    </div>

</div>

<script src="./script/validation.js"></script>  
</body>
</html>