<?php 
/**
 * ../app/views/template/posts/editForm.php
 * Variables disponibles:
 * $post ARRAY(id,titre,sousTitre,texte)
 * Ajout d'un post
 */
?>
 <!-- Page Header -->
 <div class="post-details" data-id="<?php echo $post['id']; ?>">
 <header class="masthead" style="background-image: url('img/post-bg.jpg')">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                  <h1 class="editable" data-type="text" data-field="titre">Edit a post</h1>
                </div>
              </div>
            </div>
          </div>
        </header>

        <!-- Formulaire -->
        <form action="posts/<?php echo $post['id']; ?>/update.html" method="post" class="form">
    <div>
        <label for="titre">Titre </label>
</br>
        <input type="text" id="titre" name="titre" placeholder="Saisissez votre titre ici" value=<?php echo $post['titre']; ?>>
        <hr>
    </div>
    <div>
        <label for="sous_titre">Sous-titre </label>
        </br>
        <input type="text" id="sousTitre" name="sousTitre" placeholder="Saisissez votre sous-titre ici" value=<?php echo $post['sousTitre']; ?>>
    </div>
    <hr>
    <div>
        <label for="texte">Texte </label>
        </br>
        <textarea id="texte" name="texte" placeholder="Saisissez votre texte ici" > <?php echo $post['texte']; ?></textarea>
    </div>
    <hr>
    <div class="button">
        <button type="submit">Envoyer le post</button>
    </div>
</form>
        </div>

        