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
    <title>Baka Eszter · Galéria/Henna</title>

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
            <p><a href="index.php">Főoldal</a>/<a href="gallery.php">Galéria</a>/<a href="henna.php">Henna</a></p>
            <h1>Henna</h1>
            
            <div class="images" id="lightgallery">
                <a href="./img/henna/2019-03-13_11.08.40.jpg" class="vertical"><img src="./img/henna/2019-03-13_11.08.40.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/2019-04-01_14.28.49.jpg" class="vertical"><img src="./img/henna/2019-04-01_14.28.49.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/2019-04-01_14.38.37.jpg" class="big"><img src="./img/henna/2019-04-01_14.38.37.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/20190226_124236.jpg" class="vertical"><img src="./img/henna/20190226_124236.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/20190301_125027.jpg" class="vertical"><img src="./img/henna/20190301_125027.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/20190302_185045.jpg" class="vertical"><img src="./img/henna/20190302_185045.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/20190315_095740.jpg" class="horizontal"><img src="./img/henna/20190315_095740.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/20190401_144152.jpg" class="vertical"><img src="./img/henna/20190401_144152.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/20190514_194519.jpg" class="vertical"><img src="./img/henna/20190514_194519.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/20190523_111616.jpg" class="vertical"><img src="./img/henna/20190523_111616.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1558950456692.jpg" class="horizontal"><img src="./img/henna/FB_IMG_1558950456692.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653710464981.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653710464981.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653710509528.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653710509528.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653710523111.jpg"><img src="./img/henna/FB_IMG_1653710523111.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653710635437.jpg" class="horizontal"><img src="./img/henna/FB_IMG_1653710635437.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653710746500.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653710746500.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653710750555.jpg" class="horizontal"><img src="./img/henna/FB_IMG_1653710750555.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653710754123.jpg" class="horizontal"><img src="./img/henna/FB_IMG_1653710754123.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653710763206.jpg" class="horizontal"><img src="./img/henna/FB_IMG_1653710763206.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653710766873.jpg" class="big"><img src="./img/henna/FB_IMG_1653710766873.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653710771162.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653710771162.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653710798045.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653710798045.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653710832417.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653710832417.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653710837712.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653710837712.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653710910689.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653710910689.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653710917811.jpg" class="horizontal"><img src="./img/henna/FB_IMG_1653710917811.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653710990071.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653710990071.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653711008279.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653711008279.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653711013135.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653711013135.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653711016455.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653711016455.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653711020132.jpg" class="horizontal"><img src="./img/henna/FB_IMG_1653711020132.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653711024293.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653711024293.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653711090294.jpg"><img src="./img/henna/FB_IMG_1653711090294.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653711094558.jpg"><img src="./img/henna/FB_IMG_1653711094558.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653711098471.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653711098471.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653711226240.jpg" class="horizontal"><img src="./img/henna/FB_IMG_1653711226240.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653711229561.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653711229561.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653711232889.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653711232889.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653711236845.jpg" class="vertical"><img src="./img/henna/FB_IMG_1653711236845.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/FB_IMG_1653711240076.jpg"><img src="./img/henna/FB_IMG_1653711240076.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/inCollage_20190303_175150349.jpg"><img src="./img/henna/inCollage_20190303_175150349.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/received_813033432366674.jpeg"><img src="./img/henna/received_813033432366674.jpeg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/received_1089910701212466.jpeg"><img src="./img/henna/received_1089910701212466.jpeg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="./img/henna/received_1975134269459409.jpeg"><img src="./img/henna/received_1975134269459409.jpeg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="img/henna/20220731_142532.jpg"><img src="img/henna/20220731_142532.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="img/henna/20220731_145357.jpg"><img src="img/henna/20220731_145357.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="img/henna/20220731_155252.jpg"><img src="img/henna/20220731_155252.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="img/henna/20220731_161909.jpg"><img src="img/henna/20220731_161909.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="img/henna/20220731_173422.jpg"><img src="img/henna/20220731_173422.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="img/henna/20220730_151310.jpg"><img src="img/henna/20220730_151310.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="img/henna/20220730_165943.jpg"><img src="img/henna/20220730_165943.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="img/henna/20220731_114130.jpg"><img src="img/henna/20220731_114130.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="img/henna/20220731_130429.jpg"><img src="img/henna/20220731_130429.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="img/henna/20220731_132522.jpg"><img src="img/henna/20220731_132522.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href="img/henna/20220731_135440.jpg"><img src="img/henna/20220731_135440.jpg" alt="egy végtagon lévő henna tetoválás"></a>
                <a href=""><img src="" alt="egy végtagon lévő henna tetoválás"></a>
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