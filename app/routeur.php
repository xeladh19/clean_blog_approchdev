<?php 

/*
../app/routeur.php
*/

//ROUTE 2
//Détails du post x
//PATTERN: /post/x
//CTRL:postsController
//ACTION:detailsAction

if(isset($_GET['postId'])):
    include_once '../app/controller/postsController.php';
    App\Controller\PostsController\detailsAction($conn,$_GET['postId']); 

//ROUTE 1
//Détails de la page x
//PATTERN: /page/x
//CTRL:pagesController
//ACTION:detailsAction

elseif (isset($_GET['pageId'])):
    include_once '../app/controller/pagesController.php';
    App\Controller\PagesController\detailsAction($conn,$_GET['pageId']); 


//ROUTE PAR DEFAUT
//Détails de la page
//PATTERN:/
//CTRL:pagesController
//ACTION:detailsAction
else:
    include_once '../app/controller/pagesController.php';
    App\Controller\PagesController\detailsAction($conn,1);  //Le 1 signifie le numéro de la page que l'on veut afficher.
endif;    