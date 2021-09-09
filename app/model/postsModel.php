<?php 
/*
../app/model/postsModel.php
*/

namespace App\Model\PostsModel;

// function findAll(\PDO $conn, int $limit = 4){
//     $sql = "SELECT *
//             FROM posts
//             ORDER BY datePublication DESC
//             LIMIT :limit;";
//     $rs = $conn->prepare($sql);
//     $rs->bindValue(':limit', $limit, \PDO::PARAM_INT);
//     $rs->execute();
//     return $rs->fetchAll(\PDO::FETCH_ASSOC);
// }


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

/**
 * Retourne un enregistrement sur base de son id
 * @param PDO $conn
 * @param int $id
 * @return array 
 */

function findOneByID(\PDO $conn,$id):array{
    $sql= " SELECT *
           FROM posts
           WHERE id= :id;";
   $rs = $conn->prepare($sql);
   $rs->bindValue(':id',$id,\PDO::PARAM_INT);
   $rs->execute();
   return $rs->fetch(\PDO::FETCH_ASSOC);

}