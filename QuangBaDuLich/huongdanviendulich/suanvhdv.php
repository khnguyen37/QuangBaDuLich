<?php
    $id=$_GET['id'];


    if(isset($_POST['sbm'])){
        $TenHDV=$_POST['TenHDV'];
        $DiaChi=$_POST['DiaChi'];
        $SDT=$_POST['SDT'];
        $GioiTinh=$_POST['GioiTinh'];
        
        $sql="UPDATE hdv_dulich SET TenhdV='$TenHDV',DiaChi='$DiaChi',SDT='$SDT',GioiTinh='$GioiTinh' where MaHDV=$id";
        $stsm = $conn->prepare($sql);
        $stsm->execute();
        header('location: index.php?page_layout=danhsachnvhdv');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Danh sach nhân viên</h2>
        </div>
        <?php
                $id = $_GET['id'];
                $sql = "SELECT * from hdv_dulich where MaHDV= $id";
                $query=$conn->query($sql);
                $product=$query->fetch(PDO::FETCH_ASSOC);

        ?>
        <div class ="card-body">
            <form method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="">Tên Nhân Viên</label>
                    <input type="text" name="TenHDV" class="form-control" value="<?php echo $product['TenHDV'];?>">
                </div>

                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="DiaChi" class="form-control" value="<?php echo $product['DiaChi'];?>">
                </div>

                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="number" name="SDT" class="form-control" value="<?php echo $product['SDT'];?>">
                </div>

                <div class="form-group">
                    <label for="">Giới tính</label>
                    <input type="text" name="GioiTinh" class="form-control" value="<?php echo $product['GioiTinh'];?>">
                </div>

                
                <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
            </form>
        </div>
    </div>
</div>