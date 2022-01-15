<?php
if(isset($_POST['btnSigup']) && $_POST['email'])
{
    //B1: gọi lại các đoạn kết nối
    require "db.php";
    //B2: thực hiện các truy vấn
    $result = mysqli_query($conn,"SELECT * FROM nguoidung WHERE email='" . $_POST['email'] . "'");
    //B3: xử lý các kết quả
    if(mysqli_num_rows($result) <= 0) //kiểm tra email chưa dùng
    {
        $token = md5($_POST['email']).rand(10,9999); //sử dụng giải thuật md5 sinh ra các chuỗi ngẫu nhiên
       //echo $token;
        
        //lưu lại thông tin vào CSDL lấy dữ liệu từ index.php
        // chú ý: email_verification_link chính là $token
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass= password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO nguoidung(name, email, email_verification_link ,password) VALUES('$name', '$email', '$token', '$pass')";

        mysqli_query($conn, $sql);
        // yêu cầu người dùng nhấn vào link kích hoạt
        $link = "<a href='localhost/61THNB-NHOM22-CNWEB/verify-email.php?key=".$_POST['email']."&token=".$token."'>Click and Verify Email</a>";


        //
        include "send_email.php";
        if(sendEmailForAccountACtive($email, $link)){
            echo "Vui lòng kiểm tra Hộp thư để kích hoạt tài khoản";
        }
        else{
            echo "Xin lỗi bạn. Email chưa được gửi đi. Bạn vui lòng kiểm tra lại thông tin đăng ký tài khoản";
        }
        
    }
    else
    {
    echo "You have already registered with us. Check Your email box and verify email.";
    }
}
?>