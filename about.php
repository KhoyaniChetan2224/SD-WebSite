<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <b> SD Hotels - About </b> </title>  
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
<?php require('include/links.php') ?>
<style>
  .box{
    border-top-color: var(--teal) !important;
  }
</style> 
</head>
<body class="bg-light">

<?php require('include/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center"> About as </h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Eos tempore vel laborum voluptas fuga culpa veniam a molestias <br>
    amet dicta non perferendis unde atque deleniti, quisquam 
    perspiciatis iure delectus? Nostrum.
  </p>
</div>

<div class="container">
  <div class="row justify-content-between aling-items-center order-lg-1 order-md-1 order-2">
    <div class="col-lg-6 col-ms-5 mb-4">
      <h3>Lorem imsum dolor sit</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur 
        adipisicing elit. Quisquam minus, distinctio 
        nostrum est vel animi?
      </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4">
      <img src="imgs/about/2.png" class="w-50 order-lg-2 order-md-2 order-1">
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-ld-3 col-md-3 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="imgs/about/4.png" width="70px">
        <h4 class="mt-3"> 100+ Rooms </h4>
      </div>
    </div>
    <div class="col-ld-3 col-md-3 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="imgs/about/Customer.png" width="70px">
        <h4 class="mt-3"> 200+ Customer </h4>
      </div>
    </div>
    <div class="col-ld-3 col-md-3 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="imgs/about/Reviews.png" width="70px">
        <h4 class="mt-3"> 400+ Reviews </h4>
      </div>
    </div>
    <div class="col-ld-3 col-md-3 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="imgs/about/Staffs.png" width="70px">
        <h4 class="mt-3"> 100+ Staffs </h4>
      </div>
    </div>
  </div>
</div>


<h3 class="my-5 fw-bold h-font text-center"> Local Attraction Nearby </h3>

<div class="cintainer px-4">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5 ">
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="imgs/aboutas-1/1.jpg" calss="w-100">
        <h5 class="mt-2"> ABC </h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="imgs/aboutas-1/2.jpg" calss="w-100">
        <h5 class="mt-2"> DEF </h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="imgs/aboutas-1/3.jpg" calss="w-100">
        <h5 class="mt-2"> GHI </h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="imgs/aboutas-1/4.jpg" calss="w-100">
        <h5 class="mt-2"> JKL </h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="imgs/aboutas-1/5.jpg" calss="w-100">
        <h5 class="mt-2"> MNO </h5>
      </div>    
    <div class="swiper-pagination"></div>
  </div>
</div>
<?php require('include/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320:{
          slidesPerView: 3,
        },
        640:{
          slidesPerView: 3,
        },
        768:{
          slidesPerView: 3,
        },
        1024:{
          slidesPerView: 3,
        },
    });
  </script>

</body>
</html>
