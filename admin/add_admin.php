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
        <h5 class="text-center text-primary mt-5">Thêm mới Admin</h5>
        <form class="form-dki-admin"action="process-add-admin.php" method="POST">
            <div class="form-group">
                <label for="txtUser">Tên đăng nhập</label>
                <input type="text" class="form-control" id="txtUser" name="txtUser" placeholder="Nhập tên đăng nhập">
            </div>
            
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="txtEmail" placeholder="Nhập email">
            </div>

            <div class="form-group">
                <label for="inputPassword">password</label>
                <input type="password" class="form-control" id="inputPassword" name="txtPass1" placeholder="Nhập pass">
            </div>
            <div class="form-group">
                <label for="inputRetypePassword">Retype Password</label>
                <input type="password" class="form-control" id="inputRetypePassword" name="txtPass2" placeholder="Nhập pass">
            </div>
            <button type="submit" name="btnSignIn"class="btn btn-primary mt-3">Thêm mới</button>
       
            </div>
            </form>        
    </div>    
    </main>

<?php
    include("template/footer.php");
?>