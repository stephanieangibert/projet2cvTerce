<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="public/css/style.css">
<link rel="stylesheet" href="public/css/style22.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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
                  <a href="#contact" class="nav-link">S'inscrire</a>
            </li>
         </ul>
        </div>
        </div>
      </nav>
     
      <?php echo '<section> <h1>'.$sqeditpo['title'].'</h1>' ?>
    <?php   if(strlen($sqeditpo['photo'])!=0){
     echo '<div><p class="photoRecette"> <img class="photoRe"src="member/photo/'.$sqeditpo['photo'].'"></p></div>';
    }
    else{ echo'<br>';
    }?>
    
    <?php echo'<p>'.$sqeditpo['content'].'</p></section>' ?>
  
 
        <footer>
         <div id="phylactere"> <i class="fas fa-comment-dots"></i></div>
         <div class="encart" id="bientot">Merci à très bientôt !</div>
        </footer>
       
        <script src="public/js/effet.js"></script>
</body>
</html>