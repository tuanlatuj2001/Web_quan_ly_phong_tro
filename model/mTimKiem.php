<?php
include_once("ketnoi.php");
class mTimKiem
{
    /**
     * lấy dữ liệu từ cơ sở dữ liệu thông qua từ khóa qua TIÊU ĐỀ với NỘI DUNG
     *
     * @param [type] $tukhoa
     * @return void
     */
    function SelectThongTinByTuKhoa($tukhoa)
    {
        $ketnoi  = new clsketnoi();
        if ($ketnoi->ketnoiDB($connect)) {
            $query = "SELECT * FROM `baiviet` INNER JOIN phong ON phong.Id_Phong = baiviet.Id_Phong 
            INNER join nha on nha.Id_Nha=phong.Id_Nha
            INNER join giuong on giuong.Id_Phong=phong.Id_Phong
                WHERE `TieuDe` LIKE '%$tukhoa%'
                OR `NoiDung` LIKE '%$tukhoa%'
                GROUP BY Id_BaiViet";
            $table =  mysqli_query($connect, $query);
            $ketnoi->dongketnoi($connect);
            return $table;
        } else {
            return false;
        }
    }
    /**
     * lấy dữ liệu từ cơ sở dữ liệu thông qua tỉnh thành qua bảng nhà
     *
     * @param [type] $tinh
     * @return void
     */
    function SelectThongTinByTinh($tinh)
    {
        $ketnoi = new clsketnoi();
        if ($ketnoi->ketnoiDB($connect)) {
            $query = "SELECT * FROM `baiviet` INNER JOIN phong ON phong.Id_Phong = baiviet.Id_Phong 
            INNER join nha on nha.Id_Nha=phong.Id_Nha
            INNER join giuong on giuong.Id_Phong=phong.Id_Phong
            WHERE `TinhThanh` LIKE '%$tinh%'
                GROUP BY Id_BaiViet";
                
            $table =  mysqli_query($connect, $query);
            $ketnoi->dongketnoi($connect);
            return $table;
        } else {
            return false;
        }
    }
}
