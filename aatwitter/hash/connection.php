<?php 

try{
    $database = new PDO ('mysql:host=localhost; dbname=projet semaine', 'root', '');
} 
catch (Exception $e){
    die('Erreur :' . $e->getMessage());
}



?>