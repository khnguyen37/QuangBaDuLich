<?php
    require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>QuangBaDuLich</title>
</head>

<body>
    <?php
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                //trangchu

                case 'doimatkhau':
                    require_once 'DoiMatKhau.php';
                    break;
                //đăng nhập
                case 'dangnhap':
                    require_once 'DangNhap.php';
                    break;
                case 'dangxuat':
                    require_once 'Dangxuat.php';
                    break;
                case 'form':
                    require_once 'form.php';
                    break;
                case 'giohang':
                    require_once 'giohang.php';
                    break;       
                case 'chitiet':
                    require_once 'chitietsanpham.php';
                        break;
                case 'tourtrongnuoc':
                    require_once 'Tourtrongnuoc.php';
                    break;
                case 'tourngoainuoc':
                        require_once 'Tourngoainuoc.php';
                        break;

                default:
                    require_once 'giaodienkh.php';
                    break;                 
            }
        }else {
                require_once 'giaodienkh.php';

        }
    ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>