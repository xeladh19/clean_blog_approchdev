<?php 
/*
../app/model/pagesModel.php
Modèle des pages 
*/

namespace App\Model\PagesModel;

/**
 * Retourne un enregistrement sur base de son id
 * @param PDO $conn
 * @param int $id
 * @return array 
 */

 function findOneByID(\PDO $conn,$id):array{
     $sql= " SELECT *
            FROM pages
            WHERE id= :id;";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':id',$id,\PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);

 }

 /**
 * Retourne tous les enregistrements trié par $orderBy
 * @param PDO $conn
 * @param str $orderBy
 * @return array 
 */

function findAll(\PDO $conn,string $orderBy):array{
    $sql= " SELECT *
           FROM pages
           ORDER BY :orderBy;";
   $rs = $conn->prepare($sql);
   $rs->bindValue(':orderBy', $orderBy,\PDO::PARAM_STR);
   $rs->execute();
   return $rs->fetchAll(\PDO::FETCH_ASSOC);

}