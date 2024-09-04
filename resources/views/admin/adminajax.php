<?php
  session_start();
  if (isset($_SESSION['login_type'])||($_SESSION['mobilenum'])) {
     $mobile = $_SESSION['mobilenum'];
     $logintype=$_SESSION['login_type'];
     echo $mobile;    
     echo $logintype;    
    }
    include ("../config.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
 
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../Bootstarp css/bootstrap.css">

    <!-- Custom css files -->
    <link rel="stylesheet" href="../Custom css/custom.css">

    <!-- Bootstrap js file -->
    <script src="../Bootsrap js/bootstrap.js"></script>


    <!-- Custom JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <script src="admin.js"></script> -->
    <script src="../Customjs/index.js"></script>



 



    <div class='row'>
        <div class='col-xl-2'>
            <div class='official-color h3'>ADMIN PANEL</div>
            <div class='official-color h3'>Dashboard</div>

        </div>
        <div class='col-xl-10 '>
            <div class='row'>
                <div class='col-8 '>Admin Name</div>
                <form action="" method="post">
                <button class='cart border-0   col-2 btn mb-3' name="ll" >Logout</button>
                </form>
               <?php 
                if(isset($_POST['ll'])){
                    session_unset();
                    $mobile = $_SESSION['mobilenum'];
                    // header("location: ../seller_login.php");
                    echo "wrk";
                }else{
                    echo "nont wrk";
                }
 ?>
            </div>

            <div class=' row'>
                <div class='col-1'>ID</div>
                <div class='col-2 text-center'>Product Name</div>

                <div class='col-4 text-center'>Image</div>
                <div class='col-1 px-4'>Rate</div>
                <div class='col-2' style="padding-left:4rem">Quantity</div>
                <a href='../addproduct.php' class='btn cart col-1'>Add Product</a>

            </div>
        </div>
    </div>


    <?php


  

    $data = $conn->query("SELECT * FROM `product` where sellermobile=$mobile");
    if (mysqli_num_rows($data) > 0) {
        $output = "";
        while ($total = mysqli_fetch_assoc($data)) {
            $id = $total['id'];
            $name = $total['name'];
            $image = $total['photo'];
            $quantity = $total['quantity'];
            $rate = $total['rate'];
            // echo $name,$quantity,$rate;
    



            $output = "
            
            
              <div class=' row'>

     <div class='col-xl-2'></div>
     <div class='col-xl-8'>
        <div class='row py-4'>
                    <div class='col-2'>$id.</div>
                    <div class='col-3'>$name</div>

         <img src='../productimg/$image' alt='' class='col-2 ps-5 '>
                <button class='cart border-0 btn float-end col-2'onclick='delte($id)'>DELETE</button>
                <div class='col-2'>$rate.kg</div>
                <div class='col-1 '>$quantity.kg</div>
         </div>
                 
            </div>
            </div>
            
             
      
          
     
            ";


            echo $output;

        }


    }
    ?>




</head>

<body>




</body>

</html>