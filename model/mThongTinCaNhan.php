<?php
include_once("ketnoi.php");
class mThongTinCaNhan{
    /**
     * lấy thông tin cá nhân bởi tài khoản từ tài khoản
     *
     * @param [type] $idtaikhoan
     * @return void
     */
    function laykhachhang(){
        $ketnoi = new clsketnoi();
        if ($ketnoi->ketnoiDB($connect)) {
            $query = "SELECT *
            FROM `khachthuephong`";
            $table = mysqli_query($connect, $query);
            $ketnoi->dongketnoi($connect);
            return $table;
        } else {
            return false;
        }
    }
    function SelectThongTinCaNhanByIdTaiKhoan($idtaikhoan){
        $ketnoi = new clsketnoi();
        if ($ketnoi->ketnoiDB($connect)) {
            $query = "SELECT *
            FROM `khachthuephong`
            WHERE `Id_TaiKhoan` =$idtaikhoan";
            $table = mysqli_query($connect, $query);
            $ketnoi->dongketnoi($connect);
            return $table;
        } else {
            return false;
        }
    }
    /**
     * cập nhật thông tin cá nhân bởi khách hàng bởi id khách thuê phòng đến cơ sở dữ liệu 
     *
     * @param [type] $Id_KhachThuePhong
     * @param [type] $HoTen
     * @param [type] $tenanh
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
    function UpdateThongTinCaNhanByIdKhachThuePhong($Id_KhachThuePhong,$HoTen,$tenanh,$GioiTinh,$NgaySinh,$DiaChi,$QueQuan,$CCCD,$Email,$SDT,$DanToc){
        $ketnoi = new clsketnoi();
        if ($ketnoi->ketnoiDB($connect)) {
            $query = "UPDATE `khachthuephong` SET `HoTen` = '$HoTen',
            `anh` = '$tenanh',
            `GioiTinh` = '$GioiTinh',
            `NgaySinh` = '$NgaySinh',
            `DiaChi` = '$DiaChi',
            `QueQuan` = '$QueQuan',
            `CCCD/CMND` = '$CCCD',
            `Email` = '$Email',
            `SDT` = '$SDT',
            `DanToc` = '$DanToc'
             WHERE `Id_KhachThuePhong` =$Id_KhachThuePhong";
            $table = mysqli_query($connect, $query);
            $ketnoi->dongketnoi($connect);
            return $table;
        } else {
            return false;
        }
    }
    /**
     * cập nhật thông tin cá nhân bởi id khách thuê phòng không có ảnh đến cơ sở dữ liệu
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
    function UpdateThongTinCaNhanByIdKhachThuePhongKhongCoAnh($Id_KhachThuePhong,$HoTen,$GioiTinh,$NgaySinh,$DiaChi,$QueQuan,$CCCD,$Email,$SDT,$DanToc){
        $ketnoi = new clsketnoi();
        if ($ketnoi->ketnoiDB($connect)) {
            $query = "UPDATE `khachthuephong` SET `HoTen` = '$HoTen',
            `GioiTinh` = '$GioiTinh',
            `NgaySinh` = '$NgaySinh',
            `DiaChi` = '$DiaChi',
            `QueQuan` = '$QueQuan',
            `CCCD/CMND` = '$CCCD',
            `Email` = '$Email',
            `SDT` = '$SDT',
            `DanToc` = '$DanToc'
             WHERE `Id_KhachThuePhong` =$Id_KhachThuePhong";
            $table = mysqli_query($connect, $query);
            $ketnoi->dongketnoi($connect);
            return $table;
        } else {
            return false;
        }
    }
}
