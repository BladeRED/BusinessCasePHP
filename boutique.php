<!DOCTYPE html>
<html lang="fr">

<?php
include('parts/head.php');
?>

<body class="customscrollbar">

<?php
include('parts/header.php');
?>
<main>

    <section>
        <!--ICI Ma Boutique-->

        <div class="container-fluid shadow-lg rounded" data-aos="fade-right">

            <div class="row">
                <div class="col-lg-3 col-md-3 ">
                    <h2 class="vertical-title text-center mt-3">Croquettes pour Chats</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Marques
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>

                                        <li class="accordeon-marques">Royal Canin</li>
                                        <li class="accordeon-marques">Purina</li>
                                        <li class="accordeon-marques">Friskies</li>
                                        <li class="accordeon-marques">Sheba</li>
                                        <li class="accordeon-marques">Pedigree</li>
                                        <li class="accordeon-marques">Petsafe</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Prix
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <article class="filter-group">
                                        <header class="card-header">
                                            <a href="#" data-toggle="collapse" data-target="#collapse_3"
                                               aria-expanded="true" class="">
                                                </i>
                                                <h6 class="title">Prix </h6>
                                            </a>
                                        </header>
                                        <div class="filter-content collapse show" id="collapse_3">
                                            <div class="card-body">
                                                <input type="range" class="custom-range" min="0" max="100" name="">
                                                <div class="form-row">

                                                </div> <!-- form-row.// -->
                                                <button
                                                        class="btn btn-primary btn pink mx-auto d-flex accordbouton">
                                                    Appliquer
                                                </button>
                                            </div><!-- card-body.// -->
                                        </div>
                                    </article> <!-- filter-group .// -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 my-3">
                            <div>
                                <a href="#" class="zoom">
                                    <img src="images/categ1.jpg" alt="img_product"
                                         class="img-fluid rounded mx-auto d-flex categorie">
                                </a>
                                <h5 class="text-center fw-bold my-3">Purina Pro Plan Sterilised</h5>
                                <h6 class="text-center fw-bold my-3">Adult Dinde 3kg</h6>
                                <p class="text-center">999 999 999???</p>
                                <a href="panier.php">
                                    <button type="button" class="btn btn-primary btn pink mx-auto d-flex">Ajouter au
                                        panier
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 my-3">
                            <div>
                                <a href="#" class="zoom">
                                    <img src="images/categ1.jpg" alt="img_product"
                                         class="img-fluid rounded mx-auto d-flex categorie">
                                </a>
                                <h5 class="text-center fw-bold my-3">Purina Pro Plan Sterilised</h5>
                                <h6 class="text-center fw-bold my-3">Adult Dinde 3kg</h6>
                                <p class="text-center">999 999 999???</p>
                                <a href="panier.php">
                                    <button type="button" class="btn btn-primary btn pink mx-auto d-block">Ajouter au
                                        panier
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 my-3">
                            <div>
                                <a href="#" class="zoom">
                                    <img src="images/categ1.jpg" alt="img_product"
                                         class="img-fluid rounded mx-auto d-flex categorie">
                                </a>
                                <h5 class="text-center fw-bold my-3">Purina Pro Plan Sterilised</h5>
                                <h6 class="text-center fw-bold my-3">Adult Dinde 3kg</h6>
                                <p class="text-center">999 999 999???</p>
                                <a href="panier.php">
                                    <button type="button" class="btn btn-primary btn pink mx-auto d-block">Ajouter au
                                        panier
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 my-3">
                            <div>
                                <a href="#" class="zoom">
                                    <img src="images/categ1.jpg" alt="img_product"
                                         class="img-fluid rounded mx-auto d-flex categorie">
                                </a>
                                <h5 class="text-center fw-bold my-3">Purina Pro Plan Sterilised</h5>
                                <h6 class="text-center fw-bold my-3">Adult Dinde 3kg</h6>
                                <p class="text-center">999 999 999???</p>
                                <a href="panier.php">
                                    <button type="button" class="btn btn-primary btn pink mx-auto d-block">Ajouter au
                                        panier
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 my-3">
                            <div>
                                <a href="#" class="zoom">
                                    <img src="images/categ1.jpg" alt="img_product"
                                         class="img-fluid rounded mx-auto d-flex categorie">
                                </a>
                                <h5 class="text-center fw-bold my-3">Purina Pro Plan Sterilised</h5>
                                <h6 class="text-center fw-bold my-3">Adult Dinde 3kg</h6>
                                <p class="text-center">999 999 999???</p>
                                <a href="panier.php">
                                    <button type="button" class="btn btn-primary btn pink mx-auto d-block">Ajouter au
                                        panier
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 my-3">
                            <div>
                                <a href="#" class="zoom">
                                    <img src="images/categ1.jpg" alt="img_product"
                                         class="img-fluid rounded mx-auto d-flex categorie">
                                </a>
                                <h5 class="text-center fw-bold my-3">Purina Pro Plan Sterilised</h5>
                                <h6 class="text-center fw-bold my-3">Adult Dinde 3kg</h6>
                                <p class="text-center">999 999 999???</p>
                                <a href="panier.php">
                                    <button type="button" class="btn btn-primary btn pink mx-auto d-block">Ajouter au
                                        panier
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 my-3">
                            <div>
                                <a href="#" class="zoom">
                                    <img src="images/categ1.jpg" alt="img_product"
                                         class="img-fluid rounded mx-auto d-flex categorie">
                                </a>
                                <h5 class="text-center fw-bold my-3">Purina Pro Plan Sterilised</h5>
                                <h6 class="text-center fw-bold my-3">Adult Dinde 3kg</h6>
                                <p class="text-center">999 999 999???</p>
                                <a href="panier.php">
                                    <button type="button" class="btn btn-primary btn pink mx-auto d-block">Ajouter au
                                        panier
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 my-3">
                            <div>
                                <a href="#" class="zoom">
                                    <img src="images/categ1.jpg" alt="img_product"
                                         class="img-fluid rounded mx-auto d-flex categorie">
                                </a>
                                <h5 class="text-center fw-bold my-3">Purina Pro Plan Sterilised</h5>
                                <h6 class="text-center fw-bold my-3">Adult Dinde 3kg</h6>
                                <p class="text-center">999 999 999???</p>
                                <a href="panier.php">
                                    <button type="button" class="btn btn-primary btn pink mx-auto d-block">Ajouter au
                                        panier
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

</main>

<?php
include('parts/footer.php');
?>
</body>

</html>