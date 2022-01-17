<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $maAdmin = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','edmodo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM db_admin WHERE ma_nguoidung = '$maAdmin'";

    $result = mysqli_query($conn,$sql); //Nó chỉ ra về 1 bản ghi, mà mình chỉ cần lấy 1 bản ghi thôi

    // Bước 03: Xử lý kết quả
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }

    // Bước 04: Đóng kết nối
    mysqli_close($conn);

?>
<?php
    include("template/header.php");
?>
    <main>
    <div class="container">
    <button><a href="manage-admin.php">Back</a></button>
        <h5 class="text-center text-primary mt-5">Cập nhật thông tin Admin</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="process-update-admin.php" method="POST">
            <div class="form-group">
                <label for="txtMaAdmin">Mã Admin</label>
                <input type="text" class="form-control" readonly id="txtMaAdmin" name="txtMaAdmin" placeholder="Mã Admin" value="<?php echo $row['ma_nguoidung']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtHoTen">tên Đăng nhập</label>
                <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên" value="<?php echo $row['tendangnhap']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="Nhập giới tính" value="<?php echo $row['email']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
                <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
            </div>
            
        </form>
    </div>    
    </main>
<?php
    include("template/footer.php");
?>