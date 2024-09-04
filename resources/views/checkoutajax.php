<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="checkout.js"></script>
</head>


</html>


<?php

$action = $_POST['action'];
if ($action == "checkout") {

}
if (isset($_SESSION['login_type']) || ($_SESSION['mobilenum'])) {
    $mobile = $_SESSION['mobilenum'];
    $loginType = $_SESSION['login_type'];

}

include ("config.php");







if (isset($_SESSION['login_type']) || ($_SESSION['mobilenum'])) {
    $mobile = $_SESSION['mobilenum'];
    $loginType = $_SESSION['login_type'];
    echo $mobile;
    echo $loginType;
    $data = $conn->query("SELECT * FROM `userdata` WHERE  `mobilese`= '$mobile'  AND `login_type`='$loginType'");
    if($loginType=='seller'){
        // echo "<script>window.location.href='index.php'</script>";
        $first = "";
        $last = "";
        $company = "";
        $address = "";
        $town = "";

        $country = "";
        $postcode = "";
        $mobile = "";
        $email = "";
        $output = "";
    }
    else if ($loginType=='customer' ) {
        if (mysqli_num_rows($data) > 0) {
            $output = "";
            while ($total = mysqli_fetch_assoc($data)) {

                // $name = $total['name'];
                $first = $total['first'];
                $last = $total['last'];
                $company = $total['company'];
                $address = $total['address'];
                $town = $total['city'];

                $country = $total['country'];
                $postcode = $total['zip'];
                $mobile = $total['mobilese'];
                $email = $total['email'];

            }
        }

    } 

    $output .= "
       
    
        <div class='container py-5'>
          <h1 class='h-color'>Billing details</h1>
          <div class='row'>
              <div class='col-xl-7 col-lg-7 col-sm-12'>
  
                  <!-- <form  class='mt-5' method='post'> -->
                  <!-- <table class='mt-2'> -->
                  <div>
                      <div class='row'>
                          <div class='col-xl-6 col-md-6 col-lg-6 col-sm-12'>
  
                              <label for='name' class='h-color py-2 mb-2'>First Name*</label>
  
                              <input type='text' name='fname' id='fname' class='rounded-3  py-1 form-control col-12'value=' $first'>
  
  
                          </div>
                          <div class=' col-6 px-3'>
  
                              <label for='lname' class='h-color py-2 mb-2'>Last Name*</label>
                              <input type='text' name='lname' id='lname' class='rounded-3  py-1 form-control col-12' value=' $last'>
                          </div>
  
                      </div>
  
                      <label for='cname' class='h-color py-2 mb-2'>Company Name*</label>
                      <input type='text' name='cname' id='cname' class='form-control' value=' $company'>
  
                      <label for='add' class='h-color py-2 mb-2'>Address*</label>
  
                      <input type='text' name='add' id='add' class='rounded-3  py-1 form-control col-12' value=' $address'>
  
                      <label for='town' class='h-color py-2 mb-2'>Town/City*</label>
                      <input type='text' name='town' id='town' class='form-control' value=' $town'>
  
                      <label for='country' class='h-color py-2 mb-2'>Country*</label>
                      <input type='text' name=' country' id='country' class='rounded-3  py-1 form-control col-12'value=' $country'>
  
                      <label for='zip' class='h-color py-2 mb-2'>Postcode/Zip*</label>
                      <input type='text' name='zip' id='zip' class='form-control' value=' $postcode'>
  
                      <label for='ph' class='h-color py-2 mb-2'>Mobile*</label>
                      <input type='text' name='ph' id='ph' class='rounded-3  py-1 form-control col-12' value=' $mobile'>
  
                      <label for='mail' class='h-color py-2 mb-2'>Email Address*</label>
                      <input type='text' name='mail' id='mail' class='rounded-3  py-1 form-control col-12' value=' $email'>
  
                      <div class='py-4'>
                          <input type='checkbox' name='check' id='check' class='' value='check'>
                          <label for='check' class='h-color ' name='check'><a href='user_registration.php' class='text-decoration-none official-color'> Create an account*</a></label>
                      </div>
                      <hr>
  
                      <div class='py-4'>
                          <input type='checkbox' name='ship' id='ship' class='' value='ship'>
                          <label for='ship' class='h-color' name='ship'> Ship to a diffrent address?*</label>
                      </div>
  
  
  
                      <textarea name='' id='order' name='order' cols='80' rows='10' placeholder='Order notes (optional)'
                          class='h-color'></textarea>
                  </div>
                  <input type='submit' class=' px-4  rounded-5  py-3 mt-3 border border-warning cart float-end'
                      name='placebtn' id='myplacebtn' value='Place Order'>
  
  
  
   
  
  
  
  
  
              </div>
  
  
  

    
              ";
}

