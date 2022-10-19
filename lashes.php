<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--GOOGLE FONTS POPPINS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Amatic+SC:wght@400;700&family=Bangers&family=Bebas+Neue&family=Bungee&family=Cinzel&family=Fredoka+One&family=Indie+Flower&family=Monoton&family=Permanent+Marker&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Baka Eszter · Galéria/Lashes</title>

    <link href="./css/lightgallery.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"/>

    <style>
        
        *{
                margin: 0;
                padding: 0;
                border: 0;
                outline: 0;
                text-decoration: none;
                list-style: none;
                box-sizing: border-box;
            }

            :root {
                --color-primary: #b6860c;
                --color-white: rgb(255, 255, 255);
                --color-light: #f8f3e7;
                --color-black: #0f0f1b;
                --color-dark: #4b4a53;
                --color-lightdark: #7e7e7e;
                --color-background: #f5f8fd;
                --color-almostwhite: #f1efef;


                --container-width-lg: 82%;
                --container-width-md: 90%;
                --container-width-sm: 98%;
            }

            html {
                scroll-behavior: smooth;
            }

            body {
                font-family: "Roboto", sans-serif;
                font-weight: 300;
                color: var(--color-dark);
                line-height: 1.7;
                
            }

            img {
                width: 100%;
                object-fit: cover;
            }

            .container {
                width: var(--container-width-lg);
                max-width: 1800px;
                margin: 0 auto;
            }


            .btn {
                background: var(--color-black);
                color: var(--color-white);
                display: inline-block;
                width: fit-content;
                padding: 0.8rem 1.6rem;
                border: 1px solid transparent;
                cursor: pointer;
                transition: all 400ms ease;
            }

            .btn:hover {
                background: var(--color-light);
                color: var(--color-black);
            }

            .btn-primary {
                background: var(--color-primary);
                color: var(--color-white);
                border-radius: 3rem;
                box-shadow: 0 2.5px 6px var(--color-light);
                
            }

            .btn-primary:hover {
                border-color: var(--color-primary);
                background: var(--color-light);
                color: var(--color-primary);
            }

            .btn-lg {
                padding: 1.1rem 2rem;
                font-size: 1.2rem;
                border-radius: 3rem;
                box-shadow: 0 2.5px 3px var(--color-primary);

            }


            /* ************************** NAVBAR ************************* */


            nav {
                
                height: 7rem;
                display: grid;
                place-items: center;
                z-index: 3;
                background: var(--color-white);
                box-shadow: 0 1px 4px rgba(0,0,0,0.3), 0 0 40px rgba(0,0,0,0.1) inset;
            }

            nav:before,
            nav:after{
                content: '';
                position: absolute;
                z-index: -1;
                box-shadow: 0 0 20px rgba(0,0,0,0.8);
            }

            nav a {
                color: var(--color-dark);
                font-size: 1rem;
                transition: all 400ms ease;
            }

            nav a:hover {
                color: var(--color-primary);
            }

            .nav__container {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            /*open close gomb telefonhoz*/
            nav button {
                display: none;
            }

            .nav__menu {
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 2rem;
                padding: 0;
                margin: 0;
            }

            .img__logo {
            
                text-align: center;
                height: 100px;
                padding-right: 10px;
                display: inline-block;
                
            }

            
            /*========== Contact ==============*/

            .contact {
                margin: 0;
                padding: 2rem 0;
                text-align: center;
                align-items: center;
                background: var(--color-almostwhite);
                /*background-image: linear-gradient(var(--color-almostwhite) 90%, var(--color-primary));*/
            }

            .contact__left h2 {
                padding-bottom: 2rem;
                text-decoration-line: underline;
                text-decoration-color: var(--color-primary);
            }

            .email a {
                text-decoration: none;
                color: var(--color-dark);
                font-size: 1.5rem;
            }

            .contact__socials li a{
                padding: 0;
                text-decoration: none;
                color: var(--color-dark);
                font-size: 50px;
                margin-right: 32px;
            }

            /*=========== footer ===========*/

            footer {
                text-align: center;
                margin: 0;
                padding: 10px 0;
                background: var(--color-almostwhite);
                font-weight: 300;
                box-shadow: 0 1px 4px rgba(0,0,0,0.3), 0 0 40px rgba(0,0,0,0.1) inset;
            }

            footer a {
                text-decoration: none;
                color: var(--color-primary);
            }

            hr {
                padding: 0;
                margin: 0;
                color: var(--color-dark);
            }

            /*=========== galéria ===========*/

            #gallery {
            padding: 4rem 0;
            padding-bottom: 10rem;
            margin: auto;
            background: var(--color-almostwhite);
    
          }

          #gallery h1 {
            text-align: center;
            text-decoration-line: underline;
            text-decoration-color: var(--color-primary);
            padding-bottom: 4rem;
          }

          #gallery p a{
            
            color: var(--color-dark);
            
          }
          #gallery p a:hover{
            
            color: var(--color-primary);
            
          }



