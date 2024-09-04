<title>Seller Login</title>
 



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
    <!-- <script src="sellerlogin.js"></script> -->

</head>

<body>

    <div class="container col-5">
    <form action="{{url('seller_login')}}" method="post">
        @csrf
        <h1 class="official-color text-center">Seller Login</h1>
        @error('sellername')
            <p class="text-danger">{{$message}}</p>
        @enderror
        <label for="user">Seller Name:</label>
        
        <input type="number" id="user"  class="form-control" name="sellername">
        @error('sellerpassword')
            <p class="text-danger">{{$message}}</p>
        @enderror
        <label for="pass">Password:</label>
        <input type="password" maxlength="10" id="pass" class="form-control" name="sellerpassword">
      
        <input type="submit" class=" btn btn-warning mt-3 text-center col-12 float-end"
        name="sell" id="sellerlogin" value="Seller Login">
        </form>
 
    

        <p class="mt-4">Not a Seller <a href="{{ route('loginuser')}}" class="text-decoration-none"><span class="official-color" >Go to user Page</span></a>  </p>
    </div>
 
</body>

</html>