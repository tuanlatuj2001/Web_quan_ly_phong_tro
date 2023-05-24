<?php
    include_once ("controller/cDanhsachnha.php");
    $idnha = $_REQUEST["idnha"];
    $controllernha = new ControllerDanhsachnha();
    $kq = $controllernha->Deletenha($idnha);
    if($kq){
        echo '<script>alert("Xóa sản phẩm thành công")</script>';
        echo header("refresh:0; url='admin2.php?dsn'");
    }else{
        echo '<script>alert("Xóa sản phẩm thất bại")</script>';
        echo header("refresh:0; url='admin2.php?dsn'");
    }
?>