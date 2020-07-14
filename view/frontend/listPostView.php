<?php ob_start();?>

<section id="actualite">
            <h2>Actualités</h2>
         
            <div class="container m-auto d-flex flex-row flex-wrap justify-content-center align-items-center">
         
               <?php while ($data = $posts->fetch()):?>
                 
               
                <div class="row">
             
                    <div class="col-md-4 align-sel-centers mr-3 mb-3 itemActualite">
             
                        <div class="card text-center" style="width: 18rem;">
                   
                            <div class="card-body">
                       
                              <h5 class="card-title">  <?php echo htmlspecialchars($data['title']); ?>   </h5>
                              <?php if($data['photo']!=""):
                                      echo'<img src="member/photo/'.$data['photo'].'">';
                  endif; ?>
                              <!-- <img src="images/picnic.jpg" alt=""> -->
                              <p class="card-text">  <?php   echo ($data['content']);?></p>
                             
                          <?php     echo'  <a href="index.php?action=editOnePost&amp;id='.$data['id'].'" class="btn">Consulter  </a>  ';?>

                                                                                      
                             
                                                 
                            </div>
                                                
                          </div>   
                    
                        </div>
                     
                        </div>
                        
                        <?php endwhile; ?>
                        </div>
                         <?php $posts->closeCursor();?> 

<div class="pagination d-flex row justify-content-center">
<?php
for($i=1;$i<=$allPages;$i++) {
   if($i == $currentPage) {
      echo '<font color="black">'.$i.'</font>';
   } else {
      echo '<a href="index.php?listPosts='.$i.'">'.$i.'</a> ';
   }
}
?> 
 </div>      
                        
                       
</section>

<?php $content = ob_get_clean(); ?>



<?php require('view/frontend/template.php'); ?>
                          