<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="public/css/style.css">
<link rel="stylesheet" href="public/css/style22.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet"> 

    <title>Document</title>
</head>
<body  ontouchstart="">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="main-nav">
        <div class="container">
       
         <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#supportContent" >
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="supportContent">
         <ul class="navbar-nav m-auto">
           <li class="nav-item mr-5">
             <a href="index.php" class="nav-link">Accueil</a>
           </li>
           <li class="nav-item mr-5 ml-5">
              <a href="index.php#histoire" class="nav-link">Histoire</a>
            </li>
            <li class="nav-item mr-5 ml-5">
                <a href="#formation" class="nav-link">Actualité</a>
              </li>
            <li class="nav-item mr-5 ml-5">
                  <a href="index.php?action=souvenir" class="nav-link">Souvenirs</a>
            </li>
         </ul>
        </div>
        </div>
      </nav>
      <section class="souvenirs">
      <div class="container p-5 m-auto d-flex flex-row flex-wrap justify-content-center align-items-center">
    
    <?php while ($data=$sqeditpoRe->fetch()):?>
         
          <div class="row">
       
              <div class="col-md-4 align-sel-centers mr-3 mb-3">
       
                  <div class="card text-center" style="width: 18rem;">
             
                      <div class="card-body">
                 
                      
                        <?php if($data['photo']!=""):
                                echo'<img src="member/photo/'.$data['photo'].'">';
            endif; ?>
                        <!-- <img src="images/picnic.jpg" alt=""> -->
                        <p class="card-text">  <?php   echo ($data['content']);?></p>
                    
                                                                                
                       
                                           
                      </div>
                                          
                    </div>   
              
                  </div>
               
                  </div>
                  <?php endwhile; ?>  
         
                  </div>
                  </section>
      <footer>
         <div id="phylactere"> <i class="fas fa-comment-dots"></i></div>
         <div class="encart" id="bientot">Merci à très bientôt !</div>
        </footer>
       
        <script src="public/js/effet.js"></script> 
</body>
</html>