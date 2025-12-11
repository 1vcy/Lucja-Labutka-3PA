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
        <div class="sektor_profilu">
            <div class="profil_logo">
                <a href="1osoba_nso.php" class="link_profil">
                <img class="zdjecie_profil" src="logo_nie.jpg" alt="logo">
                <label class="nazwa_profil">Nazwa(komunikator)</label>
                </a>
            </div>

            <div class="profil_logo">
                <a href="profil.php" class="link_profil">
                <img class="zdjecie_profil" src="logo_nie.jpg" alt="logo">
                <label class="nazwa_profil">Nazwa(komunikator)</label>
                </a>
            </div>
        </div>
    </section>




    
    <section id="srodkowa_sekcja" class="container">
        <input type="text" placeholder="Napisz wiadomosc..." class="wiadomosc_input">
    </section>





    
    <section id="prawa_sekcja" class="container">
        <div class="sektor_profilu">
            <div class="profil_logo">
                <a href="profil.php" class="link_profil">
                <img class="zdjecie_profil" src="logo_nie.jpg" alt="logo">
                <label class="nazwa_profil">Nazwa(posty)</label>
                </a>
            </div>

            <div class="profil_logo">
                <a href="profil.php" class="link_profil">
                <img class="zdjecie_profil" src="logo_nie.jpg" alt="logo">
                <label class="nazwa_profil">Nazwa(posty)</label>
                </a>
            </div>
        </div>
    </section>




</body>
</html