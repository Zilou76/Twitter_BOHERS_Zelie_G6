<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="popup.css">
    <!-- lien Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
    >
    <!-- lien Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
        crossorigin="anonymous"
    >

</head>
<body class="body">
    <header><!-- bar de nav avec connection et inscription et pour le moment création de post -->
    <nav class="navbar">
            <div class="toggle">
                <i class="fa-solid fa-bars ouvrir"></i>
                <i class="fa-solid fa-xmark fermer"></i>
            </div>
            <ul class="sub_new liste_nav">
            <!-- bouton inscription-->
                <li>
                    <button class="button_navbar">
                        <a href="hash/index.php" class="box_navbar">Inscription</a>
                    </button>
                </li>
                <li>
                    <button class="button_navbar">
                        <a href="hash/page_connection.html" class="box_navbar">Connection</a>
                    </button>
                </li>
                <li>
                    <button class="button_navbar">
                        <a href="index.php" class="box_navbar">Retour page d'acceuil</a>
                    </button>
                </li>
            </ul>

    
            <!-- bar de recherche -->
            <form action="rechercher.php" method ="GET" >
                <input type="text" name="recherche" id="recherche">
                <input type="submit" value ="Envoyer">
            </form>
        </nav>
    </header>
    </header>
    <main>

        <!-- bouton nouveau post lié à la popup-->
        <button class="addbutton addbutton-icon">
            +
        </button>


        <!-- POP UP-->

        <div class="popup_container">
            <section class="popup">
  
                <form action="formulairetwitt/process.php" method="POST" class="form"> <!-- POST au lieu de GET permet de cacher les infos dans l'url-->
                    <div class="message">
                        <label for="message">Message :</label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <select name="tag" id="tag-select">
                            <option value="">tags</option>
                            <option value="rouge">rouge</option>
                            <option value="vert">vert</option>
                            <option value="bleu">bleu</option>
                            <option value="jaune">jaune</option>
                        </select>
                        <input type="submit" value="Envoyer">
                    </div>
                    
                </form>

            </section>
        </div>





        <!-- enssemble des publication-->
        <div class="publications">
        <?php

        require_once 'hash/connection.php';

        $requete=$database->prepare('SELECT * FROM articles ORDER BY date DESC');
        $requete->execute();

        $articles=$requete -> fetchAll(PDO::FETCH_ASSOC);

        $requete2=$database->prepare('SELECT * FROM users LIMIT 1');
        $requete2->execute();
        $users=$requete2 -> fetchAll(PDO::FETCH_ASSOC);

        foreach($articles as $article){
        ?>
            <!-- un article à afficher-->
            <div class="boite">
        
                <div class="marged_content">
                    <p><?php echo $users[0]['pseudo']?></p>
                    <img src="<?php echo $users[0]['image'];?>" alt="" class="avatar">
                </div>

                <div class="content_box">
                    <p> <?php echo $article['message'];?></p>
                </div>

        
                <div class="marged_content">

                    <!-- tags-->
                    <span class="marged_content"><?php echo $article['tag'];?></span>
                    <!-- date du contenu-->
                    <span class="marged_content"><?php echo $article['date'];?></span>

                    <!-- action supprimer poubelle-->
                    <a href="hash/supprimer.php?id=<?php echo $article['id']; ?>" onclick="confirmer()">
                        <img src="image/poubelle.png" alt="" class="poubelle">
                    </a>
                </div>
            </div>

        <?php
        }

        ?>
        </div>
    </main>
    <!-- intégration du js-->
    <script src="hash/supprimer.js"></script>
    <script src="script.js"></script>
    <!-- bootstrap-->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
        crossorigin="anonymous">
    </script>
</body>
</html>