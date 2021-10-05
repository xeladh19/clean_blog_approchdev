<?php 

/*
../app/routeur.php
*/

# -----------------------------------------------------------------------------------------
# ROUTE AJAX
# -----------------------------------------------------------------------------------------
                 if(isset($_GET['ajax'])):
                    include_once '../app/routeurs/ajaxRouteur.php';
# -----------------------------------------------------------------------------------------
# ROUTES STANDARDS
# -----------------------------------------------------------------------------------------
                elseif (isset($_GET['posts'])):
                    include '../app/routeurs/postsRouteur.php';
# --------------------------------------------------
# ROUTE 2
# --------------------------------------------------
        //Détails du post x
        //PATTERN: /?postId=x
        //CTRL:postsController
        //ACTION:detailsAction
                elseif(isset($_GET['postId'])):
                    include_once '../app/controller/postsController.php';
                    App\Controller\PostsController\showAction($conn,$_GET['postId']); 
# --------------------------------------------------
# ROUTE 1
# --------------------------------------------------
        //Détails de la page x
        //PATTERN: /?pageId=x
        //CTRL:pagesController
        //ACTION:showAction
                elseif (isset($_GET['pageId'])):
                    include_once '../app/controller/pagesController.php';
                    App\Controller\PagesController\showAction($conn,$_GET['pageId']); 
# --------------------------------------------------
# ROUTE PAR DEFAUT
# --------------------------------------------------
        //Détails de la page
        //PATTERN:/
        //CTRL:pagesController
        //ACTION:showsAction
                else:
                    include_once '../app/controller/pagesController.php';
                    App\Controller\PagesController\showAction($conn,1);  //Le 1 signifie le numéro de la page que l'on veut afficher.
                endif;    