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
            // displayActualite();
           }
            

   
    }else{
        listPosts();
    
     }    

     
     
}
catch(Exception $e) { 
    echo 'Erreur : ' . $e->getMessage();
}
