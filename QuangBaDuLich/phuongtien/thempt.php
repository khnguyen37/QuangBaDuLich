
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
        $TenPT=$_POST['TenPT'];
        $SoChoNgoi=$_POST['SoChoNgoi'];
        
        $sql="INSERT INTO phuongtien(TenPT ,SoChoNgoi)
        Values('$TenPT','$SoChoNgoi')";
        $query=$conn->query($sql);
        header('location: index.php?page_layout=danhsachpt');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm phương tiện</h2>
        </div>
        <div class ="card-body">
            <form method="post" enctype="multipart/form-data">

                

                <div class="form-group">
                    <label for="">Tên phương tiện</label>
                    <input type="text" name="TenPT" class="form-control"required>
                </div>

                <div class="form-group">    
                    <label for="">Số chỗ ngồi </label>
                    <input type="number" name="SoChoNgoi" class="form-control"required>
                </div>
                
                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div>