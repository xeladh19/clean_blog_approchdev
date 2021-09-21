<?php 
/*
../app/views/template/index.php
*/
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <?php include '../app/views/template/partials/_head.php'; ?>

  </head>

  <body>

    <!-- Navigation -->
    <?php include '../app/views/template/partials/_nav.php'; ?>
    <!-- CONTENU -->
    <main>
    <?php echo $content; ?>
</hr>
</main>

    <!-- Footer -->
    <?php include '../app/views/template/partials/_footer.php'; ?>
    <!-- Bootstrap core JavaScript -->
<?php include '../app/views/template/partials/_script.php' ;?>

  </body>

</html>
