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
    <!-- ici SLIDER-->
    <section class="mb-3 slider shadow-lg">
        <!--Mettre une image de fond qui encadre la bannière-->
        <div class="container-fluid-lg-12">
            <div
                    id="carouselExampleControls"
                    class="carousel slide"
                    data-bs-ride="carousel"
            >
                <div class="carousel-inner">
                    <div class="carousel-item active zoom">
                        <a href="#"
                        ><img
                                    src="images/banniere.jpg"
                                    alt="DogX"
                                    class="d-block w-100 img-fluid"
                                    alt="..."
                                    height="400"
                            /></a>
                        <div class="carousel-content">
                            <button
                                    type="button"
                                    class="btn btn-primary btn-lg pink mb-2 d-flex"
                            >
                                En savoir plus
                            </button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                        ><img
                                    src="images/banniere.jpg"
                                    alt="DogX"
                                    class="d-block w-100 img-fluid"
                                    alt="..."
                                    height="400"
                            /></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                        ><img
                                    src="images/banniere.jpg"
                                    alt="DogX"
                                    class="d-block w-100 img-fluid"
                                    alt="..."
                                    height="400"
                            /></a>
                    </div>
                </div>

                <button
                        class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev"
                >
              <span
                      class="carousel-control-prev-icon"
                      aria-hidden="true"
              ></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                        class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselExampleControls"
                        data-bs-slide="next"
                >
              <span
                      class="carousel-control-next-icon"
                      aria-hidden="true"
              ></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- ici RECOMMANDATIONS-->
    <section class="my-5 py-4">
        <!--Mettre une image de fond en background qui encadre les recommandations-->
        <div
                class="container shadow-lg rounded"
                data-aos="fade-right"
                data-aos-duration="1000"
        >
            <div class="row">
                <!-- align 12 colonnes -->

                <div class="col-lg-12 col-sm-12">
                    <div class="row">
                        <h2 class="text-center mb-4">Nos Recommandations</h2>
                        <div class="col-lg-3 col-md-6 col-sm-12 px-4 pb-2">
                            <div>
                                <a href="#" class="zoom">
                                    <img
                                            src="images/product_1.jpg"
                                            alt="img_product"
                                            class="img-fluid rounded mx-auto d-flex product"
                                    />
                                </a>
                                <h4 class="text-center fw-bold">Royal Canin Mini 5kg</h4>
                                <p class="text-center">999 999 999€</p>
                                <button
                                        type="button"
                                        class="
                        btn btn-primary btn-lg
                        pink
                        recom
                        mx-5
                        mb-2
                        px-3
                        d-flex
                      "
                                >
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 px-4 pb-2">
                            <div>
                                <a href="#" class="zoom">
                                    <img
                                            src="images/product_1.jpg"
                                            alt="img_product"
                                            class="img-fluid rounded mx-auto d-flex product"
                                    />
                                </a>
                                <h4 class="text-center fw-bold">Royal Canin Mini 5kg</h4>
                                <p class="text-center">999 999 999€</p>
                                <a href="produit.php">
                                    <button
                                            type="button"
                                            class="
                        btn btn-primary btn-lg
                        pink
                        recom
                        mx-5
                        mb-2
                        px-3
                        d-flex
                      "
                                    >
                                        Ajouter au panier
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 px-4 pb-2">
                            <div>
                                <a href="#" class="zoom">
                                    <img
                                            src="images/product_2.jpg"
                                            alt="img_product"
                                            class="img-fluid rounded mx-auto d-flex product"
                                    />
                                </a>
                                <h4 class="text-center fw-bold">Cage à Oiseau PIAFABEC</h4>
                                <p class="text-center">999 999 999€</p>
                                <button
                                        type="button"
                                        class="
                        btn btn-primary btn-lg
                        pink
                        recom
                        mx-5
                        mb-2
                        px-3
                        d-flex
                      "
                                >
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 px-4 pb-2">
                            <div>
                                <a href="#" class="zoom">
                                    <img
                                            src="images/product_3.jpg"
                                            alt="img_product"
                                            class="img-fluid rounded mx-auto d-flex product"
                                    />
                                </a>
                                <h4 class="text-center fw-bold">
                                    Whiskas - Les Irrésistibles
                                </h4>
                                <p class="text-center">999 999 999€</p>
                                <button
                                        type="button"
                                        class="
                        btn btn-primary btn-lg
                        pink
                        recom
                        mx-5
                        mb-2
                        px-3
                        d-flex
                      "
                                >
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ici QSN-->
    <section class="mt-3 mb-5">
        <div
                class="container shadow-lg rounded"
                data-aos="fade-right"
                data-aos-duration="1000"
        >
            <div class="row">
                <!-- align 12 colonnes -->
                <div class="col-lg-6 col-md-11 col-sm-12 py-3">
                    <div>
                        <img
                                src="images/JeanMarc.jpg"
                                alt="image_qsn"
                                class="img-fluid rounded-circle JeanMarc"
                        />
                    </div>
                </div>
                <div class="col-lg-6 col-md-11 col-sm-12">
                    <h2>Qui sommes-nous ?</h2>
                    <div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                            condimentum varius magna, a cursus libero molestie egestas.
                            Donec tempus ante lectus. Quisque venenatis ultrices nibh, a
                            fringilla mi sagittis at. Nullam convallis elementum mauris
                            quis finibus. Fusce tincidunt rutrum magna, id semper ipsum
                            placerat nec. Suspendisse potenti. In porta erat et orci
                            laoreet imperdiet. Etiam eu iaculis leo. Cras massa elit,
                            egestas et aliquet et, pretium vitae mauris. Nam non molestie
                            metus, nec porttitor dui. Donec tempor mi a odio pretium, at
                            imperdiet risus sagittis. Phasellus vulputate mauris ut
                            accumsan finibus. Pellentesque sagittis magna vitae nulla
                            posuere, id egestas arcu gravida. Pellentesque quis massa nec
                            felis aliquam sollicitudin. Sed mattis dolor turpis, sed
                            rutrum lacus auctor sit amet. Vestibulum accumsan arcu
                            vulputate, elementum ante id, posuere justo.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                            condimentum varius magna, a cursus libero molestie egestas.
                            Donec tempus ante lectus. Quisque venenatis ultrices nibh, a
                            fringilla mi sagittis at. Nullam convallis elementum mauris
                            quis finibus. Fusce tincidunt rutrum magna, id semper ipsum
                            placerat nec. Suspendisse potenti. In porta erat et orci
                            laoreet imperdiet. Etiam eu iaculis leo. Cras massa elit,
                            egestas et aliquet et, pretium vitae mauris. Nam non molestie
                            metus, nec porttitor dui. Donec tempor mi a odio pretium, at
                            imperdiet risus sagittis. Phasellus vulputate mauris ut
                            accumsan finibus. Pellentesque sagittis magna vitae nulla
                            posuere, id egestas arcu gravida. Pellentesque quis massa nec
                            felis aliquam sollicitudin. Sed mattis dolor turpis, sed
                            rutrum lacus auctor sit amet. Vestibulum accumsan arcu
                            vulputate, elementum ante id, posuere justo.
                        </p>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-3 col-md-6 col-sm-6 align-self-end ps-4 ms-5">
                        <button
                                type="button"
                                class="btn btn-primary btn-lg pink qsn ms-5 my-5 px-2"
                        >
                            En savoir plus
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ici Réassurance-->
    <section class="my-5 py-4 bg-perso shadow-lg">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
                <!-- align 12 colonnes -->

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div>
                        <h3 class="text-center">
                            Livraison gratuite en 48h dans toute la France Métropolitaine
                        </h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div>
                        <h3 class="text-center">Paiement sécurisé</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div>
                        <h3 class="text-center">
                            Satisfait ou remboursé <br/>
                            sous 30 jours !
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ici Newsletter-->
    <section class="my-3">
        <div class="container py-3" data-aos="fade-down" data-aos-duration="1000">
            <div class="row">
                <!-- align 12 colonnes -->
                <div class="col-lg-2 col-sm-6">
                    <!--DIV VIDE-->
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div>
                        <div class="card w-100 mt-5">
                            <h4 class="text-center mt-5">
                                Inscrivez-vous à notre Newsletter, pour ne rien manquer de
                                nos offres!
                            </h4>
                            <form onclick="return false;" class="mx-auto my-4">
                                <div class="btn-group">
                                    <input
                                            type="mail"
                                            name="name"
                                            class="form-control mx-auto"
                                            required="required"
                                    />
                                    <a href="#" class="btn btn bg-perso newsbutton text-white"
                                    >Envoyer</a
                                    >
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <!--DIV VIDE-->
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