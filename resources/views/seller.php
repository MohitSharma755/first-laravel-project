<?php
include ("config.php");

$action = $_POST['action'];
if ($action == "seller") {

    $first = $_POST['first'];
    $last = $_POST['last'];
    $company = $_POST['company'];
    $address = $_POST['address'];
    $town = $_POST['town'];
    $country = $_POST['country'];
    $postcode = $_POST['zip'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password= $_POST['pass'];
    $imagename = $_FILES['photo']['name'];
    $tempname = $_FILES['photo']['tmp_name'];
    echo $imagename . " this is temp name " . $tempname;
    $add = './userimg/' . $imagename;
    if ($imagename) {
        move_uploaded_file($tempname, $add);
        echo "imageupload";
    } else {
        echo "code error";
    }
    $data = $conn->query(" INSERT INTO `userdata`( `first`, `last`, `company`, `address`, `city`,
        `country`, `zip`, `mobilese`, `email`,`password`,`profile`,`login_type`)
                   VALUES
('$first','$last','$company','$address','$town','$country' ,'$postcode','$mobile','$email','$password','$imagename','seller')");

// $data = $conn->query(" INSERT INTO `sellerdata`( `name`, `last`, `company`, `address`, `city`,
//             `country`, `zip`, `mobile`, `email`,`password`)
// ('$first','$last','$company','$address','$town','$country' ,'$postcode','$mobile','$email','$password','$imagename','customer')");
             

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";



  
}
// if($data){
//     echo  "<script>window.location.href='seller_login.php'</script>";
//     }  
    



?>