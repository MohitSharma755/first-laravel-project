<?Php
include ("config.php");
// include ("header.php");
// include("test2.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Test page</title>
    <!-- Required meta tags -->


    <script src="test.js"></script>
    <!-- <script src="productajax.js"></script> -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 


<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="row  ">

            <?php
            $action = $_POST['action'];
            if ($action == "product") {
                $data = $conn->query("SELECT * FROM `product`");
                // echo $data;
            
                if (mysqli_num_rows($data) > 0) {

                    $output = " ";


                    while ($result = mysqli_fetch_assoc($data)) {
                        $id = $result['id'];
                        $name = $result['name'];
                        $description = $result['description'];
                        $photo = $result['photo'];
                        $quantity = $result['quantity'];
                        $rate = $result['rate'];
                        $cat=$result['category'];

                        // echo  $cat;
            



                        $output .= "
                         
        <div class='col-lg-6 col-sm-3 col-md-6 col-xl-3 p-2'>
            <img src='./productimg/$photo' class='img-fluid rounded-top'>
            <div class=' border border-warning ' style='border-top: none !important;'>
                <h3 class='text-center p-2 h-color'> $name</h3>
                <p class='p-3'>$description

                <h3 class='h-color ms-4'>$rate / kg</h3>
                <div class=''>
                    <button onclick='product($id)' class=' border border-warning cart rounded-5 p-1 w-50 justify-content-center m-3 background-none  px-1 cart'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='20' height='30' class='official-color me-1'
                            viewBox='0 0 582 1000'>
                            <path fill='currentColor'
                                d='M582 413v356q0 32-32 32H32q-32 0-32-32V413q0-10 3-16.5t7-10t12-5t13-2t15.5 0t14.5.5V253h1q9-87 74-140.5T293 59t151 62.5T515 273h1l2 107q4 0 14.5-.5t15 0t13 2t12 5t6.5 10t3 16.5zM421 251q0-51-37-74t-91-23q-53 0-92 25.5T162 256v124h259V251z' />
                        </svg>Add to cart
                    </button>
                </div>
                
<div id='cat'>$cat</div>
            </div>
        </div>
 
        ";
                    }
                    echo $output;
                }
                ;

            }

            ?>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>


</html>