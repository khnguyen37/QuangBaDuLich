<?php
    $sql="SELECT * FROM hdv_dulich";
    $data=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="trangchu.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <title>Hướng dẫn viên</title>
</head>
<body>
<body>
	<div class="sidebar">
		<div class="logo"><h4>LOGO</h4></div>
		<nav>
			<ul>
                <li><a href="trangchu.php">Trang Chủ</a></li>
                <li>
				<a href="#">Cài đặt hệ thống</a>
				<ul class="cap_2">
                <li><a href="index.php?page_layout=danhsachtour">Danh sách Tour du lịch</a></li>
                    <li><a href="index.php?page_layout=danhsachpt">Danh sách phương tiện</a></li>
                    <li><a href="index.php?page_layout=loaitour">Danh sách loại Tour du lịch</a></li>
                    <li><a href="index.php?page_layout=danhsachnvhdv">Danh sách Hướng dẫn viên</a></li>
					<li><a href="index.php?page_layout=danhsachnv">Danh sách Nhân viên</a></li>
				</ul>
				</li>
                    
                </li>
                <li><a href="index.php?page_layout=logout">Đăng xuất</a></li>


			</ul>
			<div class="icon">
				<i class="fas fa-bars"></i>
			</div>
		</nav> 
	</div>

</body>
<footer>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">   
            Danh sách Hướng dẫn viên
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                            <th>MaHDV</th>
                            <th>Tên HDV</th>
                            <th>Địa chỉ </th>
                            <th>Số điện thoại</th>
                            <th>Giới Tính</th>
                            <th>Sửa</th>
                            <th>Xóa</th>

                           
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row=$data->fetch()){?>
                        <tr>
                            <td><?php echo $row['MaHDV'];?></td>
                            <td><?php echo $row['TenHDV'];?></td>
                            <td><?php echo $row['DiaChi'];?></td>
                            <td><?php echo $row['SDT'];?></td>
                            <td><?php echo $row['GioiTinh'];?></td>
                            <td>
                                <a href="index.php?page_layout=suanvhdv&id=<?php echo $row['MaHDV'];?>">Sửa</a>
                            </td>
                            <td>
                                <a onclick="return Del('<?php echo $row['TenHDV'];?>')" href="index.php?page_layout=xoanvhdv&id=<?php echo $row['MaHDV'];?>">Xóa</a>
                                
                            </td>
                        </tr>
                        <?php }  ?>
                        
                </tbody>
            </table>
            <a class="btn btn-primary"href="index.php?page_layout=themnvhdv">Thêm mới</a>
        </div>
    </div>
</div>
<script>
    function Del(name){
        return confirm("Bạn có chắc muốn xóa sản phẩm: "+ name + " ?");
    }
</script>
</footer>

</html>

