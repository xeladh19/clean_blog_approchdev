<?php 
/*
../app/views/template/partials/_main.php
<?php include '../app/views/template/partials/_header.php'; ?>
*/
 ?>

<main>

<!-- Page Header -->

<header class="masthead" style="background-image: url('img/home-bg.jpg')">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                  <h1>Clean Blog</h1>
                  <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
              </div>
            </div>
          </div>
        </header>
        
<!-- Textes -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
    <?php echo $content; ?>
    </div>
  </div>
</div>

<hr>
</main>