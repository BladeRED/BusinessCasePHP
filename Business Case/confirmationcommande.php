<!DOCTYPE html>
<html lang="fr">
<?php
include('parts/head.php');

?>

  <body class="customscrollbar">
  

    <section>
      <!--BREADCRUMB-->
      <div class ="mt-3 ms-3 mb-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item active" aria-current="page"><a href ="index.php" class = "bluer">>Retour à l'accueil</a></li>
            </ol>
          </nav>
        </div>
      <div class="container rounded my-5">
        <h1 class ="text-center mt-5">Merci beaucoup pour votre achat !</h1>
        <div class ="justify-content-center"><img
          src="images/confirmation.png"
          alt="logo"
          class="rounded mx-auto d-block"
        />
        <h4 class ="text-center fw-bold">Votre commande n°005XBT8 a bien été enregistrée.</h4>
        <p class ="text-center fw-bold"> Vous pouvez consulter le détail de votre commande en allant sur votre compte client dans "Mes commandes" ou en cliquant <a href="compteclient.php" class="bluer">ici</a> </p>
        <p class ="text-center fw-bold"> N'hésitez pas à nous suivre sur les réseaux sociaux <a href="https://twitter.com/?lang=fr" class="bluer"><i class="fab fa-twitter"></i></a><a href="https://www.facebook.com/" class="bluer"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/?hl=fr" class="bluer"><i class="fab fa-instagram"></i></a> ! </p>
        
        
      </div>
    </section>

      <!--SCRIPT JS A LANCER EN FIN DU CODE-->
      <script src="script.js"></script>
      <script>
        AOS.init();
      </script>
  </body>
</html>
