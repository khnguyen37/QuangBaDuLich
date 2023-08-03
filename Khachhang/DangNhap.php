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



</style>
<?php
    session_start();

    require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <form action="dangnhap.php" id ="tes"method="POST" class="LoginAndRegister-form">
    <h3 style="text-align: center;">Đăng Nhập</h3>

    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="Password" required>
    <div class="flex-container">
        <div><button type="submit" class="btn btn-primary" name="login">Đăng Nhập</button></div>
        <div><a a href="Quenmatkhau.php"class="btn btn-primary">Quên Mật Khẩu ?</a></div>
    </div>
    <p>Bạn chưa có tài khoản ?<a href="DangKy.php" style="color:red">Đăng Ký</a></p>

    <?php
    if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Kiểm tra thông tin đăng nhập
    $query = "SELECT * FROM dangnhapkh WHERE email  =:email AND password=:password";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $_SESSION['email'] = $email;
        header("location:index.php?page_layout=giaodienkh");
        //echo "Đăng nhập thành công"; print_r($_SESSION);
        //header("location:test.php");    
        exit();
    } else {
        echo 'Invalid email or password.';
    }
}
?>
</form>
</body>
</html>