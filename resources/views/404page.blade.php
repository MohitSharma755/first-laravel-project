<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
</head>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Custom css files -->
  <link rel="stylesheet" href="{{ asset('Custom css/custom.css') }}">

<!-- Bootstrap css -->
<link rel="stylesheet" href="{{ asset('Bootstrap css/bootstrap.css') }}">

<!-- {{-- Bootstrap js --}} -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('Custom js/index.js') }}"></script>


    <!-- <title>Cart</title> -->
</head>
<?php
// include ("header.php");

?>

<body>
    <div class="back-img">
        <div class="d-flex align-items-center justify-content-center   text-white "><span class="mt-5 h1">404
                Error</span>
        </div>
        <div class="text-center">
            <span class="official-color">Home <span class="ms-2 h-color">/</span></span><span
                class="official-color ms-2">Pages <span class="ms-2 h-color ">/</span> </span><span
                class="text-white ms-1">404
            </span>
        </div>
    </div>

    <div>
        <div class="text-center mt-5 mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" class="text-warning" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M12 16a1 1 0 1 0 1 1a1 1 0 0 0-1-1Zm10.67 1.47l-8.05-14a3 3 0 0 0-5.24 0l-8 14A3 3 0 0 0 3.94 22h16.12a3 3 0 0 0 2.61-4.53Zm-1.73 2a1 1 0 0 1-.88.51H3.94a1 1 0 0 1-.88-.51a1 1 0 0 1 0-1l8-14a1 1 0 0 1 1.78 0l8.05 14a1 1 0 0 1 .05 1.02ZM12 8a1 1 0 0 0-1 1v4a1 1 0 0 0 2 0V9a1 1 0 0 0-1-1Z" />
            </svg>

            <p class="h1 h-color display-1">404</p>
            <p class="h1 h-color">Page Not Found</p>
            <p class="h-color mt-4 mb-5">We’re sorry, the page you have looked for does not exist in our website! <br> Maybe go to
                our home page or try to use a search?</p>
            <span class="mt-5"><a href="#"
                    class="text-decoration-none border border-warning rounded-5  px-5 py-3  go h-color ">Go Back To
                    Home</a></span>
        </div>
    </div>

</body>

</html>


<?php
// include ("footer.php");  
?>