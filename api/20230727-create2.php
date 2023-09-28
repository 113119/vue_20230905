<?php
    if( isset($_POST["Wallet"])){
        if($_POST["Wallet"] != ""){
            $p_username = $_POST["username"];
            $p_Wallet = $_POST["Wallet"];
            // 000isset($_POST["username"])&&$_POST["username"] != "" &&
            $servername = "localhost";
            $username = "id21258762_113119";
            $password = "Aa-11111111";
            $aaa = "id21258762_localhost";
            // 學校
            // $servername = "localhost";
            // $username = "owner";
            // $password = "123456";
            // $dbname = "id21258762_localhost";

            $conn = mysqli_connect($servername, $username, $password, $aaa);

            if(!$conn){
                die("連線錯誤!".mysqli_connect_error());
            }

            $sql = "INSERT INTO checklist(Customer,Commodity,Wallet) VALUES('$p_username' ,'小黃瓜
            ','$p_Wallet')";
            if(mysqli_query($conn, $sql)){
                echo '{"state" : true, "message" : "新增成功"}';
            }else{
                echo '{"state" : false, "message" : "新增失敗"}';
            }
            mysqli_close($conn);
        }else{
            echo '{"state" : false, "message" : "欄位不允許空白"}';
        }
    }else{
        echo '{"state" : false, "message" : "欄位錯誤"}';
    }
?>