echo $output;
?>
<?php
$output = "

            <!-- First col section end -->

            <div class='col-xl-5  col-lg-5 col-sm-12'>
                <div class='container py-5'>
                    <div class='row'>

                        <div class='col-3 h-color '>Products</div>
                        <div class='col-2 h-color'>Name</div>
                        <div class='col-2 h-color px-5'>Price</div>
                        <div class='col-2 h-color px-2'>Quantity</div>
                        <div class='col-2 h-color px-4 '>Total</div>
                       
                        <hr>
                    </div>
                    ";
?>
<?php

$cart = $conn->query("SELECT * FROM `cart` ");
if (mysqli_num_rows($cart) > 0) {
    $output .= "";
    while ($result = mysqli_fetch_assoc($cart)) {
        $name = $result['name'];
        $photo = $result['photo'];


        $output .= "  <!-- First Item start -->
                    <div class='row border-bottom py-4'>
                        <div class='col-3'>

                            <img src='./productimg/$photo' class='img-fluid  py-3 rounded-circle' alt=''>
                        </div>

                        <div class='col-3 h-color '>
                            <p class='h-color  '>$name</p>
                        </div>



                        <div class='col-2 h-color'>
                            $69
                        </div>


                        <div class='col-2 h-color'>2</div>

                        <div class='col-1 h-color'>

                            $138
                        </div>
                    </div>
                    <!-- First item end -->";
    }
}
?>
<?php

$output .=
    "            

                  
                    <!-- Subtotal Start -->
                    <div class='row py-5 border-bottom'>
                        <div class='col-6'></div>
                        <div class='col-3 h-color py-2'>Subtotal
                        </div>
                        <div class='col-3 border-bottom border-top py-2 h-color'>$414.0</div>
                    </div>
                    <!-- Subtotal end -->

                    <!-- Shipping start -->
                    <div class='row py-3 border-bottom mt-5'>
                        <div class='col-6 mt-4'>Shipping</div>
                        <div class='col-6'>

                            <label for='free'>
                                <input type='checkbox' class='official-background ' id='free'>
                                <span class='px-1'>Free Shipping</span>
                            </label>


                            <label for='local'>
                                <input type='checkbox' class='official-background ' id='local'>
                                <span class='px-1'>Local Pickup :$8.00</span>
                            </label>

                            <label for='flate'>
                                <input type='checkbox' class='official-background ' id='flate'>
                                <span class='px-1'>
                                    Flate rate :$15.00</span>
                            </label>

                        </div>

                    </div>
                    <!-- Shipping close -->

                    <!-- Total start -->
                    <div class='row py-5 border-bottom'>
                        <div class='col-1'></div>
                        <div class='col-8 h-color py-2'>TOTAL
                        </div>
                        <div class='col-3 border-bottom border-top py-2 h-color'>$135.0</div>
                    </div>
                    <!-- Total close -->

                    <!-- Direct bank transfer start -->


                    <div class='container py-3 border-bottom'>
                        <label for='flat'>
                            <input type='checkbox' class='official-background ' id='flat'>
                            <span class='px-1 h-color'> Direct Bank Transfer</span>
                        </label>
                        <!-- <p class='py-3'><input type='checkbox'> Direct Bank Transfer</p> -->
                        <p class='h-color col-12'>Make your payment directly into our bank account. Please use your
                            Order ID as the payment
                            reference. Your order will not be shipped until the funds have cleared in our account.</p>
                    </div>
                    <!-- Direct bank transfer end -->

                    <!-- Check payment -->
                    <div class='container py-3 border-bottom'>
                        <label for='checkp'>
                            <input type='checkbox' class='official-background ' id='checkp'>
                            <span class='px-1 h-color'> Check Payments</span>
                        </label>

                    </div>
                    <!-- Check Payment close -->


                    <!-- Cash on Delivery Start -->
                    <div class='container py-3 border-bottom'>
                        <label for='cash'>
                            <input type='checkbox' class='official-background ' id='cash'>
                            <span class='px-1 h-color'> Cash on Delivery</span>
                        </label>

                    </div>
                    <!-- Cash on Delivery close -->

                    <!--Paypal start -->
                    <div class='container py-3 border-bottom'>
                        <label for='pay'>
                            <input type='checkbox' class='official-background ' id='pay'>
                            <span class='px-1 h-color'> Paypal</span>
                        </label>
                    </div>
                    <!-- Paypal  close -->

                    <!-- <form action='' type='button' method='post'>
                        <a href='' class='btn border border-warning rounded  addtocart  my-4 col-12 px-4 py-3' name='placebtn'>

                            Place Order</a>
                    </form> -->



                </div>
            </div>

            <form action='' method='post'>
                <button type='SUBMIT'
                    class='btn border border-warning rounded float-end mt-5 addtocart col-5  my-4 px-4 py-3'
                    name='placebtn'>Place Order
                </button>
            </form>


        </div>
    </div>'
    
    ";
echo $output;

?>

</div>











<?php
include ("footer.php");
?>