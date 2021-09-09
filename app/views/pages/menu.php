<?php 
/*
    ./app/views/pages/menu.php 
    Variables disponibles:
        - $pages ARRAY(ARRAY(id,titre,sousTitre,titreMenu,texte,image,tri))
 */

?>

<ul class="navbar-nav ml-auto">
    <?php foreach ($pages as $page):?>
            <li class="nav-item">
              <a class="nav-link" href="page/<?php echo $page['id']; ?>"><?php echo $page['titreMenu']; ?></a>
            </li>
          <?php endforeach; ?>
          </ul>