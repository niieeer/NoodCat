<!-- Via index je suppose -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Le meilleur bar à chats de l'Est!">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Bar</title>

    <link rel="stylesheet" href="Assets/Styles/style.css">
    <link rel="icon" href="Assets/cat.png" type="image/x-icon">
    <link rel="shortcut icon" href="Assets/cat.png" type="image/x-icon">
    <script src="/script.js"></script>
</head>

<body>

    <div class="mainbody">

        <header>
            <div class="banner_container">
                <div class="banner_banner">
                    <a class="active" href="index.php">Accueil</a>
                    <a href="accounts.php">Comptes</a>
                    <a href="disconnect.php">Deconnection</a>
                </div>
            </div>
        </header>
        <div class="mainbody_primary">
            <div class="form_container">
                <form method="post">
                    <input type="text" name="firstname" id="firstname" placeholder="firstname">
                    <input type="text" name="lastname" id="lastname" placeholder="lastname">
                    <input type="submit" name="send" value="envoyer">
                </form>
            </div>
        </div>
    </div>
    <footer>
        Ce footer à été fait gratuitement. Il n'a pas été bien fait.
        <br>
        <a href="#">Apprenez en plus.</a>
    </footer>
</body>



</html>