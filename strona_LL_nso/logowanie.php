<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <form method="POST">
    Login: <input type="text" name="login">
    Hasło:<input type="text" name="haslo">
    <button type="submit" name="zaloguj">Zaloguj</button>
    <button type="submit" name="rejestracja">Zarejestruj</button>
    </form>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "nso_portal");
    if(isset($_POST['rejestracja'])){
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        $q1 = "INSERT INTO uzytkownicy(login, haslo) VALUES('$login', '$haslo');";
        $result1 = mysqli_query($conn, $q1);
    }

    if(isset($_POST['zaloguj'])){
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        $q2 = "SELECT login, haslo FROM uzytkownicy where login ='$login' and haslo = '$haslo'";
        $result2 = mysqli_query($conn, $q2);
        header('Location: strona_glowna.php');
    }
    ?>
</body>
</html>