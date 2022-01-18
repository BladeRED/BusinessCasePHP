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
    <!--Bootstrap icons-->
    <link rel="stylesheet" href="font/bootstrap-icons.css">
  </head>

  <?php 

  $isConnected = true;

  if ($isConnected == false){
  header('Location: connexion.php');
  exit();
  };
  ?>

  <body class="customscrollbar">
    <header>
      <!--Ici mon header-->
      <section>
        <!--Mettre une image de fond en background centré sous la barre de recherche-->

        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-4">
              <div class="ps-3">
                <img
                  src="images/logochat.png"
                  alt="logo"
                  class="img-fluid rounded mx-auto d-block"
                />
              </div>
            </div>

            <div class="col-lg-5 col-md-6 col-sm-8 px-5 my-auto">
              <form onclick="return false;" class="px-5 mx-auto">
                <div class="btn-group w-100">
                  <input
                    type="text"
                    name="name"
                    class="form-control px-5 w-100"
                    required="required"
                  />
                  <a href="#" class="btn bg-perso2 loupe text-white"
                    ><i class="fas fa-search"></i
                  ></a>
                </div>
              </form>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-12">
              <div>
                <div class="row">
                  <div class="col-lg-6 col-sm-6 text-center cartlog">
                    <a href="#">
                      <img
                        src="images/panier.png"
                        alt="Mon Panier"
                        class="img-fluid rounded mx-auto my-1 d-block"
                      />
                      <p>Mon Panier</p>
                    </a>
                  </div>

                  <div class="col-lg-6 col-sm-6 text-center cartlog">
                    <a href="#">
                      <img
                        src="images/account_access.png"
                        alt="Connexion"
                        class="img-fluid rounded mx-auto my-1 d-block"
                      />
                      <p>Connexion</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Ici mon menu navigation-->
      <div class="container-fluid bg-perso2 bg-gradient">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav w-100 d-flex justify-content-around">
                <li class="nav-item">
                  <a
                    class="
                      nav-link
                      dropdown-toggle
                      active
                      bg-button
                      text-white
                      px-5
                    "
                    aria-current="page"
                    href="#"
                    >Accueil <i class="fas fa-home"></i
                  ></a>
                </li>

                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle text-white"
                    href="#"
                    id="navbarDropdown1"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Chiens <i class="fas fa-dog"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                    <li>
                      <a class="dropdown-item line" href="#"
                        >Alimentation pour Chiens</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item line" href="#"
                        >Accessoires pour Chiens</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item line" href="#"
                        >Hygiène et soins</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item line" href="#">Transport</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle text-white"
                    href="#"
                    id="navbarDropdown2"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Chats <i class="fas fa-cat"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                    <li>
                      <a class="dropdown-item line" href="#"
                        >Alimentation pour Chats</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item line" href="#"
                        >Accessoires pour Chats</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item line" href="#"
                        >Hygiène et soins</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item line" href="#">Transport</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle text-white"
                    href="#"
                    id="navbarDropdown3"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Autres Animaux <i class="fas fa-dove"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                    <li><a class="dropdown-item line" href="#">Rongeurs</a></li>
                    <li><a class="dropdown-item line" href="#">Reptiles</a></li>
                    <li><a class="dropdown-item line" href="#">Poissons</a></li>
                    <li><a class="dropdown-item line" href="#">Autres</a></li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle text-white"
                    href="#"
                    id="navbarDropdown4"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Nos prestations <i class="fas fa-rocket"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                    <li>
                      <a class="dropdown-item line" href="#"
                        >DogX, envoyez votre animal dans l'espace !</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item line" href="#">Toilettage</a>
                    </li>
                    <li>
                      <a class="dropdown-item line" href="#"
                        >Livraisons d'animaux</a
                      >
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle text-white"
                    href="#"
                    id="navbarDropdown5"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Bons Plans <i class="fas fa-percent"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown5">
                    <li>
                      <a class="dropdown-item line" href="#"
                        >Promotions du moment</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item line" href="#">Top marques</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <main>

      <?php 
      
      $LaCouillasse=ini_get("display_errors");
      $firstName = 'Julien';
      $lastName ='RAYNAUD';
      $displayName = $firstName . ' ' . $lastName;

      echo($displayName);

      if($LaCouillasse === '1'){

        echo('Je suis en dev');

      }else{echo('Je suis en prod');};
      
      ?>
      <!-- ici SLIDER-->

      <?php

        $images = [
          [
            'text'=> 'Croquetto di merda',
            'url' => 'https://media.houra.fr/ART-IMG-XL/02/00/3065892900002-7.jpg',
            'alt' => 'Des croquettes au bon goût de caca'
          ], 
            [
            'text'=> 'Croquetto di pipi',
            'url' => 'https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_SY679_.jpg',
            'alt' => 'Des croquettes au bon goût de pipi'
            ],
            [
              'text'=> 'Croquetto di gatto senza la couilla',
              'url' => 'https://shop-cdn-m.mediazs.com/bilder/purina/one/chat/strilis/au/buf/4/400/81601_pla_purinaone_sterilizedrind_1_5kg_4.jpg',
              'alt' => 'Des croquettes pour les chats sans la coucouille'
            ],
        ]

      ?>

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src= "<?php echo($images[0]['url'])?>" class="img-fluid rounded mx-auto d-flex" alt="<?php echo($images[0]['alt'])?>">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p><?php echo($images[0]['text'])?></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo($images[1]['url'])?>" class="d-block w-50" alt="<?php echo($images[1]['alt'])?>">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p><?php echo($images[1]['text'])?></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo($images[2]['url'])?>" class="d-block w-50" alt="<?php echo($images[2]['alt'])?>">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p><?php echo($images[2]['text'])?></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

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

      <div class="container">  

      <?php 
            $images = [
                [
                    'text' => 'Croquettes Pedigree',
                    'url' => 'images/produit-1/01.jpg',
                    'alt' => 'Croquettes',
                    'note' => '3',
                    'flash' => false,
                ],
                [
                    'text' => 'Royal canin',
                    'url' => 'images/produit-2/02.jpg',
                    'alt' => 'Royal canin',
                    'note' => '2',
                    'flash' => true,
                ],
                [
                    'text' => 'Pâté Almo nature',
                    'url' => 'images/produit-4/04-1.jpg',
                    'alt' => 'Pâté',
                    'note' => '4',
                    'flash' => false,
                ],
            ]
        ?>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Produit</th>
                <th scope="col">Image</th>
                <th scope="col">Note</th>
                <th scope="col">Produit Flash</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach($images as $key => $image){
                    echo("<tr>
                            <th scope=\"row\">". $key ."</th>

                            <td>".$images[$key]['text']."</td>
                            
                            <td>
                                <img 
                                src=".$images[$key]['url']." 
                                class=\"  img-fluid w100\">
                            </td>");
                    
                            switch ($images[$key]['note']){
                                case ($images[$key]['note'] == 0):
                                    echo("<td>
                                    <i class=\"bi bi-star\"></i>
                                    <i class=\"bi bi-star\"></i>
                                    <i class=\"bi bi-star\"></i>
                                    <i class=\"bi bi-star\"></i>
                                    <i class=\"bi bi-star\"></i>
                                    </td>");
                                    break;
                                case ($images[$key]['note'] == 1):
                                    echo("<td>
                                    <i class=\"bi bi-star-fill\"></i>
                                    <i class=\"bi bi-star\"></i>
                                    <i class=\"bi bi-star\"></i>
                                    <i class=\"bi bi-star\"></i>
                                    <i class=\"bi bi-star\"></i>
                                    </td>");
                                    break;
                                case ($images[$key]['note'] == 2):
                                    echo("<td>
                                    <i class=\"bi bi-star-fill\"></i>
                                    <i class=\"bi bi-star-fill\"></i>
                                    <i class=\"bi bi-star\"></i>
                                    <i class=\"bi bi-star\"></i>
                                    <i class=\"bi bi-star\"></i>
                                    </td>");
                                    break;
                                case ($images[$key]['note'] == 3):
                                    echo("<td>
                                    <i class=\"bi bi-star-fill\"></i>
                                    <i class=\"bi bi-star-fill\"></i>
                                    <i class=\"bi bi-star-fill\"></i>
                                    <i class=\"bi bi-star\"></i>
                                    <i class=\"bi bi-star\"></i>
                                    </td>");
                                    break;
                                case ($images[$key]['note'] == 4):
                                    echo("<td>
                                    <i class=\"bi bi-star-fill\"></i>
                                    <i class=\"bi bi-star-fill\"></i>
                                    <i class=\"bi bi-star-fill\"></i>
                                    <i class=\"bi bi-star-fill\"></i>
                                    <i class=\"bi bi-star\"></i>
                                    </td>");
                                    break;
                                case ($images[$key]['note'] == 5):
                                    echo("<td>
                                    <i class=\"bi bi-star-fill\"></i>
                                    <i class=\"bi bi-star-fill\"></i>
                                    <i class=\"bi bi-star-fill\"></i>
                                    <i class=\"bi bi-star-fill\"></i>
                                    <i class=\"bi bi-star-fill\"></i>
                                    </td>");
                                    break;

                                default:
                                    echo("<td>
                                        </td>");
                            };
                            

                    if($images[$key]['flash'] === true){
                            echo("<td><i class=\"bi bi-hand-thumbs-up\"></i></td>");}
                    
                    echo("</tr>");
                    
                }
                ?>
            </tbody>
        </table>
    </div> 

      <!-- ici RECOMMANDATIONS-->
      <section class="my-5 py-4">
      <?php
 $listeProduits= ['Croquettes','Pâtés','Suppositoires','Page de login de Quentin',true,'<div class="ratings px-3 py-3"> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star"></i> </div>'];
 foreach ($listeProduits as $produits){

 echo("<li>$produits</li>");
 
   }
 echo('</ol>');
 
?>

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
                    <h4 class="text-center fw-bold">Royal Canin Mini 5kg 
                      <?php if ($listeProduits[4]){echo('<i class="fas fa-flask"></i>');};?></h4>
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
                  Satisfait ou remboursé <br />
                  sous 30 jours !
                </h3>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ici Newsletter-->
      <section class="my-5">
        <div class="container" data-aos="fade-down" data-aos-duration="1000">
          <div class="row">
            <!-- align 12 colonnes -->
            <div class="col-lg-2 col-sm-6">
              <!--DIV VIDE-->
            </div>
            <div class="col-lg-8 col-sm-12">
              <div>
                <div class="card w-100">
                  <h4>
                    Inscrivez-vous à notre Newsletter, pour ne rien manquer de
                    nos offres!
                  </h4>
                  <form onclick="return false;" class="mx-auto">
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

    <footer class="shadow-lg">
      <!-- ici Infosite -->
      <section class="bg-perso mt-5 px-5">
        <div class="container">
          <div class="row">
            <!-- align 12 colonnes -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <h3 class="text-center">Contacts</h3>
              <div>
                <ul>
                  <li>
                    Réseaux sociaux
                    <span>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-facebook"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                    </span>
                  </li>
                  <li>
                    <a href="https://g.page/compagnonanimal?share"
                      >Notre boutique à Nîmes</a
                    >
                  </li>
                  <li>
                    <a href="mailto:trululu@mail.com"
                      ><i class="far fa-envelope"></i>
                      NadegeVaBosser@anîmesalerie.fr</a
                    >
                  </li>
                  <li>
                    N° de téléphone:
                    <a href="tel:+33711223344">04 56 77 23 43</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
              <h3 class="text-center">Informations</h3>
              <div>
                <ul>
                  <li><a href="#">CGV </a></li>
                  <li><a href="#">Mentions légales</a></li>
                  <li>Foire aux Questions</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <h3 class="text-center">Mon compte</h3>
              <div>
                <ul>
                  <li>Données Personelles</li>
                  <li><a href="#">Mes commandes</a></li>
                  <li>
                    Moyen de paiement
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-paypal"></i>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </footer>
    <!--SCRIPT AOS A LANCER EN FIN DU CODE-->

    <script>
      AOS.init();
    </script>
    <script src="script.js"></script>
  </body>
</html>
