<?php session_start();
if(!isset($_SESSION['login'])){
    header('Location: logowanie.php');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="strona_glowna.css">
</head>
<body>
    <header>
        <img id="logo" src="logo_nie.jpg" alt="logo">
        <a href="strona_glowna.php"><div class="header_guziki">Strona glowna</div></a>
        <a href="profil.php"><div class="header_guziki_profil">Profil</div></a>
    </header>




    <section id="lewa_sekcja" class="container">
        <div class="">
        <img id="logo" src="logo_nie.jpg" alt="logo">
    </section>




    
    <section id="srodkowa_sekcja" class="container"></section>




    
    <section id="prawa_sekcja" class="container"></section>




</body>
</html