<?php
$connect = mysqli_connect("localhost","root","","kungfuphp" )or die("không thể kết nối tới database");

if($connect){
    mysqli_query($connect,"SET NAMES 'UTF8'");
    // echo "ket noi thanh cong";
}else{
    echo "ket noi that bai";
}

?>