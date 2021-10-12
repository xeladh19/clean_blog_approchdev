<?php 
/*
../app/controller/postsController.php
*/

/*----------------------------------------------------------------*/
namespace App\Controller\PostsController;
use \App\Model\PostsModel;
/*----------------------------------------------------------------*/

# --------------------------------------------------
# ADD A POST
# --------------------------------------------------

/**
 * Insertion du formulaire Add a post
 *
 * @param \PDO $conn
 * @return void
 */
function addFormAction(\PDO $conn){
  GLOBAL $content,$zoneTitre,$zoneScripts;
  ob_start();
  include_once '../app/views/posts/add.php';
  $content = ob_get_clean();
}

/**
 * Add a post
 *
 * @param \PDO $conn
 * @return void
 */
function addAction(\PDO $conn){
    include_once '../app/model/postsModel.php';
    postsModel\insert($conn,$_POST);
    header('location: http://localhost/approch_dev/clean_blog_approchdev/public/');
}
# --------------------------------------------------
#  LISTE ENREGISTREMENT
# --------------------------------------------------

/**
 * Liste de tout les enregistrements
 *
 * @param \PDO $conn
 * @return void
 */
function indexAction(\PDO $conn){
    include_once '../app/model/postsModel.php';
    $posts = postsModel\findAll($conn);

GLOBAL $zoneScripts;
$zoneScripts .= '<script src="js/posts/index.js"></script>';
include '../app/views/posts/index.php';
}

# --------------------------------------------------
#  DETAIL D'UN POST
# --------------------------------------------------

/**
 * Détail d'un post
 *
 * @param \PDO $conn
 * @param int $id
 */
function showAction(\PDO $conn, int $id) {
    include_once '../app/model/postsModel.php';
    $post = PostsModel\findOneByID($conn,$id);
   GLOBAL $content,$zoneTitre,$zoneScripts;
   $zoneTitre=$post['titre'];
   $zoneScripts='<script src="js/posts/details.js"></script>';
ob_start();
include '../app/views/posts/details.php';
$content = ob_get_clean();
}

# --------------------------------------------------
#  SUPPRESSION D'UN POST
# --------------------------------------------------

/**
 * Supression d'un post
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */ 
function deleteAction(\PDO $conn, int $id) {
    include_once '../app/model/postsModel.php';
      $reponse = postsModel\deleteOneById($conn,$id);
        // var_dump($reponse); die();
      if($reponse == 1):
        header('location: http://localhost/approch_dev/clean_blog_approchdev/public/');
      else:
        GLOBAL $content;
        $content = "<h1>Erreur la page n'a pas pu être affichée</h1>
                    <div>
                    <button href='location: http://localhost/approch_dev/clean_blog_approchdev/public/'>Retour</button>
                    </div>";
      endif;
}

# --------------------------------------------------
#  FORMULAIRE DE L'EDITION D'UN POST 
# --------------------------------------------------
function editFormAction(\PDO $conn, int $id){
  include_once '../app/model/postsModel.php';
  $post = PostsModel\findOneByID($conn,$id);
  GLOBAL $content,$zoneTitre,$zoneScripts;
  ob_start();
  include_once '../app/views/posts/editForm.php';
  $content = ob_get_clean();
}

# --------------------------------------------------
#  EDITION D'UN POST 
# --------------------------------------------------

function updateAction(\PDO $conn, int $id, array $data){
  include_once '../app/model/postsModel.php';
  postsModel\updateOneByID($conn,$id, $data);
  header('location: http://localhost/approch_dev/clean_blog_approchdev/public/');
}



// ACTION AJAX ------------------------------------------------------------------------------------------------

/**
 * X post suivant $id
 * @param \PDO $conn
 */
function AjaxOlderAction(\PDO $conn, int $offset) {
    include_once '../app/model/postsModel.php';
    $posts = postsModel\findAll($conn, 10, $offset);
    include '../app/views/posts/liste.php';
}

/**
 * Update du champ $field de l'enregistrement $id
 * @param \PDO $conn
 */
function AjaxUpdateFieldAction(\PDO $conn,int $id, string $field,string $value) {
    include_once '../app/model/postsModel.php';
    echo PostsModel\updateField($conn,$id, $field,$value);
}
