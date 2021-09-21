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

function findOneByID(\PDO $conn,int $id):array{
    $sql= " SELECT *
           FROM posts
           WHERE id= :id;";
   $rs = $conn->prepare($sql);
   $rs->bindValue(':id',$id,\PDO::PARAM_INT);
   $rs->execute();
   return $rs->fetch(\PDO::FETCH_ASSOC);

}


/**
 * Update du champ $field de l'enregistrement $id
 * @param PDO $conn
 * @param int $id
 * @param string $field
 * @param string $value
 * @return array 
 */

function updateField (\PDO $conn,int $id, string $field,string $value){
    $sql= " UPDATE posts
            SET `$field` = :value
            WHERE id = :id;";
   $rs = $conn->prepare($sql);
   $rs->bindValue(':id',$id,\PDO::PARAM_INT);
   
   $rs->bindValue(':value',$value,\PDO::PARAM_STR);
   
   return ($rs->execute())?1:0;

}