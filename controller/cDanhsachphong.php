<?php
include_once("model/mDanhsachphong.php");
class ControllerDanhsachphong{
    public function getDanhsachphong()
    {
        $modelDanhsachphong = new mDanhsachphong();
        return $modelDanhsachphong->SelectDanhsachphong();
    }
}
?>