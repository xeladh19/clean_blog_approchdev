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
      <?php foreach($posts as $post): ?>

      <div class="post-preview">
        <a href="post.html">
          <h2 class="post-title">
            <?php echo $post['titre']; ?>
          </h2>
          <h3 class="post-subtitle">
            <?php echo $post['sousTitre']; ?>
          </h3>
        </a>
        <p class="post-meta">Posted on <?php echo \Core\Functions\formater_date($post['datePublication'], 'F j, Y'); ?></p>
      </div>
      <hr>

      <?php endforeach; ?>

      <!-- Pager -->
      <div class="clearfix">
        <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
      </div>