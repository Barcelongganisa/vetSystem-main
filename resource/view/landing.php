<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>VETERINARY</title>
</head>

<body>
    <link rel="stylesheet" href="/css/landing.css">
    <link rel="stylesheet" href="/css/landingtab.css">
    <link rel="stylesheet" href="/css/landingcp.css">
    <container class="nav">
        <a href="/"> <img class="nav-pic" src="/images/logo.png" alt="Logo"> </a>
        <div id="marker"></div>
        <div class="hamburger" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-list">
            <li><a href="#aboutus">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#loccon">Location/Contact</a></li>
            <li><a href="/register">Book-Now</a></li>
            <div class="bButton">
                <li><a href="/register" class="bookB">Register</a></li>
            </div>
        </ul>
    </container>
    <section class="section home" id="home">
        <div class="flex-container">
            <div class="picContainer">
                <div id="info"></div>
                <div id="image1" class="img">
                    <img src="/images/kkk.jpg" />
                </div>
                <div id="image2" class="img">
                    <img src="/images/bm.jpg" />
                </div>
                <div id="image3" class="img">
                    <img src="/images/emi.jpg" />
                </div>
                <div id="image4" class="img">
                    <img src="/images/ginger.jpg" />
                </div>
                <div id="image5" class="img">
                    <img src="/images/maddie.jpg" />
                </div>
                <div id="image6" class="img">
                    <img src="/images/mathea.jpg" />
                </div>
                <div id="image7" class="img">
                    <img src="/images/mskape.jpg" />
                </div>
                <div id="image8" class="img">
                    <img src="/images/patch.jpg" />
                </div>
                <div id="image9" class="img">
                    <img src="/images/chloe.jpg" />
                </div>
                <div class="left" onclick="left()"></div>
                <div class="right" onclick="right()"></div>
                <div class="dots">
                    <div class="dot a1"></div>
                    <div class="dot a2"></div>
                    <div class="dot a3"></div>
                    <div class="dot a4"></div>
                    <div class="dot a5"></div>
                    <div class="dot a6"></div>
                    <div class="dot a7"></div>
                    <div class="dot a8"></div>
                    <div class="dot a9"></div>
                </div>
            </div>
            <div class="text-container">
                <h1 id="image-title"></h1>
                <p id="image-description"></p>
            </div>
        </div>
    </section>
    <section class="section aboutus" id="aboutus">
        <div class="about-container">
            <h1>ABOUT US</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita voluptates minima perspiciatis enim
                voluptatum vel unde a. Maiores facere eum velit asperiores suscipit. Repudiandae quaerat rerum eum, at
                nemo non?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita voluptates minima perspiciatis enim
                voluptatum vel unde a. Maiores facere eum velit asperiores suscipit. Repudiandae quaerat rerum eum, at
                nemo non?
            </p>
        </div>
        <div class="announce-container">
            <h1>ANNOUNCEMENT!!!</h1>
        </div>
    </section>
    <section class="section services" id="services"></section>
    <section class="section loccon" id="loccon"></section>
    <script src="/js/landing.js"></script>
</body>
<footer>PALA-OTOG si KAEL</footer>

</html>