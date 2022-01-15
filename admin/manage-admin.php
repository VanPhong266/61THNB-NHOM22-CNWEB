<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login_admin.php");
    }
    
    require "template/header.php";
?>
    <main>
        <div class="container">
            <h5 class="text-center text-primary mt-5">Quản Lý Thông Tin Admin</h5>
            <div  class="mt-3">
                <a class="btn btn-primary" href="add_admin.php">Thêm Admin <i class="bi bi-person-plus-fill"> </i></a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã Admin</th>
                        <th scope="col">Tên Đăng Nhập</th>
                        <th scope="col">Email</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                    <?php
                        // Bước 01: Kết nối Database Server
                        $conn = mysqli_connect('localhost','root','','edmodo');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT ma_nguoidung, tendangnhap , email FROM db_admin";
                        $result = mysqli_query($conn,$sql);
                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr>
                                    <th scope="row"><?php echo $row['ma_nguoidung']; ?></th>
                                    <td><?php echo $row['tendangnhap']; ?></td>
                                    <td><?php echo $row['email']; ?></td>   
                                    <td><a href="update_admin.php?id=<?php echo $row['ma_nguoidung']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="delete_admin.php?id=<?php echo $row['ma_nguoidung']; ?>"><i class="bi bi-trash"></i></a></td>
                                </tr>
                    <?php
                            }
                        }
                        // Bước 04: Đóng kết nối Database Server
                        mysqli_close($conn);
                    ?>
                    
                    
                </tbody>
                </table>
        </div>    
    </main>

<?php
    include("template/footer.php");
?>