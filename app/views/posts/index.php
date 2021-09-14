<?php 
/*
    ./app/views/posts/index.php 
    Variables disponibles:
        - $posts ARRAY(ARRAY(titre,sousTitre,datePublication,...))
 */
use \Core\Functions;
?>
<div class="clearfix">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit placeat repudiandae maiores sequi nemo aliquid libero dolores ab debitis commodi, veniam fuga iste nulla impedit ea nam itaque optio, quibusdam.</p>
        <p>Eveniet optio tempore beatae, nulla voluptatibus repudiandae, rem dolor, sunt neque perferendis pariatur. Placeat nobis explicabo, maxime soluta magnam ullam mollitia voluptatibus, quia in, autem molestias voluptatem ducimus fuga error.</p>
      </div>

      <!-- ADD A POST -->
      <div class="clearfix">
        <a class="btn btn-secondary float-left" href="#">Add Post &rarr;</a>
      </div>

      <!-- POSTS LIST -->
      <div id ='list-posts'>
      <?php include '../app/views/posts/liste.php'; ?>
      </div>
      <!-- Pager -->
      <div class="clearfix">
        <a class="btn btn-secondary float-right" id="older-posts" href="#">Older Posts &rarr;</a>
      </div>