<!DOCTYPE html>
<html lang="fr">
<?php
include('parts/head.php');
?>

<body class="customscrollbar">

    <?php
    include('parts/header.php');
    ?>

<!-- ici pag produit-->
    <section>

    <?php
 $array = [
 'title' => 'PURINA Pro Plan Sterilized Adult',
 'subtitle' => '3kg à la Dinde',
 'review' => 123456,
 'price' => 999999,
 'presentation' => 'Croquettes pour chat adulte stérilisé, à la dinde hautement digestible. Riches en protéines, faibles en matières grasses. Favorisent la santé des voies urinaires et agissent contre le tartre.',
 'composition' => 'Poulet, gluten de maïs, riz, protéines de volaille déshydratées, maïs, concentré de protéines de pois, gluten de blé, fibres de blé, lapin (4 %), sels minéraux, oeufs déshydratés, graisse animale, huile de poisson, hydrolysat, levures. Constituants analytiques : Protéines : 41% ; Teneur en matières grasses : 12%;Cendres brutes : 7%;Cellulose brute : 4,5%; Oméga - 6 : 2,0%;Omega - 3 : 0,5%.',
 'additifs' => 'UI/kg: Vit A: 35 000; Vit D3: 1 100; Vit E: 900; mg/kg: Vit C: 160; Fe(E1): 60; I(E2): 1,9; Cu(E4): 12; Mn(E5): 15; Zn(E6): 145; Se(E8): 0,12. Avec antioxygènes.',
 'plusproduit' => 'Le bon goût de la dinde associée au riz apporte à ces croquettes une vraie explosion de saveurs en bouche',
 ];
?>
        <div class ="mt-3 ms-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                  <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                  <li class="breadcrumb-item"><a href="categorie.php">Alimentations pour Chats</a></li>
                  <li class="breadcrumb-item"><a href="boutique.php">Croquettes pour Chats</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Purina Pro Plan Sterilized Adult</li>
                </ol>
              </nav>
            </div>
        <div class="container shadow-lg rounded my-4" data-aos="fade-right" data-aos-duration="1000">
            <div class="row">
                <!-- align 12 colonnes -->
                <div class="col-lg-6 col-md-11 col-sm-12 py-3">
                    <div>
                        <img src="images/categ1.jpg" alt="image_produit" class="img-fluid JeanMarc" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-11 col-sm-12 ">
                    <h2 class="text-center"><?php echo($array['title'])?></h2>
                    <h3 class="text-center product-title"><?php echo($array['subtitle'])?></h3>
                   
                    <div class = "mt-3">
                        <div class="height-100 container d-flex justify-content-center align-items-center">
                           
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="ratings px-3 py-3"> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star"></i> </div>
                                    <h5 class="review-count py-3"><?php echo($array['review'])?> Reviews</h5>
                                </div>
                            
                        </div>
                        <p class = "mt-3"><?php echo($array['presentation'])?>
                            <h4 class="text-center fw-bold mt-5 mb-1"><?php echo($array['price'])?>€</h4>
                           <div class ="col-12 justify-content-center"><h5 class=" fw-bold mt-3 mb-1">Quantité: </h5><select name="quantité" class="px-2 py-2 ">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                          </select> </div>
                         
                            <a href ="panier.php"><button type="button"
                            class="btn btn-primary btn pink mx-auto mt-2 mb-5 d-flex">Ajouter au
                            panier</button></a> 
                        </p>
                        <div class="row justify-content-end mt-5 pt-5">
                            <div class="col-lg-3 col-md-6 col-sm-6 align-self-end ps-4 mt-5 pt-5 ms-4">
                                <a href="#" class="mt-5 lienproduit">En savoir
                                    plus...</a>
                            </div>
                    </div>
                </div>
        </section>

        <!--ICI DESCRIPTION DU PRODUIT QUI SERA CACHE-->

        <section class ="hide">

            <div class="container shadow-lg rounded my-4" data-aos="fade-right" data-aos-duration="1000">
                <div class="row">
                    <h3 class ="productdescribe product-title mt-3">Composition: </h3>
                    <p class = "mt-3"><?php echo($array['composition'])?></p>
                    <h3 class ="productdescribe product-title">Additifs nutritionnels: </h3>
                    <p class = "mt-3"><?php echo($array['additifs'])?></p>
                    <h3 class ="productdescribe product-title">Plus produit: </h3>
                    <ul class = "ps-5 mt-3">
                        <li class ="blueproduct"><?php echo($array['plusproduit'])?></li>
                        <li class ="blueproduct">Pro Plan est une marque réputée, qui a déjà séduit de nombreux propriétaires de chats en France.</li>
                        <li class ="blueproduct">Un conditionnement optimum qui conserve toute la saveur des croquettes.</li>
                    </ul>
                </div>
             </div>

        </section>
        <?php
include('parts/footer.php');
?>
</body>

</html>