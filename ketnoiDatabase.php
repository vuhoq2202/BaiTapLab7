<?php
    $serverName = "localhost";
    $userName = "root";
    $pwd = "";
    $nameDB = "dblaptop";

    $conn = mysqli_connect($serverName, $userName, $pwd, $nameDB);

    if ($conn == false){
        echo "Kết nối thất bại !!";
    }

    if (!$conn) {
        die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
    }
 
?>