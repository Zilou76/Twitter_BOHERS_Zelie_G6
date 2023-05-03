<?php

try {
    $database = new PDO('mysql:host=localhost; dbname=projet semaine', 'root', '');
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}

$requete2 = $database->prepare('SELECT * FROM articles ORDER BY id DESC LIMIT 1');
$requete2->execute();
$articles = $requete2->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($articles);

/*
foreach ($articles as $article) {
    $tag = $article['tag'];
    $url = "http://10.2.163.182/cours_PHP/aatwitter/getOne.php?x=" . json_encode($tag);
    $resultat = file_get_contents($url);
    echo $resultat;
}*/

?>