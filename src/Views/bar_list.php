<!DOCTYPE html>
<html lang="en">

<?php include 'src/Include/head.php'; ?>

<body>
    <?php include 'src/Include/header.php'; ?>
    <div class="mainbody">
        <div class="mainbody_primary">

            <h1>Liste des bars</h1>
            <?php

            use App\Helpers\EntityManagerHelper as Em;
            use Doctrine\ORM\Mapping\ClassMetadata;
            use Doctrine\ORM\EntityRepository;
            use App\Entity\Bar;
            use \DateTime;

            $entityManager = Em::getEntityManager();
            $repo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Bar"));

            $Bar = $repo->findAll();
            var_dump($Bar); ?>

        </div>
    </div>
    <?php include 'src/Include/footer.php'; ?>
</body>

</html>