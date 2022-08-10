<?php 
$id=$_GET["id"];
$sql="DELETE FROM productss WHERE prd_id = $id";
$query = mysqli_query($connect,$sql);
header('location: index_add.php?page_layout=danhsach'); 
?>