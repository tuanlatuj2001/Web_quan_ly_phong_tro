<?php
    include_once ("controller/cgiuong.php");
    $ma = $_REQUEST["xg"];
    $controllernha = new controllergiuong();
    $kq = $controllernha->laykhoagiuong($ma);
    if($kq){
        echo '<script>alert("Xóa giường thành công")</script>';
        echo header("refresh:0; url='admin2.php?dsg'");
    }else{
        echo '<script>alert("Xóa giường thất bại")</script>';
        echo header("refresh:10; url='admin2.php?dsg'");
    }
?>