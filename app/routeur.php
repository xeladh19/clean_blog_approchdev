<?php 

/*
../app/routeur.php
*/

//ROUTE PAR DEFAUT
//PATTERN:/
//CTRL:postsController
//ACTION:index

include_once '../app/controller/postsController.php';
App\Controller\PostsController\indexAction($conn);