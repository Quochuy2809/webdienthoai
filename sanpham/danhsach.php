<?php 

$sql = "SELECT * FROM productss inner join brands on productss.brand_id = brands.brand_id";
$query= mysqli_query($connect, $sql);
?>


<div class="container-fluid">
    <div class="card">
        <div class="card-header" style="display: flex;
    justify-content: space-between;">
            <h2>Danh sách sản phẩm</h2>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left: 5pc;">
    <ul class="navbar-nav mr-auto">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="fas fa-user" style="margin-right: 10px;"></i><?php echo $_SESSION['name'];?>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
  </ul>
    </ul>
    </ul>
</nav>


        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm </th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Thương hiệu</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $i=1;
                while($row=mysqli_fetch_assoc($query)){?>
                <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['prd_name']; ?> </td>

                        <td>
                            <img style="width:100px" src="Assets/images/<?php echo $row['image']; ?>" alt="">
                        </td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['brand_name']; ?></td>
                        <td>
                            <a href="index_add.php?page_layout=sua&id=<?php echo $row['prd_id'] ;?>">Sửa</a>
                        </td>
                        <td>
                            <a onclick="return Del('<?php echo $row['prd_name'] ?>')" href="index_add.php?page_layout=xoa&id=<?php echo $row['prd_id']; ?>">Xóa</a>
                        </td>
                        
                    </tr>
                
                <?php } ?>
                </tbody>
            </table>
            <a class="btn btn-primary" href="index_add.php?page_layout=them">Thêm Mới</a>
            <!-- <a href="cart_giohang.php" type='submit' class='btn btn-success'>Quay Lai</a> -->
        </div>
    </div>
</div>
<script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn xóa sản phẩm : " + name + "?");
    }
</script>