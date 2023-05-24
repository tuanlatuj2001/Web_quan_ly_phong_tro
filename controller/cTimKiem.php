<?php
include_once("model/mTimKiem.php");
class ControllerTimKiem{
    /**
     * lấy thông tin bài viết bởi từ khóa 
     *
     * @param [type] $tukhoa
     * @return void
     */
    function getThongTinByTuKhoa($tukhoa){
        $modelThongTinByTuKhoa = new mTimKiem();
        return $modelThongTinByTuKhoa->SelectThongTinByTuKhoa($tukhoa);
    }

    function getThongTinByTinh($tinh){
        $modelThongTinByTuKhoa = new mTimKiem();
        return $modelThongTinByTuKhoa->SelectThongTinByTinh($tinh);
    }
}
