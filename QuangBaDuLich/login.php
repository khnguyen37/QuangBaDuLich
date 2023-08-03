<?php
require_once "config/db.php";
    if(isset($_POST["uname"])&&isset($_POST["password"])){
        function validate($data){
            $data =trim($data);
            $data=stripcslashes($data);
            $data=htmlspecialchars($data);
            return $data;

        }
        $uname=validate($_POST["uname"]);
        $pass=validate($_POST["password"]);
        if(empty($uname)){
            header("Location: form.php?error=Username is required");
            exit();
        }else if(empty($pass)){
            header("Location: form.php?error=Password is required");
            exit();
        }else {    
            $sql ="SELECT * FROM users where user_name='$uname' and Password='$pass'";
            $result=$conn->query($sql);
            if($result->rowCount()===1){
                $row=$result->fetch();
                if($row["user_name"]===$uname && $row["Password"]===$pass){
                    header('location: index.php?page_layout=trangchu');
                }else {
                    header("Location: form.php?error=Incorect");
                    exit();
                }
                       
            }else{
                header("Location: form.php?error=Sai username hoặc password");
                exit();
            }

        }
    }
        else{
        header("Location: index.php");
        exit();
    }
?>