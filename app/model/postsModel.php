<?php 
/*
../app/model/postsModel.php
*/

namespace App\Model\PostsModel;

# --------------------------------------------------
#  AFFICHAGE DES 4 POSTS    
# --------------------------------------------------
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

# --------------------------------------------------
#  RETOURNE L'ENREGISTREMENT SUR BASE DE SON ID 
# --------------------------------------------------
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


# --------------------------------------------------
#  UPDATEFIELD
# --------------------------------------------------
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


# --------------------------------------------------
#  ADD A POST
# --------------------------------------------------
/**
 * Add a post
 *
 * @param \PDO $conn
 * @param array $data
 * @return void
 */
function insert (\PDO $conn, array $data){
    $sql = " INSERT INTO posts
             SET titre = :titre,
                 sousTitre = :sousTitre,
                 texte = :texte,
                 datePublication = NOW(),
                 user = 1;";
                 $rs = $conn->prepare($sql);
                 $rs->bindValue(':titre' , $data['titre'],\PDO::PARAM_STR);
                 $rs->bindValue(':sousTitre' , $data['sousTitre'],\PDO::PARAM_STR);
                 $rs->bindValue(':texte' , $data['texte'],\PDO::PARAM_STR);
                 return $rs->execute();

}

# --------------------------------------------------
#  DELETE POST
# --------------------------------------------------
/**
 * Delete post
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function deleteOneById(\PDO $conn,int $id){
    $sql = " DELETE FROM `posts`
             WHERE id = :id;";
                $rs = $conn->prepare($sql);
                $rs->bindValue(':id', $id, \PDO::PARAM_INT);
                return ($rs->execute())?1:0;
}

# --------------------------------------------------
#  UPDATE POST
# --------------------------------------------------
/**
 * Update post
 *
 * @param \PDO $conn
 * @param integer $id
 * @param array $data
 * @return void
 */
function updateOneByID(\PDO $conn, int $id, array $data){
    $sql = "UPDATE `posts`
            SET  titre = :titre,
                 sousTitre = :sousTitre,
                 texte = :texte,
                 datePublication = NOW(),
                 user = 1
            WHERE id = :id;";
            $rs = $conn->prepare($sql);
            $rs->bindValue(':id',$id,\PDO::PARAM_INT);
            $rs->bindValue(':titre' , $data['titre'],\PDO::PARAM_STR);
            $rs->bindValue(':sousTitre' , $data['sousTitre'],\PDO::PARAM_STR);
            $rs->bindValue(':texte' , $data['texte'],\PDO::PARAM_STR);
            return $rs->execute();
            
}