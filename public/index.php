<?php 
/*
../public/index.php
*/

require_once '../core/init.php';
require_once '../app/routeur.php';

if (!(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
    // No ajax request
    require_once "../app/views/template/index.php";
}
require_once '../core/close.php';
