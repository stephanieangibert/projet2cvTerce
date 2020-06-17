<?php
require('controller/frontend.php');
// require('controller/backend.php');

try {
     if (isset($_GET['action'])) {
        if ($_GET['action'] == 'admin') {
            admin();
         
          
        } 
          elseif ($_GET['action'] == 'backoffice') {
         
            addActualite();
            //  displayActualite();
           }
           elseif ($_GET['action'] == 'delete') {
           if(isset($_GET['id'])){
            delete($_GET['id']);
           }
        }
           elseif($_GET['action'] == 'edit'){
            if (isset($_GET['id']) && $_GET['id'] > 0){
                editPost($_GET['id']);
               
            } else {
                throw new Exception('Tous les champs ne sont pas remplis !');
            }
        }
           elseif ($_GET['action'] == 'update') {
            if(isset($_GET['id'])){
             update($_GET['id']);
          
           
           }
            
        }
   
    }else{
        listPosts();
    
     }    

    }
     

catch(Exception $e) { 
    echo 'Erreur : ' . $e->getMessage();
}
