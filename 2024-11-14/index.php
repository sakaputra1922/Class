<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko ku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.php"><img src="images/logo.jpg" alt="Logo Toko ku"></a>
            </div>
            <div class="judul">
                <h2>Toko ku</h2>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="?menu=cart">Cart</a></li>
                    <?php 
                        if (!isset($_SESSION['email'])) {
                            ?>
                            <li><a href="?menu=register">Register</a></li>
                            <li><a href="?menu=login">Login</a></li>
                            <?php
                        } else {
                            ?>
                            <li><?= htmlspecialchars($_SESSION['email']) ?></li>
                            <li><a href="?menu=logout">LogOut</a></li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="content">
            <?php
                if (isset($_GET['menu'])) {
                    $menu = $_GET['menu'];
                    
                    switch ($menu) {
                        case 'cart':
                            require_once('pages/cart.php');
                            break;
                        case 'register':
                            require_once('pages/register.php');
                            break;
                        case 'login':
                            require_once('pages/login.php');
                            break;
                        case 'logout':
                            require_once('pages/logout.php');
                            break;
                        default:
                            require_once('pages/product.php');
                            break;
                    }
                } else {
                    require_once('pages/product.php');
                }
            ?>
        </div>
        <div class="footer">
            <p>Web ini dibuat oleh Saka.</p>
        </div>
    </div>
</body>
</html>
