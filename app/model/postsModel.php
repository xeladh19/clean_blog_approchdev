<?php 
/*
../app/model/postsModel.php
*/

namespace App\Model\PostsModel;

function findAll(\PDO $conn):array{
    $sql = "SELECT *
            FROM posts
            ORDER BY datePublication DESC
            LIMIT 4;";
    $rs = $conn->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}