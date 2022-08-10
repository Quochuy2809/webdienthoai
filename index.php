<?php include ("Components/header_index.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container my-5" >
    <h1 style="margin-bottom:50px; text-align:center">Sản Phẩm Mới Nhất</h1>
    <div class="row">
        
        <div class="col-lg-3">
            <form  method="Post">
                <div class="card" style="margin-bottom: 25px;">
                    <img src="Assets/images/product1.jpg" class="card-img-top" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Bag 1</h5>
                        <h6 style="color:#DDA0DD;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">
                            Some quick example text to build on the card.
                        </p>
                        <small><s class="text-secondary">$519</s></small>
                        <p class="card-text">Price : $450</p>
                        <button type="submit" class="btn btn-warning my-3 " name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i> </button>
                        <!-- <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button> -->
                        <input type="hidden" name="Item_Name" value="Bag 1" />
                        <input type="hidden" name="Price" value="450" />
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="Post">
                <div class="card">
                    <img src="Assets/images/product2.jpg" class="card-img-top" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Bag 2</h5>
                        <h6 style="color:#DDA0DD;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">
                            Some quick example text to build on the card.
                        </p>
                        <small><s class="text-secondary">$519</s></small>
                        <p class="card-text">Price : $650</p>
                        <button type="submit" class="btn btn-warning my-3 " name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i> </button>
                        <!-- <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button> -->
                        <input type="hidden" name="Item_Name" value="Bag 2" />
                        <input type="hidden" name="Price" value="650" />
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="Post">
                <div class="card">
                    <img src="Assets/images/product3.jpg" class="card-img-top" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Bag 3</h5>
                        <h6 style="color:#DDA0DD;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">
                            Some quick example text to build on the card.
                        </p>
                        <small><s class="text-secondary">$519</s></small>
                        <p class="card-text">Price : $750</p>
                        <button type="submit" class="btn btn-warning my-3 " name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i> </button>
                        <!-- <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button> -->
                        <input type="hidden" name="Item_Name" value="Bag 3" />
                        <input type="hidden" name="Price" value="750" />
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="Post">
                <div class="card">
                    <img src="Assets/images/product4.jpg" class="card-img-top" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Bag 4</h5>
                        <h6 style="color:#DDA0DD;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">
                            Some quick example text to build on the card.
                        </p>
                        <small><s class="text-secondary">$519</s></small>
                        <p class="card-text">Price : $750</p>
                        <button type="submit" class="btn btn-warning my-3 " name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i> </button>
                        <!-- <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button> -->
                        <input type="hidden" name="Item_Name" value="Bag 3" />
                        <input type="hidden" name="Price" value="750" />
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="Post">
                <div class="card">
                    <img src="Assets/images/product4.jpg" class="card-img-top" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Bag 5</h5>
                        <h6 style="color:#DDA0DD;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </h6>
                        <p class="card-text">
                            Some quick example text to build on the card.
                        </p>
                        <small><s class="text-secondary">$519</s></small>
                        <p class="card-text">Price : $950</p>
                        <button type="submit" class="btn btn-warning my-3 " name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i> </button>
                        <!-- <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button> -->
                        <input type="hidden" name="Item_Name" value="Bag 4" />
                        <input type="hidden" name="Price" value="950" />
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="Post">
                <div class="card">
                    <img src="Assets/images/product3.jpg   " class="card-img-top" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Bag 6</h5>
                        <h6 style="color:#DDA0DD;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">
                            Some quick example text to build on the card.
                        </p>
                        <small><s class="text-secondary">$519</s></small>
                        <p class="card-text">Price : $950</p>
                        <button type="submit" class="btn btn-warning my-3 " name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i> </button>
                        <!-- <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button> -->
                        <input type="hidden" name="Item_Name" value="Bag 4" />
                        <input type="hidden" name="Price" value="950" />
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="Post">
                <div class="card">
                    <img src="Assets/images/product2.jpg  " class="card-img-top" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Bag 7</h5>
                        <h6 style="color:#DDA0DD;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </h6>
                        <p class="card-text">
                            Some quick example text to build on the card.
                        </p>
                        <small><s class="text-secondary">$519</s></small>
                        <p class="card-text">Price : $950</p>
                        <button type="submit" class="btn btn-warning my-3 " name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i> </button>
                        <!-- <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button> -->
                        <input type="hidden" name="Item_Name" value="Bag 4" />
                        <input type="hidden" name="Price" value="950" />
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="Post">
                <div class="card">
                    <img src="Assets/images/product1.jpg   " class="card-img-top" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Bag 8</h5>
                        <h6 style="color:#DDA0DD;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">
                            Some quick example text to build on the card.
                        </p>
                        <small><s class="text-secondary">$519</s></small>
                        <p class="card-text">Price : $950</p>
                        <button type="submit" class="btn btn-warning my-3 " name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i> </button>
                        <!-- <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button> -->
                        <input type="hidden" name="Item_Name" value="Bag 4" />
                        <input type="hidden" name="Price" value="950" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>
</html>
<?php include ("Components/footer.php")?>