.images > a {
  display: flex;
  justify-content: center;
  align-items: center;
  
}

.images > a > img {
  width: 100%;
  height: 100%;
  object-fit: cover; 
}

.images {
  display: grid;
  grid-gap: 5px;
  grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
  grid-auto-rows: 150px;
  grid-auto-flow: dense;
}

.horizontal {
  grid-column: span 2;
}

.vertical {
  grid-row: span 2;
}

.big {
  grid-column: span 2;
  grid-row: span 2;
}




    </style>

</head>
<body>

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

            <div class="logobg"></div>
        </div>
    </nav>

    

    <section id="gallery">
        <div class="container">
        <div class="row justify-content-center">
            <p><a href="index.php">Főoldal</a>/<a href="gallery.php">Galéria</a>/<a href="lashes.php">Lashes</a></p>
            <h1>Lashes</h1>
            
            <div class="images" id="lightgallery">
                <a href="img/lashes/Polish_20220319_222306007.jpg" class="big"><img src="img/lashes/Polish_20220319_222306007.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/Polish_20220408_233434903.jpg" class="big"><img src="img/lashes/Polish_20220408_233434903.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/Polish_20220408_233742264.jpg" class="horizontal"><img src="img/lashes/Polish_20220408_233742264.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/Polish_20220408_234135573.jpg" class="vertical"><img src="img/lashes/Polish_20220408_234135573.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/Polish_20220423_130358756.jpg" class="big"><img src="img/lashes/Polish_20220423_130358756.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/Polish_20220423_130604059.jpg" class="big"><img src="img/lashes/Polish_20220423_130604059.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/Polish_20220510_211010826.jpg" class="big"><img src="img/lashes/Polish_20220510_211010826.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/Polish_20220510_211824193.jpg" class="big"><img src="img/lashes/Polish_20220510_211824193.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/Polish_20220527_224316910.jpg" class="big"><img src="img/lashes/Polish_20220527_224316910.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/Polish_20220527_225211228.jpg" class="horizontal"><img src="img/lashes/Polish_20220527_225211228.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/Polish_20220527_225435606.jpg" class="big"><img src="img/lashes/Polish_20220527_225435606.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/Polish_20220527_225940583.jpg" class="big"><img src="img/lashes/Polish_20220527_225940583.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/20220527_214602.jpg" class="big"><img src="img/lashes/20220527_214602.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/20220527_214723.jpg" class="big"><img src="img/lashes/20220527_214723.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/20220527_214830.jpg" class="big"><img src="img/lashes/20220527_214830.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/20220527_230145.jpg" class="big"><img src="img/lashes/20220527_230145.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/20220630_201740.jpg" class="big"><img src="img/lashes/20220630_201740.jpg" alt="Kész szempilláról készült fénykép"></a>
                <a href="img/lashes/20220701_183159.jpg" class="big"><img src="img/lashes/20220701_183159.jpg" alt="Kész szempilláról készült fénykép"></a>
            </div>
    
        </div>
        </div>
    </section>



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


    <footer>
            <small>Copyright &copy; Molnár Tamás 2022 <a href="mtweboldal.hu">mtweboldal.hu</a></small>
            <a href="#" id="topBtn"><i class="bi bi-arrow-up"></i></a>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="./js/lightgallery.js"></script>
    <script>
      var imagPop = document.getElementById("lightgallery");
      lightGallery(imagPop);
    </script>
    <script src="js/main.js"></script>
</body>
</html>