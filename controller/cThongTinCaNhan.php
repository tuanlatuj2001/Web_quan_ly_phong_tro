<?php
include_once("../model/mThongTinCaNhan.php");
class ControllerThongTinCaNhan
{
    /**
     * Lấy thông tin cá nhân bởi id của tài khoản
     *
     * @param [type] $idtaikhoan
     * @return void
     */
    function laykhachhang()
    {
        $modelThongTinCaNhan = new mThongTinCaNhan();
        return $modelThongTinCaNhan->laykhachhang();
    }
    function getThongTinCaNhanByIdTaiKhoan($idtaikhoan)
    {
        $modelThongTinCaNhan = new mThongTinCaNhan();
        return $modelThongTinCaNhan->SelectThongTinCaNhanByIdTaiKhoan($idtaikhoan);
    }
    /**
     * cập nhật tất cả thông tin cá nhân
     * h: trả về số giờ (kiểu 6h)
     * i: trả về số phút
     * s: trả về số giây
     *
     * @param [type] $Id_KhachThuePhong
     * @param [type] $hinhanh
     * @param [type] $tenanh
     * @param [type] $loaianh
     * @param [type] $kichcoanh
     * @param [type] $HoTen
     * @param [type] $GioiTinh
     * @param [type] $NgaySinh
     * @param [type] $DiaChi
     * @param [type] $QueQuan
     * @param [type] $CCCD
     * @param [type] $Email
     * @param [type] $SDT
     * @param [type] $DanToc
     * @return void
     */
    function updateThongTinCaNhan($Id_KhachThuePhong, $hinhanh, $tenanh, $loaianh, $kichcoanh, $HoTen,  $GioiTinh, $NgaySinh, $DiaChi, $QueQuan, $CCCD, $Email, $SĐT, $DanToc)
    {

        if ($loaianh == "image/jpeg" || $loaianh == "image/png") {
            if ($kichcoanh <= 3 * 1024 * 1024) {
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                //ảnh sẽ được đặt tên theo ngày tháng năm - giờ phút giây - tên ảnh
                $newname =  date('dmY-His') . "-" . $tenanh;
                $update = move_uploaded_file($hinhanh, "../img/" . $newname);
                if ($update) {
                    $modelThongTinCaNhan = new mThongTinCaNhan();
                    $update = $modelThongTinCaNhan->UpdateThongTinCaNhanByIdKhachThuePhong($Id_KhachThuePhong, $HoTen, $tenanh, $GioiTinh, $NgaySinh, $DiaChi, $QueQuan, $CCCD, $Email, $SĐT, $DanToc);
                    if ($update) {
                        return 1;
                    } else {
                        return 0;
                    }
                } else
                    return -1; // không insert được
            } else
                return -2; // kích thước file lớn

        } else
            return -3; //không đúng loại file 
    }
    /**
     * cập nhật thông tin cá nhân không có chọn update ảnh
     *
     * @param [type] $Id_KhachThuePhong
     * @param [type] $HoTen
     * @param [type] $GioiTinh
     * @param [type] $NgaySinh
     * @param [type] $DiaChi
     * @param [type] $QueQuan
     * @param [type] $CCCD
     * @param [type] $Email
     * @param [type] $SDT
     * @param [type] $DanToc
     * @return void
     */
    function updateThongTinCaNhanKhongCoAnh($Id_KhachThuePhong, $HoTen, $GioiTinh, $NgaySinh, $DiaChi, $QueQuan, $CCCD, $Email, $SDT, $DanToc)
    {
        $modelThongTinCaNhan = new mThongTinCaNhan();
        return $modelThongTinCaNhan->UpdateThongTinCaNhanByIdKhachThuePhongKhongCoAnh($Id_KhachThuePhong, $HoTen, $GioiTinh, $NgaySinh, $DiaChi, $QueQuan, $CCCD, $Email, $SDT, $DanToc);
    }
}
