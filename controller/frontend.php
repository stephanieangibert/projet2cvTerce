<?php

require('model/frontend/manager.php');
require('model/frontend/postManager.php');



function listPosts()
{
    $managerP=new PostManager();   
    $nbrRecipe=$managerP->totalActualite();   
    $RecipePerPage=6;
    $allPages = ceil($nbrRecipe/$RecipePerPage);   
  
    if(isset($_GET['listPosts']) AND !empty($_GET['listPosts']) AND $_GET['listPosts'] > 0 AND $_GET['listPosts'] <= $allPages) {
      $_GET['listPosts'] = intval($_GET['listPosts']);
      $currentPage = $_GET['listPosts'];
   } else {
      $currentPage = 1;
   }   
   $begin = ($currentPage-1)*$RecipePerPage;
 
   $posts=$managerP->getPosts($begin,$RecipePerPage);   
   // $PostActua=new PostManager();
 /*    $reqR= $PostActua->displayActua();  */
       
    require('view/frontend/listPostView.php');
    
}
function displayOnePost(){
   require('view/frontend/listOnePost.php');
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
     require('view/backend/backoffice.php'); 
  
 }
  $PostActua=new PostManager();
    $reqR= $PostActua->displayActua(); 
 
 
    require('view/backend/backoffice.php'); 


}   

     
 
 function  delete($id)
{
   $del=new PostManager();
   $delRecipe=$del->displayDelete($id);
   header('location:index.php?action=backoffice');
   
}
function  deleteRet($id,$id_photo)
{
   $delR=new PostManager();
   $delRecipeR=$delR->displayDeleteRet($id);
   header('location:index.php?action=update&id='. $id_photo);
   // require('index.php?action=update&id=' . $id_photo);

}


function displayUpdate($idPt)
{
     $post=new PostManager();
     $sqeditpo=$post->editPosts($idPt);
     $reqRet=$post->displayRetour();

    require('view/backend/update.php'); 
   
     if(isset($_POST['submit'])){

        if(isset($_FILES['photo']) && !empty($_FILES['photo']['name']) && !empty($_POST['title']) && !empty($_POST['content'])){
            $tailleMax = 2097152;
            $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
            $title=htmlspecialchars($_POST['title']);    
            $content=htmlspecialchars($_POST['content']);
            $id=$_GET['id'];
          
            if($_FILES['photo']['size'] <= $tailleMax){
               $extensionUpload = strtolower(substr(strrchr($_FILES['photo']['name'], '.'), 1));
             
               if(in_array($extensionUpload, $extensionsValides)){
                   $chemin = "member/photo/".$_POST['title'].".".$extensionUpload;
                   $resultat = move_uploaded_file($_FILES['photo']['tmp_name'], $chemin);
                      if($resultat){
                
                       $photo=$_POST['title'].".".$extensionUpload;                   
                       $post=new PostManager();
                       $postup=$post->upd($title,$content,$photo,$id);      
                       echo"La modification a été prise en compte !";     
                  
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
           $title=$_POST['title']; 
     
           $content=$_POST['content'];      
           $id=$_GET['id'];
           $photo="";
           $post=new PostManager();
           $postup=$post->upd($title,$content,$photo,$id);      
           echo"La modification a été prise en compte !";      
        
    
         } 
         else{
            $erreur="Veuillez remplir tous les champs !";
         }          
    
         }
     }
     if(isset($_POST['submitRetour'])){

      if(isset($_FILES['photo']) && !empty($_FILES['photo']['name']) && !empty($_POST['title']) && !empty($_POST['content'])){
          $tailleMax = 2097152;
          $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
          $title=htmlspecialchars($_POST['title']);    
          $content=htmlspecialchars($_POST['content']);
          $id=$_GET['id'];
        
          if($_FILES['photo']['size'] <= $tailleMax){
             $extensionUpload = strtolower(substr(strrchr($_FILES['photo']['name'], '.'), 1));
           
             if(in_array($extensionUpload, $extensionsValides)){
                 $chemin = "member/photo/".$_POST['title'].".".$extensionUpload;
                 $resultat = move_uploaded_file($_FILES['photo']['tmp_name'], $chemin);
                    if($resultat){
              
                     $photo=$_POST['title'].".".$extensionUpload;                   
                     $post=new PostManager();
                     $postup=$post->addRetour($title,$content,$photo,$id);      
                     echo"La modification a été prise en compte !";     
                
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
         $title=$_POST['title']; 
   
         $content=$_POST['content'];      
         $id=$_GET['id'];
         $photo="";
         $post=new PostManager();
         $postup=$post->addRetour($title,$content,$photo,$id);      
         echo"La modification a été prise en compte !";      
      
  
       } 
       else{
          $erreur="Veuillez remplir tous les champs !";
       }          
  
       }
   }
 
  
    
}
function editPost($idPt)
{ 
    $postcom=new PostManager();
    $sqeditpo=$postcom->editPosts($idPt);    
    require('view/backend/editPost.php');    
}
function editOnePost($idPt)
{
   $postcom=new PostManager();
  $sqeditpo=$postcom->editOnePosts($idPt); 
  $sqeditpoRe= $postcom->editPostRetour($idPt); 
  

    require('view/frontend/listOnePost.php');
}
