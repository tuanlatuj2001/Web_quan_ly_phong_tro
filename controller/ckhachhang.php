<?php
include_once("model/mkhachhang.php");
class controlkhachhang
{
    function laykhachhang($ma)
    {
        $p = new modelkhachhang();
        $tblPro = $p->chonkhachhang($ma);
        return ($tblPro);
    }
    function laykhachhang1()
    {
        $p = new modelkhachhang();
        $tblPro = $p->chonkhachhang1();
        return ($tblPro);
    }
    function updateThongTinCaNhan($Id_KhachThuePhong, $hinhanh, $tenanh, $loaianh, $kichcoanh, $HoTen,  $GioiTinh, $NgaySinh, $DiaChi, $QueQuan, $CCCD, $Email, $SDT, $DanToc)
    {
        if ($loaianh == "image/jpeg" || $loaianh == "image/png") {
            if ($kichcoanh <= 3 * 1024 * 1024) {
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                //ảnh sẽ được đặt tên theo ngày tháng năm - giờ phút giây - tên ảnh
                $newname =  date('dmY-His') . "-" . $tenanh;
                $update = move_uploaded_file($hinhanh, "img/" . $newname);
                if ($update) {
                    $modelThongTinCaNhan = new modelkhachhang();
                    $update = $modelThongTinCaNhan->UpdateThongTinCaNhanByIdKhachThuePhong($Id_KhachThuePhong, $HoTen, $tenanh, $GioiTinh, $NgaySinh, $DiaChi, $QueQuan, $CCCD, $Email, $SDT, $DanToc);
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
    function updateThongTinCaNhanKhongCoAnh($Id_KhachThuePhong, $HoTen, $GioiTinh, $NgaySinh, $DiaChi, $QueQuan, $CCCD, $Email, $SDT, $DanToc)
    {
        $modelThongTinCaNhan = new modelkhachhang();
        return $modelThongTinCaNhan->UpdateThongTinCaNhanByIdKhachThuePhongKhongCoAnh($Id_KhachThuePhong, $HoTen, $GioiTinh, $NgaySinh, $DiaChi, $QueQuan, $CCCD, $Email, $SDT, $DanToc);
    }
    function getThongTinCaNhanByIdTaiKhoan($idtaikhoan)
    {
        $modelThongTinCaNhan = new modelkhachhang();
        return $modelThongTinCaNhan->SelectThongTinCaNhanByIdTaiKhoan($idtaikhoan);
    }
    function laythemkhachhang($hinhanh, $tenanh, $loaianh, $kichcoanh, $HoTen,  $GioiTinh, $NgaySinh, $DiaChi, $QueQuan, $CCCD, $Email, $SDT, $DanToc, $ID_TaiKhoan)
    {
        if ($loaianh == "image/jpeg" || $loaianh == "image/png") {
            if ($kichcoanh <= 3 * 1024 * 1024) {
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                //ảnh sẽ được đặt tên theo ngày tháng năm - giờ phút giây - tên ảnh
                $newname =  date('dmY-His') . "-" . $tenanh;
                $update = move_uploaded_file($hinhanh, "img/" . $newname);
                if ($update) {
                    $modelThongTinCaNhan = new modelkhachhang();
                    $update = $modelThongTinCaNhan->chonthemkhachhang($HoTen, $tenanh, $GioiTinh, $NgaySinh, $DiaChi, $QueQuan, $CCCD, $Email, $SDT, $DanToc, $ID_TaiKhoan);
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
}
