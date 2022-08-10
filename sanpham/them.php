<?php 
$sql_brand = "SELECT * FROM brands";
$query_brand = mysqli_query($connect,$sql_brand);

if(isset($_POST['sbm'])){
    $prd_name = $_POST['prd_name'];

    $image= $_FILES['image']['name'];
    $image_tmp=$_FILES['image']['tmp_name'];

    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $brand_id = $_POST['brand_id'];

    $sql="INSERT INTO productss (prd_name, image, price, quantity, description, brand_id) 
    VALUES ('$prd_name','$image','$price','$quantity','$description','$brand_id')";
    $query= mysqli_query($connect,$sql);
    move_uploaded_file($image_tmp, 'Assets/images/'.$image);
    header('location:index_add.php?page_layout=danhsach');
}
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Sản Phẩm</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên Sản Phẩm </label>
                    <input type="text" name="prd_name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Ảnh Sản Phẩm </label> <br>
                    <input type="file" name="image" >
                </div>

                <div class="form-group">
                    <label for="">Giá Sản Phẩm </label>
                    <input type="number" name="price" class="form-control"required>
                </div>

                <div class="form-group">
                    <label for="">Số Lượng Sản Phẩm </label>
                    <input type="text" name="quantity" class="form-control"required>
                </div>

                <div class="form-group">
                    <label for="">Mô tả Sản Phẩm </label>
                    <input type="text" name="description" class="form-control"required>
                </div>

                <div class="form-group">
                    <label for="">Thương Hiệu</label>
                    <select class="form-control" name="brand_id">
                        <?php 
                        while($row_brand = mysqli_fetch_assoc($query_brand)){?>
                        <option value="<?php echo $row_brand['brand_id'];?>"><?php echo $row_brand['brand_name'];?></option>
                        <?php } ?>

                    </select>
                </div>
                
                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
               
            </form>
            <div style="display:flex ;">
            <a href="index_add.php">
                <button name="sbm" class="btn btn-success" type="submit">Quay lại</button>
                </a>
                </div>
        </div>
    </div>
</div>