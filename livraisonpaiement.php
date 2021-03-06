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
    <div class="container rounded my-4  ">
      <div class="row d-flex  shadow-lg rounded justify-content-evenly ">
        <div class="col-lg-6 my-4">
          <h2 class="text-center">Vos informations de paiement</h2>
          <div class="row mt-3">
            <!--Visuels du paiement-->
            <div class="text-center">
              <a href="#" class="me-4"><img src="images/mastercard.png" alt="mastercard"
                  class="img-fluid paiement" /></a>
              <a href="#" class="mx-4"><img src="images/visa.png" alt="mastercard" class="img-fluid paiement" /></a>
              <a href="#" class="ms-4"><img src="images/paypal.png" alt="mastercard" class="img-fluid paiement" /></a>
            </div>
          </div>
          <!--Formulaire qui s'affichera au clic sur une image-->
          <div class="mt-4">

            <form class="mx-5">
              <div class="form-group my-3 mx-5 px-5">

                <label for="numCardBank">Numéro de carte </label>
                <input type="email" class="form-control log mx-auto" id="numCardBank" aria-describedby="cardHelp"
                  placeholder="Entrez votre numéro de carte bancaire" />
              </div>
              <div class="form-group mt-3 mb-4 mx-5 px-5">
                <div class="row">
                  <div class="col-4 mx-auto">
                    <label for="crypto">Cryptogramme </label>
                    <input type="number" class="form-control log mx-auto text-center " id="crypto" placeholder="999" />
                  </div>
                  <div class="col-8">
                    <div class="row justify-content-center">
                      <div class="col-6 mt-4">
                      
                      <select name="month" id="datecbmonth">
                        <option value="">Mois</option>
                        <option value="dog">01</option>
                        <option value="cat">02</option>
                        <option value="hamster">03</option>
                        <option value="parrot">04</option>
                        <option value="spider">05</option>
                        <option value="goldfish">06</option>
                        <option value="goldfish">07</option>
                        <option value="goldfish">08</option>
                        <option value="goldfish">09</option>
                        <option value="goldfish">10</option>
                        <option value="goldfish">11</option>
                        <option value="goldfish">12</option>
                      </select>
                    </div>
                      
                      <div class="col-6 mt-4">
                      
                      <select name="month" id="datecbyear">
                        <option value="">Année</option>
                        <option value="dog">21</option>
                        <option value="cat">22</option>
                        <option value="hamster">23</option>
                        <option value="parrot">24</option>
                        <option value="spider">25</option>
                        <option value="goldfish">26</option>

                      </select>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6 my-4">
          <h2 class="text-center">Votre adresse de livraison</h2>
          <div class="mt-4">

            <form class="mx-5">
              <div class="form-group my-3 mx-5 px-5">

                <label for="street">Rue, Lieu-dit,etc </label>
                <input type="email" class="form-control log mx-auto" id="street" aria-describedby="cardHelp"
                  placeholder="Ex: " 166, Rue du Test Unitaire"" />
              </div>
              <div class="form-group mt-3 mb-4 mx-5 px-5">
                <label for="ZIPcode">Code postal </label>
                <input type="password" class="form-control log mx-auto " id="Zipcode" placeholder="75000" />

              </div>

              <div class="form-group mt-3 mb-4 mx-5 px-5">
                <label for="town">Commune </label>
                <input type="adress" class="form-control log mx-auto " id="town" placeholder="PARIS" />

              </div>
          </div>
        </div>
        <div class="col-lg-12"><a href="confirmationcommande.php"><button type="button"
          class="btn btn-primary btn-lg pink mx-auto mt-5 mb-5 px-5 d-flex justify-content-center ">
          Valider
</button></a>
      </div>

      </div>

     
    </div>

  </section>

  <?php
include('parts/footer.php');
?>

</html>