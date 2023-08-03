<?php
    $id=$_GET['id'];

    if(isset($_POST['sbm'])){
        $TenLoaiTour=$_POST['TenLoaiTour'];
        
        $sql="UPDATE loaitour SET TenLoaiTour='$TenLoaiTour' where Maloaitour=$id ";
        $stsm=$conn->prepare($sql);
        $stsm->execute();
        header('location: index.php?page_layout=loaitour');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Danh sach loại tour</h2>
        </div>
        <?php
                $id = $_GET['id'];
                $sql = "SELECT * from loaiTour where MaloaiTour= $id";
                $query=$conn->query($sql);
                $product=$query->fetch(PDO::FETCH_ASSOC);

        ?>
        <div class ="card-body">
            <form method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="">Tên Loại Tour</label>
                    <input type="text" name="TenLoaiTour" class="form-control" value="<?php echo $product['TenLoaiTour'];?>">
                </div>  
                <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
            </form>
        </div>
    </div>
</div>