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
                case 'trangchu':
                    require_once 'trangchu.php';
                    break;
                //Tour
                case 'danhsachtour':
                    require_once 'tour/danhsachtour.php';
                    break;

                case 'themtour':
                    require_once 'tour/themtour.php';                 
                    break;

                case 'suatour':
                    require_once 'tour/suatour.php';
                    break;

                case 'xoatour':
                    require_once 'tour/xoatour.php';
                    break;
                //Nhân Viên
                case 'danhsachnv':
                    require_once 'nhanvienchamsoc/danhsachnv.php';
                    break;

                case 'themnv':
                    require_once 'nhanvienchamsoc/themnv.php';                 
                    break;

                case 'suanv':
                    require_once 'nhanvienchamsoc/suanv.php';
                    break;

                case 'xoanv':
                    require_once 'nhanvienchamsoc/xoanv.php';
                    break;
                // Hướng dẫn viên
                case 'danhsachnvhdv':
                    require_once 'huongdanviendulich/danhsachnvhdv.php';
                    break;

                case 'themnvhdv':
                    require_once 'huongdanviendulich/themnvhdv.php';                 
                    break;

                case 'suanvhdv':
                    require_once 'huongdanviendulich/suanvhdv.php';
                    break;

                case 'xoanvhdv':
                    require_once 'huongdanviendulich/xoanvhdv.php';
                    break;
                //phương tiện
                case 'danhsachpt':
                    require_once 'phuongtien/danhsachpt.php';
                    break;

                case 'thempt':
                    require_once 'phuongtien/thempt.php';                 
                    break;

                case 'suapt':
                    require_once 'phuongtien/suapt.php';
                    break;

                case 'xoapt':
                    require_once 'phuongtien/xoapt.php';
                    break;
                //loaitour
                case 'loaitour':
                    require_once 'loaitour/loaitour.php';
                    break;

                case 'themloai':
                    require_once 'loaitour/themloai.php';                 
                    break;

                case 'sualoai':
                    require_once 'loaitour/sualoai.php';
                    break;

                case 'xoaloai':
                    require_once 'loaitour/xoaloai.php';
                    break;
                //đăng xuất
                case 'logout':
                    require_once 'logout.php';
                    break;
                    
                default:
                    require_once 'form.php';
                    break;  
                

            }
        }else {
                require_once 'form.php';

        }
    ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>