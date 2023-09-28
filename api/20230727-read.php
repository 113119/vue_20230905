<?php
    // $servername = "localhost";
    // $username = "id21258762_113119";
    // $password = "Aa-11111111";
    // $aaa = "id21258762_localhost";
    $servername = "localhost";
    $username = "owner";
    $password = "123456";
    $dbname= "id21258762_localhost";
// 規定主機名或IP 地址。
// 規定MySQL 用戶名。
// 規定MySQL 密碼。
// 規定默認使用的數據庫。
    $conn = mysqli_connect($servername, $username, $password,  $dbname);

    if(!$conn){
        die("連線失敗".mysqli_connect_error());
    }

    $sql = "SELECT ID, Pname, Price, Pnum, Created_at FROM product";
    $result = mysqli_query($conn, $sql);

    $mydata = array();

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $mydata[] = $row;
     
        }

        echo json_encode($mydata);
    }else{
        echo "查無資料!";
    }

    mysqli_close($conn);
?>
