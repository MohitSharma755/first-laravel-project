<?php
// session_start();
include ("config.php");



// $data = $conn->query("SELECT * FROM  `userdata`");
// if (mysqli_num_rows($data) > 0) {
//     while ($total = mysqli_fetch_assoc($data)) {
//         $password = $total['password'];
//         $mobile = $total['mobilese'];
//         echo $password . "  " . $mobile . "<br>";
//     }


// }


if (isset($_POST['loginbtn'])) {
    // echo "working";
    $mobile = $_POST['username'];
    $password = $_POST['password'];
    $data = $conn->query("SELECT * FROM userdata WHERE `mobilese`='$mobile' AND `password`='$password'");
    if (mysqli_num_rows($data) > 0) {
        echo "welcome website";
        $result=mysqli_fetch_assoc($data);
        $loginType=$result['login_type'];
        $_SESSION['mobilenum'] = $mobile;
        $_SESSION['login_type'] =$loginType;
        echo $mobile;
        echo $loginType;
        if($loginType=='seller'){
            echo "<script>window.location.href='admin/admin.php'</script>";

        }
        else{
            echo "<script>window.location.href='index.php'</script>";

        }
        // echo $mobile;
        // header("location: checkout.php");
    } else {
        echo "error";
    }
}










?>