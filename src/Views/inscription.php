<!DOCTYPE html>
<html lang="en">

<?php include 'src/Include/head.php'; ?>
<body>
<?php include 'src/Include/header.php'; ?>  
<div class="form_container">
    <form method="post">
            <input type="text" name="firstname" id="firstname" placeholder="firstname">
            <input type="text" name="lastname" id="lastname" placeholder="lastname">
            <input type="submit" name="send" value="envoyer">
        </form>
    </div>
    <?php include 'src/Include/footer.php'; ?>  
</body>

</html>