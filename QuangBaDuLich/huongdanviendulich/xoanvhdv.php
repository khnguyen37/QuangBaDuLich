<?php
    $id=$_GET['id'];
    $sql="DELETE  FROM hdv_dulich where MaHDV=$id";
    $stsm = $conn->prepare($sql);
    $stsm->execute();
    header('location:index.php?page_layout=danhsachnvhdv');
?>