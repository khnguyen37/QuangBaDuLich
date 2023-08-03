<?php
require_once "config/db.php";
session_start();
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
    $action  =  (isset($_GET['action'])) ? $_GET['action']: 'add';    
    $quantity=(isset($_GET['quantity'])) ? $_GET['quantity'] : 1;
    if($quantity<=0)
    {
        $quantity=1;
    }
    //echo $action;
    //die();
    $sql = "SELECT * from Tour where MaTour= $id";
    $query=$conn->query($sql);
    //session_destroy();
    //die();    
    if($query){
    $product=$query->fetch(PDO::FETCH_ASSOC);
    }
    $itemp = [
        'id'=>$product['MaTour'],
        'name'=>$product['TenTour'],
        'img'=>$product['HinhAnh'],
        'price'=>$product['Gia'],
        'quantity'=>$quantity
    
    ];  
    if($action =='add'){

    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['quantity'] += $quantity;
    }
    else{
        $_SESSION['cart'][$id]=$itemp;
    }
    }
    if($action =='update'){
        $_SESSION['cart'][$id]['quantity'] = $quantity;

    }   
    if($action =='delete'){ 
        //echo "Chào bạn".$_SESSION['email'];
        unset($_SESSION['cart'][$id]);
    }

    header('location: view_cart.php');
    echo "<pre>";
    print_r($_SESSION['cart']);

    


    // thêm mới giỏ hàng
    // cập nhật giỏ hàng
    // xóa giỏ hàng
?>