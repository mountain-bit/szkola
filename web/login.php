<?php

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


?>