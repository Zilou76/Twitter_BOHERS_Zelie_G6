<?php

require '../hash/connection.php';

$data = [

    "message" => $_POST['message'],
    "date" => date('Y-m-d H:i:s'),
    "tag" => $_POST['tag']
];

$requete = $database->prepare('INSERT INTO articles(message, date,tag) VALUES (:message, :date, :tag)');
$requete->execute($data);

header('Location: ../index.php');
        

?>