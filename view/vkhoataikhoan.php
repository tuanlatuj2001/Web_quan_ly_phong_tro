<?php
    include_once ("controller/ctaikhoan.php");
    $idtaikhoan = $_REQUEST["khoataikhoan"];
    $controllernha = new controlTaiKhoan();
    $kq = $controllernha->laykhoataikhoan($idtaikhoan);
    if($kq){
        echo '<script>alert("Khóa tài khoản thành công")</script>';
        echo header("refresh:0; url='admin2.php?dstk'");
    }else{
        echo '<script>alert("Khóa tài khoản thất bại")</script>';
        echo header("refresh:10; url='admin2.php?dstk'");
    }
?>