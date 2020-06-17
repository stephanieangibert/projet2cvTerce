<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="public/css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Document</title>
</head>
<body  ontouchstart="">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="main-nav">
        <div class="container">
          <!-- <a href="exo.html" class="navbar-brand">stephanie angibert</a>  -->
         <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#supportContent" >
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="supportContent">
         <ul class="navbar-nav m-auto">
           <li class="nav-item mr-5">
             <a href="#top" class="nav-link">Accueil</a>
           </li>
           <li class="nav-item mr-5 ml-5">
              <a href="#real" class="nav-link">Histoire</a>
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
   
    <header>
        <div class="logo">
            <div class="logoImg"><img src="images/logo.jpg" alt=""></div>
            <h1>Loire Atlantique 2 CV</h1>
            <div class="reseau">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
   
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
    </section>
    <?=$content?>

       <!--  <section id="actualite">
            <h2>Actualités</h2>
            <div class="container m-auto d-flex flex-column justify-content-center align-items-center">
                <div class="row">
                    <div class="col-md-4 align-sel-centers">
                        <div class="card text-center" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Titre</h5>
                              <img src="images/picnic.jpg" alt="">
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <a href="#" class="btn">Consulter</a>
                            </div>
                          </div>                  
                        </div>
                   
                    <div class="col-md-4 align-sel-centers">
                        <div class="card text-center" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Titre</h5>
                              <img src="images/far.jpg" alt="">
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <a href="#" class="btn">Consulter</a>
                            </div>
                          </div>           
                        </div>
                       
                   
                    <div class="col-md-4 align-sel-centers">
                        <div class="card text-center" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Titre</h5>
                              <img src="images/automobile.jpg" alt="">
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <a href="#" class="btn">Consulter</a>
                            </div>
                          </div>   
                        </div>   
                        <div class="col-md-4 align-sel-centers">
                            <div class="card text-center" style="width: 18rem;">
                                <div class="card-body">
                                  <h5 class="card-title">Titre</h5>
                                  <img src="images/automobile.jpg" alt="">
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn">Consulter</a>
                                </div>
                              </div>   
                            </div>   
                            <div class="col-md-4 align-sel-centers">
                                <div class="card text-center" style="width: 18rem;">
                                    <div class="card-body">
                                      <h5 class="card-title">Titre</h5>
                                      <img src="images/automobile.jpg" alt="">
                                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                      <a href="#" class="btn">Consulter</a>
                                    </div>
                                  </div>   
                                </div>   
                                <div class="col-md-4 align-sel-centers">
                                    <div class="card text-center" style="width: 18rem;">
                                        <div class="card-body">
                                          <h5 class="card-title">Titre</h5>
                                          <img src="images/automobile.jpg" alt="">
                                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                          <a href="#" class="btn">Consulter</a>
                                        </div>
                                      </div>   
                                    </div>                            

                   
                </div>
            </div>
        </section> -->
        <section class="photo">
            <div class="row photoBis">
            
            </div>
        </section>
        
        <section class="formulaire">
          <div class="row">
          

            <div class="col-md-6 m-auto flex-column justify-content-center align-items-center contour">
              <h2 class="contact">Nous contacter</h2>
              <div class="trait"></div>
         <div class="d-flex flex-row justify-content-center align-items-center">
              <div class="mr-5 pr-5"><p>1 rue du Chateau</p>
                <p>75001 Paris, France</p>
                <p>info@monsite.com</p>
                <p>Tél : 01 23 45 67 89</p>
              </div>
              <form>
            <div class="form-group">
            
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
         <div class="encart" id="bientot">Merci à très bientôt !</div>
        </footer>
       
        <script src="public/js/effet.js"></script>
</body>
</html>