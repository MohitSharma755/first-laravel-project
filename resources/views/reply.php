<?php
include("config.php");


$action= $_POST['action'];
if($action == "reply"){
    // if(isset ($_POST['postbtn'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $review=$_POST['review'];
 

 $data=$conn->query("INSERT INTO `reply`( `name`, `email`, `review`) VALUES
     ('$name','$email','$review')");
   }
     if($data ==true){
        echo "done";
     }
     else{
        echo "error";
     }
// }

?>