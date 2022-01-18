<!DOCTYPE html>
<html lang="fr">
<?php
include('parts/head.php');
?>

  <body class ="customscrollbar">

    <?php
    include('parts/header.php');
    ?>
      <!--Ici mon panier -->
    <section>

      <div class ="mt-3 ms-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item"><a href="#">Revenir à l'accueil</a></li>
              <li class="breadcrumb-item active" aria-current="page">Panier</li>
            </ol>
          </nav>
        </div>
      <div class="container shadow-lg rounded my-4">
          <div class ="row">

            <div class="col-lg-12 justify-content-around">
              <div class =" overflow-auto cart">
              <h1 class ="text-center productdescribe"> Votre panier </h1>
                <ul class = "panier">
                  <li class = "my-4 d-flex justify-content-around"><img src="images/categ1.jpg" alt="img_product"
                    class="img-fluid rounded d-flex panier-img">  <h5 class="text-center fw-bold align-self-center">Purina Pro Plan Sterilised</h5>
                    <p class="text-center align-self-center my-1">999 999 999€ <a href="#" class ="bluer mx-3"> ❌</a></p> </li>
                  <li  class = "my-4 d-flex justify-content-around""><img src="images/categ1.jpg" alt="img_product"
                    class="img-fluid rounded d-flex panier-img">   <h5 class="text-center fw-bold align-self-center">Purina Pro Plan Sterilised</h5>
                    <p class="text-center align-self-center my-1">999 999 999€ <a href="#" class ="bluer mx-3"> ❌</a></p></li>
                  <li  class = "my-4 d-flex justify-content-around""><img src="images/categ1.jpg" alt="img_product"
                    class="img-fluid rounded d-flex panier-img">   <h5 class="text-center fw-bold align-self-center">Purina Pro Plan Sterilised</h5>
                    <p class="text-center align-self-center my-1">999 999 999€ <a href="#" class ="bluer mx-3"> ❌</a></p></li>
                  <li  class = "my-4 d-flex justify-content-around""><img src="images/categ1.jpg" alt="img_product"
                    class="img-fluid rounded d-flex panier-img">   <h5 class="text-center fw-bold align-self-center">Purina Pro Plan Sterilised</h5> 
                    <p class="text-center align-self-center my-1">999 999 999€ <a href="#" class ="bluer mx-3"> ❌</a></p></li>
                  <li  class = "my-4 d-flex justify-content-around""><img src="images/categ1.jpg" alt="img_product"
                    class="img-fluid rounded d-flex panier-img">   <h5 class="text-center fw-bold align-self-center">Purina Pro Plan Sterilised</h5>
                    <p class="text-center align-self-center my-1">999 999 999€ <a href="#" class ="bluer mx-3"> ❌</a></p></li>
                  <li  class = "my-4 d-flex justify-content-around""><img src="images/categ1.jpg" alt="img_product"
                    class="img-fluid rounded d-flex panier-img">   <h5 class="text-center fw-bold align-self-center">Purina Pro Plan Sterilised</h5>
                    <p class="text-center align-self-center my-1">999 999 999€ <a href="#" class ="bluer mx-3"> ❌</a></p></li>
                      <li  class = "my-4 d-flex justify-content-around""><img src="images/categ1.jpg" alt="img_product"
                        class="img-fluid rounded d-flex panier-img">   <h5 class="text-center fw-bold align-self-center">Purina Pro Plan Sterilised</h5>
                        <p class="text-center align-self-center my-1">999 999 999€ <a href="#" class ="bluer mx-3"> ❌</a></p></li>
                        <li  class = "my-4 d-flex justify-content-around""><img src="images/categ1.jpg" alt="img_product"
                          class="img-fluid rounded d-flex panier-img">   <h5 class="text-center fw-bold align-self-center">Purina Pro Plan Sterilised</h5>
                          <p class="text-center align-self-center my-1">999 999 999€ <a href="#" class ="bluer mx-3"> ❌</a></p></li>
                          <li  class = "my-4 d-flex justify-content-around""><img src="images/categ1.jpg" alt="img_product"
                            class="img-fluid rounded d-flex panier-img">   <h5 class="text-center fw-bold align-self-center">Purina Pro Plan Sterilised</h5>
                            <p class="text-center align-self-center my-1">999 999 999€ <a href="#" class ="bluer mx-3"> ❌</a></p></li>
                            <li  class = "my-4 d-flex justify-content-around""><img src="images/categ1.jpg" alt="img_product"
                              class="img-fluid rounded d-flex panier-img">   <h5 class="text-center fw-bold align-self-center">Purina Pro Plan Sterilised</h5>
                              <p class="text-center align-self-center my-1">999 999 999€ <a href="#" class ="bluer mx-3"> ❌</a></p>
                              
                            </li>
                            
                  <li><h4 class = "cartborder text-center my-2">Total: 999 999 999, 999 €</h4></li>

                </ul>
                <a href ="livraisonpaiement.php"><button
                  type="button"
                  class="btn btn-primary btn-lg pink mx-auto mt-2 mb-5 px-5 d-flex justify-content-center "
                >
                  Valider
                </button></a>
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
