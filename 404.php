<!DOCTYPE html>
<html lang="fr">
<?php
include('parts/head.php');
?>

  <body class="customscrollbar">
    <section>
      <div class="container-fluid">
        <div class="col-lg-12">
          <h1 class="text-center mx-5 px-5 py-5">ERREUR 404</h1>
          <img
            src="images/404.png"
            alt="Error 404"
            class="img-fluid rounded mx-auto w-50 d-block"
          />
          <p class="text-center mt-2">
            La page que vous recherchez est introuvable. Essayez de retourner
            sur la page d'accueil en cliquant
            <a href="index.php" class="error404">ici</a> !
          </p>
        </div>
      </div>
    </section>

    <!--SCRIPT JS A LANCER EN FIN DU CODE-->
    <script src="script.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
