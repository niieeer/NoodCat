<!DOCTYPE html>
<html lang="en">

<?php include 'src/Include/head.php'; ?>

<body>
    <?php include 'src/Include/header.php'; ?>
    <div class="form_container">
        <form method="post">
            <h1>Formulaire Inscription</h1>
            <input type="number" name="puce" placeholder="puce" required>
            <input type="text" name="description" placeholder="description">
            <input type="number" name="numero_bar" placeholder="Example : 789789" required>
            <input type="submit" name="send" value="envoyer">
        </form>
    </div>
    <?php include 'src/Include/footer.php'; ?>
</body>

</html>