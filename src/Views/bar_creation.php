<!DOCTYPE html>
<html lang="en">

<?php include 'src/Include/head.php'; ?>

<body>
    <?php include 'src/Include/header.php'; ?>
    <div class="form_container">
        <form method="post">
            <h1>Formulaire de creation bar</h1>
            <input type="text" name="adresse" placeholder="adresse" required>
            <input type="text" name="nom" placeholder="nom" required>
            <input type="submit" name="send" value="envoyer">
        </form>
    </div>
    <?php include 'src/Include/footer.php'; ?>
</body>

</html>