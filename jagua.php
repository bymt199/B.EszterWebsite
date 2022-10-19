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
            <p><a href="index.php">Főoldal</a>/<a href="gallery.php">Galéria</a>/<a href="jagua.php">Jagua</a></p>
            <h1>Jagua</h1>
            
            <div class="images" id="lightgallery">
                <a href="img/jagua/FB_IMG_1653710469374.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710469374.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653710472883.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710472883.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653710476114.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710476114.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653710479698.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710479698.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653710482873.jpg" class="big"><img src="img/jagua/FB_IMG_1653710482873.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653710486281.jpg" class="big"><img src="img/jagua/FB_IMG_1653710486281.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653710489329.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710489329.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653710498722.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710498722.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653710502774.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710502774.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653710513016.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710513016.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653710516051.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710516051.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653710520015.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710520015.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653710525960.jpg" class="big"><img src="img/jagua/FB_IMG_1653710525960.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653710531855.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710531855.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653710537163.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710537163.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653710541341.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710541341.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710546881.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710546881.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710552775.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710552775.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710615286.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710615286.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710620051.jpg" class="horizontal"><img src="img/jagua/FB_IMG_1653710620051.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710627364.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710627364.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710641617.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710641617.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710741445.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710741445.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710776779.jpg" class="horizontal"><img src="img/jagua/FB_IMG_1653710776779.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710879844.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710879844.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710914693.jpg" class="horizontal"><img src="img/jagua/FB_IMG_1653710914693.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710940406.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710940406.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710946205.jpg" class="horizontal"><img src="img/jagua/FB_IMG_1653710946205.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710950445.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710950445.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710958348.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710958348.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710967335.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710967335.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710976782.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710976782.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710982141.jpg" class="big"><img src="img/jagua/FB_IMG_1653710982141.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653710985961.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653710985961.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653711043193.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711043193.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653711047304.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711047304.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653711054364.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711054364.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653711058711.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711058711.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653711064202.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711064202.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653711068257.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711068257.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653711071261.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711071261.jpg" alt="egy végtagon lévő jagua tetoválás"></a>    
                <a href="img/jagua/FB_IMG_1653711074563.jpg" class="horizontal"><img src="img/jagua/FB_IMG_1653711074563.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711078593.jpg" class="horizontal"><img src="img/jagua/FB_IMG_1653711078593.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711082606.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711082606.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711101940.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711101940.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711105056.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711105056.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711108309.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711108309.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711112232.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711112232.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711116665.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711116665.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711119777.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711119777.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711124469.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711124469.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711127547.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711127547.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711131218.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711131218.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711136100.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711136100.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711139188.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711139188.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711149947.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711149947.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711154907.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711154907.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711157770.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711157770.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711160734.jpg" class="horizontal"><img src="img/jagua/FB_IMG_1653711160734.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711164141.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711164141.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711167571.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711167571.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711171426.jpg" class="big"><img src="img/jagua/FB_IMG_1653711171426.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711175538.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711175538.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711179428.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711179428.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711191495.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711191495.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711194540.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711194540.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711197653.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711197653.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711200889.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711200889.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711208916.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711208916.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711216871.jpg" class="horizontal"><img src="img/jagua/FB_IMG_1653711216871.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1653711220444.jpg" class="vertical"><img src="img/jagua/FB_IMG_1653711220444.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1654201076756.jpg" class="big"><img src="img/jagua/FB_IMG_1654201076756.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1654201080116.jpg" class="vertical"><img src="img/jagua/FB_IMG_1654201080116.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1654201148150.jpg" class="vertical"><img src="img/jagua/FB_IMG_1654201148150.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1654201158423.jpg" class="vertical"><img src="img/jagua/FB_IMG_1654201158423.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1654201169345.jpg" class="vertical"><img src="img/jagua/FB_IMG_1654201169345.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/FB_IMG_1654201238172.jpg" class="horizontal"><img src="img/jagua/FB_IMG_1654201238172.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/Screenshot_20220602-222017_Facebook.jpg" class="vertical"><img src="img/jagua/Screenshot_20220602-222017_Facebook.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/20220731_121016.jpg" class="vertical"><img src="img/jagua/20220731_121016.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/20220731_140226.jpg" class="vertical"><img src="img/jagua/20220731_140226.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/20220731_151541.jpg" class="vertical"><img src="img/jagua/20220731_151541.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/20220731_162925.jpg" class="vertical"><img src="img/jagua/20220731_162925.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/20220731_174938.jpg" class="vertical"><img src="img/jagua/20220731_174938.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/20220730_174729.jpg" class="vertical"><img src="img/jagua/20220730_174729.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/20220731_103838.jpg" class="vertical"><img src="img/jagua/20220731_103838.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/20220731_110935.jpg" class="vertical"><img src="img/jagua/20220731_110935.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/20220731_111213.jpg" class="vertical"><img src="img/jagua/20220731_111213.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/20220731_112617.jpg" class="vertical"><img src="img/jagua/20220731_112617.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/20220730_171855.jpg" class="vertical"><img src="img/jagua/20220730_171855.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/20220730_154510.jpg" class="vertical"><img src="img/jagua/20220730_154510.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/20220730_152538.jpg" class="vertical"><img src="img/jagua/20220730_152538.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="img/jagua/20220730_144126.jpg" class="vertical"><img src="img/jagua/20220730_144126.jpg" alt="egy végtagon lévő jagua tetoválás"></a>
                <a href="received_738304007509939.jpeg" class="vertical"><img src="received_738304007509939.jpeg" alt="egy végtagon lévő jagua tetoválás"></a>
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