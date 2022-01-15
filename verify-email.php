<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Kích Hoạt Tài Khoản</title>
<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header>
    <div id="login-page" class="view-port">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container ">
                <a class="navbar-brand mx-auto order-0" href="index.php">
                    <img src="assets/img/edmodo.png" alt="" class="ed-logo">
                </a>
            </div>
        </nav>
    </div>
    </header>
        <?php
        if($_GET['key'] && $_GET['token'])
        {
            require "db.php";
            //truy vấn
            $email = $_GET['key'];
            $token = $_GET['token'];
            $sql = "SELECT * FROM `nguoidung` WHERE `email_verification_link`='".$token."' and `email`='".$email."'";
            $query = mysqli_query($conn,$sql);
            $d = date('Y-m-d H:i:s');
            if (mysqli_num_rows($query) > 0) {
                $row= mysqli_fetch_array($query);
                if($row['email_verified_at'] == NULL){
                    $sql2 = "UPDATE nguoidung set email_verified_at ='$d', status = '1'  WHERE email='$email'";
                    mysqli_query($conn,$sql2);
                    $msg = "Congratulations! Your email has been verified.";
                }else{
                    $msg = "You have already verified your account with us";
            }
            } else {
                $msg = "This email has been not registered with us";
            }
            }
            else
            {
                $msg = "Danger! Your something goes to wrong.";
            }
        ?>
        <div class=" mt-3">
        <div class="card">
        <div class=" text-center">
            <h3>Active edmodo account</h3>
        </div>
        <div class="card-body text-center">
        <p><?php echo $msg; ?></p>
            <a style="text-decoration: none;" href="login.php">Click here to sign in</a>
        </div>
        </div>
        </div>
</body>
</html>