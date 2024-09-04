<?php
include("config.php");
$action=$_POST['action'];

if($action=="contact"){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $msg =$_POST['msg'];


    $data =$conn->query("INSERT INTO `contact`(`name`,`email`,`message`)VALUES
    ('$name','$email','$msg')");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}



?>