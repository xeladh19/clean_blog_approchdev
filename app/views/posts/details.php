<?php 
/**
 * ../app/views/template/posts/details.php
 * Variables disponibles:
 * $post ARRAY(id,titre,sousTitre,texte,image,datePublication)
 * Détail d'un post
 */
?>
 <!-- Page Header -->
 
 <header class="masthead" style="background-image: url('img/<?php echo $page ['image']; ?>')">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                  <h1><?php echo $post['titre']; ?></h1>
                  <h2 class="subheading"><?php echo $post['sousTitre']; ?></h2>
                  <span class="meta">Posted on 
                  <?php echo \Core\Functions\formater_date($post['datePublication'], 'F j, Y'); ?></span>
                </div>
              </div>
            </div>
          </div>
        </header>

        <!-- Textes -->
        <article>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <!-- EDIT -->
                <div class="clearfix">
                  <a class="btn btn-secondary" href="#">Edit Post &rarr;</a>
                  <a class="btn btn-secondary" href="#">Delete Post &rarr;</a>
                </div>


                <!-- POST DETAILS -->
             <div>
             <?php echo $post['texte']; ?>
             </div>
              </div>
            </div>
          </div>
        </article>
