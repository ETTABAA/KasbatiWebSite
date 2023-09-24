<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="keywords, moteur de recherche, ....">
    <meta name="description" content="description de la page web">
    <meta name="author" content="John Doe">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- my CSS -->
    <link rel="stylesheet" href="assets/sass/global.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!---->
    <link rel="stylesheet" href="/path/to/flickity.css" media="screen">
    <!-- font icone-->
    <script src="https://kit.fontawesome.com/2860646ad5.js" crossorigin="anonymous"></script>

    <title>Home</title>
</head>
<body>
    <!--navbar-->
    <header>
        <nav class="navbar fixed-top navbar-expand-lg bg-light">
          <div class="container-lg">
            <a class="navbar-brand ms-2 ms-lg-0" href="index.php">
                <img class="p-0" src="assets/img/png2.png" alt="Kasbati" width="130px" height="40vh">
            </a>
            <button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item px-4 text-capitalize fs-5 fw-semibold text-center">
                    <a class="nav-link text-dark" aria-current="page" href="index.php">
                      Acceuil 
                      <span class="position-absolute top-100 start-0"></span>
                    </a>
                  </li>
                  <li class="nav-item px-4 text-capitalize fs-5 fw-semibold text-center">
                    <a class="nav-link text-dark position-relative" href="#about">
                      à propos 
                      <span class="position-absolute top-100 start-0"></span>
                    </a>
                  </li>
                  <li class="nav-item px-4 text-capitalize fs-5 fw-semibold text-center">
                    <a class="nav-link text-dark" href="#projets">Nos projets <span class="position-absolute top-100 start-0"></span></a>
                  </li>
                  <li class="nav-item px-4 text-capitalize fs-5 fw-semibold text-center">
                    <a class="nav-link text-dark" href="contact.php">Contact <span class="position-absolute top-100 start-0"></span></a>
                  </li>
                </ul>
            </div>
          </div>
        </nav>
    </header>
    <!-- carousel -->
    <div class="caroussel">
      <div id="carouselExampleIndicators" class="carousel slide caroussel" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active d-none" aria-current="true" aria-label="Slide 1"></button>
          <button class="d-none" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button class="d-none" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner caroussel">
          <div class="carousel-item  active">
            <img src="assets/img/carousel2.jpg" class="d-block w-100" alt="...">
            <div class="title position-absolute top-0 start-0 mx-auto">
              <div class="text d-flex position-relative flex-column justify-content-center align-items-center text-white h-100">
                <h1 class="mx-auto text-center">Bienvenue chez <span class="d-none text-warning">KASBATI</span></h1>
                <span class="text-warning mx-auto">KASBATI</span>
                <div class="lor d-flex align-items-center">
                  <div class="line ms-1 bg-warning"></div>
                  <div class=" desc ms-3 fs-4">Avec vous, construisons l'avenir...</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- who -->
    <div class="who container mb-4">
        <div class="whoText text-center mx-auto d-flex flex-column align-items-center justify-content-center">
          <span class="text-secondary">Ce que nous faisons</span>
          <h1 class="mt-2 mb-4 fs-2 text-uppercase px-1 px-md-3">Accompagnement de confiance pour vos projets</h1>
          <p class="mb-5 fs-5 text-secondary px-4">
            KASBATI a développé ses compétences au cours de longues années d'expertise. Exerçant depuis plus de 10 ans, l’entreprise est au service des particuliers et des professionnels. Devenue une référence dans le domaine du BTP. Nous mettons notre savoir-faire à votre disposition pour concevoir des travaux durables, à la sécurité et à la consommation responsables.
            La satisfaction de nos clients nous a permis de progresser dans un contexte ouvert et concurrentiel.
            Demandez des devis gratuits pour vos projets de travaux …             
          </p>
          <button type="submit" class="btn btn-lg"><span class="btnspan"></span>Contactez-Nous</button>
        </div>
    </div>
    <!-- statistique -->
      <div class="container-fluid kasbatiStat  d-flex flex-column flex-md-wrap align-items-center justify-content-evenly mb-4">
      <div class="kasbatiTitle d-flex flex-column justify-content-center ms-3 text-center">
        <h1 class="text-warning mb-0">KASBATI</h1>
        <p>Avec vous, construisons pour l'avenir...</p>
      </div>
      <span class="bg-warning span1 d-none d-md-block"></span>
      <span class="bg-warning span2 d-md-none"></span>
      <div class="kasbatiNum d-flex justify-content-around align-items-center fs-6">
        <div class="d-flex flex-column align-items-center mx-2">
          <h4 class="text-bold text-center">80</h4>
          <h5 class="text-center fs-6">Collaborateurs</h5>
        </div>
        <div class="d-flex flex-column align-items-center mx-2">
          <h4 class="text-center">11</h4>
          <h5 class="text-center fs-6">Années d'experience</h5>
        </div>
        <div class="d-flex flex-column align-items-center mx-2">
          <h4 class="text-center">3</h4>
          <h5 class="text-center fs-6">projets réaliser</h5>
        </div>
      </div>
      </div>
    <!-- About us -->
    <div id="about" class="about container d-flex flex-column flex-lg-row justify-content-center align-items-center mb-4">
      <div class="aboutImg position-relative">
        <div class="opacit position-absolute"></div>
        <img src="assets/img/carousel3.jpg" alt="" srcset="">
        <div class="cadre position-absolute d-none d-lg-block"></div>
      </div>
      <div class="aboutText1 mx-auto mx-lg-0 p-5 d-flex justify-content-center align-items-center flex-column">
        <h1 class="mb-4 fs-1 text-uppercase">Qui somme nous ?</h1>
        <p class="text-secondary text-center">
          KASBATI intervient dans le secteur du BTP depuis 2012, la société opère sur tout le territoire marocain. Notre équipe offre ses services dans tout les départements du royaume, nous nous spécialisons dans les travaux qui nécessitent l’expertise de professionnels en bâtiment. Le bon déroulement de votre chantier repose sur les compétences et le sérieux de l’équipe en charge. Sur le long terme, un entrepreneur de confiance sera aussi le premier garant de la sécurité et la qualité de vos projets.
        </p>
        <button class="btn " type="button">Savoir plus</button>
      </div>
      
      </div>
    </div>
    <!-- Nos projets-->
    <div id="projets" class="projets">
      <div class="container-fluid py-5 position-relative">
        <div class="cards d-flex flex-column flex-md-row align-items-center justify-content-evenly">
          <div class="card my-4 pb-2">
            <div class="img">
              <img src="assets/img/original-75E4B1CD-B2F9-4E51-B740-F670B3DC2C0C.jpeg.jpeg" alt="" srcset="" class="img img-fluid">
            </div>
            <div class="text d-flex flex-column justify-content-center align-items-center px-4">
              <h3 class="text-center text-warning text-uppercase">carlton house</h3>
              <p class="text-center text-secondary my-2">
                Projet CARLTON HOUSE 2 à CASABLANCA Un Complexe mixte en 2 sous sols et R+7 étage .
              </p>
              <button class="btn btn-outline-dark mt-3" type="button">Voir plus</button>
            </div>
          </div>
          <div class="card my-4 pb-2">
            <div class="img">
              <img src="assets/img/IMG_0085.jpg" alt="" srcset="" class="img img-fluid">
            </div>
            <div class="text d-flex flex-column justify-content-center align-items-center px-4">
              <h3 class="text-center text-warning text-uppercase">La perle de Safi</h3>
              <p class="text-center text-secondary my-2">
                Projet La perle de Safi, 554 logements, 15 commerces et 2 équipements.
              </p>
              <button class="btn btn-outline-dark mt-3" type="button">Voir plus</button>
            </div>
          </div>
          <div class="card my-4 pb-2">
            <div class="img">
              <img src="assets/img/carousel5.jpg" alt="" srcset="" class="img img-fluid">
            </div>
            <div class="text d-flex flex-column justify-content-center align-items-center px-4">
              <h3 class="text-center text-warning">DIVERS PETITS PROJETS</h3>
              <p class="text-center text-secondary my-2">Des écoles, des villas et des logements</p>
              <button class="btn btn-outline-dark mt-3" type="button">Voir plus</button>
            </div>
          </div>
        </div>
        <div class="design2 position-absolute container-fluid bg-warning d-none d-md-block"></div>
        <div class="design2 position-absolute container-fluid bg-warning d-none d-md-block"></div>

      </div>
      </div>
    </div>
    <!-- Nos services-->
    <div class="services container-xl mb-3">
      <div class="d-flex flex-column align-items-center">
        <div class="whoText text-center">
          <span class="text-secondary">Qualité, Sécurité, et développement durable.</span>
          <h1 class="mt-2 mb-4 fs-2 text-uppercase">ENGAGEMENTS</h1>
          <p class="mb-5 fs-5 text-secondary px-4">
            Depuis sa création, KASBATI s’engage auprès de ses clients pour assurer des prestations de qualité. Nous mettons un point d’honneur au respect d'un management de qualité, un recrutement responsable, et la sécurité, des mesures liées au développement durable, une méthodologie rigoureuse.
          </p>
        </div>
        <div class="d-flex flex-column flex-md-row flex-wrap align-items-center justify-content-center">
          <div class="serv text-center position-relative">
            <img src="assets/img/carousel3.jpg" alt="" srcset=""class="img img-fluid">
            <div class="opacit position-absolute"></div>
          </div>
          <div class="serv text-center px-4 d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-eye"></i>
            <h5 class="my-1 py-auto mx-auto fs-6">DEVELOPPEMENT DURABLE</h5>
            <p class="text-secondary fs-6">
              KASBATI à engagé une démarche de construction de qualité pour garantir, de manière officielle selon des référentiels reconnus, la maîtrise des produits, matières et techniques employées dans de bonnes conditions.
            </p>
          </div>
          <div class="serv text-center position-relative d-md-none d-lg-block">
            <img src="assets/img/carousel1.jpg" alt="" srcset="" class="img img-fluid">
            <div class="opacit position-absolute">
            </div>
          </div>
          <div class="serv text-center px-4 d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-user"></i>
            <h5 class="my-1 py-1 mx-auto  fs-6">LE RECRUTEMENT RESPONSABLE</h5>
            <p class="text-secondary fs-6">
              La société s’engage de manière forte, dans son rôle d’entreprise, à recruter en insertion des équipes compétentes. En collaboration avec les partenaires d’insertions, la priorité est mise sur un recrutement responsable, local et méthodique.
            </p>
          </div>
          <div class="serv text-center position-relative d-none d-md-block d-lg-none">
            <img src="assets/img/carousel1.jpg" alt="" srcset="" class="img img-fluid">
            <div class="opacit position-absolute">
            </div>
          </div>
          <div class="serv text-center position-relative">
            <img src="assets/img/carousel2.jpg" alt="" srcset="" class="img img-fluid">
            <div class="opacit position-absolute">
            </div>
          </div>
          <div class="serv text-center px-4 d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-truck-fast"></i>
            <h5 class="my-1 py-1 mx-auto fs-6">LE MANAGEMENT DE LA QUALITÉ</h5>
            <p class="text-secondary fs-6">
                  Depuis le stade de l’étude jusqu’à la réalisation, la qualité de l’ouvrage construit et la qualité du service rendu restent les objectifs à atteindre par KASBATI.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <footer class="d-flex justify-content-center align-items-center mt-3 py-2">
      <div class="container containers px-4 py-5 px-0 d-flex flex-row flex-wrap flex-lg-nowrap justify-content-center">
        <div class="kasInfos col-12 col-lg-4 mx-auto mx-lg-0">
          <img src="assets/img/white png2.png" alt="" srcset="" width="150px" height="60px">
          <p class="mt-3 pe-4">
            KASBATI intervient dans le secteur du BTP depuis 2012, la société opère sur tout le territoire marocain.
          </p>
        </div>
        <div class="bureau col-12 col-md-4 col-lg-3 ms-2 mx-lg-0 d-flex flex-column justify-content-center">
          <p><i class="fa-solid fa-location-dot fa-l me-3"></i> casablanca, Maroc</p>
          <p><i class="fa-solid fa-phone fa-l me-3"></i>(+212) 6 61 74 20 73</p>
          <p><i class="fa-solid fa-envelope fa-l me-3"></i>stekasbati@outlook.com</p>
        </div>
        <div class="page col-12 col-md-3 col-lg-2">
          <h3 class="mb-4 text-capitalize">Pages</h3>
          <p>
            <a class="nav-link text-white" aria-current="page" href="#">Acceuil </a>
          </p>
          <p>
            <a class="nav-link text-white position-relative" href="#">à propos</a>
          </p>
          <p>
            <a class="nav-link text-white" href="#">Nos projets</a>
          </p>
          <p>
            <a class="nav-link text-white" href="#">Contact</a>
          </p>
        </div>
        <div class="news col-12 col-md-4 col-lg-3">
          <h3 class="mb-4 text-capitalize">Newslettre</h3>
          <form class="form-floating mb-3">
            <input list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
          </form>
          <div class="social-icons">
            <i class=" icon fab fa-facebook-f" aria-hidden="true"></i>
            <i class=" icon fab fa-instagram" aria-hidden="true"></i>
            <i class=" icon fab fa-twitter" aria-hidden="true"></i>
            <i class=" icon fab fa-whatsapp" aria-hidden="true"></i>
        </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap js-->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous" ></script>
    <!---->
    <script src="/path/to/flickity.pkgd.min.js"></script>

    <!-- stats number script-->
    <script src="assets/js/statsNum.js"></script>
</body>
</html>