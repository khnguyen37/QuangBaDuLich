<style>
  .flex-container {
    display: flex;
    justify-content: space-between;
    cursor: pointer;
}
  #tes{
    font-family: Arial, sans-serif;
    background-color: #6ad0e0;
    padding: 100px;
  
  }
  .LoginAndRegister-form {
    max-width: 700px;
    margin: 150px auto;
    background-color: #ffffff;
    padding: 40px;
    border-radius: 1px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.LoginAndRegister-form label {
    display: block;
    margin-bottom: 10px;
}

.LoginAndRegister-form input[type="text"],
.LoginAndRegister-form input[type="email"],
.LoginAndRegister-form input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 3px;
}
  
</style>
<?php
  $loi="";
  if(isset($_POST['nutguiyeucau'])==true){
    
    $email=$_POST['email'];
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $conn = new PDO("mysql:host=$servername;dbname=quangbadulich", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM dangnhapkh where email = ?";
    $stsm=$conn->prepare($sql);
    $stsm->execute([$email]);
    $count = $stsm->rowCount();
    if($count==0){
      $loi = "Email bạn chưa đăng kí.";
    }
    else{
      $matkhaumoi = substr(md5( rand(0,99999)),0, 6);
      $sql="UPDATE dangnhapkh set password=?  where email = ?";
      $stsm=$conn->prepare($sql);
      $stsm->execute([$matkhaumoi,$email]);
      //echo "Đã cập nhật";
      $kq=GuiMatKhauMoi($email,$matkhaumoi);
      if($kq==true){
        //header("location:dangnhap.php");
      }        
      echo "Đã gửi qua gmail, vui lòng kiểm tra";

    }
  }
?>
<?php function GuiMatKhauMoi($email,$matkhau){
    require "PHPMailer-master/src/PHPMailer.php"; 
    require "PHPMailer-master/src/SMTP.php"; 
    require 'PHPMailer-master/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
  try {
      $mail->SMTPDebug = 0; //0,1,2: chế độ debug
      $mail->isSMTP();  
      $mail->CharSet  = "utf-8";
      $mail->Host = 'smtp.gmail.com';  //SMTP servers
      $mail->SMTPAuth = true; // Enable authentication
      $mail->Username = 'khnguyen20011119@gmail.com'; // SMTP username
      $mail->Password = 'xabrnipqirpiwbac';   // SMTP password
      $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL  
      $mail->Port = 465;  // port to connect to                
      $mail->setFrom('khnguyen20011119@gmail.com', 'Quảng Bá Du Lịch' ); 
      $mail->addAddress($email); 
      $mail->isHTML(true);  // Set email format to HTML
      $mail->Subject = 'Thư gửi lại mật khẩu';
      $noidungthu = "<p>Bạn nhận được thư này do bạn hay ai đó yêu cầu mật khẩu mới từ website của chúng tôi</p>
                    Mật khẩu của bạn là {$matkhau}
      "; 
      $mail->Body = $noidungthu;
      $mail->smtpConnect( array(
          "ssl" => array(
              "verify_peer" => false,
              "verify_peer_name" => false,
              "allow_self_signed" => true
          )
      ));
      $mail->send();
      return true;
    } catch (Exception $e) {
      echo 'Error: ', $mail->ErrorInfo;
      return false;

  }

}?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<form  method="POST" class="LoginAndRegister-form" id ="tes"style="width:600px;" name=""class="border border-primary border-2 m-auto p-2">
        <h4 class="mb-3 text-center" > 
            Quên mật khẩu 
        </h4>
        <?php if($loi != ""){?>
            <div class="alert alert-danger"><?= $loi ?></div>
        <?php } ?>

  <div class="mb-3">
    <label for="email" class="form-label">Nhập email</label>  
    <input value="<?php if(isset($email)== true) echo $email ?>" type="email" class="form-control" id="email" name="email" >
    
  </div>
    <div class="flex-container">
      <div><button type="submit" class="btn btn-primary" name="nutguiyeucau">Gửi tin nhắn</button></div>
      <div><a  href="DangNhap.php" class="btn btn-primary">Đăng Nhập</a></div>
    </div>
  
</form>   
</body>
</html>
