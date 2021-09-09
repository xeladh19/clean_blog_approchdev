<?php 
/*
    ./app/views/pages/index.php 
    Variables disponibles:
        - $pages ARRAY(id,titre,sousTitre,titreMenu,texte,image,tri)
 */

?>


        <!-- Page Header -->
        <header class="masthead" style="background-image: url('img/<?php echo $pages['image']; ?>')">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                  <h1><?php echo $pages['titre']; ?></h1>
                  <span class="subheading"><?php echo $pages['sousTitre']; ?></span>
                </div>
              </div>
            </div>
          </div>
        </header>

        <!-- Textes -->
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="clearfix">
              <?php echo $pages['texte']; ?>
              </div>

              <!-- C'est ici que viendront les articles ou le formulaire de contact -->
              <?php 
              switch ($pages ['id']):
                case 1:
                  include_once '../app/controller/postsController.php';
                  App\Controller\PostsController\indexAction($conn);
                  break;
                  case 3:
                    include_once '../app/views/template/partials/_contactForm.php';
                    break;
              endswitch; ?>
            </div>
          </div>
        </div>
   