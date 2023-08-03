<?php
    if(session_id()=='')
    session_start();
    if(isset($_SESSION['email'])==false){
        header("location:dangnhap.php");
        exit();
    }   
    $email=$_SESSION['email'];
    $loi="";
    //print_r($_POST);
    if(isset($_POST['btndoimatkhau'])==true){
        $matkhaucu=$_POST['matkhaucu'];
        $matkhaumoi_1=$_POST['matkhaumoi_1'];
        $matkhaumoi_2=$_POST['matkhaumoi_2'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        $conn = new PDO("mysql:host=$servername;dbname=quangbadulich", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * FROM dangnhapkh where email = ? and password = ?";
        $stsm=$conn->prepare($sql);
        $stsm->execute([$email,$matkhaucu]);
        if($stsm->rowCount()==0){
            $loi.="Mật khẩu cũ sai<br>";
        }
        if(strlen($matkhaumoi_1)<6) {$loi.="Mật khẩu mới yêu cầu tối thiểu 6 kí tự<br>";}
        if($matkhaumoi_1!=$matkhaumoi_2)    {$loi.="Mật khẩu mới 2 lần không giống nhau <br>";}
        if($loi==""){
            $sql="UPDATE dangnhapkh SET password = ? where email = ? ";
            $stsm=$conn->prepare($sql);
            $stsm->execute([$matkhaumoi_1,$email]);
            //echo "Đã cập nhật mật khẩu mới";
            header("location:dangnhap.php");
            exit();
        }

    }
?><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<form method="POST" style="width:600px" class="border border-primary round border-2 p-2 m-auto">
<?php
    if($loi!=""){?>
        <div class="alert alert-info"><?php echo $loi?></div>
 <?php   }
?>  
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tên đăng nhập </label>
    <input type="text" disabled class="form-control" id="tendangnhap"name="tendangnhap" placeholder="">
  </div>
  <div class="mb-3">
    <label for="matkhaucu" class="form-label">Mật khẩu cũ</label>
    <input type="password" value="<?php if(isset($matkhaucu)==true) echo $matkhaucu?>"class="form-control" id="matkhaucu"name="matkhaucu">
  </div>
  <div class="mb-3">
    <label for="matkhaumoi_1" class="form-label">Mật khẩu mới</label>
    <input type="password" value="<?php if(isset($matkhaumoi_1)==true) echo $matkhaumoi_1?>"class="form-control" id="matkhaumoi_1"name="matkhaumoi_1">
  </div>
  <div class="mb-3">
    <label for="matkhaumoi_2" class="form-label">Nhập lại mật khẩu mới</label>
    <input type="password" value="<?php if(isset($matkhaumoi_2)==true) echo $matkhaumoi_2?>"class="form-control" id="matkhaumoi_2"name="matkhaumoi_2">
  </div>

  <button type="submit" class="btn btn-primary" name="btndoimatkhau" value="doimk">Đổi mật khẩu</button>
</form>