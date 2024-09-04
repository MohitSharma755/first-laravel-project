<title>User Registration Form</title>
<?php
// include ("header.php");
// include ("config.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

 
  <!-- Custom css files -->
  <link rel="stylesheet" href="{{ asset('Custom css/custom.css') }}">

  <!-- Bootstrap css -->
  <link rel="stylesheet" href="{{ asset('Bootstrap css/bootstrap.css') }}">
 
<!-- {{-- Bootstrap js --}} -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
 
<!-- Jquery Cdn -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<!-- <script src="user.js"></script>   -->
</head>





<!DOCTYPE html>
<html lang="en">



<body>
   
<form action="{{url('userRegistartion')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container  ">
        <h1 class="text-warning text-center">Create An Account</h1>
        <div class="row  d-flex justify-content-center ">
            <div class="  col-xl-8">

              
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">

                        <label for="name" class="h-color py-2 mb-2">First Name*</label>

                        <input type="text" name="fname" id="fname" class="rounded-3  py-1 form-control col-12">


                    </div>
                    <div class=" col-6 px-3">

                        <label for="lname" class="h-color py-2 mb-2">Last Name*</label>
                        <input type="text" name="lname" id="lname" class="rounded-3  py-1 form-control col-12">
                    </div>

                </div>

           

                <label for="add" class="h-color py-2 mb-2">Address*</label>

                <input type="text" name="add" id="add" class="rounded-3  py-1 form-control col-12">

                <label for="town" class="h-color py-2 mb-2">Town/City*</label>
                <input type="text" name="town" id="town" class="form-control">

                <label for="country" class="h-color py-2 mb-2">Country*</label>
                <input type="text" name=" country" id="country" class="rounded-3  py-1 form-control col-12">

                <label for="zip" class="h-color py-2 mb-2">Postcode/Zip*</label>
                <input type="text" name="zip" id="zip" class="form-control">

                <label for="ph" class="h-color py-2 mb-2">Mobile*</label>
                <input type="number" name="ph" id="ph" class="rounded-3  py-1 form-control col-12">

                <label for="mail" class="h-color py-2 mb-2">Email Address*</label>
                <input type="email" name="mail" id="mail" class="rounded-3  py-1 form-control col-12">

                <label for="pass" class="h-color py-2 mb-2">Password*</label>
                <input type="password" name="pass" id="pass" class="rounded-3  py-1 form-control col-12">


                <label for="file">Profile Photo</label>
                <input type="file" name="image" id="photo" class="form-control w-50">
                <label for="login-type" class="d-none">login_type</label>
                <input type="text" name="login_type" id="login-type" class="form-control d-none" value="user">

              
                <button type="submit" method="post" class=" border border-warning rounded  addtocart col-5  my-4 px-4 py-3"
                    name="placebtn" id="userbtn" value="Place ">Create Account
                </button>
            



             
            </div>










        </div>
    </div>
    </form>
    


</body>

</html>