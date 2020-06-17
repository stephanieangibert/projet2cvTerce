<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="public/css/styleAdmin.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <p>Retour sur le site</p>
<h2>Saisie de l'actualité</h2>
<a href="2cv/index.php?action=backoffice">Appui</a>
<div >
<form method="post" action="" enctype="multipart/form-data" id="actualite">

<label>Le titre</label>
<input type="text" name="title" id="title"></input> 
<br> 
 

<label>Rédaction du message</label>
<textarea  class="form-control col-md-8" type="text" name="content" id="content" rows="10" cols="48" ></textarea>
<br>
<label class="text-white" for="file" id="photo">Vous avez le choix de laisser une photo:</label> 
<input class="text-white" type="file" name="photo" />
<br>
<input type="submit" id="submit" name="submitAdd" value="envoyer" >
</form>
         </div>

<h2>Traitement de l'actualité</h2>
<?php

while ($data =  $postActua->fetch())
{
    ?>
<div class="news" id="chapitres">
    <h3 class="titre">
        <?php echo htmlspecialchars($data['title']); ?>
      
    </h3>
       
           <p>
             <?php           
                   echo nl2br($data['content']); ?>     
  
                  
            </p>               
     
      
</div>
 <?php
} 

$posts->closeCursor();
 
?> 
</body>
</html>

