<?php
   $servername = "localhost";
   $username = "id21258762_113119";
   $password = "Aa-11111111";
   $aaa = "id21258762_localhost";
   // $servername = "localhost";
   // $username = "owner";
   // $password = "123456";
   // $dbname = "id21255447_localhost";
// 規定主機名或IP 地址。
// 規定MySQL 用戶名。
// 規定MySQL 密碼。
// 規定默認使用的數據庫。
   $conn = mysqli_connect($servername, $username, $password, $aaa);

   if(isset($_POST["pname"]) && isset($_POST["price"]) && isset($_POST["pnum"]) && isset($_POST["id"])){
        if($_POST["pname"] != "" && $_POST["price"] != "" && $_POST["pnum"] != "" && $_POST["id"] != ""){
            $p_pname = $_POST["pname"];
            $p_price = $_POST["price"];
            $p_pnum  = $_POST["pnum"];
            $p_id    = $_POST["id"];

            require_once "dbtools.php";
            $conn = create_connect();
            $sql = "UPDATE product SET Pname ='$p_pname', Price='$p_price', Pnum='$p_pnum' WHERE ID = '$p_id'";
            if(execute_sql($conn, $aaa, $sql)){
                echo '{"state" : true, "message" : "更新成功"}';
            }else{
                echo '{"state" : false, "message" : "更新失敗"}';
            }
            mysqli_close($conn);
        }else{
            echo '{"state" : false, "message" : "欄位不允許空白"}';
        }
    }else{
        echo '{"state" : false, "message" : "欄位錯誤"}';
    }
?>