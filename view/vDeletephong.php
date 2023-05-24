<?php
    include_once ("controller/cphong.php");
    $idphong = $_REQUEST["deletephong"];
    $controllerphong = new controlPhong();
    $kq = $controllerphong->Deletephong($idphong);
    if($kq){
        echo '<script>alert("Xóa phòng thành công")</script>';
        echo header("refresh:0; url='admin2.php?dsp'");
    }else{
        echo '<script>alert("Xóa phòng thất bại")</script>';
        echo header("refresh:10; url='admin2.php?dsp'");
    }
?>