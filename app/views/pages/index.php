<?php 
/*
    ./app/views/pages/index.php 
    Variables disponibles:
        - $pages ARRAY(id,titre,sousTitre,titreMenu,texte,image,tri)
 */

?>

        <!-- Page Header -->
        <header class="masthead" style="background-image: url('img/<?php echo $page['image']; ?>')">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                  <h1><?php echo $page['titre']; ?></h1>
                  <span class="subheading"><?php echo $page['sousTitre']; ?></span>
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
              <?php echo $page['texte']; ?>
              </div>

              <!-- C'est ici que viendront les articles ou le formulaire de contact -->
              <?php 
              
              switch ($page ['id']):
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
   