<?php
    $id=$_GET['id'];
    $sql="DELETE  FROM nhanvienchamsoc where MaNV=$id";
    $query =  $conn->prepare($sql);
    $query->execute();
    header('location:index.php?page_layout=danhsachnv');
?>