<?php
$server="localhost";
$username="root";
$password="";
$db_name="counter";
$connection=mysqli_connect($server,$username,$password,$db_name);
if (mysqli_connect_errno()) {
    die("Error");
}

?>
<html>
<head>
    <title>JOO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "stylesheet" href = "disigne.css">
    <link rel = "stylesheet" href = "gallery.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src = "https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <meta name = "viewport" content = "width =device-width, initial-scale =1">
</head>
<body>
    <section id = "banner">
    <img src = "images/logo_size_invert.jpg" class = "logo">
    <div class="banner-text">
        <h1>JOOMoldova</h1>
        <p>Creștem în fiecare zi 📈</p>
        <div class = "first_buttons">
             <a href = "#Disco"><span></span>Discover</a>
             <a href = "#"><span></span>Sell</a>
        </div>
    </div>
    </section>
    <section id = "Dis">
    <section id = "Disco">
        <div>
            <h1>Discover</h1>
        </div>
    </section>
    <section id = "Discover">
        <div class = "gallery-img img1" data-aos="fade-right">
            <div><a href="#">Vezi imaginea</a></div>
        </div>
        <div class = "text1" data-aos = "fade-left">
            <li class = "top">Scooter Electric
                Se vinde xiaomi Mi Electric Scooter 1S in stare ideala🔥
            </li>
            <li>Pret
                320 euro🔥
            </li>
            <li>Contacte
                <a href="https://www.instagram.com/cornellisii/">@cornellisii</a>
            </li>
        </div>
        <div class = "gallery-img img1" data-aos="fade-right"></div>
        <div class = "gallery-img img2" data-aos="fade-right">
            <div><a href="#">Vezi imaginea</a></div>
        </div>
        <div class = "text2" data-aos="fade-left">
            <li class = "top">Se vinde Play station 3 🧨
                Stare 9/10
                A fost folosit puțin
                Cadou 2 jocuri
                In coplect 2 manete +USB si firele de conectare
            </li>
            <li>Pret 1400🤑
            </li>
            <li>Contacte 
                <a href="https://www.instagram.com/artiom___123/">@artiom___123</a>
            </li>
        </div>
        <div class = "gallery-img img2" data-aos="fade-right"></div>
    </section>
    </section>
    <section id = "Sell">
        <div>
            <h1>Sell</h1>
        </div>
    </section>
    <script src="gallery.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <section id="container">
<script type="text/javascript" src="jquery.min.js" ></script>
<script class="msdw" type="text/javascript">
</script>
</section>
</body>
<script>
    AOS.init({
    offset: 300,
    duration: 1000 
});
</script>
</html>