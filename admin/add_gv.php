<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login_admin.php");
    }
    include("template/header.php");
?>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Thêm mới Danh bạ nhân viên</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="procees-add-gv.php" method="POST">
            <div class="form-group">
                <label for="txtHoTen">Họ và tên</label>
                <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            
            <div class="form-group">
                <label for="txtgioitinh">Giới Tính</label>
                <input type="text" class="form-control" id="txtgioitinh" name="txtgioitinh" placeholder="Nhập Giới Tính">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtchuyenmon">Chuyên Môn</label>
                <input type="tel" class="form-control" id="txtchuyenmon" name="txtchuyenmon" placeholder="Nhập chyên môn">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txttrinhdo">Trình Độ</label>
                <input type="tel" class="form-control" id="txttrinhdo" name="txttrinhdo" placeholder="Nhập Trình Độ">
                
            </div>
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
            </div>
            
        </form>
    </div>    
    </main>

<?php
    include("template/footer.php");
?>