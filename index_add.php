<?php
require_once 'Config/db.php'
?>
<?php include ("Components/header_admin.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sửa xóa</title>
</head>
<body>
    <?php 
    if(isset($_GET['page_layout'])){
        switch($_GET['page_layout']){
            case 'danhsach';
                require_once 'sanpham/danhsach.php';
                break;
            case 'them';
                require_once 'sanpham/them.php';
                break;
            case 'sua';
                require_once 'sanpham/sua.php';
                break;
            case 'xoa';
                require_once 'sanpham/xoa.php';
                break;
            default:
                require_once 'sanpham/danhsach.php';
                break;
        }
    }else{
        require_once 'sanpham/danhsach.php';
    }
    ?>
</body>
</html>
<?php include ("Components/footer.php")?>
