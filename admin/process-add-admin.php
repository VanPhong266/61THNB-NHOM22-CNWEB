<?php

    if(!isset($_POST['btnSignIn'])){
        header("location: add_admin.php");
    }


    $user = $_POST['txtUser'];
    $email = $_POST['txtEmail'];
    $pass1 = $_POST['txtPass1'];
    $pass2 = $_POST['txtPass2'];


    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','edmodo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql01 = "SELECT * FROM db_admin WHERE email = '$email' OR tendangnhap='$user'";
    
    // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
    // Nghiêm trọng: lỗi SQL Injection

    $result01 = mysqli_query($conn,$sql01);
    if(mysqli_num_rows($result01) > 0){
        $error = "Username or Email is existed";
        header("location: add_admin.php?error=$error");
    }else{
        $pass_md5= md5($pass1);
       $sql02 = "INSERT INTO db_admin(tendangnhap, email, matkhau) VALUES ('$user', '$email', '$pass_md5')";
       $result02 = mysqli_query($conn, $sql02);

       if($result02==TRUE){
           echo"tài khoản đã được thêm";
           header("location:admin.php");
       }
       else{
           $error = "Can not insert record.Please check....";
           header("location: add_admin.php?error=$error");
       }
    }
    // Bước 03: Đóng kết nối
    mysqli_close($conn);



?>