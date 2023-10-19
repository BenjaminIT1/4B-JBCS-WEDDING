<?php

if (!isset($_SESSION["Iniciar"])) {
    if ($_SESSION["Iniciar"] != "ok") {
        echo '<script> window.location = "index.php?pagina=iniciar";</script>';
        return;
    } else {
        echo '<script> windows.location = "index.php?pagina=gallery";</script>';
        return;
    }
}

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);

?>
<!--=========== Breadcumd Section Here ========= -->
<section class="breadcumd__banner">
   <div class="container">
      <div class="breadcumd__wrapper center">
         <h1 class="left__content">
           our gallery
         </h1>
         <ul class="right__content">
            <li>
               <a href="index.php?pagina=home">
                  Home
               </a>
            </li>
            <li>
               <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
               gallery
            </li>
         </ul>
      </div>
   </div>
</section>
<!--=========== Breadcumd Section Here ========= -->

<!--=========== Celebrate Section Here ========= -->
<section class="celebrate__section pb-120 pt-120">
   <div class="flowers__shape">
      <img src="html/assets/img/celebrate/flower.png" alt="shape__image">
   </div>
   <div class="left__shape">
      <img src="html/assets/img/celebrate/left.png" alt="left__shape">
   </div>
   <div class="container">
      <div class="celebrate__wrapper">
         <div class="border__shape">
            <img src="html/assets/img/celebrate/shape.png" alt="shape">
         </div>
         <div class="row g-3 align-items-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
               <div class="celebrate__items">
                  <div class="celebrate__thumb">
                     <img src="html/assets/img/celebrate/celebrate.jpg" alt="celebrate__image">
                  </div>
               </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
               <div class="celebrate__content center">
                  <h3>
                     Join us to celebrate
                  </h3>
                  <h3>
                     The wedding day of
                  </h3>
                  <h2 class="celebrate__tittle">
                     Shakira & Deniel
                  </h2>
                  <h3 class="sub__tittle">
                     Which is celebration on
                  </h3>
                  <ul class="d-flex">
                     <li>April</li>
                     <li>15</li>
                     <li class="mr-none">2023</li>
                  </ul>
                  <div class="last__text">
                     <h3>
                        Starting at 2:00
                     </h3>
                     <p>
                        In the afternoon
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--=========== Celebrate Section End ========= -->

<!--=========== Gallery Section Here ========= -->
<section class="gallery__section pt-120 pb-120">
   <div class="left__shape">
      <img src="html/assets/img/testi/shape-left.png" alt="left__shape">
   </div>
   <div class="container">
      <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
         <h2 class="section__title">
            Captured Moments
         </h2>
         <img src="html/assets/img/tittle/flower.png" alt="flower__tittle">
      </div>
      <div class="row g-4">
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="gallery__thumb">
               <a href="assets/img/gallery/g1.jpg" class="popup__image">
                  <img src="html/assets/img/gallery/g1.jpg" alt="gallery__image">
               </a>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="gallery__thumb">
               <a href="html/assets/img/gallery/g2.jpg" class="popup__image">
                  <img src="html/assets/img/gallery/g2.jpg" alt="gallery__image">
               </a>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="gallery__thumb">
               <a href="html/assets/img/gallery/g3.jpg" class="popup__image">
                  <img src="html/assets/img/gallery/g3.jpg" alt="gallery__image">
               </a>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="gallery__thumb">
               <a href="html/assets/img/gallery/g4.jpg" class="popup__image">
                  <img src="html/assets/img/gallery/g4.jpg" alt="gallery__image">
               </a>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="gallery__thumb">
               <a href="html/assets/img/gallery/g5.jpg" class="popup__image">
                  <img src="html/assets/img/gallery/g5.jpg" alt="gallery__image">
               </a>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="gallery__thumb">
               <a href="html/assets/img/gallery/g6.jpg" class="popup__image">
                  <img src="html/assets/img/gallery/g6.jpg" alt="gallery__image">
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--=========== Gallery Section End ========= -->