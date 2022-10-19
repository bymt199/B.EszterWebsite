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
    <link rel="stylesheet" href="./css/rolamstyle.css">
    <title>Baka Eszter · Rólam / Bemutatkozás</title>
    


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

/*===========Rólam===========*/

.section__rolam {
    padding: 7rem 0;
    z-index: 1;
    position: relative;
    background: var(--color-almostwhite);
}

.section-about-img {
    max-width: 500px;
    position: relative;
    margin: 50px auto;
    border-radius: 5px;
}

.section-about-img:after {
    content: "";
    position: absolute;
    height: 150px;
    width: 120px;
    border: 3px solid var(--color-primary);
    border-radius: 6px;
    bottom: -30px;
    left: -30px;
    z-index: -1;
}

.section-about-img:before {
    content: "";
    height: 200px;
    width: 200px;
    display: block;
    background-color: var(--color-primary);
    border-radius: 3px;
    position: absolute;
    right: -30px;
    top: -30px;
    z-index: -1;
}

.about-desc {
    padding-right: 30px;
}

.about-desc h1 {
    padding-top: 10px;
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

.contact__left p {
    padding-bottom: 2rem;
}

.contact__left p::before{
        content: "";
        position: absolute;
        width: 131px;
        height: 4px;
        left: 45%;
        background: var(--color-primary);
        justify-content: center;
        align-items: center;
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
    </style>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"/>
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

    <section class="section__rolam" id="rolam" >
        <div class="container rolam__container">
        <div class="row justify-content-center align items-center">
            
            <div class="col-md-6">
            <div class="section-about-img">
                <img src="img/profilkep.jpg" alt="" class="profilkep img-fluid mx-auto d-block">
            </div>
            </div>
            
        

        <div class="col-md-6">
            <div class="about-desc">
            <div class="about-desc-content">
                <h1>Rólam</h1>
                <p class="mt-4" align="justify">Sokat gondolkoztam azon, hogy melyik évben került az életembe a hennázás, de összemosódnak az évek és igazából a története is. Minden ezzel kezdődött, az biztos.<br>
                Egy kedves ismerősöm által lettem szerelmese majd azelőtt, hogy bőrre festettem, a torta készítéseim során is többször megjelent valamilyen formában a festés. Mindig vonzott a kreativitás, szeretek új dolgokat kipróbálni és elmerülni benne. 
                Édesanyám kiválóan fest, így nem is csoda, hogy én is a festés egyik formáját örökölhettem és - hol a tortákban, vagy éppen a bőrre hennával, az arcot sminkelve - ragadok ecsetet, eszközt.<br>
                Az élet mindig olyan fantasztikus embereket sodort az utamba, akiknek köszönhetően itt tartok, ahol most és lehetőségem van tanulni, gyakorolni és megélni a hennázás, a sminkelés és a szempillaépítés csodáját. Nem lehetek nekik elég hálás mindezért és minden vendégemnek is külön köszönettel tartozom, hogy megtisztelnek a bizalmukkal. 
                Igyekszem mindig tökéletesíteni a tudásomat, szeretem munkáimban a precizitást. Imádom látni az arcokon a boldogságot az elkészült alkotások láttán, minden alkalommal egy csoda születik és álmok válanak valóra.<br><br>
                "Álmod úgy valósul meg, ha apránként építesz. Ne tégy sokat, de azt jól, öröm lesz a bére. Életed éld szabadon, szánj időt a szépre, kőre követ nap mint nap, titkod lassan érik. Így növekszel nap mint nap, míg felérsz az égig."</p>
            </div>
        </div>
        </div>
    </section>

    <section id="contact">
    <div class="contact">
            <div class="container">
                <div class="contact__left">
                    <h2>Vedd fel velem a kapcsolatot!</h2>
                    <p></p>
                    <div class="email">
                    <a href="mailto:bakaeszter@gmail.com"><i class="bi bi-envelope"> </i>bakaeszter@gmail.com</a>
                    </div>
                    <ul class="contact__socials">
                        <li><a href="https://www.facebook.com/Hennacaliptus-HennaJagua-2328312107482927" target="_blank"><i class="bi bi-facebook"></i></a></li>
                    </ul>
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
    <script src="js/main.js"></script>
</body>
</html>