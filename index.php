<?php

session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Pizza</title>
    <link rel="stylesheet" href='css/style.css'>

    <link rel='icon' href='image/icon.png' type='image/x-icon'>

</head>

<body>

    <header class="header">
        <div class="container">
            <div class="header_inner">
                <div class="header_logo">Tasty Pizza</div>
                <nav class="nav">
                    <a href="assortiment.php" class='nav_link'>Ассортимент</a>
                    <a href="#" class='nav_link'>Корзина</a>
                    <a href="about.php" class='nav_link'>О нас</a>
                    <a href="authorization.php" class='nav_link'>Авторизация</a>
                </nav>
            </div>
        </div>



    </header>
    
    

    <div class='intro'>
        <div class='container'>
            <div class="intro_inner">
                <h2 class="intro_suptitle"></h2>
                <h1 class="intro_title">Welcome to Tasty Pizza</h1>
            </div>
        </div>

    </div>

    <!--product line-->
    <div class="container">
        <h2 class="product_chapter_pizza">Пицца</h2>
        <?php include 'menu.php'; ?>
        <!------------------end--------------------------->

        <div class="container">
            <div class="gallery">
                <h2 class="gallery_tag">Наша фотогаллерея</h2>
                <div class="gallery_table"></div>
            </div>
        </div>
        <div class="container">
            <div class="photo_gallery">
                <table class="table">
                    <tr>
                        <td>
                        <td><a href="./image/gallery/gallery_image_8.jpg" target="_blank"><img class="gallery_image"
                                    src="./image/gallery/gallery_image_8.jpg" border="0" /></a></td>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="./image/gallery/gallery_image_1.jpg" target="_blank"><img class="gallery_image"
                                    src="./image/gallery/gallery_image_1.jpg" border="0" /></a></td>
                        <td><a href="./image/gallery/gallery_image_2.jpg" target="_blank"><img class="gallery_image"
                                    src="./image/gallery/gallery_image_2.jpg" border="0" /></a></td>
                        <td><a href="./image/gallery/gallery_image_3.jpg" target="_blank"><img class="gallery_image"
                                    src="./image/gallery/gallery_image_3.jpg" border="0" /></a></td>
                    </tr>
                    <tr>
                        <td><a href="./image/gallery/gallery_image_4.jpg" target="_blank"><img class="gallery_image"
                                    src="./image/gallery/gallery_image_4.jpg" border="0" /></a></td>
                        <td><a href="./image/gallery/gallery_image_5.jpg" target="_blank"><img class="gallery_image"
                                    src="./image/gallery/gallery_image_5.jpg" border="0" /></a></td>
                        <td><a href="./image/gallery/gallery_image_6.jpg" target="_blank"><img class="gallery_image"
                                    src="./image/gallery/gallery_image_6.jpg" border="0" /></a></td>
                    </tr>
                    <tr>
                        <td>
                        <td><a href="./image/gallery/gallery_image_7.jpg" target="_blank"><img class="gallery_image"
                                    src="./image/gallery/gallery_image_7.jpg" border="0" /></a></td>
                    </tr>
                </table>
            </div>
        </div>

</body>

</html>