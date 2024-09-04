<?php
$servername ='localhost';
$user='root';
$pass=  '';
$db = 'fruit';

// if(!defined('DB_SERVER')) define('DB_SERVER',"localhost");
// if(!defined('DB_USERNAME')) define('DB_USERNAME',"root");
// if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"");
// if(!defined('DB_NAME')) define('DB_NAME',"fruit");

 
$conn=mysqli_connect($servername,$user,$pass,$db);

if($conn==true){
    // echo "<h1>new record created</h1>";
}
else{
    echo "error";
}




?>
