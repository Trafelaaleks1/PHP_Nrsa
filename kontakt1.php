<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "PHP_Trafela";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Povezava ni uspela: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    
    $stmt = $conn->prepare("INSERT INTO sporocila (ime, email, sporocilo) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "<p>Nekaj je šlo narobe. Prosimo, poskusite znova.</p>";
    }

    $stmt->close();
}

$conn->close();
?>
