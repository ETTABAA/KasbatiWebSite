<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="keywords, moteur de recherche, ....">
    <meta name="description" content="description de la page web">
    <meta name="author" content="John Doe">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- my CSS -->
    <link rel="stylesheet" href="assets/css/global.css">
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
              <a class="navbar-brand ms-2 ms-lg-0" href="index.html">
                <img src="assets/img/logo.png" alt="Bootstrap" width="120" height="40">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item px-4 text-capitalize fs-5 fw-semibold text-center">
                    <a class="nav-link text-dark" aria-current="page" href="index.html">Acceuil <span class="position-absolute top-100 start-0"></span></a>
                  </li>
                  <li class="nav-item px-4 text-capitalize fs-5 fw-semibold text-center">
                    <a class="nav-link text-dark position-relative" href="A propos.html">à propos <span class="position-absolute top-100 start-0"></span></a>
                  </li>
                  <li class="nav-item px-4 text-capitalize fs-5 fw-semibold text-center">
                    <a class="nav-link text-dark" href="projet.html">Nos projets <span class="position-absolute top-100 start-0"></span></a>
                  </li>
                  <li class="nav-item px-4 text-capitalize fs-5 fw-semibold text-center">
                    <a class="nav-link text-dark" href="contact.html">Contact <span class="position-absolute top-100 start-0"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <!-- footer -->
    <footer class="d-flex justify-content-center align-items-center">
        <div class="container py-5 d-flex justify-content-between">
          <div class="kasInfo">
            <img src="assets/img/LogoCouleur.jpeg" alt="" srcset="">
            <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos fugit accusantium ad nesciunt placeat ratione maxime ipsum ut accusamus temporibus modi eum, non alias sequi cumque tenetur impedit beatae hic. </p>
          </div>
          <div class="bureau">
            <h3 class="mb-4 text-capitalize">bureau</h3>
            <p><i class="fa-solid fa-location-dot fa-l me-3"></i> casablanca, Maroc</p>
            <p><i class="fa-solid fa-phone fa-l me-3"></i>(+212) 6 59 67 45 87</p>
            <p><i class="fa-solid fa-envelope fa-l me-3"></i>omar.ettabaa@gmail.com</p>
          </div>
          <div class="page">
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
          <div class="news">
            <h3 class="mb-4 text-capitalize">Newslettre</h3>
            <form class="form-floating">
              <input list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
              <label for="floatingInputValue" class="text-black">Input with value</label>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div class="social-icons">
              <i class="fab fa-facebook-f" aria-hidden="true"></i>
              <i class="fab fa-instagram" aria-hidden="true"></i>
              <i class="fab fa-twitter" aria-hidden="true"></i>
              <i class="fab fa-whatsapp" aria-hidden="true"></i>
          </div>
          </div>
        </div>
      </footer>
  
      <!-- Bootstrap js-->
      <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous" ></script>
      <!---->
      <script src="/path/to/flickity.pkgd.min.js"></script>
</body>
</html>