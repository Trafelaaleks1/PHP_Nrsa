<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
li{
  list-style-type: none;
}
</style>
</head>
<body>
  <?php
  if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    $query=mysqli_query($conn, "SELECT users.* FROM  `users` WHERE users.email='$email'");
    
  }
  ?>


<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Zapri meni</a>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Čevlji </a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">O meni </a>
</nav>


<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-button w3-padding-16 w3-right">
    <li><a class="nav-link" href="Prijava.php" style="text-decoration:none">Prijava</a></li>
</div>
<div class="w3-button w3-padding-16 w3-right">
    <li><a class="nav-link" href="kontakt.php" style="text-decoration:none">Kontakt</a></li>
</div>

    
    <div class="w3-center w3-padding-16">Walking on air</div>
  </div>
</div>
  

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

 
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="air jordan 4_php.jpg" alt="Sandwich" style="width:100%">
      <h3>Air Jordan 4</h3>
      <p>To so moji personalizirani čevlji, ki so izdelani ročno in naravnih materjalov in pobarvani z naravnimi barvami</p>
      <p>Če ste zainteresirani za nakup nam pišite.</p>
    </div>
    <div class="w3-quarter">
      <img src="air force.jpg" alt="Steak" style="width:100%">
      <h3>Air Force 1</h3>
      <p>To so moji personalizirani čevlji, ki so izdelani ročno in naravnih materjalov in pobarvani z naravnimi barvami</p>
      <p>Če ste zainteresirani za nakup nam pišite.</p>
    </div>
    <div class="w3-quarter">
      <img src="air jordan41.jpg" alt="Cherries" style="width:100%">
      <h3>Air Jordan 4</h3>
      <p>To so moji personalizirani čevlji, ki so izdelani ročno in naravnih materjalov in pobarvani z naravnimi barvami</p>
      <p>Če ste zainteresirani za nakup nam pišite.</p>
      
    </div>
    <div class="w3-quarter">
      <img src="air jordan42.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>Air Jordan 4</h3>
      <p>To so moji personalizirani čevlji, ki so izdelani ročno in naravnih materjalov in pobarvani z naravnimi barvami</p>
      <p>Če ste zainteresirani za nakup nam pišite.</p>
    </div>
  </div>
  

  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="air jordan 43.jpg" alt="Popsicle" style="width:100%">
      <h3>Air Jordan 4</h3>
      <p>To so moji personalizirani čevlji, ki so izdelani ročno in naravnih materjalov in pobarvani z naravnimi barvami </p>
      <p>Če ste zainteresirani za nakup nam pišite.</p>
    </div>
    <div class="w3-quarter">
      <img src="air jordan 44.jpg" alt="Salmon" style="width:100%">
      <h3>Air Jordan 4</h3>
      <p>To so moji personalizirani čevlji, ki so izdelani ročno in naravnih materjalov in pobarvani z naravnimi barvami</p>
      <p>Če ste zainteresirani za nakup nam pišite.</p>
    </div>
    <div class="w3-quarter">
      <img src="air jordan 45.jpg" alt="Sandwich" style="width:100%">
      <h3>Air Jordan 4</h3>
      <p>To so moji personalizirani čevlji, ki so izdelani ročno in naravnih materjalov in pobarvani z naravnimi barvami</p>
      <p>Če ste zainteresirani za nakup nam pišite.</p>
    </div>
    <div class="w3-quarter">
      <img src="air force2.jpg" alt="Croissant" style="width:100%">
      <h3>Air Force 1</h3>
      <p>To so moji personalizirani čevlji, ki so izdelani ročno in naravnih materjalov in pobarvani z naravnimi barvami</p>
      <p>Če ste zainteresirani za nakup nam pišite.</p>
    </div>
  </div>


 
  
  <hr id="about">

  

  <div class="w3-container w3-padding-32 w3-center">  
    <h3>O meni</h3><br>
    <img src="drake.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      <h4><b>Kdo sem ?</b></h4>
      <h6><i>With Passion For Real</i></h6>
      <p>Sem Aleks, umetnik čevljarstva, ki svoje strasti in talenta ne izraža le skozi ročno izdelane čevlje, temveč tudi skozi barvne paletne transformacije. Vsak par mojih čevljev je rezultat natančnega ročnega dela in premišljene uporabe barv, ki ustvarjajo unikatne dizajne. Z mojim delom želim ne le ustvariti obutev, temveč tudi umetniške izjave, ki odražajo individualnost, kreativnost in estetiko. Moj cilj je oplemenititi vsakdanje predmete, kot so čevlji, ter jih spremeniti v umetniška dela, ki navdihujejo in izražajo edinstvenost vsakega posameznika.</p>
  </div>
  <hr>
  
 
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Upam, da vas moje delo navdušuje in vam daje spodbudo, da tudi sami ustavrite svojo edinstveno delo.</p>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Walking on air</a></p>
    </div>
  
    <div class="w3-third">
      <h3>PARTNERI</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="rest.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Restevracija pri Bavdku</span><br>
          <span>Najboljša restevracija na svetu</span>
        </li>
        <li class="w3-padding-16">
          <img src="cas.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Casino Bavdek</span><br>
          <span>Najboljši casino na svetu</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Shoes</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Beauty</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">France</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Flavers</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cuisine</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Work</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Colors</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Word</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Europe</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Awsome</span>
      </p>
    </div>
  </footer>


</div>

<script>

function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
<?php
include_once 'footer.php';
?>

</body>
</html>