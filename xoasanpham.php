<?php
    require('./ketnoiDatabase.php');
    $id = (int) $_GET['id'];
    // truy vấn đến CSDL để lấy thông tin ảnh
    $sql = "SELECT imgURL FROM `sanpham` WHERE `sanpham`.`masp` = $id";
    $query = mysqli_query($conn, $sql);
    $after = mysqli_fetch_assoc($query);

    //DELETE file img
    if(file_exists("./images/".$after['imgURL'])){
        unlink("./images/".$after['imgURL']);
    }
    $sql = "DELETE FROM `sanpham` WHERE `sanpham`.`masp` = $id";
    mysqli_query($conn, $sql);
    header("Location:trangChu.php");
?>