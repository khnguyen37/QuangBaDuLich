<?php
    $id=$_GET['id'];
    $sql="DELETE  FROM loaitour where MaLoaiTour=$id";
    $stsm =$conn->prepare($sql);
    $stsm->execute();
    header('location:index.php?page_layout=loaitour');
?>