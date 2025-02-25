<?php
$pageTitle = "VAMOUZ";
require 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
    .content {
        font-size: 22px;
        color: black;
        padding-left: 500px;
        padding-right: 500px;
    }
    .content span {
        font-weight: 700;
    }
    .content .text {
        font-size: 15px;
    }
    .product {
        padding-left: 300px;
        padding-right: 300px;
    }
    .product .card {
        border: 1px;
        color: black;
    }
    .btn {
        border: 1;
        border-color: white;
        color: white;
        border-radius: 0;
        font-size: 15px;
        margin-top: 60s0px;
        font-weight: 700;
        margin-right: -310px;
        margin-bottom: 10px;
        padding-left: 250px;
        padding-right: 250px;
    }
    footer a {
        color: black;
        font-size: 12px;
    }
    .breadcrumb {
        font-size: 12px;
        color: black;
    }
    .breadcrumb a {
        color: rgba(0, 0, 0, 0.4);
        text-decoration: none;
    }
</style>
<body>

<div class="container">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="beranda.php">Beranda</a></li>
        <li class="breadcrumb-item" aria-current="page">Item</li>
    </ol>
    </nav>
</div>

<div id="carouselExampleCaptions" class="carousel slide mb-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <a href="detail-product.php" class="btn">CHECKOUT</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <a href="detail-product.php" class="btn btn-two" style="color: white; border-color: #962A2B; margin-right: -10px; background-color: #962A2B;">CHECKOUT</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</body>
</html>

<footer>
    <hr>
    <div class="container">
        <a href="#" style="font-size: 15px;"><i class="bi bi-instagram me-2"></i>Vamouz</a>
        <br><br><a href="tracking.php">Lacak Pesanan</a>
        <br><a href="cs.php">Customer Service</a>
    </div>
    <br>
</footer>

<script>
    var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 2000,
  wrap: false
})
</script>