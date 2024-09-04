<!-- <?php
session_start();
include ("vegconnection.php");
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <div class="container-fluid py-5">
        <div class="container w-50 sign_father_w100 shadow p-4" style="position: relative;">
            <a style="position: absolute; top: 0; left: 10px; font-size: 25px;" href="index.php"><i
                    style="color: #81c408;" class="fa-solid fa-circle-arrow-left"></i></a>

            <form action="" method="post">
                <h1 class="text-center">Login </h1>
                <div class="mb-3">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" class="form-control " id="phone" required>
                </div>
                <div class="mb-3">
                    <label for="phone">Password</label>
                    <input type="password" name="password" class="form-control " id="phone" required>
                </div>
                <button class="btn mt-2 btn-lg d-block w-100 text-white" style="background-color: #81c408;"
                    name="login"> Login Now</button>
                <a href="signup.php" style="background-color: #81c408;"
                    class="btn text-white btn-lg  w-100 my-3 px-3">Sign up</a>

                <!-- <?php
                if (isset($_POST['login'])) {
                    $phone = $_POST['phone'];
                    $pass = $_POST['password'];

                    $data = $conn->query("SELECT * FROM  `admintable` WHERE phone='$phone' and password='$pass'");
                    if (mysqli_num_rows($data) == 1) {
                        $_SESSION['adminmobile'] = $phone;
                        header("location:productenter.php");
                    } else {
                        $data = $conn->query("SELECT * fROM `signup` WHERE phone='$phone' and password='$pass'");
                        if (mysqli_num_rows($data) == 1) {
                            $_SESSION['mobile'] = $phone;
                            header("location:index.php");
                        } else {
                            echo "please enter vaild details";
                        }
                    }
                }

                ?> -->
            </form>

        </div>

    </div>

</body>

</html>