<?php 
/*
../app/views/template/partials/_nav.php
 */
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">CLEANBLOG</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <?php 
          include_once '../app/controller/pagesController.php';
          App\Controller\PagesController\menuAction($conn,'tri');
          ?>
        </div>
      </div>
    </nav>