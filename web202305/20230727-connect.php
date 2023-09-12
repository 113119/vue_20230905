<?php
    $servername = "localhost";
    $username = "owner";
    $password = "123456";

    //建立連線
    $conn = mysqli_connect($servername, $username, $password);

    //確認連線
    if(!$conn){
        die("建立連線失敗".mysqli_connect_error());
    }

    echo "連線成功!";
?>