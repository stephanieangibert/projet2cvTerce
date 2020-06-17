<?php

require('model/frontend/manager.php');
require('model/frontend/postManager.php');



function listPosts()
{
    //$managerP=new postMananger();
    //$posts=$managerP->getPosts();
/*     $posts = getPosts(); */

    require('view/frontend/listPostView.php');
}

function admin(){
   
  
   
    if(isset($_POST['submit'])){
        $mdpconnect=htmlspecialchars($_POST['password']); 
        if($mdpconnect=="philippe")
      

              header('location:index.php?action=backoffice');     

   }
   require('view/backend/admin.php');
} 

function addActualite(){
     if(isset($_POST['submitAdd'])){
     if(isset($_FILES['photo']) && !empty($_FILES['photo']['name']) && !empty($_POST['title']) && !empty($_POST['content'])){
        $tailleMax = 2097152;
        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
        $title=htmlspecialchars($_POST['title']);    
        $content=htmlspecialchars($_POST['content']);
      
        if($_FILES['photo']['size'] <= $tailleMax){
           $extensionUpload = strtolower(substr(strrchr($_FILES['photo']['name'], '.'), 1));
         
           if(in_array($extensionUpload, $extensionsValides)){
               $chemin = "member/photo/".$_POST['title'].".".$extensionUpload;
               $resultat = move_uploaded_file($_FILES['photo']['tmp_name'], $chemin);
                  if($resultat){
            
                   $photo=$_POST['title'].".".$extensionUpload;
                   $Post=new PostManager();
                   $addActua=$Post->add($title,$content,$photo);
                   $erreur="Votre actualité est enregistrée !";
                  }
                  else{
                   $msg = "Erreur durant l'importation de votre photo";
                  }
           }else{
               $msg = "Votre photo  doit être au format jpg, jpeg, gif ou png";
           }
        }else{
           $msg = "Votre photone doit pas dépasser 2Mo";
        }
            
     }else{
         if(!empty($_POST['title'])&&!empty($_POST['content'])){
       $title=htmlspecialchars($_POST['title']);     
       $content=htmlspecialchars($_POST['content']); 
       $photo="";
       
       $Post=new PostManager();
       $addActua=$Post->add($title,$content,$photo);

       $erreur="Votre recette est enregistrée !";
     } 
     else{
        $erreur="Veuillez remplir tous les champs !";
     }          

     }
      
     
 }
 $postActua=new PostManager();
     $reqR= $postActua->displayActua();
 
   require('view/backend/backoffice.php'); 
// include_once('view/backend/backoffice.php');



}     
/* function displayActualite()  {
    $postActua=new PostManager();
    $reqR= $postActua->displayActua(); 
    require('view/backend/backoffice.php'); 
   

}
 */

