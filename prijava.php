<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija & Prijava</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
       
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">Domov</a>
      <a href="prijava.php" class="w3-bar-item w3-button">Prijava</a>
    </div>
  </div>
</div>


<div class="container" id="signUp" style="display:none;">
    <h1 class="form-title">Registracija</h1>
    <form method="post" action="register.php">
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="fName" id="fName" placeholder="First Name" required>
            <label for="fName">Ime</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Priimek</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Geslo</label>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <div class="links">
        <p>Že imate račun?</p>
        <button id="signInButton">Prijava</button>
    </div>
</div>

<div class="container" id="signIn">
    <h1 class="form-title">Prijava</h1>
    <form method="post" action="register.php">
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Geslo</label>
        </div>
        <p class="recover">
            <a href="#">Recover Password</a>
        </p>
        <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
    <div class="links">
        <p>še nimate računa?</p>
        <button id="signUpButton">registracija</button>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>