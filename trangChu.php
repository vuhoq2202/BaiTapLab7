<style>
    #productList{
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #productList td , #productList th{
        border: 1px solid #ddd;
        padding: 8px;
    }

    #productList tr:nth-child(even){
        background-color: #f2f2f2;
    }

    #productList tr:hover{
        background-color: #ddd;
    }

    #productList th{
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04aa6d;
        color: white;
    }

    button{
        background-color: #2f54eb;
        padding: 8px 16px;
    }

    button a{
        color: white;
    }

    a{
        text-decoration: none;
    }
</style>
<?php
    require("ketnoiDatabase.php");
    $sql = "SELECT * FROM `sanpham`";
    $query = mysqli_query($conn, $sql);
?>
<h1>Quản lý danh sách sản phẩm </h1>
<button>
    <a href="themsanpham.php">Thêm sản phẩm</a>
</button>
<table id="productList">
    <tr>
            <th>Mã Sản phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá Sản Phẩm</th>
            <th>Hình ảnh</th>
            <th>Hành động</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($query)){    
    ?>
    <tr>
        <td><?= $row["masp"] ?></td>
        <td><?= $row["tensp"] ?></td>
        <td><?= $row["gia"] ?>&nbsp; VNĐ</td>
        <td><img style="width: 200px; height:200px" src='./images/<?= $row["imgURL"] ?>' alt=""></td>
        <td><a href="suasanpham.php?id=<?= $row['masp']?>">Sửa</a>
        <a onclick="return xoasanpham()" href="xoasanpham.php?id=<?= $row['masp']?>">Xóa</a>
        </td>
    </tr>
    <?php }?>
</table>
<script>
    function xoasanpham(){
        var conf = confirm(`Bạn có chắc muốn xóa sản phẩm hay không ?`);
        return conf;
    }
</script>