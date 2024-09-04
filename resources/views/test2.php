<?php
session_start();
include ("config.php");

$action = $_POST['action'];
if ($action == "addtocart") {
    $userid = $_SESSION['mobilenum'];
    $id = $_POST['id'];
    // echo $id;

    $data = $conn->query("SELECT * FROM `product` WHERE `id`= '$id'");
    $total=mysqli_num_rows($data);
    echo $total;
    if (mysqli_num_rows($data) > 0) {
        $result = mysqli_fetch_assoc($data);
        $id = $result['id'];
        $cat = $result['category'];
        $name = $result['name'];
        $description = $result['description'];
        $photo = $result['photo'];
        $quantity = $result['quantity'];
        $rate = $result['rate'];

        $data = $conn->query("INSERT INTO `cart`(`id`,`userid`,category, `name`, `description`,`photo`, `rate`,`productid` ) VALUES

        (NULL,'$userid','$cat','$name','$description','$photo','$rate','$id')");
        if ($data) {
            echo $name . " " . "add in cart";
        }

    }
}


?>