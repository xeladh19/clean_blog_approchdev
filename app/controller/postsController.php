<?php 

/*
../app/controller/postsController.php
*/

namespace App\Controller\PostsController;
use \App\Model\PostsModel;

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

/**
 * Détail d'un post
 *
 * @param \PDO $conn
 * @param int $id
 */
function detailsAction(\PDO $conn, int $id) {
    include_once '../app/model/postsModel.php';
    $post = postsModel\findOneByID($conn,$id);
   GLOBAL $content,$zoneTitre,$zoneScripts;
   $zoneTitre=$post['titre'];
   $zoneScripts='<script src="js/posts/details.js"></script>';
ob_start();
include '../app/views/posts/details.php';
$content = ob_get_clean();
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