<?php 
/*
../app/model/postsModel.php
*/

namespace App\Model\PostsModel;

function findAll(\PDO $conn, int $limit = 4){
    $sql = "SELECT *
            FROM posts
            ORDER BY datePublication DESC
            LIMIT :limit;";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':limit', $limit, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}