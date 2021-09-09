<?php 
/*
../app/controller/pagesController.php
Contrôleur des pages
*/
namespace App\Controller\PagesController;
use \App\Model\PagesModel;
/**
 * Détails de l'enregistrement $id
 * @param PDO $conn
 * @param int $id
 */
function detailsAction(\PDO $conn, int $id) {
    include_once '../app/model/pagesModel.php';
    $pages =  PagesModel\findOneByID($conn,$id);

    GLOBAL $content;
    ob_start();
    include '../app/views/pages/index.php';
    $content = ob_get_clean();
}

/**
 * Menu principal
 * @param PDO $conn
 * @param str $orderBy
 */
function menuAction(\PDO $conn, string $orderBy) { //Je vais récupérer ça sous forme de orderBy
    include_once '../app/model/pagesModel.php';
    $pages =  PagesModel\findAll($conn,$orderBy); 

    include '../app/views/pages/menu.php';
  
}
