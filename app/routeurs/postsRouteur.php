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

    endswitch;
