<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="Assets/css/register.css">
</head>
<body>
    <?php include ("Controllers/AuthController.php"); ?>
	<form method="post">
    <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <h3>Welcome</h3>
                        <p>If you want to buy things in the future without looking at the price, you need to work hard</p>
                        <a href="login.php" class="btn btn-light" style="border-radius: 1.5rem;    font-weight: bolder;">Login </a>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Create Account</h3>
                                <div class="row register-form">
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <input type="text" name="username" class="form-control form-css" placeholder="UserName *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="pass" class="form-control form-css" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control form-css" placeholder="Họ tên *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-css"  placeholder="Confirm email *" value="" />
                                        </div>
                                        <div class="form-css"><?php echo  $msg ?></div>
                                        <input type="submit" class="btnRegister" name="btn_submit"  value="Register"/>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
	</form>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</body>
</html>