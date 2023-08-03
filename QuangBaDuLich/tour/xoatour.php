<?php
    $id=$_GET['id'];
    $sql="DELETE  FROM Tour where MaTour=$id";
    $query = $conn->prepare($sql);  
    $query->execute(); 
    header('location:index.php?page_layout=danhsachtour');
?>