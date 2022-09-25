<?php

/*
//nie wiem grze to
$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);

if($polaczenie->connect_errno!=0){
    echo "Error".$polaczenie->connect_errno;
}
else{
    $login = $_POST["login"];
    $haslo = $_POST["haslo"];

    $login = htmlentities($login,ENT_QUOTES,"UTF-8");
    if($resultat = @$polaczenie->query(sprintf("SELECT * FROM uzytkownicy WHERE user='%s",mysqli_real_escape_string($polaczenie,$login)))){

    }
}
// filtr usuwający niepotrzebne znaki z email
$emailAfterSanitize = filter_var($email,FILTER_SANITIZE_EMAIL);


if($emailAfterSanitize == $email && filter_var($emailAfterSanitize, FILTER_VALIDATE_EMAIL)){
    $testPassed = true;
    echo "o.k.";
}else{
    $testPassed = false;
    echo "to nie jest prawidłowy adres email";
}
*/

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
       <!-- article powinien zawierać głównie tekst schematyczny danej strony -->
       <article>
        <h1 class="h1Style"><span>SOAW</span><br>
    Serwis ogłoszeniowy Aplikacja Webowa</h1>

    <hr>
    <div class="soawContent">
        <div class="soawContentLeft">
            <img src="logo2.png" class="soawTarcza" alt="Załóż konto!">
        </div>
        <div class="soawContentRight">
            <h2 class="h2Style">Jak to nie działa?</h2>
            <h2 class="h2Style">Załóż konto! Płatna rejestracja!</h2>
        </div>
    </div>
       </article>

       <form action="login.php" method="post" class="loginPodHeader">
        Login: <input type="text" name="email" placeholder="Your nick"><br>
        Hasło: <input type="text" name="password" placeholder="Twoje hasło">
        <br>
        <a href="rejestracja/createUser.php?>">Rejestracja</a>
        &nbsp;
        <input class="inputLogIn" type="submit" value="Zaloguj">
       </form>
    <!-- aside powinien zawierać tekst dodatkowy -->
        <aside>
            <hr>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi nisi laborum est a quaerat magni cumque quas reiciendis error, accusantium dignissimos eveniet voluptatem. Modi minus quis maxime molestiae eligendi nihil in voluptate, dignissimos consequatur accusamus. Quae non accusantium iusto maiores ad quisquam voluptatibus laudantium deserunt, tempora consectetur nostrum natus obcaecati id. Vero quas quia ex animi aliquid eius nesciunt velit magnam repudiandae iste facere, mollitia adipisci recusandae pariatur numquam odio deleniti doloremque maiores excepturi atque delectus quo distinctio maxime quae! Labore omnis dolores necessitatibus itaque, ab a, laborum aperiam voluptate dolorem eum accusamus veritatis, officiis aliquid ipsam corrupti? Quasi, reprehenderit!</p>
        </aside>
    </div>
    <!-- content zawartość strony END -->

    <!-- FOOTER stopka strony -->
    <?php include_once "footerUser.php" ?>

</body>
</html>