



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="public/css/styleUpdate.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <section class="actualites">
   <a href="index.php" ><p>Retour sur le site</p></a>
<h2>Saisie de l'actualité</h2>
<p>Pour voir les modifications réactualiser après envoi</p>
<div >
<form method="post" action="" enctype="multipart/form-data" id="actualite">

<label>Le titre</label>
<textarea type="text" name="title" id="title" ><?php echo $sqeditpo['title']; ?></textarea> 
<br> 
 

<label>Rédaction du message</label>
<textarea  class="form-control col-md-8" type="text" name="content" id="content" rows="10" cols="48"><?php echo $sqeditpo['content']; ?> </textarea>
<br>
<label class="text-white" for="file" id="photo">Vous avez le choix de laisser une photo:</label> 
<input class="text-white" type="file" name="photo" />
<br>
<input type="submit" id="submit" name="submit" value="envoyer" >
</form>
         </div>
</section>     
<section class="retourActualite">
         <br> 
         <h2>Retour d'actualité</h2>
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
 <input type="submit" id="submit" name="submitRetour" value="envoyer" >
 </form>
          <h2>Traitement retour d'actualité</h2> 
          </section>  

          <div class="table-responsive-sm"> 
         <table cellpadding="5" cellspacing="10" class="table">
<thead>
         <th scope="col">Titre</th>
         <th scope="col">Contenu</th>         
         <th scope="col">Photo</th>          
         <th scope="col" class="btn">Btn1</th>
         <th scope="col" class="btn">Btn2</th>
         
</thead>  
<tbody>   

<?php while($data=  $reqRet->fetch()):
       echo'<tr><td>'.$data['title'].'</td>
                <td>'.$data['content'].'</td>'?>
               
            <?php 
            if($data['photo']!=""):
                echo'<td class="pht"><img class="photoBack" src="member/photo/'.$data['photo'].'"></td>';            
                 else:
                  echo'<td></td>';
                 endif;    
            echo '<td class="btn">
             <a class="btn1" href="index.php?action=deleteRet&amp;id=' . $data['id'] . '">Annuler</a>
             </td> ';
            /*  echo '<td class="btn">
             <a class="btn1" href="index.php?action=update&amp;id=' . $data['id'] . '">Mise à jour</a>
             </td> 
        
             </tr>'; */
        endwhile;?>            
         </tbody>

<script type="text/javascript" src="public/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({

mode : "exact", 
// id ou class, des textareas appelés
elements : "commentaire", 
// en mode avancé, cela permet de choisir les plugins
theme : "advanced", 
// langue
//language : "fr", 
// liste des plugins
content_css: "http://localhost/public/css/my_tiny_styles.css",  
theme_advanced_toolbar_location : "top",
theme_advanced_buttons1 : "bold,italic,underline,strikethrough,sup,forecolor,separator,"
+ "justifyleft,justifycenter,justifyright,justifyfull,formatselect,"
+ "bullist,numlist,outdent,indent,separator,cleanup,|,undo,redo,|,",
theme_advanced_buttons2 : "",
theme_advanced_buttons3 : "",
height:"450px",
width:"1000px"
});


</script>     

</body>
</html>



           
                         



