<?php
//b1 Import đoạn cấu hình bước 1
require 'db.php';
$statusMsg = '';//tạo 1 biến để lưu lại trạng thái upload nhằm mục tiêu phản hồi lại cho người dùng
//những động tác về thiết lập cho việc chuẩn bị upload
<<<<<<< Updated upstream
$targetDir = "image/";//thư mục chỉ định nằm trong cùng project để lưu trữ tập tin tải lên
=======
$targetDir = "imgase/";//thư mục chỉ định nằm trong cùng project để lưu trữ tập tin tải lên
>>>>>>> Stashed changes
$fileName = basename($_FILES["image"]["name"]); //$_files là 1 biến siêu toàn cục lưu trữ toàn bộ phần tử file trên FORM

$targetFilePath = $targetDir . $fileName;//Đây là tên đầy đủ+đường dẫn tệp tin sau khi hoàn thành
//nó là giá trị cần truyền vào hàm movie_uploaded_file

$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);//bắt định dạng tệp tin
<<<<<<< Updated upstream
$content=$_POST['content'];
//b2 kiểmtra xem người dùng đã nhấn submit chưa và file đã được chọn chưa
if(isset($_POST["post"]) && !empty($_FILES["image"]["name"])){

    //check file tồn tại
    
=======
$content = $_POST['content'];
//b2 kiểmtra xem người dùng đã nhấn submit chưa và file đã được chọn chưa
if(isset($_POST["Post"]) && !empty($_FILES["image"]["name"])){

    //check file tồn tại
>>>>>>> Stashed changes
    // Khai báo biến mảng để lưu trữ định dạng mà bạn cho phép up lên
    $allowTypes = array('jpg','png','jpeg','gif','pdf','docx');// phương thức in_array kiểm tra 1 giá trị có thuộc mảng không
    //thì xử lý upload cái tệp tin đang lưu ở thư mục tạmC:\xampp\tmp_name\($_FILES["myFile"]["name"])
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){//lấy từ nơi tạm vào nơi chính
            // lưu đường dẫn vào CSDL
            //$insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
<<<<<<< Updated upstream
            $sql="INSERT into images (content,image,time ) VALUES ('".$content."','".$fileName."', NOW())";
            echo $sql;
=======
            $sql="INSERT into images (content, image,time) VALUES ('".$content."','".$fileName."', NOW())";
>>>>>>> Stashed changes
            $insert=mysqli_query($conn,$sql);
           if($insert){//kiểm tra việc query thành công
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                //header("location:show.php");
                // echo "<pre>";
                // echo print_r($_FILES['myFile']);
                // echo "<pre>";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>