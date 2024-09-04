<?php
include ("config.php");

// $data = $conn->query("SELECT * FROM `sellerdata` WHERE `name`='$seller' AND `mobile`= '$mobile'");
// if (mysqli_num_rows($data) > 0) {
//     echo "welcome";
//     $_SESSION['mobile'] = $mobile;
//     echo $mobile;
//     echo "<script>window.location.href='./admin/admin.php'</script>";
// }

$data = $conn->query("SELECT * FROM `userdata`");
if (mysqli_num_rows($data) > 0) {
    while ($total = mysqli_fetch_assoc($data)) {
        // $name = $total['name'];
        $pass = $total['password'];
        $mobile=$total['mobilese'];
        echo "This is pass".$pass . " This is mobile ".$mobile ."<br>";
    }

}

//check username and password




?>