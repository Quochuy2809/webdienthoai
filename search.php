<?php include("Components/header.php") ?>
<?php
if (isset($_POST['btn'])) {
	$noidung = $_POST['noidung'];
} else {
	$noidung = false;
}
?>
<!DOCTYPE html>
	<html lang="en">

	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
		<link rel="stylesheet" href="Assets/css/chitiet.css">
	</head>
	

	<body>
	<div class="container" >
		<!-- <div class="col-md-12"> -->
		<div class="row">

		
<?php
include "Config/config_cart.php";?>

		<body>
    <h1 style="text-align: center; margin-top: 50px;">Sản Phẩm cần tìm theo từ khóa <?php echo  $noidung ?></h1>    
    <div class="container" >
        <div class="row">
            
           <?php

$sql = "SELECT * FROM products WHERE name LIKE '%$noidung%'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) { ?>


            <div class="col-md-3 text-center mt-5">
            <form action="home.php" method="post">
            <div class="p-5 shadow bg-body overflow-hidden" style="border-radius:12px ;">
            <a href="chitiet.php?id= <?php echo $row['id'] ?>" class="nav-link text-dark">
            <img src="Assets/images/<?php echo $row['image']?>" style="border-radius:5px ;" alt="">
                <h3><?php echo $row['name']?></h3>
                <h6 style="color:#DDA0DD;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                <h6>Price: <?php echo $row['price']?></h6>
                <!-- <p>Thông Tin : <?php echo $row['thongtin'] ?></p> -->
                    <input type="hidden" class="form-control" id="quantity<?php echo $row['id']?>" value="1" min="1" max="10" width="50%">
                    <input type="hidden" id="name<?php echo $row['id']?>" value='<?php echo $row['name']?>'>
                    <input type="hidden" id="price<?php echo $row['id']?>" value='<?php echo $row['price']?>'>

            </a>
            <button class='btn btn-danger add mt-4' data-id="<?php echo $row['id']?>" style="color: ;"> Add to Cart <i class="fas fa-shopping-cart" style="color: black;"></i></button>
            </form>    
        </div>
            
            </div>
            <?php
}
?>
	</body>

	</html>
<?php include("Components/footer.php") ?>