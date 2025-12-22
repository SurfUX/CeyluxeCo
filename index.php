<!DOCTYPE html>
<html>

<head>
  <title>Ceyluxe</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="TemplatesJungle">
  <meta name="keywords" content="ecommerce,ceramic,shop">
  <meta name="description" content="Bootstrap 5 Ceramic Shop HTML CSS Template">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Quattrocento:wght@400;700&display=swap"
    rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <!-- script
    ================================================== -->
  <script src="js/modernizr.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
      <path
        d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 16 16">
      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 16 16">
      <path
        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 512 512">
      <path fill="currentColor"
        d="M456.69 421.39L362.6 327.3a173.81 173.81 0 0 0 34.84-104.58C397.44 126.38 319.06 48 222.72 48S48 126.38 48 222.72s78.38 174.72 174.72 174.72A173.81 173.81 0 0 0 327.3 362.6l94.09 94.09a25 25 0 0 0 35.3-35.3ZM97.92 222.72a124.8 124.8 0 1 1 124.8 124.8a124.95 124.95 0 0 1-124.8-124.8Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="caret-arrow-left" viewBox="0 0 1024 1024">
      <path fill="currentColor"
        d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.592 30.592 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.592 30.592 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="caret-arrow-right" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="m19.704 12l-8.492-8.727a.75.75 0 1 1 1.075-1.046l9 9.25a.75.75 0 0 1 0 1.046l-9 9.25a.75.75 0 1 1-1.075-1.046L19.705 12Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="star-fill" viewBox="0 0 16 16">
      <path
        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="star-empty" viewBox="0 0 16 16">
      <path
        d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-left" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M10.78 19.03a.75.75 0 0 1-1.06 0l-6.25-6.25a.75.75 0 0 1 0-1.06l6.25-6.25a.749.749 0 0 1 1.275.326a.749.749 0 0 1-.215.734L5.81 11.5h14.44a.75.75 0 0 1 0 1.5H5.81l4.97 4.97a.75.75 0 0 1 0 1.06Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 16 16">
      <path fill="currentColor"
        d="M2.5 7.5a.5.5 0 1 0 0 1h9.697l-4.031 3.628a.5.5 0 1 0 .668.744l5-4.5a.5.5 0 0 0 0-.744l-5-4.5a.5.5 0 0 0-.668.744L12.197 7.5H2.5Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="play" viewBox="0 0 32 32">
      <path fill="currentColor"
        d="M7 28a1 1 0 0 1-1-1V5a1 1 0 0 1 1.482-.876l20 11a1 1 0 0 1 0 1.752l-20 11A1 1 0 0 1 7 28ZM8 6.69v18.62L24.925 16Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="truck" viewBox="0 0 24 24">
      <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
        <path stroke-linejoin="round" stroke-miterlimit="1.5"
          d="M8 19a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm10 0a2 2 0 1 0 0-4a2 2 0 0 0 0 4Z" />
        <path d="M10.05 17H15V6.6a.6.6 0 0 0-.6-.6H1m4.65 11H3.6a.6.6 0 0 1-.6-.6v-4.9" />
        <path stroke-linejoin="round" d="M2 9h4" />
        <path d="M15 9h5.61a.6.6 0 0 1 .548.356l1.79 4.028a.6.6 0 0 1 .052.243V16.4a.6.6 0 0 1-.6.6h-1.9M15 17h1" />
      </g>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="luggage-cart" viewBox="0 0 32 32">
      <path fill="currentColor"
        d="M19 6c-1.645 0-3 1.355-3 3h-6v12h18V9h-6c0-1.645-1.355-3-3-3zM4 7v2h1c.555 0 1 .445 1 1v11c0 2.21 1.79 4 4 4h18v-2H10c-1.191 0-2-.809-2-2V10c0-1.645-1.355-3-3-3zm20.5 18a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3zm-12 0a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3zM19 8c.555 0 1 .445 1 1h-2c0-.555.445-1 1-1zm-7 3h14v8H12z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="coffee" viewBox="0 0 32 32">
      <path fill="currentColor"
        d="M11 3v4h2V3zm4 1v3h2V4zM4.875 8L5 9.094l1.813 17.218c.16 1.52 1.472 2.688 3 2.688h9.374c1.528 0 2.84-1.168 3-2.688l.47-4.312H25c1.645 0 3-1.355 3-3v-3c0-1.645-1.355-3-3-3h-1.406L24 9.094L24.125 8zm2.25 2h14.75l-1.688 16.094a1 1 0 0 1-1 .906H9.813c-.519 0-.945-.387-1-.906zm16.25 5H25c.566 0 1 .434 1 1v3c0 .566-.434 1-1 1h-2.156z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="insta" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="send" viewBox="0 0 32 32">
      <path fill="currentColor"
        d="M26.07 3.996a2.974 2.974 0 0 0-.933.223h-.004c-.285.113-1.64.683-3.7 1.547l-7.382 3.109c-5.297 2.23-10.504 4.426-10.504 4.426l.062-.024s-.359.118-.734.375a2.03 2.03 0 0 0-.586.567c-.184.27-.332.683-.277 1.11c.09.722.558 1.155.894 1.394c.34.242.664.355.664.355h.008l4.883 1.645c.219.703 1.488 4.875 1.793 5.836c.18.574.355.933.574 1.207c.106.14.23.257.379.351a1.119 1.119 0 0 0 .246.106l-.05-.012c.015.004.027.016.038.02c.04.011.067.015.118.023c.773.234 1.394-.246 1.394-.246l.035-.028l2.883-2.625l4.832 3.707l.11.047c1.007.442 2.027.196 2.566-.238c.543-.437.754-.996.754-.996l.035-.09l3.734-19.129c.106-.472.133-.914.016-1.343a1.807 1.807 0 0 0-.781-1.047a1.872 1.872 0 0 0-1.067-.27zm-.101 2.05c-.004.063.008.056-.02.177v.011l-3.699 18.93c-.016.027-.043.086-.117.145c-.078.062-.14.101-.465-.028l-5.91-4.531l-3.57 3.254l.75-4.79l9.656-9c.398-.37.265-.448.265-.448c.028-.454-.601-.133-.601-.133l-12.176 7.543l-.004-.02l-5.836-1.965v-.004l-.015-.003a.27.27 0 0 0 .03-.012l.032-.016l.031-.011s5.211-2.196 10.508-4.426c2.652-1.117 5.324-2.242 7.379-3.11a807.312 807.312 0 0 1 3.66-1.53c.082-.032.043-.032.102-.032z">
      </path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-up" viewBox="0 0 24 24">
      <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M12 5v14m6-8l-6-6m-6 6l6-6" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="cup" viewBox="0 0 24 24">
      <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
        <path
          d="M17 11.6V15a6 6 0 0 1-6 6H9a6 6 0 0 1-6-6v-3.4a.6.6 0 0 1 .6-.6h12.8a.6.6 0 0 1 .6.6ZM12 9c0-1 .714-2 2.143-2v0A2.857 2.857 0 0 0 17 4.143V3.5M8 9v-.5a3 3 0 0 1 3-3v0a2 2 0 0 0 2-2V3" />
        <path d="M16 11h2.5a2.5 2.5 0 0 1 0 5H17" />
      </g>
    </symbol>
    <symbol id="vase" viewBox="0 0 512 512">
      <path fill="currentColor"
        d="M304 30c-32 64-22.35 180.063 0 208c42.406 53.007 80 80 80 128c0 32-16 80-48 112v16H176v-16c-32.002-31.995-48-80-48-112c0-48 37.594-74.993 80-128c22.35-27.937 32-144 0-208c48-16 48-16 96 0" />
    </symbol>
  </svg>

  <div class="preloader">
    <div class="loader">
      <div class="dot">
        <svg class="vase svg-primary" width="40" height="40">
          <use xlink:href="#vase"></use>
        </svg>
      </div>
      <div class="dot">
        <svg class="vase svg-primary" width="40" height="40">
          <use xlink:href="#vase"></use>
        </svg>
      </div>
      <div class="dot">
        <svg class="vase svg-primary" width="40" height="40">
          <use xlink:href="#vase"></use>
        </svg>
      </div>
    </div>
  </div>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasLogin"
    aria-labelledby="My Login">
    <div class="offcanvas-header">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="login-detail">
        <div class="login-form p-0">
          <div class="col-lg-12 mx-auto">
            <form id="login-form">
              <input type="text" name="username" placeholder="Username or Email Address *"
                class="mb-3 ps-3 text-input w-100">
              <input type="password" name="password" placeholder="Password" class="ps-3 text-input w-100">
              <div class="checkbox d-flex justify-content-between mt-4">
                <p class="checkbox-form">
                  <label class="">
                    <input name="rememberme" type="checkbox" id="remember-me" value="forever"> Remember me </label>
                </p>
                <p class="lost-password">
                  <a href="#">Forgot your password?</a>
                </p>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer mt-5 d-flex justify-content-center">
          <button type="button" class="btn btn-primary w-100 mb-2">Login</button>
          <button type="button" class="btn btn-outline-primary w-100">Register</button>
        </div>
      </div>
    </div>
  </div>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
    <div class="offcanvas-header">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your Cart</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Roselle ceramic</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$12</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Apple Flower ceramic</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$14</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Honey ceramic</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$12</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$38</strong>
          </li>
        </ul>
        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to Checkout</button>
      </div>
    </div>
  </div>

    <!-- header start -->
    <?php include 'header.php'; ?>
    <!-- header end -->

  <section id="intro" class="position-relative overflow-hidden background"
    style="">
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-5 col-md-8">
          <div
            class="banner-content position-absolute d-flex justify-content-center align-items-center mx-auto text-center">
            <div class="banner-text-wrapper">
              <h1 class="display-1 text-white text-capitalize mb-2" data-aos="fade-up">
                Pure Ceylon Cinnamon, Crafted by Nature
              </h1>
              <p class="fs-5 text-white mb-4" data-aos="fade-up">
               Naturally pure. Ethically sourced. Expertly crafted in Sri Lanka for those who value true quality.
              </p>
              <a href="shop.php" class="btn btn-lg btn-light" data-aos="fade-up">Explore Our Collection</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-lg-5" id="company-services">
  <div class="container-lg">
    <div class="row" >

      <div class="col-lg-4 col-md-6 mb-2" data-aos="fade-right">
        <div class="icon-box text-center py-3" data-aos="fade-right">
          <div class="icon-box-icon mb-1">
            <svg class="truck svg-primary" width="39" height="39">
              <use xlink:href="#truck"></use>
            </svg>
          </div>
          <div class="icon-box-content">
            <p class="fs-5">Fast Local Delivery</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-2">
        <div class="icon-box text-center py-3" data-aos="fade-up">
          <div class="icon-box-icon mb-1">
            <svg class="coffee svg-primary" width="39" height="39">
              <use xlink:href="#coffee"></use>
            </svg>
          </div>
          <div class="icon-box-content">
            <p class="fs-5">Free Samples</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-2">
        <div class="icon-box text-center py-3" data-aos="fade-left">
          <div class="icon-box-icon mb-1">
            <svg class="luggage-cart svg-primary" width="39" height="39">
              <use xlink:href="#luggage-cart"></use>
            </svg>
          </div>
          <div class="icon-box-content">
            <p class="fs-5">Free Shipping Over $600</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

  <section id="about" class="py-lg-5 pt-lg-0">
    <div class="container-lg">
      <div class="row align-items-center">
        <div class="col-lg-6" >
          <figure class="image-holder mb-5 jarallax" data-aos="fade-right">
            <img src="images/single-image1.jpg" alt="ceramic" class="jarallax-img">
          </figure>
        </div>
        <div class="col-lg-6">
          <div class="detail-entry px-4">
            <h4 class="fs-6" data-aos="fade-left">OUR PHILOSOPHY</h4>
            <h3 class="mt-0 mb-4 fs-2" data-aos="fade-left">"Crafted with Care, Rooted in Sri Lanka"</h3>
            <p data-aos="fade-left">At Ceyluxe, we are committed to delivering the finest true Ceylon cinnamon, carefully sourced from Sri Lanka and crafted with respect for tradition and nature. Every bundle reflects purity, rich aroma, and exceptional quality.</p>
            <p data-aos="fade-left">By blending generations of expertise with modern standards, we create products that elevate everyday moments while honoring the heritage behind every harvest.</p>
            
            <a href="about-us.php" class="btn btn-lg btn-dark mt-4" data-aos="fade-left">Know More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="icon-box-wrap" class="py-lg-5 mmt-50">
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center mb-4 mb-lg-0">
          <div class="icon-box" data-aos="fade-right">
            <div class="icon-box-content">
              <h3 class="fs-3 feature-title mt-0 mb-3">Single Origin</h3>
              <p>Exclusively sourced from Sri Lanka for authentic Ceylon cinnamon.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-4 mb-lg-0">
          <div class="icon-box" data-aos="fade-right">
            <div class="icon-box-content">
              <h3 class="fs-3 feature-title mt-0 mb-3">Ethically Crafted</h3>
              <p>Responsibly harvested and hand-crafted by skilled artisans.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-4 mb-lg-0">
          <div class="icon-box">
            <div class="icon-box-content" data-aos="fade-left">
              <h3 class="fs-3 feature-title mt-0 mb-3">Scientifically Proven</h3>
              <p>Tested for purity, safety, and international quality standards.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-4 mb-lg-0">
          <div class="icon-box" data-aos="fade-left">
            <div class="icon-box-content">
              <h3 class="fs-3 feature-title mt-0 mb-3">Our Classes</h3>
              <p>Suspendisse tempus rhoncus enim pellentesque est vehicula vitae eget.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="about" class="py-lg-5 ">
    <div class="container-lg">
      <div class="row align-items-center">
      
        <div class="col-lg-6">
          <div class="detail-entry px-4">
            <h4 class="fs-6" data-aos="fade-right">OUR HERITAGE</h4>
            <h3 class="mt-0 mb-4 fs-2 " data-aos="fade-right">"The Most Exquisite Cinnamon, Rooted in Sri Lanka"</h3>
            <p data-aos="fade-right">At Ceyluxe, we source our cinnamon exclusively from Sri Lanka, home to the world’s finest true Ceylon cinnamon. Carefully harvested and expertly prepared, each bundle delivers a delicate aroma, natural sweetness, and uncompromising purity.</p>
            <p data-aos="fade-right">Guided by tradition and elevated by modern quality standards, our cinnamon is trusted for its rich flavor and proven health benefits—making it the conscious choice for those who value authenticity and excellence.</p>
            
            <a href="shop.php" data-aos="fade-right" class="btn btn-lg btn-dark">Know More</a>
          </div>
        </div>
          <div class="col-lg-6 mmt-50">
          <figure class="image-holder mb-5 jarallax" data-aos="fade-left">
            <img src="images/single-image2.jpg" alt="ceramic" class="jarallax-img">
          </figure>
        </div>
      </div>
    </div>
  </section>
   <!-- Product Slider start -->
    <?php include 'product-slider.php'; ?>
    <!-- Product Slider end -->
  <section id="video-player" class="video overflow-hidden position-relative mmt-50"
    style="background-image: url(images/video-item.jpg); background-repeat: no-repeat; background-position: center; background-attachment: fixed; width: 100%; height: 682px;">
    <div class="row">
      <div class="video-content">
        <div class="video-bg">
          <div
            class="player position-absolute top-50 start-50 translate-middle d-flex justify-content-center align-items-center">
            <a class='youtube play-btn d-flex justify-content-center align-items-center bg-white rounded-pill'
              href="https://www.youtube.com/watch?v=DzOcZlmeaH0">
              <svg class="play text-dark" width="32" height="42">
                <use xlink:href="#play"></use>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Best Sell start -->
    <?php include 'client-testomonial.php'; ?>
    <!-- Best Sell end -->
 
  <!-- Best Sell start -->
    <?php include 'img-slider.php'; ?>
    <!-- Best Sell end -->


  <!-- Best Sell start -->
    <?php include 'best-sell.php'; ?>
    <!-- Best Sell end -->



<section id="class" class="video overflow-hidden background-man position-relative">
  <div class="row">
    <div
      class="post-content position-absolute top-50 start-50 translate-middle d-flex justify-content-center align-items-center">
      <div class="display-header text-center text-light">
        <h2 class="display-6 m-0 text-light mb-3" data-aos="fade-up">Discover the Art of True Ceylon Cinnamon</h2>
        <p data-aos="fade-up">Explore the traditions, craftsmanship, and care behind Sri Lanka’s finest cinnamon.</p>
        <a href="blog.php" class="btn btn-lg btn-light mt-3" data-aos="fade-up">Learn More</a>
      </div>
    </div>
  </div>
</section>


  <!-- Best Sell start -->
    <?php include 'blogbox.php'; ?>
    <!-- Best Sell end -->

    <!-- Best Sell start -->
    <?php include 'insta.php'; ?>
    <!-- Best Sell end -->



    <!-- Footer start -->
    <?php include 'footer.php'; ?>
    <!-- Footer end -->

  <script src="js/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script>
    AOS.init({
    delay: 300,        // delay in milliseconds (300 = 0.3s)
    duration: 800,     // animation duration
             // animation happens only once
  });
</script>
</body>

</html>