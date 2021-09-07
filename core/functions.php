<?php 

/*
../core/functions.php
*/
namespace Core\Functions;  
/*
    ./core/functions.php
 */
namespace Core\Functions;
 /**
  * Formatage d'une date avec format francophone par défaut
  *
  * @param string $date
  * @param string $format
  * @return string
  */
function formater_date(string $date, string $format = DATE_FORMAT) :string {
    $date = new \DateTime($date);
    return $date->format($format);
}