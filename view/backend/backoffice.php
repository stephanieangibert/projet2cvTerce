<?php

session_start();

if(!empty($_POST) OR !empty($_FILES))
{
$_SESSION['sauvegarde'] = $_POST ;
$_SESSION['sauvegardeFILES'] = $_FILES ;

$fichierActuel = $_SERVER['PHP_SELF'] ;
if(!empty($_SERVER['QUERY_STRING']))
{
$fichierActuel .= '?' . $_SERVER['QUERY_STRING'] ;
}

header('Location: ' . $fichierActuel);
exit;
}

if(isset($_SESSION['sauvegarde']))
{
$_POST = $_SESSION['sauvegarde'] ;
$_FILES = $_SESSION['sauvegardeFILES'] ;

unset($_SESSION['sauvegarde'], $_SESSION['sauvegardeFILES']);
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="public/css/styleBackoffice.css">
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

<?php while($data= $reqR->fetch()):
       echo'<tr><td>'.$data['title'].'</td>
                <td>'.$data['content'].'</td>'?>
               
            <?php 
            if($data['photo']!=""):
                echo'<td class="pht"><img class="photoBack" src="member/photo/'.$data['photo'].'"></td>';            
                 else:
                  echo'<td></td>';
                 endif;    
            echo '<td class="btn">
             <a class="btn1" href="index.php?action=delete&amp;id=' . $data['id'] . '">Annuler</a>
             </td> ';
             echo '<td class="btn">
             <a class="btn1" href="index.php?action=edit&amp;id=' . $data['id'] . '">Mise à jour</a>
             </td>
        
             </tr>';
        endwhile;?>            
         </tbody>
         </table>
 
<?php $reqR->closeCursor();?>
</body>
</html>

