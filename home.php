<?php include ("Components/header.php")?>
<?php
include "Config/config_cart.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>UI Monk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- <style>
    img {
        width: 100% !important;
        height: 100px !important;
        object-fit: contain
    }

    h3 {
        text-align: center;
        white-space: nowrap
    }

    h6 {
        text-align: center
    }
    img{
    max-width: 100%;
    height: auto;
    background: lightblue;
    background: radial-gradient(white 30%, lightblue 70%);
}
    </style> -->

</head>
<body>
    <h1 style="text-align: center; margin-top: 50px;">Sản Phẩm mới nhất</h1>    
    <div class="container" >
        <div class="row">
            
           <?php
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql); 
while($row = mysqli_fetch_assoc($result)) {
// echo $row['id'] ." ". $row['name'] ." ". $row['image'] ." ". $row['price']."<br>";
?>

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
            <button class='btn btn-danger add mt-4' data-id="<?php echo $row['id']?>"> Add to Cart <i class="fas fa-shopping-cart" style="color: black;"></i></button>
            </form>    
        </div>
            
            </div>
            <?php
}
?>

            <!-- <div class="col-md-1">

            </div>
            <div class="col-md-4">
            <h3 class='text-center'> Checkout</h3>
            <div id="displayCheckout">
            <?php 
                if(!empty($_SESSION['cart'])){
                    $outputTable = '';
                    $total = 0;
                    $outputTable .= "<table class='table table-bordered'><thead><tr><td>Name</td><td>Price</td><td>Quantity</td><td>Action</td> </tr></thead>";
                    foreach($_SESSION['cart'] as $key => $value){
                        $outputTable .= "<tr><td>".$value['p_name']."</td><td>".($value['p_price'] * $value['p_quantity']) ."</td><td>".$value['p_quantity']."</td><td><button id=".$value['p_id']." class='btn btn-danger delete'>Delete</button></td></tr>";  
                        $total = $total + ($value['p_price'] * $value['p_quantity']);
                    }
                    $outputTable .= "</table>";
                    $outputTable .= "<div class='text-center'><b>Total: ".$total."</b></div>";
                    echo $outputTable;
                }

?>
            </div> 
            </div>
        </div>  -->



            <script>
            $(document).ready(function() {
                alldeleteBtn = document.querySelectorAll('.delete')
                alldeleteBtn.forEach(onebyone => {
                    onebyone.addEventListener('click', deleteINsession)
                })

                function deleteINsession() {
                    removable_id = this.id;
                    $.ajax({
                        url: 'cart.php',
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            id_to_remove: removable_id,
                            action: 'remove'
                        },
                        success: function(data) {
                            $('#displayCheckout').html(data);
                            alldeleteBtn = document.querySelectorAll('.delete')
                            alldeleteBtn.forEach(onebyone => {
                                onebyone.addEventListener('click', deleteINsession)
                            })
                        }
                    }).fail(function(xhr, textStatus, errorThrown) {
                        alert(xhr.responseText);
                    });

                }




                $('.add').click(function() {
                    id = $(this).data('id');
                    name = $('#name' + id).val();
                    price = $('#price' + id).val();
                    quantity = $('#quantity' + id).val();
                    $.ajax({
                        url: 'cart.php',
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            cart_id: id,
                            cart_name: name,
                            cart_price: price,
                            cart_quantity: quantity,
                            action: 'add'
                        },
                        success: function(data) {
                            $('#displayCheckout').html(data);
                            alldeleteBtn = document.querySelectorAll('.delete')
                            alldeleteBtn.forEach(onebyone => {
                                onebyone.addEventListener('click', deleteINsession)
                            })
                        }
                    }).fail(function(xhr, textStatus, errorThrown) {
                        alert(xhr.responseText);
                    });

                })
            })
            </script>




</body>

</html>
<?php include ("Components/footer.php")?>
<?php
mysqli_close($conn);
?>