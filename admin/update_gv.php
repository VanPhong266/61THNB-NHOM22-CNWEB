<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $ma_gv = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','edmodo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM giaovien WHERE ma_gv = '$ma_gv'";

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
        <button><a href="index.php">Back</a></button>
        <h5 class="text-center text-primary mt-5">Cập nhật thông tin giáo viên</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="process-update.php" method="post">
            <div class="form-group">
                <label for="txtMaGV">Mã giáo viên</label>
                <input type="text" class="form-control" readonly id="txtMaGV" name="txtMaGV" placeholder="Mã giáo viên" value="<?php echo $row['ma_gv']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtHoTen">Họ và tên</label>
                <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên" value="<?php echo $row['tengv']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            
            <div class="form-group">
                <label for="txtgioitinh">Giới Tính</label>
                <input type="text" class="form-control" id="txtgioitinh" name="txtgioitinh" placeholder="Nhập giới tính" value="<?php echo $row['gioitinh']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtchuyenmon">Chuyên Môn</label>
                <input type="tel" class="form-control" id="txtchuyenmon" name="txtchuyenmon" placeholder="Nhập Chuyên môn" value="<?php echo $row['chuyenmon']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txttrinhdo">Trình Độ</label>
                <input type="tel" class="form-control" id="txttrinhdo" name="txttrinhdo" placeholder="Nhập Trình Độ" value="<?php echo $row['trinhdo']; ?>">
                
            </div>
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
            </div>
           
        </form>
    </div>    
    </main>
<?php
    include("template/footer.php");
?>