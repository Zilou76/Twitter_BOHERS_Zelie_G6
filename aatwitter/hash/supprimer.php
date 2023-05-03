<?php
    require_once 'connection.php';

    $data = [

        'id' => $_GET['id']

    ];

    $requete = $database->prepare('DELETE FROM articles WHERE id=:id');
    $requete->execute($data);

    header('Location: ../index.php');

?>
