<style>
    #tes{
    font-family: Arial, sans-serif;
    background-color: #6ad0e0;
    padding: 100px;
  
  }
</style>
<?php
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
    <form action="DangKy.php" method="POST" id="tes"class="LoginAndRegister-form">
    <h3 style="text-align: center;">Đăng Ký</h3>

    <label for="user">Tên Người dùng:</label>
    <input type="text" name="username" placeholder="Username" required>

    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Email" required>

    <label for="password">Mật Khẩu:</label>
    <input type="password" name="password" placeholder="Password" required>

    <label for="confirm_password">Nhập Lại mật Khẩu:</label>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
    <button type="submit" class="btn btn-primary" name="register">Đăng Ký</button>
    <p>Bạn đã có tài khoản ?<a href="DangNhap.php" style="color:red">Đăng Nhập</a></p>

    <?php
    if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Kiểm tra xem mật khẩu và xác nhận mật khẩu có khớp không
    if ($password != $confirm_password) {
        echo '<p style="background:#red">Mật khẩu và xác nhận mật khẩu không trùng khớp<p>';
        exit;
    }

    // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu chưa
    $query = "SELECT * FROM DangNhapKH WHERE email=:email";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo 'Email đã đăng kí ';
        exit;
    }

    // Thêm thông tin người dùng vào cơ sở dữ liệu
    $query = "INSERT INTO DangNhapKH (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        echo 'Đăng kí tài khoản thành công, Vui lòng đăng nhập';
    } else {
        echo 'Error: ' . $stmt->errorInfo();
    }
}
?>
</form>
</body>
</html>