<?php
    function total_price($cart){
        $total_price=0;
        foreach($cart as $key => $value){
            $total_price +=$value['quantity']*$value['price'];
        }
        return $total_price;
    }
?>