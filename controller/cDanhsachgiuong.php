<?php
include_once("model/mDanhsachgiuong.php");
class ControllerDanhsachgiuong{
    public function getDanhsachgiuong()
    {
        $modelDanhsachgiuong = new mDanhsachgiuong();
        return $modelDanhsachgiuong->SelectDanhsachgiuong();
    }
}
?>