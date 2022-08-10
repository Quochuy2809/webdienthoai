<?php

use PHPMailer\PHPMailer\OAuthTokenProvider;

include("./Components/header_cart.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body> 
<div class="container" >
<div class="col-md-12 text-center border rounded bg-light my-5"><h1>My Cart</h1></div>

<!-- <div style="display: flex; justify-content: space-between; margin-top: 4pc;" > -->
<div class="row">

    <div class="col-md-8 text-center" >



    
        <form action="" method="post">
    <?php 
    if(isset($_SESSION['cart'])){
        $outputTable = '';
        $total = 0;
        $outputTable .= "<table class='table table-bordered '>
        <thead class='fw-bold'>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Total</td>
                <td>Action</td> 
                
            </tr>
        </thead>";
        foreach($_SESSION['cart'] as $key => $value){
            $outputTable .= "
            <tr>
            <td>".$value['p_id']."</td>
            <td>".$value['p_name']."</td>
            <td>".$value['p_price']."</td> 
            <td><input class='form-control' type='number'  id='quantity".$value['p_quantity']."' name='quantity[]'  value='".$value['p_quantity']."' max='10' width='50%'> </td>           
            <td>".($value['p_price'] * $value['p_quantity']) ."</td>
            <td><button id=".$value['p_id']." class='btn btn-danger delete'>Delete</button> 
            
            </td>
            </tr>";  
            $total = $total + ($value['p_price'] * $value['p_quantity']);
        }
        $outputTable .= "</table>";
        // $outputTable .= "<div class='text-center float-end'><b>Total: ".$total."</b></div>";
        echo $outputTable;
        
        }
        
    ?>
   

            </form>
    </div> 
    <div class="col-md-4">
                <div class="boder bg-light rounded p-4" >
                    <h4>Grand Total:  <?php echo $total ?></h4>
                    <br>
                    <form action="">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Cash On Delivery
                        </label>
                    </div>
                    <br>
                    
                        <?php 
                        if(isset($_SESSION['dangky'])){
                            ?>
                            <p><a href="thanhtoan.php">Đặt Hàng</a></p>
                            <?php 
                        }else{
                            ?>
                            <p><a href="thanhtoan.php">Đặt Hàng</a></p>
                            <p><a href="">Đăng Lý Đặt Hàng</a></p>
                            <?php
                        }
                        ?>
                        <!-- <button class="btn btn-primary btn-block">Make Purchase</button> -->
                    </form>
                </div>
    </div>
</div>
</div>




<script>
$(document).ready(function() {
alldeleteBtn = document.querySelectorAll('.delete')
alldeleteBtn.forEach(onebyone => {
onebyone.addEventListener('click',deleteINsession)
})

function deleteINsession(){
removable_id = this.id;
$.ajax({
    url:'cart.php',
    method:'POST',
    dataType:'json',
    data:{ 
          id_to_remove:removable_id,
          action:'remove' 
    },
    success:function(data){
            $('#displayCheckout').html(data);
alldeleteBtn = document.querySelectorAll('.delete')
alldeleteBtn.forEach(onebyone => {
onebyone.addEventListener('click',deleteINsession)
})
          }
  }).fail( function(xhr, textStatus, errorThrown) {
alert(xhr.responseText);
});

}


$('.add').click(function() { 
id = $(this).data('id');
name = $('#name' + id).val();
price = $('#price' + id).val();
quantity = $('#quantity' + id).val();
  $.ajax({
    url:'cart.php',
    method:'POST',
    dataType:'json',
    data:{
          cart_id : id,
          cart_name : name,
          cart_price : price,
          cart_quantity : quantity,
          action:'add' 
    },
    success:function(data){
            // $('#displayCheckout').html(data);
            // location.reload();
            alert('Checkout added successfully'); // 
}
  }).fail( function(xhr, textStatus, errorThrown) {
alert(xhr.responseText);
});

})
})


$('.quantity').change(function () {
var product_id = $(this).attr('data-product-id');
var product_quantity = $(this).val();
var action = 'update';
console.log(product_quantity);
if (product_quantity > 0) {
    $.ajax({
        url: "Controllers/CartController.php",
        method: "POST",
        data: {product_id: product_id, product_quantity: product_quantity, action: action},
        success: function (data) {
            load_cart_data();
            location.reload();
        }

    })

} else alert("Vui lòng nhập số lượng");



});
</script>
</div>

</body>
</html>


