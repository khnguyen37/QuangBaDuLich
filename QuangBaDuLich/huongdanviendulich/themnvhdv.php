
<?php
    $sql_VeTour="SELECT * from VeTour";
    $query_VeTour = $conn->query($sql_VeTour);
    $sql_LoaiTour="SELECT * from loaitour";
    $query_LoaiTour = $conn->query($sql_LoaiTour);
    $sql_PT="SELECT * from phuongtien";
    $query_PT= $conn->query($sql_PT);
    $sql_NV="SELECT * from nhanvienchamsoc";
    $query_NV= $conn->query($sql_NV);
    $sql_HDV="SELECT * from hdv_dulich";
    $query_HDV= $conn->query($sql_HDV);

    if(isset($_POST['sbm'])){
        $TenHDV=$_POST['TenHDV'];
        $DiaChi=$_POST['DiaChi'];
        $SDT=$_POST['SDT'];
        $GioiTinh=$_POST['GioiTinh'];
        
        $sql="INSERT INTO hdv_dulich(TenHDV ,DiaChi , SDT , GioiTinh)
        Values('$TenHDV','$DiaChi','$SDT','$GioiTinh')";
        $query=$conn->query($sql);
        header('location: index.php?page_layout=danhsachnvhdv');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm hướng dẫn viên</h2>
        </div>
        <div class ="card-body">
            <form method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="">Tên Nhân viên</label>
                    <input type="text" name="TenHDV" class="form-control"required>
                </div>

                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="DiaChi" class="form-control"required>
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="number" name="SDT" class="form-control"required>
                </div>
                <div class="form-group">    
                    <label for="">Giới tính </label>
                    <input type="text" name="GioiTinh" class="form-control"required>
                </div>
                
                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div>