<?php
include("../config.php");

$action=$_POST['action'];
if($action=="delete"){
    $id=$_POST['id'];
    // echo ;
$data = $conn->query("DELETE FROM `product` WHERE id='$id'");
    echo 1;

}



?>