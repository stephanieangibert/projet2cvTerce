<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="public/css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet"> 
</footer>
    
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
                                      <a href="index.php#actualite" class="nav-link">Actualité</a>
                               </li>
                              <li class="nav-item mr-5 ml-5">
                                        <a href="index.php?action=souvenir" class="nav-link">Souvenirs</a>
                               </li>
                       </ul>
                </div>
        </div>
      </nav>
   
    <header>
    <div id="encartGauche">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione illum, quam similique earum, aut quae quisquam mollitia vero est natus enim expedita?</div>
     <div class="encartDroite">La 2CV... ceci n'est pas une voiture, c'est un art de vivre ! </div> 
    <!-- <div class="logo">
            <div class="logoImg"><img src="images/logo.jpg" alt=""></div> -->
         
            <div class="menu">
            <div class="menuItem"> 
            <span class="item">Loire Atlantique 2 CV</span>
            <span class="label">Viens nous rejoindre</span> 
</div>
            </div>

        
        
 <!--        </div> -->
   
    </header>
    <section id="histoire">
    <div class="row">
        <div class="col-md-6 texteHistoire m-auto ">
        
            <h2>Notre histoire.</h2><div class="trait"></div><p>Nous sommes avant tout une association à but non lucratif, qui regroupe des amoureux de la 2CV.

        Nous nous regroupons lors de sorties organisées par nos membres ou lors de sorties proposées par d'autre club sur notre région mais aussi sur d'autre département voir à l'étranger et toujours dans l'esprit deuchiste.
        
        Le Loire-Atlantique 2CV  a été fondé en 1992.
        
        Ses membres sont de Nantes et sa région, de la presqu'ile de Guérande, du Morbihan et même certains membres du Finistère. 
        Tous réunis pour partager et savourer l'Art de Vivre que représente leur 2 pattes.
        
        Nous nous réunissons désormais une fois par trimestre, souvent le vendredi soir, dans le cadre de réunions d'infos et d'organisations de sorties ou autre. Ou tout simplement pour le plaisir !
        
        Un journal trimestriel : Le Tube enveloppe.
        Propre à notre association et rédigé par des volontaires parait tous les trimestres. Relatant nos faits et gestes, nos sorties, et de nombreuses autres petites infos ( trucs et astuces, annonces... )
        
        A bientôt.</p>
    </div>
</div> 
    </section>  -->
    <?=$content?>

      
        <section class="photo" id="actualite">
            <div class="row photoBis">
            
            </div>
        </section>
        
        <section class="formulaire">
          <div class="row ">
         
   <div class="m-auto col-md-6 formulaireDeContact d-flex flex-column justify-content-center align-items-center contour">
   <div class="titreContact">
   <h2 class="contact">Nous contacter</h2>
   <div class="trait mt-4 mb-4"></div>
   </div>
   <div class="row">
   <div class="col-md-6 d-flex justify-content-center align-items-center"> <div><p>1 rue du Chateau</p>
                                       <p>75001 Paris, France</p>
                                       <p>info@monsite.com</p>
                                       <p>Tél : 01 23 45 67 89</p>
                                </div></div>
  <div class="col-md-6"> <div class="form-group ">            
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nom">
               </div>

              <div class="form-group">            
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email">
              </div>

            <div class="form-group">           
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Téléphone">
             </div>

            <div class="form-group">           
              <textarea type="text" class="form-control" id="formGroupExampleInput2" placeholder="Message"></textarea>
            </div>

            <button type="submit" class="btn btn-dark mr-5">Envoyer</button>
          </form>  

      
  </div>
  </div>



</div>
         
        
       

       
</section>
<footer>
     
       
     <div id="phylactere"> <i class="fas fa-comment-dots"></i></div>
     <div id="bientot" class="encart">Merci à très bientôt !</div>
</footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.min.js"></script> 
       <script src="public/js/charming.min.js"></script>
        <script src="public/js/actualite.js"></script> 
        <script src="public/js/effet.js"></script>
</body>
</html>