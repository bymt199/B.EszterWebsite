<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Henna és Jagua festés, Alkalmi-, Menyasszonyi-, Kreatív smink és Műszempilla építés Szegeden. Várlak szeretettel, keress bizalommal."/>
<meta name="keywords" content="henna,henna festés,smink,makeup,lashes,szempilla">
<meta name="Author" content="Molnár Tamás">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!--GOOGLE FONTS POPPINS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Amatic+SC:wght@400;700&family=Bangers&family=Bebas+Neue&family=Bungee&family=Cinzel&family=Fredoka+One&family=Indie+Flower&family=Monoton&family=Permanent+Marker&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="./css/style.css">
<title>Baka Eszter - Henna, Smink, Szempillaépítés Szegeden</title>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"/>

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
</style>


</head>
<body>


  

<!--========================= Navbar ============================== -->
    <nav>
        <div class="container nav__container">
            <a href="index.php" class="nav_logo">
                <img src="img/050501.png" class="img__logo">
            </a>
        

            <ul class="nav__menu">
                <li><a href="./rolam.php" class="text-decoration-none">Rólam</a></li>
                <li><a href="./szolgaltatasok.php" class="text-decoration-none">Szolgáltatások</a></li>
                <li><a href="./hennaoktatasfooldal.php" class="text-decoration-none">Henna oktatás</a></li>
                <li><a href="./gallery.php" class="text-decoration-none">Galéria</a></li>
                <li><a href="#contact" class="text-decoration-none">Kapcsolat</a></li>
                <li>
                    <a href="#contact" id="btn" class="btn btn-primary">Időpontfoglalás</a>
                </li>
            </ul>
            
            <button id="open-menu-btn"><i class="bi bi-list"></i></button>
            <button id="close-menu-btn"><i class="bi bi-x-lg"></i></button>
        </div>
    </nav>

    <!--========================= Slider ============================== -->

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="1" class="active"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="2" class="active"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="3" class="active"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="overlay-image" style="background-image:url(img/sliderbghenna.jpg);"></div>
          <div class="container">
          <div class="slider_container">
            <h1>Henna</h1>
            <p>Henna készítés</p>
            <a href="./hennafooldal.php" class="btn btn-lg btn-primary">Részletek</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="overlay-image" style="background-image:url(img/sliderbgjagua.jpg);"></div>
          <div class="container">
          <div class="slider_container">
            <h1>Jagua</h1>
            <p>Jagua készítés</p>
            <a href="./jaguafooldal.php" class="btn btn-lg btn-primary">Részletek</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="overlay-image" style="background-image:url(img/sliderbgmakeup.jpg);"></div>
          <div class="container">
          <div class="slider_container">
            <h1>Makeup</h1>
            <p>Smink készítés</p>
            <a href="./makeupfooldal.php" class="btn btn-lg btn-primary">Részletek</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="overlay-image" style="background-image:url(img/sliderbglashes.jpg);"></div>
          <div class="container">
          <div class="slider_container">
            <h1>Lashes</h1>
            <p>Szempilla készítés</p>
            <a href="./lashesfooldal.php" class="btn btn-lg btn-primary">Részletek</a>
            </div>
          </div>
        </div>
      </div>
      <a href="#myCarousel" class="carousel-control-prev" role="button" data-bs-slide="prev">
        <span class="sr-only">Previous</span>
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </a>
      <a href="#myCarousel" class="carousel-control-next" role="button" data-bs-slide="next">
        <span class="sr-only">Next</span>
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
    </div>

  <div class="our-services">
    <div class="container">
      <div class="title text-center">
          <h2>Szolgáltatások</h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="services-wrapper">
            <div class="services-img">
              <img src="img/hennaicon.png" alt="">
            </div>
            <div class="services-content">
              <a href="#">Henna - Jagua</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="services-wrapper">
            <div class="services-img">
              <img src="img/makeup.png" alt="">
            </div>
            <div class="services-content">
              <a href="#">Makeup</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="services-wrapper3">
            <div class="services-img">
              <img src="img/lashes.png" alt="">
            </div>
            <div class="services-content">
              <a href="#">Lashes</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="down-carousel">
    <div class="container">
      <div class="owl-carousel owl-theme">
        <div class="item"><img src="img/1.jpg" alt="1.kep"></div>
        <div class="item"><img src="img/2.jpg" alt="2.kep"></div>
        <div class="item"><img src="img/3.jpg" alt="3.kep"></div>
        <div class="item"><img src="img/4.jpeg" alt="4.kep"></div>
        <div class="item"><img src="img/5.jpeg" alt="5.kep"></div>
        <div class="item"><img src="img/6.jpeg" alt="6.kep"></div>
        <div class="item"><img src="img/7.jpeg" alt="7.kep"></div>
        <div class="item"><img src="img/8.jpg" alt="8.kep"></div>
        <div class="item"><img src="img/9.jpg" alt="9.kep"></div>
        <div class="item"><img src="img/10.jpg" alt="10.kep"></div>
      </div>
    </div>
  </div>

  <div class="connection">
    <div class="container">
      <div class="row justify-content-center">

      </div>
    </div>
  </div>

  <section id="contact">
  <div class="contact">
        <div class="container">
            <div class="contact__left">
                <h2>Vedd fel velem a kapcsolatot!</h2>
                <div class="email">
                  <a href="mailto:bakaeszter@gmail.com"><i class="bi bi-envelope"> </i>bakaeszter@gmail.com</a>
                </div>
                <ul class="contact__socials">
                    <li><a href="https://www.facebook.com/Hennacaliptus-HennaJagua-2328312107482927" target="_blank"><i class="bi bi-facebook"></i></a></li>
                </ul>
                <p><strong>Szeged</strong></p>
            </div>
        </div>
  </div>
  </section>

  <!-- ÁSZF -->

  <!--<div id="simpleModal">
      <div class="modalContent">
        <span id="closebtn">&times;</span>
        <h2>Általános szerződési feltételek</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, modi!</p>
      </div>
    </div>-->




  <footer>
        <small>Copyright &copy; Molnár Tamás 2022 <a href="mtweboldal.hu">mtweboldal.hu</a></small>
        <a href="#" id="topBtn"><i class="bi bi-arrow-up"></i></a>
  </footer>


    <script>
                $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>