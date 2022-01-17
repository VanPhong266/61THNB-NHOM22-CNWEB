<?php
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtHoTen'])){
        $hoTen = $_POST['txtHoTen'];
    }

    $gioitinh = $_POST['txtgioitinh'];
    $chuyenmon = $_POST['txtchuyenmon'];
    $trinhdo = $_POST['txttrinhdo'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','edmodo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "INSERT INTO giaovien (tengv, gioitinh, chuyenmon, trinhdo) VALUES ('$hoTen','$gioitinh','$chuyenmon','$trinhdo')";
    // echo $sql;
    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location: index.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>