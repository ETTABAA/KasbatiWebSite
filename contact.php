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
    <title>Document</title>
</head>
<body>
    <!--navbar-->
    <header >
      <nav class="navbar fixed-top navbar-expand-lg bg-light">
          <div class="container-lg">
            <a class="navbar-brand ms-2 ms-lg-0" href="index.php">
              <img src="assets/img/png2.png" alt="Kasbati" width="130px" height="40vh">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item px-4 text-capitalize fs-5 fw-semibold text-center">
                  <a class="nav-link text-dark" aria-current="page" href="index.php">Acceuil <span class="position-absolute top-100 start-0"></span></a>
                </li>
                <li class="nav-item px-4 text-capitalize fs-5 fw-semibold text-center">
                  <a class="nav-link text-dark position-relative" href="index.php">à propos <span class="position-absolute top-100 start-0"></span></a>
                </li>
                <li class="nav-item px-4 text-capitalize fs-5 fw-semibold text-center">
                  <a class="nav-link text-dark" href="index.php">Nos projets <span class="position-absolute top-100 start-0"></span></a>
                </li>
                <li class="nav-item px-4 text-capitalize fs-5 fw-semibold text-center">
                  <a class="nav-link text-dark" href="contact.php">Contact <span class="position-absolute top-100 start-0"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
  </header>    
  <section id="contact">
        <div class="entet position-relative">
            <img src="assets/img/carousel2.jpg" alt="" srcset="">
            <div class="back position-absolute top-0 start-0">
                <div class="title d-flex justify-content-center align-items-center">
                    <h1 class="text-white">Contactez-Nous</h1>
                </div>
            </div>
        </div>
        <div class="container-xl">
          <div class="contactinfo container-lg d-flex flex-column flex-xl-row align-itemes-between align-items-lg-center">
              <div  class="form pe-3">
                <form id="myForm" class="d-flex flex-column justify-content-around" method="post" action="envoyer_email.php">
                  <div class="d-flex mb-2">
                    <div class="name me-2 w-100">
                      <label for="nom" class="form-label text-dark fw-bold fs-5">Nom</label>
                      <input autocomplete="off" type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                    <div class="prenom ms-2 w-100">
                        <label for="prenom" class="form-label text-dark fw-bold fs-5">Prénom</label>
                        <input autocomplete="off" type="text" id="prenom" name="prenom" class="form-control" required>
                    </div>
                  </div>
                  <div class="mb-2">
                      <label for="mail" class="form-label text-dark fw-bold fs-5">Adresse mail</label>
                      <input autocomplete="off" type="mail" class="form-control" id="mail" name="mail" required>
                      <div id="mailmsg" class="isnotvalid d-none">
                        <p class="text-danger fw-semibold fs-6">Veuillez saisir une adresse e-mail valide !</p>
                      </div>
                  </div>
                  <div class="mb-2">
                      <label for="msg" class="form-label text-dark fw-bold fs-5">Veuillez écrire votre message</label>
                      <textarea id="msg" class="form-control" name="msg" cols="30" rows="5" required></textarea>
                  </div>
                  <div class="mb-2">
                      <button type="submit" class="btn mt-1"><span class="btnspan"></span>Envoyé</button>
                  </div>
                </form>
              </div>
              <div class="info d-flex flex-column justify-content-evenly p-4 my-5">
                <ul class="ulinfo d-flex flex-column justify-content-evenly p-0">
                            <h1 class="my-5 text-center">Contact Info</h1>
                            <li class="mb-5">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <span>Casablanca, Maroc</span>
                            </li>
                            
                            <li class="mb-5">
                                <span><i class="fa-solid fa-envelope"></i></span>
                                <span>stekasbati@outlook.com</span>
                            </li>
                            <li class="mb-3">
                                <span><i class="fa-solid fa-phone"></i></span>
                                <span>(+212) 6 61 74 20 73</span>
                            </li>
                </ul>
                <ul class="sci d-flex align-items-center justify-content-around p-0 my-3 ">
                            <li><a href=""><i class="fa-brands fa-facebook fa-2x"></i></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram fa-2x"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter fa-2x"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-whatsapp fa-2x"></i></a></li>
                </ul>
              </div>
          </div>
          <div class="map my-4 d-none">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.0416993455497!2d-7.851446825881366!3d33.42215718921081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda883a27aea2653%3A0x599838c90aab8a45!2sHay%20Ezzahra%2C%20Had%20Soualem!5e0!3m2!1sfr!2sma!4v1647954205365!5m2!1sfr!2sma"style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
    </section>
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

      <!-- mon script -->
      <script src="assets/js/test.js"></script>
</body>
</html>