<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>

</style>
<body>
    <div class="flex-container">
        <form id ="tes"method="POST" class="LoginAndRegister-form"action="login.php">        
        <h3 style="text-align: center;">Đăng Nhập</h3>
            <?php if(isset($_GET['error'])){?>
                <p class="error"><?php echo $_GET['error'];?></p>
            <?php    
            }?>
            Username:<input type="text" name ="uname"  placeholder="User Name">
            Password:<input type="password" name ="password"   placeholder="Password">
            <button type="submit" class="btn btn-primary">Đăng Nhập</button>
        </form>
    </div>
</body>
</html>