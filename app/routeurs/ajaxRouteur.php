<?php 

/*
../app/routeurs/ajaxRouteur.php
Routeur des transactions Ajax
*/

 
switch ($_GET['ajax']):
    //ROUTE 2
    //Update d'un champ 'Field'du post 'id'
    //PATTERN: /?ajax=updateField
    //CTRL:postsController
    //ACTION:AjaxUpdateFieldAction
            case 'updateField':
                include_once '../app/controller/postsController.php';
                App\Controller\PostsController\AjaxUpdateFieldAction($conn,$_GET['id'], $_GET['field'], $_GET['value']);
            break;
    //ROUTE 1
    //Chargement des posts suivants
    //PATTERN: /?ajax=older-posts
    //CTRL:postsController
    //ACTION:AjaxOlderAction

            case 'older-posts':
                include_once '../app/controller/postsController.php';
                App\Controller\PostsController\AjaxOlderAction($conn,$_GET['offset']);
            break;
endswitch;