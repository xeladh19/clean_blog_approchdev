<?php 

/*
../app/routeur.php
*/

// ROUTES AJAX -------------------------------------------------------------------------

//ROUTE 1
//Chargement des posts suivants
//PATTERN: /?older-posts
//CTRL:postsController
//ACTION:showAction

if(isset($_GET['ajax']) and $_GET['ajax']==='older-posts'):
    include_once '../app/controller/postsController.php';
    App\Controller\PostsController\AjaxOlderAction($conn,$_GET['offset']);


// ROUTES STANDARDS -------------------------------------------------------------------------

//ROUTE 2
//Détails du post x
//PATTERN: /?postId=x
//CTRL:postsController
//ACTION:detailsAction

elseif(isset($_GET['postId'])):
    include_once '../app/controller/postsController.php';
    App\Controller\PostsController\detailsAction($conn,$_GET['postId']); 

//ROUTE 1
//Détails de la page x
//PATTERN: /?pageId=x
//CTRL:pagesController
//ACTION:showAction

elseif (isset($_GET['pageId'])):
    include_once '../app/controller/pagesController.php';
    App\Controller\PagesController\showAction($conn,$_GET['pageId']); 


//ROUTE PAR DEFAUT
//Détails de la page
//PATTERN:/
//CTRL:pagesController
//ACTION:showsAction
else:
    include_once '../app/controller/pagesController.php';
    App\Controller\PagesController\showAction($conn,1);  //Le 1 signifie le numéro de la page que l'on veut afficher.
endif;    