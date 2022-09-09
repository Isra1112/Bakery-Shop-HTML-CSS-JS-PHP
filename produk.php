<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Produk LaRasa Bakery Shop</title>
</head>

<body>
    <nav id="navbarr">
        <div id="logo">
            <a title="LaRasa Bakery" href="index.php">
                <img id="navlogo" width="auto" height="250px" src="img/LaRasa__3_-removebg-preview.png" alt="">
            </a>
        </div>
        <!-- <div id="logo"><a href="">LaRassaa</a></div> -->
        <label class="menu" onclick="expand()" for="menu"><i class="fa fa-bars"
                style="font-size:36px; cursor: pointer;"></i>
        </label>
        <ul id="navbarul" style="left: -1100px;;">
            <li><a href="index.php">HOME</a></li>
            <li><a href="produk.php">PRODUK</a></li>
            <li><a href="layanan.php">LAYANAN</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
        </ul>
    </nav>


    <div id="content" >

        <ul class="breadcrumb">
            <li id="breadcrumd-title">Anda berada di</li>
            <li><a href="index.php">Home</a></li>
            <li>Produk</li>
        </ul>



        <p id="title-page"><b>Produk</b></p>
        <div class="content-produk">
            <div class="tab-filter">
                <div class="title">
                    <p id="filter-title" style="margin-bottom: 0px;">Filter</p>
                </div>
                

                <label class="checkbox-container">Bread
                    <input type="checkbox" value="Bread" class="subject-list" onchange="filterChange()">
                    <span class="checkmark"></span>
                  </label>
                  <label class="checkbox-container">Cake
                    <input type="checkbox" value="Cake" class="subject-list" onchange="filterChange()">
                    <span class="checkmark"></span>
                  </label>
                  <label class="checkbox-container">Pastry
                    <input type="checkbox" value="Pastry" class="subject-list" onchange="filterChange()">
                    <span class="checkmark"></span>
                  </label>
                  <label class="checkbox-container">Traditional Snack
                    <input type="checkbox" value="Snack" class="subject-list" onchange="filterChange()">
                    <span class="checkmark"></span>
                  </label>
                  <label class="checkbox-container" >Donut
                    <input type="checkbox" value="Donut" class="subject-list" onchange="filterChange()">
                    <span class="checkmark"></span>
                  </label>
            </div>
            <div class="list-produk" >
                
                
                
                
                
            </div>
        </div>
        
    </div>

    <footer class="footer">
        <div class="footer-left">
            <h3>Metode Pembayaran</h3>
            <div class="credit-cards">
                <img src="img/visa.png" alt="">
                <img src="img/mastercard.png" alt="">
                <img src="img/cod.png" alt="">
                <p class="footer-copyright">© Copyright 2022 LaRasa Bakery <br> All Rights Reserved</p>
            </div>
        </div>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Indonesia</span> Depok, Jawa Barat</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+62 896-7777-777</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="#">Larasa@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-about">
                <span>LaRasa Bakery</span>
                Menyediakan aneka ragam produk yang sehat untuk dikonsumsi masyarakat dan memberikan pelayanan yang
                terbaik kepada konsumen
            </p>
            <div class="footer-media">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/isra_khaerul/"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>
<script src="js/index.js">
</script>
<script src="js/produk.js">
</script>

</html>