<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <!--BOOTSTRAP-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!--JQUERY-->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <!--BOOTSTRAP BUNDLE-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <!--FONTAWESOME-->
    <script
      src="https://kit.fontawesome.com/ceebcaee10.js"
      crossorigin="anonymous"
    ></script>
    <!--ANIMATE ON SCROLL-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!--CSS de base-->
    <link href="style.css" rel="stylesheet" />
    <title>La Nîmes'alerie</title>
  </head>

  <body class ="customscrollbar"></body>

    <header>
    <?php
      session_start();
      ?>
    </header>

    <section>
      <!--BREADCRUMB-->
      <div class ="mt-3 ms-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item active" aria-current="page"><a href ="index.php" class = "bluer">>Retour à l'accueil</a></li>
            </ol>
          </nav>
        </div>
      <div class="container shadow-lg rounded my-4 login">
        <div class="row">
          <div class ="justify-content-center"><img
          src="images/logochat.png"
          alt="logo"
          class="rounded mx-auto d-block"
        />
          <h2 class ="text-center">Bienvenue</h2>
          <form method="post" action="connexion.php" class="mx-5">

              <?php
              
              var_dump($_SERVER["REQUEST_METHOD"]);
              var_dump($_POST);
              var_dump($_SESSION);
              if($_SERVER["REQUEST_METHOD"] == 'POST'){

                //On vérifie l'adresse mail si elle est pas vide //

                if(empty($_POST["login"])){

                  $errors[] = "Vous n'avez pas saisi d'adresse mail";

                };

                // On vérifie le password s'il est pas valide //

                if(empty($_POST["password"])){

                  $errors[] = "Vous n'avez pas saisi de mot de passe";

                };

                //On vérifie qu'on rentre les bons identifiants //

                if($_POST['login'] == 'juleray@msn.com' && $_POST['password'] == 'toto') {
                
                $_SESSION["email"] = 'juleray@msn.com';
                $_SESSION["firstname"] = 'Julien ';
                $_SESSION["lastname"] = 'RAYNAUD';

                header('Location: compteclient.php');
                exit();
                  var_dump($_SESSION);
                } else {
                echo('Probleme d\'authentification veuillez réessayer');
                }

                var_dump($errors);
            };
              ?>

            <div class="form-group my-3 mx-5 px-5">
              <div class ="mb-4"><h4 class ="fw-bold">Déjà enregistré?</h4>
              <h6>Saisissez vos informations de connexions</h6></div>
              <label for="exampleInputEmail1" >Adresse Email: </label>
              <input
                type="email"
                name="login"
                class="form-control log mx-auto"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter email"
              />
            </div>
            <div class="form-group mt-3 mb-4 mx-5 px-5">
              <label for="exampleInputPassword1" >Mot de passe: </label>
              <input
                type="password"
                name ="password"
                class="form-control log mx-auto "
                id="exampleInputPassword1"
                placeholder="Password"
              />
            </div>
            <button
            type="submit"
            class="btn btn-primary btn-lg pink mx-auto mt-5 mb-2 px-5 d-flex justify-content-center "
          >
            Valider
          </button>

          </form>
          
          <div class ="my-5 mx-5 px-5">
            <a href ="#" class = "bluer">> Mot de passe oublié?</a>
            <h6 class ="fw-bold mt-3 mb-2">Vous n'avez pas encore de compte?</h6>
            <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="nobutton"><a class = "bluer"> Inscrivez-vous !</a></button>
             <!-- Modal -->
             <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Inscription</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Non,ça ira!"></button>
                  </div>
                  <div class="modal-body">
                  <form class = "mx-5">
                      <div class="form-group my-3 mx-5 px-5">
                        
                        <label for="exampleInputGenre">Votre civilité </label>
                        <select name="civilite" id="civilite">
                          <option value="">Madame</option>
                          <option value="dog">Monsieur</option>
                        </select>
                      </div>

                      <div class="form-group my-3 mx-5 px-5">
                        
                        <label for="exampleInputName">Votre nom de famille et votre prénom </label>
                        <input
                          type="text"
                          class="form-control log mx-auto"
                          id="exampleInputName"
                          aria-describedby="namelHelp"
                          placeholder="Roy Poulet"
                        />
                      </div>

                      <div class="form-group my-3 mx-5 px-5">
                        
                        <label for="exampleInputDate">Date de naissance: </label>
                        <input
                          type="date"
                          class="form-control log mx-auto"
                          id="exampleInputDate"
                          aria-describedby="dateHelp"
                          placeholder="15 Mai 2020"
                        />
                      </div>

                      <div class="form-group my-3 mx-5 px-5">
                        
                        <label for="exampleInputEmail1">Saisissez une adresse mail valide: </label>
                        <input
                          type="email"
                          class="form-control log mx-auto"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"
                          placeholder="Votre mail"
                        />
                      </div>

                      <div class="form-group mt-3 mb-4 mx-5 px-5">
                        <label for="exampleInputPassword1">Mot de passe :</label>
                          <input
                          type="password"
                          class="form-control log mx-auto "
                          id="exampleInputPassword1"
                          placeholder=" MotdePasseIdéal43!"
                        />
                        <p class = "mini">Votre mot de passe doit contenir au moins un chiffre, une majuscule et un caractère spécial (ex: ?,!:)</p>
                      </div>
                      <div class="mt-3 mb-4 mx-5 px-5 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">En cochant cette case, vous acceptez nos CGV et nos mntions légales.</label>
                      </div>
                  </div>
                  <div class="modal-footer justify-content-around">
                    <button type="button" class="btn btn pink text-white" data-bs-dismiss="modal">Non merci, ça ira !</button>
                    <button type="button" class="btn btn pink text-white">Je m'inscris !</button>
                  </div>
                </div>
              </div>
            </div></div>
            <!-- Button trigger modal -->


       
          </form>
                  </div>
        </div>
      </div>
    </section>

    <footer class="shadow-lg">
    
    </footer>

    <!--SCRIPT JS A LANCER EN FIN DU CODE-->
    <script src="script.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
