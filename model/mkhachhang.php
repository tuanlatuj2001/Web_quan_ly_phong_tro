<?php
include_once("ketnoi.php");
class modelkhachhang{
    function chonkhachhang($ma){
        $ketnoi = new clsketnoi();
        if ($ketnoi->ketnoidb($con)) {
            $query = "SELECT * FROM khachthuephong where Id_KhachThuePhong ='".$ma."'";
            $table = mysqli_query($con, $query);
            $ketnoi->dongketnoi($con);
            return $table;
        } else {
            return false;
        }
    }
    function chonkhachhang1(){
        $ketnoi = new clsketnoi();
        if ($ketnoi->ketnoidb($con)) {
            $query = "SELECT * FROM khachthuephong";
            $table = mysqli_query($con, $query);
            $ketnoi->dongketnoi($con);
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
    function UpdateThongTinCaNhanByIdKhachThuePhongKhongCoAnh($Id_KhachThuePhong,$HoTen,$GioiTinh,$NgaySinh,$DiaChi,$QueQuan,$CCCD,$Email,$SĐT){
        $ketnoi = new clsketnoi();
        if ($ketnoi->ketnoiDB($connect)) {
            $query = "UPDATE `khachthuephong` SET `HoTen` = '$HoTen',
            `GioiTinh` = '$GioiTinh',
            `NgaySinh` = '$NgaySinh',
            `DiaChi` = '$DiaChi',
            `QueQuan` = '$QueQuan',
            `CCCD/CMND` = '$CCCD',
            `Email` = '$Email',
            `SĐT` = '$SĐT',
             WHERE `Id_KhachThuePhong` =$Id_KhachThuePhong";
            $table = mysqli_query($connect, $query);
            $ketnoi->dongketnoi($connect);
            return $table;
        } else {
            return false;
        }
    }
    function chonthemkhachhang($HoTen,$tenanh,$GioiTinh,$NgaySinh,$DiaChi,$QueQuan,$CCCD,$Email,$SDT,$DanToc,$ID_TaiKhoan){
        $ketnoi = new clsketnoi();
        if ($ketnoi->ketnoiDB($connect)) {
            $query = "INSERT INTO `khachthuephong` (`HoTen`, `anh`, `GioiTinh`, `NgaySinh`, `DiaChi`, `QueQuan`, `CCCD/CMND`, `Email`, `SDT`, `DanToc`, `Id_TaiKhoan`) 
            VALUES ('$HoTen', '$tenanh', $GioiTinh, '$NgaySinh', '$DiaChi', '$QueQuan', '$CCCD', '$Email', $SDT, '$DanToc', '$ID_TaiKhoan')";
            $table = mysqli_query($connect, $query);
            $ketnoi->dongketnoi($connect);
            return $table;
        } else {
            return false;
        }
    }
}
?>
