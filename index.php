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
         
       
           }
           elseif ($_GET['action'] == 'delete') {
           if(isset($_GET['id'])){
            delete($_GET['id']);
           }
        }
           elseif($_GET['action'] == 'edit'){
            if (isset($_GET['id']) && $_GET['id'] > 0){
                 editPosts($_GET['id']);
              
          
               
            } else {
                throw new Exception('Tous les champs ne sont pas remplis !');
            }
        }
           elseif ($_GET['action'] == 'update') {
            if(isset($_GET['id'])){
                displayUpdate($_GET['id']);
          
           
           }
            
        }  
        elseif ($_GET['action'] == 'editOnePost') {
            if (isset($_GET['id']) && $_GET['id'] > 0){
                editOnePost($_GET['id']);
             
         
              
           } else {
               throw new Exception('Tous les champs ne sont pas remplis !');
           }
            
        }  
        
       
   
   
    }else{
        listPosts();
        
     }    

    }
     

catch(Exception $e) { 
    echo 'Erreur : ' . $e->getMessage();
}
