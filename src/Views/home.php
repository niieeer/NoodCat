<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'src/Include/head.php'; ?>

<body>
    <div class="mainbody">
        <?php include 'src/Include/header.php'; ?>
        <div class="mainbody_primary">
            <h1>Bienvenue au Bar a Chat</h1>
            <p>Vous avez un compte? <a href="login">Connectez vous ici</a></p>
            <p>Premiere visite? <a href="signin">Inscrivez vous ici</a></p>
        </div>
    </div>
    <?php include 'src/Include/footer.php'; ?>
</body>



</html>