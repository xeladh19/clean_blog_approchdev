<?php 

/*
../app/controller/postsController.php
*/

namespace App\Controller\PostsController;
use \App\Model\PostsModel;

function indexAction(\PDO $conn){
    include_once '../app/model/postsModel.php';
    $posts = postsModel\findAll($conn);
    include '../app/views/posts/index.php';

// GLOBAL $content;
// ob_start();
// include '../app/views/posts/index.php';
// $content = ob_get_clean();

}