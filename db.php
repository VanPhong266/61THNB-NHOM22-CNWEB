<?php
//kết nối database
    $host='localhost';
    $username='root';
    $password='';
    $dbname='edmono';

    $conn=mysqli_connect($host,$username,$password,$dbname);
    if(!$conn){
        die('không thể kết nối MySQL: '.mysql_error());
    }

?>