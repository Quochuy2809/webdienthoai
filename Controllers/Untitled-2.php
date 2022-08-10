<?php include("Config/config.php"); ?>
<?php session_start() ?>
<?php 
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $Pass = $_POST['Pass'];

            $select = mysqli_query($conn, "SELECT * FROM  userphp WHERE username='$username' AND password='$Pass'");
            // var_dump($select);
            // var_dump(mysqli_fetch_array($select));
            // die;
            $row =  mysqli_fetch_array($select);
            
            if(is_array($row)){
                $_SESSION["username"] = $row['username'];
                $_SESSION["Pass"] = $row['password'];
                $_SESSION["name"] = $row['name'];
            }else{
                echo '<script type="text/javascript">';
                echo 'alert("Invalid Username or Password!");';
                echo 'window.location.heft = "index.php"';
                echo '</script>';
            }
        }
        if(isset($_SESSION["username"])){
            header("Location:home.php");
        }
    
    ?>


<!-- Đăng Ký -->
    <?php 

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

$msg ='';
if(isset($_POST["btn_submit"])){
    $username = $_POST["username"];
    $password = $_POST["pass"];
    $name = $_POST["name"];
    $email = $_POST["email"];
	$code = mysqli_real_escape_string($conn,md5(rand()));	
    if ($username == "" || $password == "" || $name == "" || $email == "") {
        $msg= "<div class='alert alert-danger'>Bạn vui lòng nhập đầy đủ thông tin</div>";
    }else{
        // Kiểm tra tài khoản đã tồn tại chưa
        
		$sql = "SELECT * FROM userphp WHERE username='$username'";  
		$kt=mysqli_query($conn,$sql);
        if(mysqli_num_rows($kt)>0){
            $msg="<div class='alert alert-danger'>Tài khoản đã tồn tại</div>";
        }else{
        //thực hiện việc lưu trữ dữ liệu vào db
        $sql = "INSERT INTO userphp(username,password,name ,email) VALUES ('$username','$password','$name','$email')";

		//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
        

try {
    //Server settings
    $mail->SMTPDebug =0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dqh28092001@gmail.com';                     //SMTP username
    $mail->Password   = 'ayzhfrmrfkhhmjbt';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress($email);    
   
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'no reply';
    $mail->Body    = 'Here is the verification link <b><a href="http://localhost/Code/web_banhang/home.php?verification='.$code.'">Click Here</a></b>';
    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
        // thực thi câu $sql với biến conn lấy từ file connection.php
           mysqli_query($conn,$sql);
           $msg="<div class='alert alert-success'>Chúc mừng bạn đã đăng ký thành công</div>";
    }
}
}
?>