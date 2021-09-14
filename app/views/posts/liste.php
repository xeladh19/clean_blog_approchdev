<?php 
/*
    ./app/views/posts/liste.php 
    Variables disponibles:
        - $posts ARRAY(ARRAY(titre,sousTitre,datePublication,...))
 */
use \Core\Functions;
?>


      <!-- POSTS LIST -->
      <?php foreach($posts as $post): ?>

      <div class="post-preview">
        <a href="post/<?php echo $post['id']; ?>">
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
