

<!DOCTYPE html>

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Fruitables</title>
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Custom css files -->
     <link rel="stylesheet" href="{{ asset('Custom css/custom.css') }}">

     <!-- Bootstrap css -->
     <link rel="stylesheet" href="{{ asset('Bootstrap css/bootstrap.css') }}">

     <!-- {{-- Bootstrap js --}} -->
     <script src="{{ asset('js/bootstrap.js') }}"></script>
     <script src="{{ asset('Custom js/index.js') }}"></script>
     <!-- <script src="{{ asset('js/custom.js') }}"></script> -->
     <!-- Jquery CDN -->
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->



     <!-- Custom JS -->
     <!-- <script src="./Customjs/index.js"></script>
  <script src="productajax.js"></script> -->
     <!-- <script src="cartinsert.js"></script> -->


 </head>






 <div class="background-white hidden">
     <div class="container official-background border  roundeds clearfix ">
         <div class="d-flex align-items-center height10vh  float-start">

             <div class="d-flex">
                 <!-- Location Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="text-warning  " width="30" height="30"
                     viewBox="0 0 32 32">
                     <path fill="currentColor"
                         d="M16 3.5A7.5 7.5 0 0 0 8.5 11c0 4.143 7.5 18.12 7.5 18.12S23.5 15.144 23.5 11A7.5 7.5 0 0 0 16 3.5zm0 11.084a3.583 3.583 0 1 1 0-7.168a3.583 3.583 0 1 1 0 7.168z" />
                 </svg>

                 <small class="text-white mt-1"> 123 Streat , New York</small>
             </div>

             <div class="d-flex ">
                 <!-- Email Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" class="text-warning p-1 ms-3 "
                     viewBox="0 0 432 384">
                     <path fill="currentColor"
                         d="M384 21q18 0 30.5 12.5T427 64v256q0 18-12.5 30.5T384 363H43q-18 0-30.5-12.5T0 320V64q0-18 12.5-30.5T43 21h341zm0 86V64L213 171L43 64v43l170 106z" />
                 </svg>

                 <small class="text-white mt-1">Email@Example.com</small>
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


 <!-- navbar start -->
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

                 <li class="navbar-item mx-sm-3">
                     <a href="{{ route('welcome') }}" class="text-decoration-none text-dark link-opacity-10">Home</a>
                 </li>
                 <li class="navbar-item mx-sm-3"><a href="{{ route('shop') }}"
                         class="text-decoration-none text-dark">Shop</a></li>
                 <li class="navbar-item mx-sm-3"><a href="{{ route('detail') }}"
                         class="text-decoration-none text-dark">Shop Detail</a>
                 </li>
                 <div class='dropdown nav-item'>

                     <li class="navbar-item mx-sm-3">
                         <a href="" class="text-decoration-none text-dark dropdown-toggle">Pages</a>
                     </li>

                     <div class='dropdown-content'>
                         <a href="{{ route('cart') }}" class="text-decoration-none text-dark">Cart</a>
                         <a href="{{ route('checkout') }}" class="text-decoration-none text-dark">Checkout</a>
                         <a href="{{ route('testimonial') }}" class="text-decoration-none text-dark">Testimonial</a>
                         <a href="{{ route('404') }}" class="text-decoration-none text-dark">404 Page</a>
                         <a href="{{ route('seller') }}" class="text-decoration-none text-dark">Seller Page</a>
                         <a href="{{ route('user_registration') }}" class="text-decoration-none text-dark">User
                             Page</a>
                         <a href="{{ route('loginseller') }}" class="text-decoration-none text-dark">SellerLogin
                             Page</a>
                         <a href="{{ route('loginuser') }}" class="text-decoration-none text-dark">UserLogin Page</a>
                     </div>

                 </div>
                 <li class="navbar-item mx-sm-3">
                     <a href="{{ route('contact') }}" class="text-decoration-none textk text-dark">Contact</a>
                 </li>
             </ul>


             <!-- Icon section start -->

             <div class="d-flex justify-content-center w25">
                 <!-- First icon  -->
                 <div class="mx-2 border border-warning rounded-circle search" data-bs-toggle="offcanvas"
                     data-bs-target="#demo">
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
                     <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="official-color"
                         viewBox="0 0 582 1000">
                         <path fill="currentColor"
                             d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                     </svg>
                 </div>
                 <!-- Third Icon -->
                 <div class="mx-1">
                     <a href="{{ route('user_registration') }}">
                         <!-- Registration Icon -->
                         <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 448 512"
                             class="official-color">
                             <path fill="currentColor"
                                 d="M224 256a128 128 0 1 0 0-256a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512h388.6c16.4 0 29.7-13.3 29.7-29.7c0-98.5-79.8-178.3-178.3-178.3h-91.4z" />
                         </svg></a>
                 </div>
                 <!-- Icon section end -->
             </div>
         </div>
     </div>
 </navbar>
 <!-- Navbar close -->

 <!-- Background Image section -->

 <div class="background_img">
     <!-- <div class="overlay"></div> -->
     <div class="container py-5 px-5 row  ">
         <div class="col-xl-7 col-md-7 col-lg-7 col-sm-12">
             <h3 class="text-warning ">100% Organic Foods</h3>
             <h1 class="official-color text">Organic Veggies & Fruit Foods</h1>
             <form action="" class="navbar-form">


                 <div class="position-relative ">
                     <!-- border-rounded-end -->
                     <input type="number" placeholder="search"
                         class="form-control border-2 border-warning w-75 py-3 px-4 rounded-pill">
                     <button
                         class=" text-white btns border border-warning py-3 px-5 position-absolute rounded-pill text-white h-100 "
                         type="submit" style="top:0; right:25%">Submit Now </button>
                 </div>

             </form>
         </div>
         <!-- carousl code start -->
         <div class=" col-xl-5 col-md-5  col-lg-5 col-sm-12">
             <div class="d-flex justify-content-center align-items-center">
                 <div id="demo" class="carousel slide" data-bs-ride="carousel">

                     <!-- Indicators/dots -->
                     <div class="carousel-indicators">
                         <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                         <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                         <!-- <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button> -->
                     </div>

                     <!-- The slideshow/carousel -->
                     <div class="carousel-inner">

                         <!-- First Image -->
                         <div class="carousel-item active">
                             <!-- " 'images/image/1.jpg') }}" -->
                             <img src=" {{ asset('images/image/hero-img-1.png') }}" alt="Los Angeles"
                                 class=" bg-safron rounded w-100">
                             <div class="carousel-caption">
                                 <h3>Fruits</h3>

                             </div>
                         </div>

                         <!-- Seconde Image -->
                         <div class="carousel-item">
                             <img src=" {{ asset('images/image/hero-img-2.jpg') }}" alt="Chicago"
                                 class=" rounded w-100">
                             <div class="carousel-caption">
                                 <h3>vegetable</h3>

                             </div>
                         </div>



                     </div>

                     <!-- Left and right controls/icons -->
                     <button
                         class="carousel-control-prev border border-white  rounded-circle h-10 mt-5  official-background"
                         type="button" data-bs-target="#demo" data-bs-slide="prev">
                         <span class="carousel-control-prev-icon"></span>
                     </button>

                     <button
                         class="carousel-control-next border border-white  rounded-circle h-10 mt-5  official-background"
                         type="button" data-bs-target="#demo" data-bs-slide="next">
                         <span class="carousel-control-next-icon"></span>
                     </button>
                 </div>
             </div>
         </div>
         <!-- Carousl end -->
     </div>
 </div>


 <!-- Background image End -->

 <!-- four images section -->
 <div class=" container py-5 ">
     <div class=" row container py-5">

         <!-- car section start -->
         <div class="  rounded  col-lg-6 col-sm-12 col-md-6 col-xl-3  mt-5">
             <span class=" bg-light d-flex justify-content-center align-items-center height25">
                 <div class="four-border">
                     <!-- Car Icon -->
                     <svg xmlns="http://www.w3.org/2000/svg" width="150" height="100" class="text-white"
                         viewBox="0 0 24 24">
                         <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2"
                             d="M17 11h2a2 2 0 0 1 2 2v2a1 1 0 0 1-1 1h-1.5M17 11h-6.5m6.5 0l-2.417-4.029A2 2 0 0 0 12.868 6H10.5m0 0v5m0-5H7.64a2 2 0 0 0-1.962 1.608L5 11m5.5 0H5m.5 5H4a1 1 0 0 1-1-1v-2a2 2 0 0 1 2-2v0m.5 5a2 2 0 1 0 4 0m-4 0a2 2 0 1 1 4 0m0 0h5m0 0a2 2 0 1 0 4 0m-4 0a2 2 0 1 1 4 0" />
                     </svg>
                 </div>
             </span>
             <div class="d-flex flex-wrap justify-content-center text-secondary bg-light">
                 <h5>Free Shipping</h5>
                 <p>Free on order over $300</p>
             </div>
         </div>
         <!--  Car section end -->

         <!-- Payment section start -->
         <div class=" col-lg-6 col-sm-12 col-md-6 col-xl-3 mt-5 rounded ">
             <span class="d-flex justify-content-center align-items-center height25 bg-light">
                 <div class="four-border">
                     <!-- Security Payment icon -->
                     <svg xmlns="http://www.w3.org/2000/svg" width="50" height="100" class="text-white"
                         viewBox="0 0 640 512">
                         <path fill="currentColor"
                             d="M224 256a128 128 0 1 0 0-256a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512h388.6c1.8 0 3.5-.2 5.3-.5c-76.3-55.1-99.8-141-103.1-200.2c-16.1-4.8-33.1-7.3-50.7-7.3h-91.5zm308.8-78.3l-120 48C358 277.4 352 286.2 352 296c0 63.3 25.9 168.8 134.8 214.2c5.9 2.5 12.6 2.5 18.5 0C614.1 464.8 640 359.3 640 296c0-9.8-6-18.6-15.1-22.3l-120-48c-5.7-2.3-12.1-2.3-17.8 0zM591.4 312c-3.9 50.7-27.2 116.7-95.4 149.7V273.8l95.4 38.2z" />
                     </svg>
                 </div>
             </span>
             <div class="bg-light d-flex flex-wrap justify-content-center text-secondary">
                 <h5>Security Payment</h5>
                 <p>100% sSecurity</p>
             </div>
         </div>
         <!-- Payment section end -->

         <!-- Exchange section start -->
         <div class="  col-lg-6 col-sm-12 col-md-6 col-xl-3 mt-5 rounded">
             <span class=" bg-light d-flex justify-content-center align-items-center height25">
                 <div class="four-border">
                     <!-- Exchange Icon -->
                     <svg xmlns="http://www.w3.org/2000/svg" width="80" height="100" viewBox="0 0 16 16"
                         class="text-white">
                         <path fill="currentColor" d="M16 5v2H3v2L0 6l3-3v2zM0 12v-2h13V8l3 3l-3 3v-2z" />
                     </svg>
                 </div>
             </span>
             <div class="d-flex flex-wrap justify-content-center bg-light text-secondary">
                 <h5>Exchange</h5>
                 <p>30 day money back guarantee</p>
             </div>
         </div>
         <!-- Exchange section end -->

         <!-- 24/7 section  -->
         <div class=" col-lg-6 col-sm-12 col-md-6 col-xl-3 mt-5   rounded  ">
             <span class="bg-light d-flex justify-content-center align-items-center height25">
                 <div class="four-border">
                     <!-- call icon -->
                     <svg xmlns="http://www.w3.org/2000/svg" width="50" height="100" viewBox="0 0 384 384"
                         class="text-white">
                         <path fill="currentColor"
                             d="M77 166q47 93 141 141l47-47q9-10 22-5q36 12 76 12q8 0 14.5 6t6.5 15v75q0 8-6.5 14.5T363 384q-99 0-182.5-48.5t-132-132T0 21q0-8 6.5-14.5T21 0h75q9 0 15 6.5t6 14.5q0 40 12 76q4 13-5 22z" />
                     </svg>
                 </div>
             </span>
             <div class="d-flex flex-wrap  bg-light justify-content-center text-secondary">
                 <h5>Contact Us</h5>
                 <p>Support every time fast</p>
             </div>


         </div>
         <!-- 24/7 close  -->
     </div>
 </div>
 <!-- Four images section close -->



 <!-- First secion start -->
 <div class="container clearfix py-5 ">
     <div class=" row align-items-center">

         <div class="col-xl-3  col-lg-3 col-md-3 col-sm-12">
             <h1 class=" h-color">Our Organic Product</h1>
         </div>

         <!-- tablist start -->
         <ul class="nav nav-pills   d-flex align-items-center my-3 col-lg-9  col-md-9 col-xl-9" role="tablist">
             <div class=" row">
                 <li class="nav-item  col-xl-3 col-sm-12 col-lg-3 ">
                     <a class="five-index-btn-background px-4 " data-bs-toggle="pill" href="#allproduct">All
                         Products</a>

                 </li>

                 <li class="nav-item   col-sm-12 col-xl-3 col-lg-3  mt-2 ">
                     <a class="five-index-btn-background px-4 border border-white" data-bs-toggle="pill"
                         href="#menu1">Vegitables</a>
                 </li>


                 <li class="nav-item  col-sm-12 col-xl-2 col-lg-2  mt-2">
                     <a class="five-index-btn-background px-4 border border-white" data-bs-toggle="pill"
                         href="#fruit">Fruits</a>
                 </li>


                 <li class="nav-item  col-sm-12 col-xl-2 col-lg-2  mt-2">
                     <a class="five-index-btn-background px-4 border border-white" data-bs-toggle="pill"
                         href="#bread">Bread</a>
                 </li>
                 <li class="nav-item   col-xl-2 col-sm-12 mt-2 col-lg-2">
                     <a class="five-index-btn-background px-4" data-bs-toggle="pill" href="#meal">Meal</a>
                 </li>
         </ul>
         <!-- tablist end -->
     </div>
 </div>
 </div>
 <!-- first section close -->


 <!-- second section start -->
 <div class="w-100">


     <div class="tab-content">
         <div id="allproduct" class="container tab-pane active">

             <h3>All product</h3>
             <div id="allproduct">
                 <div id="product" class="row border border-dark">
                     <div class="col-lg-6 col-sm-6 col-md-6 col-xl-3 p-2">
                         @foreach ($products as $product)
                             <img src="upload/user/{{ $product->photo }}" alt="no image found"
                                 class="img-fluid rounded-top">
                             <div class=" border border-warning " style="border-top: none !important;">
                                 <h3 class="text-center p-2 h-color">{{ $product->name }}</h3>
                                 <p class="p-3">{{ $product->description }}
                                 <h3 class="h-colo ms-3">{{ $product->rate . 'kg' }}</h3>
                                 <div
                                     class="d-flex border border-warning cart rounded-5 p-1 w-50 justify-content-center m-3">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30"
                                         class="official-color " viewBox="0 0 582 1000">
                                         <path fill="currentColor"
                                             d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                                     </svg>
                                    {{--  <form action="cartinsert/{{$product->productid}}" method="post">
                                        @csrf
                                        <button type="submit" href="cartinsert/{{$product->productid}}">Add to cart</button>  --}}
                                        {{--  <input type="submit" value="Add to Cart" href="cartinsert/{{$product->productid}}" class="text-decoration-none bg-transparent border-0   px-1 cart">  --}}
                                        <a href="{{url('cartinsert/'.$product->productid)}}" class="btn cart px-1" >Add to cart</a>
                                    {{--  </form>  --}}
                                 </div>
                             </div>
                         @endforeach
                     </div>

                 </div>


             </div>
         </div>
     </div>
     <!-- home id close -->
 </div>
 <div class="tab-content">
     <div id="menu1" class="container tab-pane fade">
         <h3>Vegitables</h3>
         <div id="menu1" class="row">
             <!-- first slide -->
             <div class="col-lg-6 col-sm-6 col-md-6 col-xl-3 p-2">
                 <img src=" {{ asset('images/frimage/fruite-item-5.jpg') }}" class="img-fluid rounded-top">
                 <div class=" border border-warning " style="border-top: none !important;">
                     <h3 class="text-center p-2 h-color">Grapes</h3>
                     <p class="p-3">


                         Grapes grow in clusters, like tiny jewels on a vine.
                         Green, red, or purple, their sweetness makes them a treat divine.
                         Packed with vitamins, they're a healthy and refreshing snack.
                         From juicy eating to jams and wines, their uses never lack.
                         So next time you're thirsty, pop a grape and enjoy the delightful crack!
                     <h3 class="h-colo ms-3">$4.99 / kg</h3>
                     <div class="d-flex border border-warning cart rounded-5 p-1 w-50 justify-content-center m-3">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30"
                             class="official-color " viewBox="0 0 582 1000">
                             <path fill="currentColor"
                                 d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                         </svg>
                         <a href="cart.php" class="text-decoration-none   px-1 cart">Add to cart</a>
                     </div>
                 </div>
             </div>
             <!-- second slide -->
             <div class=" col-lg-6 col-sm-6 col-md-6 col-xl-3 p-2">
                 <img src=" {{ asset('images/frimage/fruite-item-2.jpg') }}" class="img-fluid rounded-top  ">
                 <div class=" border border-warning " style="border-top: none !important;">
                     <h3 class="text-center p-2 h-color">Raspberries</h3>
                     <p class="p-3">
                         Tiny red jewels, raspberries burst with sweet and tart flavor.
                         Delicate and delicious, they're perfect fresh or in jams and pies.
                         Rich in vitamins, these summer berries are a healthy indulgence.Their prickly canes make
                         picking an
                         adventure, rewarding your patience with a taste sensation.

                     <h3 class="h-color">$4.99 / kg</h3>
                     <div class="d-flex border border-warning cart rounded-5 p-1 w-50 justify-content-center m-3">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30"
                             class="official-color" viewBox="0 0 582 1000">
                             <path fill="currentColor"
                                 d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                         </svg>
                         <a href="cart.php" class="text-decoration-none   px-1 cart">Add to cart</a>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </div>

 <div class="tab-content">
     <div id="fruit" class="container tab-pane active">
         <h3>Fruits</h3>


         <div id="fruit" class="row ">
             <!-- first slide -->

             <div class=" col-lg-6 col-sm-6 col-md-6 col-xl-3 p-2">
                 <img src=" {{ asset('images/frimage/fruite-item-1.jpg') }}" class="img-fluid rounded-top  ">
                 <div class=" border border-warning " style="border-top: none !important;">
                     <h3 class="text-center p-2 h-color">Orange</h3>
                     <p class="p-3">
                         The sunshine fruit, oranges boast a vibrant orange rind and juicy, sweet flesh.
                         Packed with Vitamin C, they're a delicious way to boost your immune system.It must eat
                     <h3 class="h-color">$4.99 / kg</h3>
                     <div class="d-flex border border-warning cart rounded-5 p-1 w-50 justify-content-center m-3">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30"
                             class="official-color" viewBox="0 0 582 1000">
                             <path fill="currentColor"
                                 d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                         </svg>
                         <a href="cart.php" class="text-decoration-none   px-1 cart">Add to cart</a>
                     </div>
                 </div>
             </div>
             <!-- second slide -->
             <div class=" col-lg-6 col-sm-6 col-md-6 col-xl-3 p-2">
                 <img src=" {{ asset('images/frimage/fruite-item-6.jpg') }}" class="img-fluid rounded-top  ">
                 <div class=" border border-warning " style="border-top: none !important;">
                     <h3 class="text-center p-2 h-color">Apple</h3>
                     <p class="p-3">
                         Crisp and colorful, apples hang from branches, a harvest delight.
                         Red, green, or yellow, their sweet and tangy flesh takes a satisfying bite.
                         Packed with fiber and vitamins, a .

                     <h3 class="h-color">$4.99 / kg</h3>
                     <div class="d-flex border border-warning cart rounded-5 p-1 w-50 justify-content-center m-3">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30"
                             class="official-color" viewBox="0 0 582 1000">
                             <path fill="currentColor"
                                 d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                         </svg>
                         <a href="cart.php" class="text-decoration-none   px-1 cart">Add to cart</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- fruit id close -->

     <div id="bread" class="container tab-pane fade"><br>
         <h3>Bread</h3>
         <div id="bread" class="row ">
             <!-- first slide -->

             <div class=" col-lg-6 col-sm-6 col-md-6 col-xl-3 p-2">
                 <img src=" {{ asset('images/frimage/fruite-item-5.jpg') }}" class="img-fluid rounded-top  ">
                 <div class=" border border-warning " style="border-top: none !important;">
                     <h3 class="text-center p-2 h-color">Grapes</h3>
                     <p class="p-3">


                         Grapes grow in clusters, like tiny jewels on a vine.
                         Green, red, or purple, their sweetness makes them a treat divine.
                         Packed with vitamins, they're a healthy and refreshing snack.
                         From juicy eating to jams and wines, their uses never lack.
                         So next time you're thirsty, pop a grape and enjoy the delightful crack!
                     <h3 class="h-color">$4.99 / kg</h3>
                     <div class="d-flex border border-warning cart rounded-5 p-1 w-50 justify-content-center m-3">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30"
                             class="official-color" viewBox="0 0 582 1000">
                             <path fill="currentColor"
                                 d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                         </svg>
                         <a href="cart.php" class="text-decoration-none   px-1 cart">Add to cart</a>
                     </div>
                 </div>
             </div>
             <!-- second slide -->
             <div class=" col-lg-6 col-sm-6 col-md-6 col-xl-3 p-2">
                 <img src=" {{ asset('images/frimage/fruite-item-4.jpg') }}" class="img-fluid rounded-top  ">
                 <div class=" border border-warning " style="border-top: none !important;">
                     <h3 class="text-center p-2 h-color">Appricoat</h3>
                     <p class="p-3">
                         Sun-kissed and velvety, apricots boast a golden orange hue.
                         Sweet and juicy, they offer a taste of summer sunshine in every bite.
                         Enjoy them fresh, dried, or in jams, their deliciousness shines through.
                         Their delicate aroma hints at their sweetness, a promise fulfilled with the first taste.
                         <!-- Although enjoyed in warmer months, their shelf life can be extended through drying or preserving, offering a taste of summer year-round. -->
                     <h3 class="h-color">$4.99 / kg</h3>
                     <div class="d-flex border border-warning cart rounded-5 p-1 w-50 justify-content-center m-3">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30"
                             class="official-color" viewBox="0 0 582 1000">
                             <path fill="currentColor"
                                 d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                         </svg>
                         <a href="cart.php" class="text-decoration-none   px-1 cart">Add to cart</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- bread id close -->

 <div id="meal" class="container tab-pane fade"><br>
     <h3>Meal</h3>
     <div id="meal" class="row">
         <!-- first slide -->
         <div class=" col-lg-6 col-sm-6 col-md-6 col-xl-3 p-2">
             <img src=" {{ asset('images/frimage/fruite-item-3.jpg') }}" class="img-fluid rounded-top  ">
             <div class=" border border-warning " style="border-top: none !important;">
                 <h3 class="text-center p-2 h-color">Banana</h3>
                 <p class="p-3">
                     The humble banana, a curved yellow friend, provides a potassium punch that never ends.
                     Creamy and sweet, its peel unfolds to reveal a delightful snack.
                     Perfect on its own or .
                 <h3 class="h-color">$4.99 / kg</h3>
                 <div class="d-flex border border-warning cart rounded-5 p-1 w-50 justify-content-center m-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" class="official-color"
                         viewBox="0 0 582 1000">
                         <path fill="currentColor"
                             d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                     </svg>
                     <a href="cart.php" class="text-decoration-none   px-1 cart">Add to cart</a>
                 </div>
             </div>
         </div>
         <!-- second slide -->

         <div class=" col-lg-6 col-sm-6 col-md-6 col-xl-3 p-2">
             <img src=" {{ asset('images/frimage/fruite-item-2.jpg') }}" class="img-fluid rounded-top  ">
             <div class=" border border-warning " style="border-top: none !important;">
                 <h3 class="text-center p-2 h-color">Raspberries</h3>
                 <p class="p-3">
                     Tiny red jewels, raspberries burst with sweet and tart flavor.
                     Delicate and delicious, they're perfect fresh or in jams and pies.
                     Rich in vitamins, these summer berries are a healthy .
                 <h3 class="h-color">$4.99 / kg</h3>
                 <div class="d-flex border border-warning cart rounded-5 p-1 w-50 justify-content-center m-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" class="official-color"
                         viewBox="0 0 582 1000">
                         <path fill="currentColor"
                             d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                     </svg>
                     <a href="cart.php" class="text-decoration-none   px-1 cart">Add to cart</a>
                 </div>
             </div>
         </div>
         <!-- second slide -->
         <div class=" col-lg-6 col-sm-6 col-md-6 col-xl-3 p-2">
             <img src=" {{ asset('images/frimage/fruite-item-1.jpg') }}" class="img-fluid rounded-top  ">
             <div class=" border border-warning " style="border-top: none !important;">
                 <h3 class="text-center p-2 h-color">Orange</h3>
                 <p class="p-3">
                     The sunshine fruit, oranges boast a vibrant orange rind and juicy, sweet flesh.
                     Packed with Vitamin C, they're a delicious way to boost your immune system.It must eat
                 <h3 class="h-color">$4.99 / kg</h3>
                 <div class="d-flex border border-warning cart rounded-5 p-1 w-50 justify-content-center m-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" class="official-color"
                         viewBox="0 0 582 1000">
                         <path fill="currentColor"
                             d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                     </svg>
                     <a href="cart.php" class="text-decoration-none   px-1 cart">Add to cart</a>
                 </div>
             </div>
         </div>
     </div>

 </div>

 </div>
 <!-- </div>

  </div>
  </div> -->

 <!-- three imge section start -->
 <div class="container  d-flex  ">
     <!-- First vegetable -->
     <div class="row">
         <div class="col-sm-12 col-lg-4">
             <div class="m-2">
                 <a href="" class="text-decoration-none">
                     <img src=" {{ asset('images/frimage/featur-1.jpg') }}"
                         class="img-fluid w-100  border border-warning rounded-top " alt="">
                     <span class="d-flex justify-content-center align-items-center">
                         <div class="overlay-fruit w-20 rounded ">
                             <h4 class="">Fresh Apples</h4>
                             <h4 class="h-color">20% OFF</h4>
                         </div>
                     </span>
                     <div class="bg-safron d-inline-block w-100 rounded-bottom" style="height:8rem"></div>
                 </a>
             </div>

             <!-- first vegetable end -->
         </div>
         <div class=" col-lg-4">
             <!-- second vegetable start -->
             <div class=" m-2 col-sm-12">
                 <a href="">
                     <img src=" {{ asset('images/frimage/featur-2.jpg') }}"
                         class="img-fluid w-100 border border-dark rounded-top " alt="">
                     <span class="d-flex justify-content-center align-items-center">
                         <div class="overlay-white bg-light w-20 rounded  ">
                             <h4 class="official-color">Tasty Fruits</h4>
                             <h3 class="h-color">Free delivery</h3>
                         </div>
                     </span>
                     <div class="bg-secondary d-inline-block w-100 rounded-bottom" style="height:8rem"></div>
                 </a>
             </div>
             <!-- second vegetable end -->
         </div>
         <div class="col-sm-12  col-lg-4">
             <!-- third vegetable start -->
             <div class=" m-2">
                 <a href="">
                     <img src=" {{ asset('images/frimage/featur-3.jpg') }}"
                         class="img-fluid w-100 border border-success rounded-top " alt="">
                     <span class="d-flex justify-content-center align-items-center">
                         <div class="overlay-warning  bg-warning w-20 rounded ">
                             <h4>Exotic Vegitables</h4>
                             <h3 class="h-color"> Discount 30$</h3>
                         </div>
                     </span>
                     <div class="official-background d-inline-block w-100 rounded-bottom" style="height:8rem"></div>
                 </a>
             </div>
             <!-- third vegetable end -->
         </div>
     </div>





 </div>

 <!-- three imge section end -->

 <!-- owl carousl start -->


 <div class="container-fluid">
     <div class="container">
         <h3 class="h-color display-5">Fresh Organic vegetables</h3>
         <div class="row mt-5 align-items-center h-100">
             <!-- first slide -->
             <div class="col-lg-6 col-sm-6 col-md-6 col-xl-3">
                 <div class="   rounded-2 border border-success">
                     <img src=" {{ asset('images/frimage/vegetable-item-1.jpg') }}" class="img-fluid rounded-top  ">
                     <div>
                         <h3 class="text-center p-2 h-color">Tamato</h3>
                         <p class="p-3">
                             The humble banana, a curved yellow friend, provides a potassium punch that never ends.
                             Creamy and sweet, its peel unfolds to reveal a delightful snack.

                         <h3 class="h-color">$4.99 / kg</h3>
                         <div class="d-flex border border-warning cart rounded-5 p-1 w-50 justify-content-center m-3">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30"
                                 class="official-color" viewBox="0 0 582 1000">
                                 <path fill="currentColor"
                                     d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                             </svg>
                             <a href="cart.php" class="text-decoration-none   px-1 cart">Add to cart</a>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- second slide -->

             <div class="col-lg-6 col-sm-6 col-md-6 col-xl-3">
                 <div class="  mt-sm-2 rounded-2 border border-success">
                     <img src=" {{ asset('images/frimage/vegetable-item-3.png') }}" class="img-fluid rounded-top  ">
                     <div>
                         <h3 class="text-center p-2 h-color">Banana</h3>
                         <p class="p-3">
                             Tiny red jewels, raspberries burst with sweet and tart flavor.
                             Delicate and delicious, they're perfect fresh or in jams and pies.
                             Rich in vitamins, these summer berries are a healthy.
                         <h3 class="h-color">$4.99 / kg</h3>
                         <div class="d-flex border border-warning cart rounded-5 p-1 w-50 justify-content-center m-3">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30"
                                 class="official-color" viewBox="0 0 582 1000">
                                 <path fill="currentColor"
                                     d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                             </svg>
                             <a href="cart.php" class="text-decoration-none   px-1 cart">Add to cart</a>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- third slide -->
             <div class="col-lg-6 col-sm-6 col-md-6 col-xl-3">
                 <div class="  rounded-2 border border-success">
                     <img src=" {{ asset('images/frimage/vegetable-item-4.jpg') }}" class="img-fluid rounded-top  ">
                     <div>
                         <h3 class="text-center p-2 h-color">Bell Paper</h3>
                         <p class="p-3">
                             The sunshine fruit, oranges boast a vibrant orange rind and juicy, sweet flesh.
                             Packed with Vitamin C, they're a delicious way to boost your immune system.It is very
                             chepast
                         <h3 class="h-color">$4.99 / kg</h3>
                         <div class="d-flex border border-warning cart rounded-5 p-1 w-50 justify-content-center m-3">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30"
                                 class="official-color" viewBox="0 0 582 1000">
                                 <path fill="currentColor"
                                     d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                             </svg>
                             <a href="cart.php" class="text-decoration-none   px-1 cart">Add to cart</a>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- fourth slide -->
             <div class="col-lg-6 col-sm-6 col-md-6 col-xl-3">
                 <div class="  rounded-2 border border-success">
                     <img src=" {{ asset('images/frimage/vegetable-item-5.jpg') }}" class="img-fluid rounded-top  ">
                     <div>
                         <h3 class="text-center p-2 h-color">Patato</h3>
                         <p class="p-3">
                             The sunshine fruit, oranges boast a vibrant orange rind and juicy, sweet flesh.
                             Packed with Vitamin C, they're a delicious way to boost your immune system.It is very
                             chepast
                         <h3 class="h-color">$4.99 / kg</h3>
                         <div class="d-flex border border-warning cart rounded-5 p-1 w-50 justify-content-center m-3">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30"
                                 class="official-color" viewBox="0 0 582 1000">
                                 <path fill="currentColor"
                                     d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                             </svg>
                             <a href="cart.php" class="text-decoration-none   px-1 cart">Add to cart</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- show section start -->
 <div class="d-flex  mt-5">
     <div class="w-100 d-flex bg-warning h-50 ">
         <div class=" d-flex   w-75 px-5 align-items-center">
             <div>
                 <h1 class="fresh">Fresh Exotic Fruits</h1>
                 <h1 class="store">in Our Store</h1>
                 <p class="h-color  w-100 family">The generated Lorem Ipsum is therefore always free from repetition
                     injected
                     <br> humour, or non-characteristic words etc.
                 </p>
                 <button class="btn rounded-5 border border-white h-color px-5 buy">BUY</button>
             </div>
         </div>
         <div class="">
             <div class="bg-white    d-flex align-items-center h-color overlaykg">
                 <h1 class="kg">1</h1>
                 <div class="d-flex flex-column">
                     <div class="font-size">50$</div>
                     <div class="font-size">kg</div>
                 </div>
             </div>
             <img src=" {{ asset('images/frimage/baner-1.png') }}" alt="" class="">
         </div>
     </div>
 </div>
 <!-- show close -->



 <!-- bestseller Products -->
 <div class="container  py-5">
     <div class="row ">
         <div>
             <h1 class="d-flex justify-content-center h-color ">Bestseller Products</h1>
             <span class="d-flex justify-content-center">
                 <p class="h-color text-center">Latin words, combined with a handful of model sentence structures, to
                     generate
                     Lorem
                     <span class="d-flex justify-content-center"> Ipsum which looks reasonable.</span>
                 </p>
             </span>
         </div>
     </div>
     <!--First section  -->
     <div class="row">
         <div class=" col-lg-4 col-xl-4 col-sm-12 bg-light ">
             <div class=" p-4 rounded">
                 <span class="row align-items-center">
                     <div class="col-6">
                         <img src=" {{ asset('images/frimage/fruite-item-1.jpg') }}" alt=""
                             class="img-fluid height25 rounded-circle w-100">
                     </div>
                     <div class="col-6">

                         <a href="" class="h5 text-decoration-none h-color">Organic <br> Orange</a>
                         <p>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                 viewBox="0 0 24 24">
                                 <path fill="currentColor"
                                     d="M12.86 10.44L11 6.06l-1.86 4.39l-4.75.41L8 14l-1.08 4.63L11 16.17l4.09 2.46L14 14l3.61-3.14l-4.75-.42m3.73 10.26L11 17.34L5.42 20.7l1.46-6.35l-4.92-4.28l6.49-.57l2.55-6l2.55 6l6.49.57l-4.92 4.27l1.47 6.36Z" />
                             </svg>


                         </p>
                         <h4 class="h-color">3.12$</h4>

                         <a href="" class=" border border-warning rounded-5  w-75 btn addtocart">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 582 1000">
                                 <path fill="currentColor"
                                     d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                             </svg> Add to cart</a>


                     </div>
                 </span>
             </div>

         </div>
         <!-- second -->
         <div class="col-lg-4 col-xl-4  col-sm-12 ">
             <div class="p-4 rounded bg-light ">
                 <div class="row align-items-center">
                     <div class="col-6">
                         <img src=" {{ asset('images/frimage/fruite-item-2.jpg') }}"
                             class="img-fluid rounded-circle w-100 height25" alt="">
                     </div>
                     <div class="col-6">
                         <a href="https://themewagon.github.io/fruitables/#"
                             class="h5 h-color text-decoration-none">Organic <br>
                             Raspberries</a>

                         <p>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                 viewBox="0 0 24 24">
                                 <path fill="currentColor"
                                     d="M12.86 10.44L11 6.06l-1.86 4.39l-4.75.41L8 14l-1.08 4.63L11 16.17l4.09 2.46L14 14l3.61-3.14l-4.75-.42m3.73 10.26L11 17.34L5.42 20.7l1.46-6.35l-4.92-4.28l6.49-.57l2.55-6l2.55 6l6.49.57l-4.92 4.27l1.47 6.36Z" />
                             </svg>


                         </p>
                         <h4 class="h-color">3.12 $</h4>
                         <a href="" class="btn border border-warning rounded-5  w-75 addtocart">

                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 582 1000">
                                 <path fill="currentColor"
                                     d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                             </svg> Add to cart</a>
                     </div>
                 </div>
             </div>
         </div>
         <!-- second close -->

         <!-- Third start -->
         <div class="col-lg-4 col-xl-4 col-sm-12 ">
             <div class="p-4 rounded bg-light ">
                 <div class="row align-items-center">
                     <div class="col-6">
                         <img src=" {{ asset('images/frimage/fruite-item-3.jpg') }}"
                             class="img-fluid height25 rounded-circle w-100" alt="">
                     </div>
                     <div class="col-6">
                         <a href="https://themewagon.github.io/fruitables/#"
                             class="h5 h-color text-decoration-none">Organic <br>
                             Banana</a>

                         <!-- Star icons -->
                         <p>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                 viewBox="0 0 24 24">
                                 <path fill="currentColor"
                                     d="M12.86 10.44L11 6.06l-1.86 4.39l-4.75.41L8 14l-1.08 4.63L11 16.17l4.09 2.46L14 14l3.61-3.14l-4.75-.42m3.73 10.26L11 17.34L5.42 20.7l1.46-6.35l-4.92-4.28l6.49-.57l2.55-6l2.55 6l6.49.57l-4.92 4.27l1.47 6.36Z" />
                             </svg>


                         </p>
                         <h4 class="h-color">3.12 $</h4>
                         <a href="" class="btn border border-warning rounded-5  w-75 addtocart">

                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 582 1000">
                                 <path fill="currentColor"
                                     d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                             </svg> Add to cart</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- first section close -->

     <!-- Second section start -->
     <div class="row my-4">
         <div class="col-lg-4 col-xl-4 col-sm-12">
             <!-- first slide -->
             <div class="bg-light p-4 rounded">
                 <span class="row align-items-center">
                     <div class="col-6">
                         <img src=" {{ asset('images/frimage/fruite-item-4.jpg') }}" alt=""
                             class="img-fluid height25 rounded-circle ">
                     </div>
                     <div class="col-6">

                         <a href="" class="h5 text-decoration-none h-color">Organic <br> Appricoat</a>
                         <p>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                 viewBox="0 0 24 24">
                                 <path fill="currentColor"
                                     d="M12.86 10.44L11 6.06l-1.86 4.39l-4.75.41L8 14l-1.08 4.63L11 16.17l4.09 2.46L14 14l3.61-3.14l-4.75-.42m3.73 10.26L11 17.34L5.42 20.7l1.46-6.35l-4.92-4.28l6.49-.57l2.55-6l2.55 6l6.49.57l-4.92 4.27l1.47 6.36Z" />
                             </svg>


                         </p>
                         <h4 class="h-color">3.12$</h4>

                         <a href=""
                             class="text-decoration-none border border-warning rounded-5 w-75 btn addtocart">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 582 1000">
                                 <path fill="currentColor"
                                     d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                             </svg> Add to cart</a>


                     </div>
                 </span>
             </div>
             <!-- First slide close -->
         </div>
         <!-- second slide-->
         <div class="col-lg-4 col-xl-4 col-sm-12">
             <div class="p-4 rounded bg-light ">
                 <div class="row align-items-center">
                     <div class="col-6">
                         <img src=" {{ asset('images/frimage/fruite-item-5.jpg') }}"
                             class="img-fluid rounded-circle w-100 height25" alt="">
                     </div>
                     <div class="col-6">
                         <a href="https://themewagon.github.io/fruitables/#"
                             class="h5 h-color text-decoration-none">Organic <br>
                             Grapes</a>

                         <p>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                 viewBox="0 0 24 24">
                                 <path fill="currentColor"
                                     d="M12.86 10.44L11 6.06l-1.86 4.39l-4.75.41L8 14l-1.08 4.63L11 16.17l4.09 2.46L14 14l3.61-3.14l-4.75-.42m3.73 10.26L11 17.34L5.42 20.7l1.46-6.35l-4.92-4.28l6.49-.57l2.55-6l2.55 6l6.49.57l-4.92 4.27l1.47 6.36Z" />
                             </svg>


                         </p>
                         <h4 class="h-color">3.12 $</h4>
                         <a href="" class="btn border border-warning rounded-5  w-75 addtocart">

                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 582 1000">
                                 <path fill="currentColor"
                                     d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                             </svg> Add to cart</a>
                     </div>
                 </div>
             </div>
         </div>
         <!-- second slide close -->

         <!-- Third slide start -->
         <div class="col-lg-4 col-xl-4 col-sm-12 ">
             <div class="p-4 rounded bg-light ">
                 <div class="row align-items-center">
                     <div class="col-6">
                         <img src=" {{ asset('images/frimage/fruite-item-6.jpg') }}"
                             class="img-fluid height25 rounded-circle w-100" alt="">
                     </div>
                     <div class="col-6">
                         <a href="https://themewagon.github.io/fruitables/#"
                             class="h5 h-color text-decoration-none">Organic <br>
                             Apple</a>

                         <p>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                 viewBox="0 0 24 24">
                                 <path fill="currentColor"
                                     d="M12.86 10.44L11 6.06l-1.86 4.39l-4.75.41L8 14l-1.08 4.63L11 16.17l4.09 2.46L14 14l3.61-3.14l-4.75-.42m3.73 10.26L11 17.34L5.42 20.7l1.46-6.35l-4.92-4.28l6.49-.57l2.55-6l2.55 6l6.49.57l-4.92 4.27l1.47 6.36Z" />
                             </svg>


                         </p>
                         <h4 class="h-color">3.12 $</h4>
                         <a href="" class="btn border border-warning rounded-5  w-75 addtocart">

                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 582 1000">
                                 <path fill="currentColor"
                                     d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                             </svg> Add to cart</a>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Third slide close -->
     </div>
     <!-- Second section end -->


     <!-- Third section start -->
     <div class="row">
         <div class="col-lg-6 col-xl-3 col-sm-3">
             <img src=" {{ asset('images/frimage/fruite-item-1.jpg') }}" alt="no image"
                 class="image-fluid rounded col-12">
             <div class="d-flex justify-content-center">
                 <div class="col-6 mt-3">
                     <a href="https://themewagon.github.io/fruitables/#" class=" h-color text-decoration-none">Organic
                         Orange </a>

                     <p class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color p-0" viewBox="0 0 15 15">
                             <path fill="currentColor" d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                         </svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color" viewBox="0 0 15 15">
                             <path fill="currentColor" d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                         </svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color" viewBox="0 0 15 15">
                             <path fill="currentColor" d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                         </svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color" viewBox="0 0 15 15">
                             <path fill="currentColor" d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                         </svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="h-color"
                             viewBox="0 0 432 408">
                             <path fill="currentColor"
                                 d="M213 328L81 408l35-150L0 157l153-13L213 3l60 141l154 13l-117 101l35 150z" />
                         </svg>

                     </p>

                     <h4 class="h-color text-center">3.12 $</h4>
                     <a href="" class="btn border border-warning rounded-5  addtocart">

                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color" viewBox="0 0 582 1000">
                             <path fill="currentColor"
                                 d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                         </svg> Add to cart</a>
                 </div>
             </div>
         </div>
         <!-- Second slide -->
         <div class="col-lg-6 col-xl-3 col-sm-3">
             <img src=" {{ asset('images/frimage/fruite-item-2.jpg') }}" alt="no image"
                 class="image-fluid rounded col-12">
             <div class="d-flex justify-content-center">
                 <div class="col-6 mt-3">
                     <a href="https://themewagon.github.io/fruitables/#"
                         class="h5 h-color text-decoration-none">Organic
                         Raspberries</a>

                     <p class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color p-0" viewBox="0 0 15 15">
                             <path fill="currentColor" d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                         </svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color" viewBox="0 0 15 15">
                             <path fill="currentColor" d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                         </svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color" viewBox="0 0 15 15">
                             <path fill="currentColor" d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                         </svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color" viewBox="0 0 15 15">
                             <path fill="currentColor" d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                         </svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="h-color"
                             viewBox="0 0 432 408">
                             <path fill="currentColor"
                                 d="M213 328L81 408l35-150L0 157l153-13L213 3l60 141l154 13l-117 101l35 150z" />
                         </svg>

                     </p>

                     <h4 class="h-color text-center">3.12 $</h4>
                     <a href="" class="btn border border-warning rounded-5  addtocart">

                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color" viewBox="0 0 582 1000">
                             <path fill="currentColor"
                                 d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                         </svg> Add to cart</a>
                 </div>
             </div>
         </div>
         <!-- second slide end -->

         <!-- third slide -->
         <div class="col-lg-6 col-xl-3 col-sm-4">
             <img src=" {{ asset('images/frimage/fruite-item-3.jpg') }}" alt="no image"
                 class="image-fluid rounded col-12">
             <div class="d-flex justify-content-center">
                 <div class="col-6 mt-3">
                     <a href="https://themewagon.github.io/fruitables/#"
                         class="h5 h-color text-decoration-none">Organic Banana</a>
                     <!-- Star icons -->
                     <p class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color p-0" viewBox="0 0 15 15">
                             <path fill="currentColor" d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                         </svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color" viewBox="0 0 15 15">
                             <path fill="currentColor" d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                         </svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color" viewBox="0 0 15 15">
                             <path fill="currentColor" d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                         </svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color" viewBox="0 0 15 15">
                             <path fill="currentColor" d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                         </svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="h-color"
                             viewBox="0 0 432 408">
                             <path fill="currentColor"
                                 d="M213 328L81 408l35-150L0 157l153-13L213 3l60 141l154 13l-117 101l35 150z" />
                         </svg>

                     </p>

                     <h4 class="h-color text-center">3.12 $</h4>
                     <a href="" class="btn border border-warning rounded-5  addtocart">

                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color" viewBox="0 0 582 1000">
                             <path fill="currentColor"
                                 d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                         </svg> Add to cart</a>
                 </div>
             </div>
         </div>
         <!-- third slide end -->


         <!-- fourth slide  -->
         <div class="col-lg-6 col-xl-3">
             <img src=" {{ asset('images/frimage/fruite-item-4.jpg') }}" alt="no image"
                 class="image-fluid rounded col-12">
             <div class="d-flex justify-content-center">
                 <div class="col-lg-6 mt-3">
                     <a href="https://themewagon.github.io/fruitables/#"
                         class="h5 h-color text-decoration-none">Organic
                         Appricoat</a>

                     <p class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color p-0" viewBox="0 0 15 15">
                             <path fill="currentColor"
                                 d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                         </svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color" viewBox="0 0 15 15">
                             <path fill="currentColor"
                                 d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                         </svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color" viewBox="0 0 15 15">
                             <path fill="currentColor"
                                 d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                         </svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color" viewBox="0 0 15 15">
                             <path fill="currentColor"
                                 d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                         </svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="h-color"
                             viewBox="0 0 432 408">
                             <path fill="currentColor"
                                 d="M213 328L81 408l35-150L0 157l153-13L213 3l60 141l154 13l-117 101l35 150z" />
                         </svg>

                     </p>

                     <h4 class="h-color text-center">3.12 $</h4>
                     <a href="" class="btn border border-warning rounded-5  addtocart">

                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             class="official-color" viewBox="0 0 582 1000">
                             <path fill="currentColor"
                                 d="M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z" />
                         </svg> Add to cart</a>
                 </div>
             </div>
         </div>
         <!-- fourth slide end -->
     </div>
     <!-- Third section end -->
 </div>
 <!-- bestseller product end -->


 <!-- fact start -->
 <div class="container-fluid py-5">
     <div class="container">
         <div class=" bg-light rounded p-5">
             <div class="row g-4 justify-content-center">
                 <!-- first fact start -->
                 <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 ">
                     <div class="bg-white rounded p-5 counter">
                         <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                             class="safron-user" viewBox="0 0 640 512">
                             <path fill="currentColor"
                                 d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6c40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32S208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z" />
                         </svg>
                         <h4 class=" official-color mt-4">SATISFIED CUSTOMERS</h4>
                         <p class=" h1 h-color mt-4">1963</p>
                     </div>
                 </div>
                 <!-- first fact end -->

                 <!-- second start -->
                 <div class="col-lg-6 col-xl-3  text-center">

                     <div class="bg-white p-5  rounded counter">

                         <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                             class="safron-user mb-4" viewBox="0 0 640 512">
                             <path fill="currentColor"
                                 d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6c40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32S208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z" />
                         </svg>
                         <h4 class="  official-color">quality <br> of <br> service</h4>
                         <p class=" h1 h-color  ">99%</p>
                     </div>

                 </div>
                 <!-- second end -->
                 <!-- third fact start -->
                 <div class="col-lg-6 col-xl-3 col-md-6  ">

                     <div class="bg-white rounded p-5 counter">

                         <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                             class="safron-user" viewBox="0 0 640 512">
                             <path fill="currentColor"
                                 d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6c40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32S208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z" />
                         </svg>
                         <h4 class="official-color mt-4">quality certificates</h4>
                         <p class=" h1 h-color mt-4 ">33</p>
                     </div>
                 </div>
                 <!-- third fact end -->

                 <!-- fourth start -->
                 <div class="col-lg-6 col-xl-3  text-center">

                     <div class="bg-white p-5  rounded counter">
                         <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                             class="safron-user mb-4" viewBox="0 0 640 512">
                             <path fill="currentColor"
                                 d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6c40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32S208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z" />
                         </svg>
                         <h4 class=" official-color">Available Products</h4>
                         <p class=" h1 h-color mt-4">789</p>
                     </div>

                 </div>
                 <!-- fourth end -->
             </div>
         </div>
     </div>
 </div>
 <!-- fact close -->


 <!-- Testimonial start -->
 <div class="container py-5 ">
     <div class="row  container ">
         <div class=" ">
             <h4 class="official-color   text-center mb-3 ">Our Testimonial</h3>
                 <h1 class="h-color text-center">Our Client Saying</h1>
         </div>
         <!-- First client rating -->
         <div class="col-lg-6 col-xl-6 col-sm-12   p-3 mt-2 rounded ">
             <div class="p-2 bg-light">
                 <p class="h-color">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's
                     standard dummy
                     text ever since the 1500s,</p>
                 <p class="border border-bottom border-warning"></p>

                 <div class="row">
                     <div class=" col-xl-3 col-lg-3 col-md-3">
                         <img src=" {{ asset('images/image/testimonial-1.jpg') }}" class="image-fluid  rounded-3"
                             alt="">
                     </div>
                     <div class="col-sm-12  col-md-6">
                         <h1 class="h-color  h5 mt-1">Client Name</h1>
                         <p class="h-color">Profession</p>
                         <p class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color p-0" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="h-color" viewBox="0 0 432 408">
                                 <path fill="currentColor"
                                     d="M213 328L81 408l35-150L0 157l153-13L213 3l60 141l154 13l-117 101l35 150z" />
                             </svg>

                         </p>
                     </div>
                     <div class="text-end col-sm-6 col-xl-3 col-lg-3 col-md-3">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="80"
                             class="safron-user  mt-5 col-3" viewBox="0 0 17 16">
                             <path fill="currentColor" fill-rule="evenodd"
                                 d="M2 14.969c-.553 0-1-.435-1-.969s.447-.969 1-.969c2.757 0 4-1.201 4-3.907V7.978H2.559a1.51 1.51 0 0 1-1.506-1.511V2.511A1.51 1.51 0 0 1 2.559.999h3.935C7.324.999 8 1.677 8 2.511v6.612c0 3.775-2.141 5.846-6 5.846zm9 0c-.553 0-1-.435-1-.969s.447-.969 1-.969c2.757 0 4-1.201 4-3.907V7.947h-3.467a1.51 1.51 0 0 1-1.512-1.506V2.505c0-.83.678-1.506 1.512-1.506h3.955A1.51 1.51 0 0 1 17 2.505v6.618c0 3.775-2.141 5.846-6 5.846z" />
                         </svg>
                     </div>
                 </div>

             </div>
         </div>
         <!-- First client end -->

         <!-- Second client rating -->
         <div class="col-lg-6 col-xl-6  col-sm-12 p-3  mt-2 rounded">
             <div class=" p-2 bg-light">
                 <p class="h-color">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's
                     standard dummy
                     text ever since the 1500s,</p>
                 <p class="border border-bottom border-warning"></p>
                 <div class="row ">
                     <div class="col-sm-4 col-xl-3 col-lg-3 col-md-3">
                         <img src=" {{ asset('images/image/testimonial-1.jpg') }}" class="image-fluid rounded-3"
                             alt="">
                     </div>
                     <div class="col-6">
                         <h1 class="h-color  h5 mt-1">Client Name</h1>
                         <p class="h-color">Profession</p>
                         <p class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color p-0" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 15 15">
                                 <path fill="currentColor"
                                     d="m7.5 0l-2 5h-5l4 3.5l-2 6l5-3.5l5 3.5l-2-6l4-3.5h-5l-2-5z" />
                             </svg>
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 class="official-color" viewBox="0 0 432 408">
                                 <path fill="currentColor"
                                     d="M213 328L81 408l35-150L0 157l153-13L213 3l60 141l154 13l-117 101l35 150z" />
                             </svg>

                         </p>
                     </div>
                     <div class="text-end col-sm-2 col-xl-3 col-lg-3 col-md-3">
                         <svg xmlns="http://www.w3.org/2000/svg" width="40" height="70"
                             class="safron-user  mt-5 col-3" viewBox="0 0 17 16">
                             <path fill="currentColor" fill-rule="evenodd"
                                 d="M2 14.969c-.553 0-1-.435-1-.969s.447-.969 1-.969c2.757 0 4-1.201 4-3.907V7.978H2.559a1.51 1.51 0 0 1-1.506-1.511V2.511A1.51 1.51 0 0 1 2.559.999h3.935C7.324.999 8 1.677 8 2.511v6.612c0 3.775-2.141 5.846-6 5.846zm9 0c-.553 0-1-.435-1-.969s.447-.969 1-.969c2.757 0 4-1.201 4-3.907V7.947h-3.467a1.51 1.51 0 0 1-1.512-1.506V2.505c0-.83.678-1.506 1.512-1.506h3.955A1.51 1.51 0 0 1 17 2.505v6.618c0 3.775-2.141 5.846-6 5.846z" />
                         </svg>
                     </div>
                 </div>

             </div>
         </div>
         <!-- Second client end -->
     </div>


 </div>
 <!-- Testimonial end -->


 <!-- footer start -->
 @include('footer')
 </body>

 </html>
