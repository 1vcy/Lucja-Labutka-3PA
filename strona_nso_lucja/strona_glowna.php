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
    <header></header>
    <section id="lewa_sekcja"></section>
    <section id="srodkowa_sekcja"></section>
    <section id="prawa_sekcja"></section>




</body>
</html