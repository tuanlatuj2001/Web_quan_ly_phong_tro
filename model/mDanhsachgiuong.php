<?php
include_once("ketnoi.php");
class mDanhsachgiuong{
    function SelectDanhsachgiuong(){
        $ketnoi = new clsketnoi();
        if ($ketnoi->ketnoidb($con)) {
            $query = "SELECT * FROM giuong";
            $table = mysqli_query($con, $query);
            $ketnoi->dongketnoi($con);
            return $table;
        } else {
            return false;
        }
    }
}
?>
