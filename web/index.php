<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERWIS OGŁOSZENIOWY APLIKACJA WEBOWA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- HEADER - nagłówek stony -->
        <?php include_once "headerUser.php" ?>
    <!-- COntent Zawartość strony -->
    <div id="contentMain" class="contentMain">
        <article>

            <h1 class="h1Style"><span>SOAW</span><br>
                Serwis Ogłoszeniowy Aplikacja Webowa
            </h1>
            <hr>
            <div class="soawContent">
                <div class="soawContentLeft">
                    <img src="logo2.png" alt="Załóż konto!" class="soawTarcza">
                </div>

                <div class="soawContentRight">
                    <h2 class="h2Style">Jak to działa</h2>
                    <h2 class="h2Style">Załóż konto! Bezpłątnie</h2>
                    <p>&nbsp; Dodaj za darmo ogłoszenie!</p>

                    <form action="#" method="post" class="underHeaderInput">
                        login: <input type="text" name="email" placeholder="Twój email"><br>
                        <br> Hasło: <input type="text" name="password" placeholder="Twoje hasło"><br>
                        <br> <a href="#">Rejestracja</a>
                        &nbsp;
                        <input type="submit" class="inputLogIn" value="Zaloguj">
                    </form>
                    <p class="underHeaderInputs">LOGIN</p>
                    <p class="underHeaderInputs">
                        <a href="login.php">Zaloguj się</a>
                    </p>
                </div>
            </div>
        </article>

    </div>
    <!-- content zawartość strony END -->

    <!-- FOOTER stopka strony -->
    <?php include_once "footerUser.php" ?>
</body>
</html>