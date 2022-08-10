<?php include ("Components/header.php")?>
<?php include "Config/config_cart.php" ?>

<?php
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $sqlDetailPro = "SELECT * FROM products WHERE id=$id";
    $resultDetailPro = mysqli_query($conn,$sqlDetailPro);
    $rowProDetail=mysqli_fetch_assoc($resultDetailPro);
    // echo "<pre>";
    // print_r($rowProDetail);
?>

<?php
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $sqlDetailPro = "SELECT * FROM products WHERE id=$id";
    $resultDetailPro = mysqli_query($conn,$sqlDetailPro);
    $rowProDetail=mysqli_fetch_assoc($resultDetailPro);
    // echo "<pre>";
    // print_r($rowProDetail);
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eCommerce Product Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/chitiet.css">
  </head>
  <body>
	<div class="container">
		<div class="card">
		<form action="#.php" method="post">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						<div class="preview-pic tab-content" >
                        <img class="css_img" src="Assets/images/<?php echo $rowProDetail['image']?>" >
						</div>
					</div>
					<div class="details col-md-6">
						<h3 class="product-title" id="name"><?php echo $rowProDetail['name']; ?></h3>
						<div class="rating">
							<div class="stars">
								<span class="fas fa-star"></span>
								<span class="fas fa-star"></span>
								<span class="fas fa-star"></span>
								<span class="far fa-star"></span>
								<span class="far fa-star"></span>
							</div>
							<span class="review-no"><?php echo $rowProDetail['view']; ?></span>
						</div>
						<p class="product-description"><?php echo $rowProDetail['thongtin']; ?></p>
						<h4 class="price">current price: <span><?php echo $rowProDetail['price']; ?></span></h4>
						<p class="vote"><strong><?php echo $rowProDetail['vote']; ?></strong></p>
						<input type="hidden" id="name<?php echo $rowProDetail['id']?>"value='<?php echo $rowProDetail['name']?>'>
                    	<input type="hidden" id="price<?php echo $rowProDetail['id']?>" value='<?php echo $rowProDetail['price']?>'>
            
			<input type="hidden" class="form-control" id="quantity<?php echo $rowProDetail['id']?>" value="1" min="1" max="10" width="50%">
			
			<button class='btn btn-danger add mt-4' data-id="<?php echo $rowProDetail['id'];?>" style="color: ;"> Add to Cart <i class="fas fa-shopping-cart" style="color: black;"></i></button>
		</form> 
		<?php } ?>
		<?php
}
?>
					</div>
				</div>
			</div>
		</form>
		</div>
	</div>
	










</body>

</html>

<?php include ("Components/footer.php")?>
<?php
mysqli_close($conn);
?>




