

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- HEADER - nagłówek stony -->
    <header>
        <!-- nawigacaj w nagłóku -->
        <nav class="menuNawigacyjne grid-container"></nav>
        <!-- Zdięcie z logo -->
        <img src="logo.png" alt="SOAW portal ogłoszeniowy" id="logoImg" class="item1">

        
        <!-- Lista  -->
            <ul class="ulNawigacyjne item2">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#link1">Link 1</a></li>
                <li><a href="#link2">Link 2</a></li>
                <li><a href="#link3">Link 3</a></li>
                <li><a href="#link4">Link 4</a></li>
            </ul>
        </nav>
    </header>
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
    <footer>
        <h3>
            To jest stopka, umieścimy tutaj informacje o firmie oraz likowanie do plików (np. informacje o budowanym projekcie i jego twórcach).
        </h3>
    </footer>
</body>
</html>