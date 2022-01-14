<?php
//kết nối database
    $host='localhost';
    $username='root';
    $password='';
    $dbname='edmodo';

    $conn=mysqli_connect($host,$username,$password,$dbname);
    if(!$conn){
        die('không thể kết nối MySQL: '.mysqli_error());
    }

?>