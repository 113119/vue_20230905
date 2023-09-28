<?php
 $servername = "localhost";
 $username = "id21258762_113119";
 $password = "Aa-11111111";
 $aaa = "id21258762_localhost";

 $conn = mysqli_connect($servername, $username, $password, $aaa);

    if(isset($_POST["id"])){
        if($_POST["id"] != ""){
            $p_id    = $_POST["id"];
            require_once "dbtools.php";
            $conn = create_connect();
            $sql = "DELETE FROM product WHERE ID ='$p_id'";
            if(execute_sql($conn, $aaa, $sql)){
                echo '{"state" : true, "message" : "刪除成功"}';
            }else{
                echo '{"state" : false, "message" : "刪除失敗"}';
            }
            mysqli_close($conn);
        }else{
            echo '{"state" : false, "message" : "欄位不允許空白"}';
        }
    }else{
        echo '{"state" : false, "message" : "欄位錯誤"}';
    }
?>