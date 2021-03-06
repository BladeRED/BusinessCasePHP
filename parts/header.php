     <!--SESSION DE CONNEXION -->

<?php
  session_start();
?>

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
                    <a href="panier.php">
                      <img
                        src="images/panier.png"
                        alt="Mon Panier"
                        class="img-fluid rounded mx-auto my-1 d-block"
                      />
                      <p>Mon Panier</p>
                    </a>
                  </div>

                  <div class="col-lg-6 col-sm-6 text-center cartlog">

                      <?php 
                      
                      if($_SESSION["email"] && $_SESSION["firstname"] && $_SESSION["lastname"]){

                       echo('<a href="logout.php">
                        <img
                          src="images/account_access.png"
                          alt="Connexion"
                          class="img-fluid rounded mx-auto my-1 d-block"
                        />

                        <p>Deconnexion</p>');

                      }else{

                        echo('<a href="connexion.php">
                        <img
                          src="images/account_access.png"
                          alt="Connexion"
                          class="img-fluid rounded mx-auto my-1 d-block"
                        />

                        <p>Connexion</p>');

                      }
                      
                      ?>
                      
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
                    href="index.php"
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
                      <a class="dropdown-item line" href="categorie.php"
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
                    <li><a class="dropdown-item line" href="404.php">Autres</a></li>
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