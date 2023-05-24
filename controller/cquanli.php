
<?php
include_once("model/mquanli.php");
class controlql
{
    //lấy tất cả sản phẩm
    function layquanli()
    {
        $p = new modelquanly();
        $tblPro = $p->chonquanli();
        return ($tblPro);
    }
    function getThongTinQLByIdTaiKhoan($idtaikhoan)
    {
        $modelThongTinCaNhan = new modelquanly();
        return $modelThongTinCaNhan->SelectThongTinQLByIdTaiKhoan($idtaikhoan);
    }
    function lay1quanliql($idtaikhoan)
    {
        $p = new modelquanly();
        $tblPro = $p->chon1quanliql($idtaikhoan);
        return ($tblPro);
    }
    function layupdatettcn($Id_QuanLi, $hinhanh, $tenanh, $loaianh, $kichcoanh, $HoTen,  $GioiTinh, $NgaySinh, $DiaChi, $QueQuan, $CCCD, $Email, $SĐT)
    {
        if ($loaianh == "image/jpeg" || $loaianh == "image/png") {
            if ($kichcoanh <= 3 * 1024 * 1024) {
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                //ảnh sẽ được đặt tên theo ngày tháng năm - giờ phút giây - tên ảnh
               // $newname = $tenanh;
                $update = move_uploaded_file($hinhanh, "img/" . $tenanh);
                if ($update) {
                    $modelThongTinCaNhan = new modelquanly();
                    $update = $modelThongTinCaNhan->chonpdatettcn($Id_QuanLi, $HoTen, $tenanh, $GioiTinh, $NgaySinh, $DiaChi, $QueQuan, $CCCD, $Email, $SĐT);
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
    function layupdatettcnkanh($Id_QuanLi, $HoTen,  $GioiTinh, $NgaySinh, $DiaChi, $QueQuan, $CCCD, $Email, $SĐT)
    {
        $modelThongTinCaNhan = new modelquanly();
        return $modelThongTinCaNhan->chonpdatettcnkanh($Id_QuanLi, $HoTen, $GioiTinh, $NgaySinh, $DiaChi, $QueQuan, $CCCD, $Email, $SĐT);
    }
}
