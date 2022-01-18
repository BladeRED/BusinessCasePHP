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
  </head>

  <body class ="customscrollbar"></body>

    <header>
    
    </header>

    <section>
      <!--BREADCRUMB-->
      <div class ="mt-3 ms-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item active" aria-current="page"><a href ="index.php" class = "bluer">>Retour à l'accueil</a></li>
            </ol>
          </nav>
        </div>
      <div class="container shadow-lg rounded my-4 login">
        <div class="row">
          <div class ="justify-content-center"><img
          src="images/logochat.png"
          alt="logo"
          class="rounded mx-auto d-block"
        />
          <h2 class ="text-center my-5">Bienvenue Monsieur Capard</h2>
          <form class = "mx-5">
            <div class="form-group my-3 mx-5 px-5">
              <div class ="mb-4">
              <h6>Saisissez vos informations de connexions</h6></div>
              <label for="exampleInputEmail1">Adresse Email: </label>
              <input
                type="email"
                class="form-control log mx-auto"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter email"
              />
            </div>
            <div class="form-group mt-3 mb-4 mx-5 px-5">
              <label for="exampleInputPassword1">Mot de passe: </label>
              <input
                type="password"
                class="form-control log mx-auto "
                id="exampleInputPassword1"
                placeholder="Password"
              />
            </div>
            <button
            type="button"
            class="btn btn-primary btn-lg pink mx-auto mt-5 mb-2 px-5 d-flex justify-content-center "
          >
            Valider
          </button>
          </form>
        </div>
      </div>
    </section>

    <footer class="shadow-lg">
    
    </footer>

    <!--SCRIPT JS A LANCER EN FIN DU CODE-->
    <script src="script.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
