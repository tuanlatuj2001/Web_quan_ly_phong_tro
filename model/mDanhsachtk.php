<?php
include_once("ketnoi.php");
class mDanhsachtk{
    function SelectDanhsachtk(){
        $ketnoi = new clsketnoi();
        if ($ketnoi->ketnoidb($con)) {
            $query = "SELECT * FROM taikhoan";
            $table = mysqli_query($con, $query);
            $ketnoi->dongketnoi($con);
            return $table;
        } else {
            return false;
        }
    }
}
?>
