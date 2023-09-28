<?php
    function create_connect(){
        $link = mysqli_connect("localhost", "owner", "123456") 
         or die("連線失敗".mysqli_connect_error());
        return $link;
    }





    // function create_connect(){
    //     $link = mysqli_connect("localhost", "id21258762_113119", "Aa-11111111") 
    //      or die("連線失敗".mysqli_connect_error());
    //     return $link;
    // }
    // 'testdb' 改$dbname  id21255447_localhost
    $db_name = "id21258762_localhost";
    function execute_sql($link, $dbname, $sql){
        mysqli_select_db($link, $dbname) or die("連線資料失敗".mysqli_error($link));
        $result = mysqli_query($link, $sql);
        return $result;
    }
    $aaa= "id21258762_localhost";
?>