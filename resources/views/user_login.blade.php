<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
  <!-- Custom css files -->
  <link rel="stylesheet" href="{{ asset('Custom css/custom.css') }}">

  <!-- Bootstrap css -->
  <link rel="stylesheet" href="{{ asset('Bootstrap css/bootstrap.css') }}">
 
<!-- {{-- Bootstrap js --}} -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('Custom js/index.js') }}"></script>
    <!-- <script src="login.js"></script> -->
</head>

<body>
    <div class="container col-5">
        <form action="{{url('submit_user_login')}}" method="post">
            @csrf
            <h1 class="official-color text-center">User Login</h1>
  
            
            <label for="user">User Name:</label>
            <input type="number" id="user" class="form-control" name="username">
            @error('username')
            <p class="text-danger">{{$message}}</p>
            @enderror
           
            <label for="pass">Password:</label>
            <input type="text" id="pass" class="form-control" name="password">
            @error('password')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <button type="submit" class=" btn btn-warning mt-3 text-center col-12 float-end" name="loginbtn">Submit</button>

            </form>
            <!-- <input type="button" name="loginbtn" id="loginbtn" value="Login" class="btn btn-warning mt-3 text-center col-12"> -->

            <p class="mt-4  float-start">Not a User
                <a href="{{url('seller_login')}}" class="text-decoration-none">
                    <span class="official-color">Go to Seller Page</span></a>
            </p>

            <p class=" mt-4 float-end ">Forget password
                <a href="sellerpassupdate.php" class="text-decoration-none"><span class="official-color">Reset Password
                        from here</span></a>
            </p>
        </div>
        
</body>

</html>