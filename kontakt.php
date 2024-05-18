<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walking on air</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

  <div class="container">
        <h1>Kontaktni podatki</h1>
        <p>Ime: Walking on air</p>
        <p>Telefon:  041 476 521</p>
        <p>Email: Walking.on_air@gmail.com</p>
        
        <h2>Pišite nam</h2>
        <form action="kontakt1.php" method="post">
            <label for="name">Ime:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Sporočilo:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Pošlji</button>
        </form>
    </div>
</body>
</html>
