<!DOCTYPE html>
<html lang="en">

<?php include 'src/Include/head.php'; ?>

<body>
    <?php include 'src/Include/header.php'; ?>
    <div class="form_container">
    <form method="post">
        <label for="email">Entrez votre adresse email :</label>
        <input type="email" name="email">
        <label for="password">Entrer votre mot de passe :</label>
        <input type="password" name="password">
        <input type="submit" value="submit">
    </form>
    <div>Vous n'avez pas de compte client? 
        <a href="/signin">Inscrivez-vous.</a>
    </div>
    </div>

    <?php include 'src/Include/footer.php'; ?>
</body>

</html>