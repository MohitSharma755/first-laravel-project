<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fruitables</title>

  <!-- Bootstrap css -->
  <link rel="stylesheet" href="./Bootstarp css/bootstrap.css">

  <!-- Custom css files -->
  <link rel="stylesheet" href="./Custom css/custom.css">

    
<!-- Bootstrap js file -->
<script src="./Bootsrap js/bootstrap.js"></script>
  

  <!-- Custom JS -->
  <script src="Customjs/index.js"></script>
  
  <!-- Custom css files -->
  <link rel="stylesheet" href="{{ asset('Custom css/custom.css') }}">

  <!-- Bootstrap css -->
  <link rel="stylesheet" href="{{ asset('public/Bootstrap css/bootstrap.css') }}">
 
<!-- {{-- Bootstrap js --}} -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('Custom js/index.js') }}"></script>
  

<!-- Jquery Cdn -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!--Font Awosome link  -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> -->
</head>
 

<div class="row">
    <div class="container official-background border  roundeds clearfix d-none">
        <div class="d-flex align-items-center height10vh  float-start">

            <div class=" d-flex">
                <!-- Location Icon -->
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-warning   " width="30" height="30"
                        viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="M16 3.5A7.5 7.5 0 0 0 8.5 11c0 4.143 7.5 18.12 7.5 18.12S23.5 15.144 23.5 11A7.5 7.5 0 0 0 16 3.5zm0 11.084a3.583 3.583 0 1 1 0-7.168a3.583 3.583 0 1 1 0 7.168z" />
                    </svg>

                    <small class="text-white  mt-1"> 123 Streat , New York</small>
                </div>
            </div>

            <div class="d-flex">
                <div class="">
                    <!-- Email Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" class="text-warning   ms-4"
                        viewBox="0 0 432 384">
                        <path fill="currentColor"
                            d="M384 21q18 0 30.5 12.5T427 64v256q0 18-12.5 30.5T384 363H43q-18 0-30.5-12.5T0 320V64q0-18 12.5-30.5T43 21h341zm0 86V64L213 171L43 64v43l170 106z" />
                    </svg>

                    <small class="text-white mt-1 col-2"> Email@example.com</small>
                </div>
            </div>
        </div>

        <div class="float-end d-flex align-items-center height20vh">
            <p class="text-white p-2">Privacy-policy /</p>
            <p class="text-white p-2">Terms of Use /</p>
            <p class="text-white p-2">Sales and Refund</p>
        </div>

    </div>
</div>

<!-- offcanvas search bar -->
<div class="offcanvas offcanvas-top" id="demo">
    <!-- Search box -->
    <div class="offcanvas-header">
        <h1 class="offcanvas-title">Search box</h1>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <!-- Search button -->
    <div class="offcanvas-body">
        <input type="Text">
        <button class="btn btn-secondary" type="button">Search </button>
    </div>
</div>
<!-- offcanvas end -->
 
<navbar class="navbar  navbar-expand-sm shadow-sm background-white sticky-top z-index">
  <div class="container-fluid">

    <a href="#" class="navbar-brand official-color">
      <h1>Fruitables</h1>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse   justify-content-between navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav w-100  justify-content-center">
        <!-- navbar start -->
        <li class="navbar-item mx-sm-3">
          <a href="index.php"
            class="text-decoration-none text-dark link-opacity-10">Home</a></li>
        <li class="navbar-item mx-sm-3"><a href="shop.php" class="text-decoration-none text-dark">Shop</a></li>
        <li class="navbar-item mx-sm-3"><a href="detail.php" class="text-decoration-none text-dark">Shop Detail</a>
        </li>
        <div class='dropdown nav-item'>

          <li class="navbar-item mx-sm-3">
            <a href="#" class="text-decoration-none text-dark dropdown-toggle">Pages</a>
          </li>

          <div class='dropdown-content'>
            <a href="cart.php" class="text-decoration-none text-dark">Cart</a>
            <a href="checkout.php" class="text-decoration-none text-dark">Checkout</a>
            <a href="testimonial.php" class="text-decoration-none text-dark">Testimonial</a>
            <a href="404page.php" class="text-decoration-none text-dark">404 Page</a>
            <a href="seller_registration.php" class="text-decoration-none text-dark">Seller Page</a>
            <a href="user_registration.php" class="text-decoration-none text-dark">User Page</a>
            <a href="seller_login.php" class="text-decoration-none text-dark">SellerLogin Page</a>
            <a href="user_login.php" class="text-decoration-none text-dark">UserLogin Page</a>
                      </div>

        </div>
        <li class="navbar-item mx-sm-3">
          <a href="contact.php" class="text-decoration-none textk text-dark">Contact</a>
        </li>
      </ul>


      <!-- Icon section start -->

      <div class="d-flex justify-content-center w25">
        <!-- First icon  -->
        <div class="mx-2 border border-warning rounded-circle search" data-bs-toggle="offcanvas" data-bs-target="#demo">
          <!-- Search Icon-->
          <svg xmlns="http://www.w3.org/2000/svg" width="40" class="official-color  mt-2" height="20"
            viewBox="0 0 14 14">
            <path fill="currentColor" fill-rule="evenodd"
              d="M2 6a4 4 0 1 1 8 0a4 4 0 0 1-8 0m4-6a6 6 0 1 0 3.476 10.89l2.817 2.817a1 1 0 0 0 1.414-1.414l-2.816-2.816A6 6 0 0 0 6 0"
              clip-rule="evenodd" />
          </svg>
        </div>


        <!-- Second Icon -->
        <div class="mx-1">
          <!-- Login Icon -->
           <a href="user_login.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="official-color" viewBox="0 0 582 1000">
            <path fill="currentColor"
              d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
          </svg>
          </a>
        </div>
        <!-- Third Icon -->
        <div class="dropdown">
                    <div class="mx-1 ">
                        <a href="seller_registration.php">
                            <!-- Registration Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 448 512"
                                class="official-color">
                                <path fill="currentColor"
                                    d="M224 256a128 128 0 1 0 0-256a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512h388.6c16.4 0 29.7-13.3 29.7-29.7c0-98.5-79.8-178.3-178.3-178.3h-91.4z" />
                            </svg></a>
                        <!-- <div class='dropdown-content'>
                            <a href="user_registration.php" class="btn text-dark">User <br> Registration</a>
                            <a href="seller_registration.php" class="btn text-dark">Become a <br> Seller</a>

                        </div> -->
                    </div>
                </div>
        <!--  -->
        <!-- Icon section end -->
      </div>
    </div>
  </div>
</navbar>