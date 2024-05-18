<?php

$lifetime = 1800;


ini_set('session.gc_maxlifetime', $lifetime);
session_set_cookie_params([
    'lifetime' => $lifetime,
    'path' => '/',
    'domain' => $_SERVER['HTTP_HOST'],
    'secure' => isset($_SERVER['HTTPS']),
    'httponly' => true,
    'samesite' => 'Lax'  
]);


session_start();


if (isset($_SESSION["useruid"])) {
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $lifetime)) {
       
        session_unset();  
        session_destroy();  
        header("Location: prijava.php"); 
        exit;
    }
    
    $_SESSION['last_activity'] = time();
}
?>

<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
</head>
<body>
<header>
    <h1 class="naslov">Walking on air</h1>
    <nav>
        <ul>
            <li><a href="index.php">Domov</a></li>
            
            
            <?php
            
            if (isset($_SESSION["useruid"]) && $_SESSION["useruid"] == "Trafela") {
                echo "<li><a href='/Koda/admin_insert.php'>Add Product</a></li>"; 
                echo "<li><a href='/includes/logout.inc.php'>Log Out</a></li>";
            } elseif (isset($_SESSION["useruid"])) {
                echo "<li><a href='/includes/logout.inc.php'>Log Out</a></li>";
            } else {
                
                echo "<li><a href='registracija.php'>Registracija</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>