<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
        crossorigin="anonymous"
    >
</head>
<body class="body">
    <form action="inserer.php" method="POST" enctype="multipart/form-data" class="form_connect_subscribe">
        <!-- bootstrap-->
    <div class="container text-center" >
            <div class="boots_column align-items-center" >

                <!-- essaie désespéré de séparer mes éléments sur le site internet avec une autre classe-->
                <div class="col" class="email_etc">
                    <!-- pour mettre l'email'-->
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email">                
                </div>
                <div class="col">
                    <!-- pour mettre le pseudo-->
                    <label for="pseudo">Pseudo :</label>
                    <input type="text" name="pseudo" id="pseudo">
                </div>
                <div class="col">
                    <!-- pour mettre le mot de passe-->
                    <label for="password">Mot de passe :</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="col">
                    <!-- pour mettre le lien de l'image-->
                    <label for="image">Image:</label>
                    <input type="text" name="image" id="image">                
                </div>
                <div class="col">
                    <input type="submit" value="Envoyer">
                </div>
            </div>
        </div>



    </form>

    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
        crossorigin="anonymous">
    </script>
</body>
</html>