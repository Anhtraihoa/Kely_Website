<?php 
    include "../../../libs/DataProvider.php";
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        $MaLoaiTaiKhoan = $_GET["cmbLoaiTaiKhoan"];
        $sql = "UPDATE taikhoan SET MaLoaiTaiKhoan = $MaLoaiTaiKhoan WHERE MaTaiKhoan = $id";
        DataProvider::ExecuteQuery($sql);
    }

    DataProvider::ChangeURL("../../index.php?c=2");
?>