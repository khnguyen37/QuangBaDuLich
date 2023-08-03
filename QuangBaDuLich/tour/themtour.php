
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
        $TenTour=$_POST['TenTour'];
        $Gia=$_POST['Gia'];
        $MaPT=$_POST['MaPT'];
        $MaLoaiTour=$_POST['MaLoaiTour'];
        $MoTa=$_POST['MoTa'];

        $HinhAnh=$_FILES['HinhAnh']['name'];
        $HinhAnh_tmp=$_FILES['HinhAnh']['HinhAnh_tmp'];

        $SoVe=$_POST['SoVe'];
        $MaNV=$_POST['MaNV'];
        $MaHDV=$_POST['MaHDV'];
        $sql="INSERT INTO Tour(TenTour , Gia , MaPT , MaLoaiTour , MoTa , HinhAnh , SoVe , MaNV , MaHDV)
        Values('$TenTour','$Gia','$MaPT','$MaLoaiTour','$MoTa','$HinhAnh','$SoVe','$MaNV','$MaHDV')";
        $data=$conn->query($sql);
        move_uploaded_file($HinhAnh_tmp,'img/'.$HinhAnh);
        header('location: index.php?page_layout=danhsachtour');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Tour</h2>
        </div>
        <div class ="card-body">
            <form method="post" enctype="multipart/form-data">



                <div class="form-group">
                    <label for="">Tên Tour du lịch</label>
                    <input type="text" name="TenTour" class="form-control"required>
                </div>

                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="number" name="Gia" class="form-control"required>
                </div>
                <div class="form-group">
                    <label for="">Phương tiện</label>
                    <select class="form-control" name="MaPT">
                    <?php
                        while($row_PT= $query_PT->fetch(PDO::FETCH_ASSOC)){?>
                            <option value="<?php echo $row_PT['MaPT'];?>"><?php echo $row_PT['TenPT']; ?></option>
                        <?php }?>  
                    </select>  
                </div>

                <div class="form-group">
                    <label for="">Loại Tour</label>
                    <select class="form-control" name="MaLoaiTour">
                    <?php
                        while($row_LoaiTour= $query_LoaiTour->fetch(PDO::FETCH_ASSOC)){?>
                            <option value="<?php echo $row_LoaiTour['MaLoaiTour'];?>"><?php echo $row_LoaiTour['TenLoaiTour']; ?></option>
                        <?php }?>  
                    </select>  
                </div>

                <div class="form-group">
                    <label for="">Mô Tả </label>
                    <input type="text" name="MoTa" class="form-control"required>
                </div>

                <div class="form-group">
                    <label for="">Hình Ảnh</label>
                    <input type="file" name="HinhAnh">
                </div>

                <div class="form-group">
                    <label for="">Số Vé</label>
                    <input type="text" name="SoVe" class="form-control"required>
                </div>

                <div class="form-group">
                    <label for="">Nhân Viên</label>
                    <select class="form-control" name="MaNV">
                    <?php
                        while($row_NV=$query_NV->fetch(PDO::FETCH_ASSOC)){?>
                            <option value="<?php echo $row_NV['MaNV'];?>"><?php echo $row_NV['TenNV']; ?></option>
                        <?php }?>  
                    </select>  
                </div>

                <div class="form-group">
                    <label for="">Hướng dẫn Viên</label>
                    <select class="form-control" name="MaHDV">
                    <?php
                        while($row_HDV= $query_HDV->fetch(PDO::FETCH_ASSOC)){?>
                            <option value="<?php echo $row_HDV['MaHDV'];?>"><?php echo $row_HDV['TenHDV']; ?></option>
                        <?php }?>  
                    </select>  
                </div>
                
                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div>