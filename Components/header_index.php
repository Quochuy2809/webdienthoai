<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Bán Hàng</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/footer.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left: 5pc;">
  <a class="navbar-brand" href="#" style="color:#28a745">HNSHOP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <form class="form-inline my-2 my-lg-0" style="margin-left: 10pc;">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="padding: 0 100px;">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-shopping-cart" style="margin-left:50px;font-size:22px;margin-right:50px"></i><span class="sr-only">(current)</span></a>
      </li>
    </form>
    <li>
    <div class="dropdown">
    <a href="login.php" class="btn btn-success" style="color: #fff;text-decoration:none ;">Login <i class="bi bi-box-arrow-left"></i> </a>
    <button type="button" class="btn btn-danger"><a href="register.php" style="color: #fff;text-decoration:none ;">Register <i class="bi bi-box-arrow-in-right"></i> </a></button>
</div>
    </li>
    </ul>
    </li>
    </ul>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

