<?php 
/*
../app/routeurs/PostRouteur.php
Routeur des posts 
*/

switch ($_GET['posts']):

# --------------------------------------------------
# FORMULAIRE D'AJOUT D'UN POST
# --------------------------------------------------
    //PATTERN: /?posts=addForm
    //CTRL:postsController
    //ACTION:addForm
        case 'addForm':
            include_once '../app/controller/postsController.php';
            App\Controller\PostsController\addFormAction($conn);
        break;
# --------------------------------------------------
# AJOUT D'UN POST
# --------------------------------------------------               
    // PATTERN: index.php?posts=add
    // CTRL: postsControleur
    // ACTION: addInsert
        case 'addInsert': 
            include_once '../app/controller/postsController.php';
            App\Controller\PostsController\addAction($conn);
        break;
# --------------------------------------------------
# SUPPRESSION D'UN POST
# --------------------------------------------------
    //Delete post x
    //PATTERN: /?postId= delete&postId=x
    //CTRL:postsController
    //ACTION:delete
        case 'delete': 
            include_once '../app/controller/postsController.php';
            App\Controller\PostsController\deleteAction($conn,$_GET['postId']);
        break;
# --------------------------------------------------
# FORMULAIRE D'EDITION D'UN POST
# --------------------------------------------------
    //PATTERN: /?posts=editForm
    //CTRL:postsController
    //ACTION:editForm
case 'editForm': 
    include_once '../app/controller/postsController.php';
    App\Controller\PostsController\editFormAction($conn,$_GET['postId']);
break;
# --------------------------------------------------
# EDITION D'UN POST
# --------------------------------------------------   
    //Update post x
    //PATTERN: /?postId= update&postId=x
    //CTRL:postsController
    //ACTION:update
    case 'update': 
        include_once '../app/controller/postsController.php';
        App\Controller\PostsController\updateAction($conn,$_GET['postId'], $_POST);
    break;
        
    endswitch;

