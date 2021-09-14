<?php 
/*
../app/model/postsModel.php
*/

namespace App\Model\PostsModel;
/**
 * Affichage de 4 posts
 *
 * @param \PDO $conn
 * @param integer $limit
 * @return void
 */
function findAll(\PDO $conn, int $limit = 4, int $offset = 0){
    $sql = "SELECT *
            FROM posts
            ORDER BY datePublication DESC
            LIMIT :limit
            OFFSET :offset;";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':limit', $limit, \PDO::PARAM_INT);
    $rs->bindValue(':offset', $offset, \PDO::PARAM_INT);
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

