<?php

    $id=$_GET['id'];


    if(isset($_POST['sbm'])){
        $TenPT=$_POST['TenPT'];
        $SoChoNgoi=$_POST['SoChoNgoi'];

        
        $sql="UPDATE phuongtien SET TenPT='$TenPT',SoChoNgoi='$SoChoNgoi' where MaPT=$id";
        $query=$conn->prepare($sql);
        $query->execute();

        header('location: index.php?page_layout=danhsachpt');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa danh sách phương tiện</h2>
        </div>
        <?php
                $id = $_GET['id'];
                $sql = "SELECT * from phuongtien where MaPT= $id";
                $query=$conn->query($sql);
                $product=$query->fetch(PDO::FETCH_ASSOC);

        ?>
        <div class ="card-body">
            <form method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="">Tên phương tiện</label>
                    <input type="text" name="TenPT" class="form-control" value="<?php echo $product['TenPT'];?>">
                </div>

                <div class="form-group">
                    <label for="">Số chỗ ngỒi</label>
                    <input type="number" name="SoChoNgoi" class="form-control" value="<?php echo $product['SoChoNgoi'];?>">
                </div>

                

                
                <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
            </form>
        </div>
    </div>
</div>