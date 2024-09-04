<?php
include("config.php");

$action=$_POST['action'];
if($action=="delete"){
    $id=$_POST['id'];
    // echo $id;
$data = $conn->query("DELETE  FROM `cart` WHERE productid='$id'");
if($data=true){
    echo 1 ;
}
else{
    echo 0;
}


}



?>