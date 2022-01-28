<!DOCTYPE html>
<html lang="en">

<?php include 'src/Include/head.php'; ?>

<body>
    <?php include 'src/Include/header.php'; ?>
    <form method="post">
        <label for="email">Entrez votre adresse email :</label>
        <input type="email" name="email">
        <label for="password">Entrer votre mot de passe :</label>
        <input type="password" name="password">
        <input type="submit" value="submit">
    </form>
    <?php include 'src/Include/footer.php'; ?>
</body>

</html>