<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Informasi Aplikasi Blog">
    <meta name="author" content="Novita Amalia">
    <meta name="keywords" content="Sistem Informasi, Website, Blog">
    <title>Sistem Informasi Aplikasi Blog </title>
    <link rel="stylesheet" href="<?php echo ASSET;?>css/Style.css">
</head>

<body>
    <header>
      Blog Ngobrol Cantik With Novita Amalia
    </header>
    <div class="container">
        <aside>
            <ul class="menu">
                <li> 
                    <a href="index.php" class="aktif">Home </a> 
                </li>
               
            </ul>
        </aside>
        
        <section class="main">
            <?php
                    if (isset($_GET['page'])) {
                        include $_GET ['page'] . ".php";
                    } else {
                        include "main_index.php";
                    }

                ?>     
        </section>

    </div>

    <footer>
         Copyright &copy;2021 Novita Amalia. All Right Reserved 
    </footer>

</body>
</html>
