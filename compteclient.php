<?php
session_start();

   if (!isset($_SESSION) || !isset($_SESSION["email"]) || !isset($_SESSION["firstname"]) || !isset($_SESSION["lastname"])){
    header('Location: connexion.php');
    };
      ?>
<!DOCTYPE html>
<html lang="fr">

<?php
include('parts/head.php');
?>

<body class="customscrollbar">
<?php
    include('parts/header.php');
 
    ?>

  <section>


    <nav aria-label="breadcrumb">
      <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="index.php">Revenir à l'accueil > </a></li>
      </ol>
    </nav>
    

    <div class="container-fluid my-5 shadow-lg rounded">
      <div class="container my-4">
        <h1 class="text-center">Mon compte client</h1>
      </div>
      <div class ="row">
        <div class ="col-lg-4">
          <h2 class ="text-center mt-3">Tableau de bord</h2>
          <div class="accordion mb-5" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Mes Données Personelles
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
               <ul>
                 <li class ="accordeon-marques"><a href ="#" class="bluer">Gérer mes données personelles</a></li>
                 <li class ="accordeon-marques"><a href ="#" class="bluer">Modifier mes identifiants de connexion</a></li>
                </ul>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Mes commandes
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li class ="accordeon-marques"><a href ="#" class="bluer">Commandes en cours</a></li>
                    <li class ="accordeon-marques"><a href ="#" class="bluer">Mes anciennes commandes</a></li>
                    <li class ="accordeon-marques"><a href ="#" class="bluer">Mes remboursements</a></li>
                   </ul>
                 </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Newsletter
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                  <li class ="accordeon-marques"><a href ="#" class="bluer">S'abonner/se désabonner de la Newsletter</a></li>
                  <li class ="accordeon-marques"><a href ="#" class="bluer">Changer l'adresse mail de réception</a></li>
                </ul>
                </div>
              </div>
            </div>
          </div>


        </div>

        <div class ="col-lg-8">
          <div class="row justify-content-center px-5">
            <div class="card text-center mb-5 w-75">
              <h2 class ="text-center my-3">Mon profil</h2>
              <div class="card-body mb-5 px-5 w-100">
                <ul class="list-group justify-content-evenly">
                  <li class="list-group-item text-center"><strong>Email actuel:</strong><br/><span>juleray@msn.com </span><span class = "ps-2"><a href ="#" class ="bluer"> <i class="fas fa-pencil-alt"></i>Modifier</a></span></li>
                  <li class="list-group-item"><strong>Mot de passe:</strong><br/><span>°°°°°°°°</span><span class = "ps-2"><a href ="#" class ="bluer"> <i class="fas fa-pencil-alt"></i></a></span></li>
                  <li class="list-group-item"><strong>Monsieur</strong><br/><span>RAYNAUD Julien</span><span class = "ps-2"><a href ="#" class ="bluer"> <i class="fas fa-pencil-alt"></i></a></span></li>
                  <li class="list-group-item"><strong>Date de naissance:</strong><br/><span>23 Août 1992</span><span class = "ps-2"><a href ="#" class ="bluer"> <i class="fas fa-pencil-alt"></i></a></span></li>
                  <li class="list-group-item"><strong>Adresse de facturation:</strong><br/><span>666, Route des Enfers 66666 SATANAS-SUR-LOIRE</span><span class = "ps-2"><a href ="#" class ="bluer"> <i class="fas fa-pencil-alt"></i></a></span></li>
                </ul>
              </div>
              </div>          
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
include('parts/footer.php');
?>
</body>

</html>