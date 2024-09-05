<?php
require_once ('pages/conten.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sekolah</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="header">
        <h1>Ini adalah Headder</h1>
        <?php
        foreach ($pages as $key => $value) {
    ?>

        <li><a href="?pages=/<?= $value?>"><?= $key?></a></li>
    <?php
        }
    ?>
    </div>
    <div class="content">
        <h1>Ini adalah Content</h1>
        <?php
        $pages = $_GET["pages"];
        //echo $pages;
        if(isset($pages)){
            if ($pages == "contact"){
                require_once("pages/contact.php");
            }
            if ($pages == "jurusan"){
                require_once("pages/jurusan.php");
            }
            if ($pages == "sejarah"){
                require_once("pages/sejarah.php");
            }
                require_once("pages/jurusan.php");
        } else {
            echo "ini adalah home";
        }
     
        ?>
    </div>
    <div class="footer">
        <h1>ini adalah Footer</h1>
    </div>
    
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="pages/jurusan.php">Jurusan</a></li>
        <li><a href="pages/sejarah.php">Sejarah</a></li>
        <li><a href="pages/contact.php">Contact</a></li>
    </ul>
    <?php
    foreach ($gambars as $key) {
    ?>
    <img src="images/<?=$key?>" alt="">
    <?php
    }
    ?>
    
</body>
</html>