<?php
    $id=$_GET['id'];
    $sql="DELETE  FROM phuongtien where MaPT=$id";
    $query = $conn->prepare($sql);
    $query->execute();
    header('location:index.php?page_layout=danhsachpt');
?>