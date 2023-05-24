<?php
include_once("ketnoi.php");
class modelbv
{
	//chọn tất cả sản phẩm
	function chonbaiviet()
	{
		$p = new clsketnoi();
		if ($p->ketnoidb($con)) {
			$chuoi = "SELECT * FROM `baiviet` INNER JOIN phong ON phong.Id_Phong = baiviet.Id_Phong
			INNER join nha on nha.Id_Nha=phong.Id_Nha
			INNER join giuong on giuong.Id_Phong=phong.Id_Phong
			GROUP BY Id_BaiViet";
			$table =  mysqli_query($con, $chuoi);
			$p->dongketnoi($con);
			return $table;
		} else {
			return false;
		}
	}
	function chon1baiviet($mahang)
	{
		$p = new clsketnoi();
		if ($p->ketnoidb($con)) {
			$chuoi = "SELECT * FROM `baiviet` INNER JOIN phong ON phong.Id_Phong = baiviet.Id_Phong 
                                                INNER join nha on nha.Id_Nha=phong.Id_Nha
												INNER join giuong on giuong.Id_Phong=phong.Id_Phong
												WHERE Id_BaiViet = '" . $mahang . "'
												GROUP BY Id_BaiViet";
			$table =  mysqli_query($con, $chuoi);
			$p->dongketnoi($con);
			return $table;
		} else {
			return false;
		}
	}
	function chonthembaiviet($tieude, $id_ql, $id_p, $anh, $ngay, $nd)
	{
		$p = new clsketnoi();
		if ($p->ketnoidb($con)) {
			$chuoi = "INSERT INTO baiviet( TieuDe, Id_Quanly, Id_Phong, AnhChinh, NgayDang, NoiDung )
                VALUES ( '$tieude', '$id_ql', '$id_p', '$anh', '$ngay', '$nd')";

			$table =  mysqli_query($con, $chuoi);
			$p->dongketnoi($con);
			return $table;
		} else {
			return false;
		}
	}

	function Updatebaiviet($Id_BaiViet, $NgayDang, $NoiDung, $newname, $Id_Phong, $Id_Quanly, $TieuDe)
	{
		$ketnoi = new clsketnoi();
		if ($ketnoi->ketnoiDB($connect)) {
			$query = "UPDATE `baiviet` SET `Id_BaiViet` = '$Id_BaiViet',
				`NgayDang` = '$NgayDang',
				`NoiDung` = '$NoiDung',
				`AnhChinh` = '$newname',
				`Id_Phong` = '$Id_Phong',
				`Id_Quanly` = '$Id_Quanly',
				`TieuDe` = '$TieuDe'
				 WHERE `Id_BaiViet` =$Id_BaiViet";
			$table = mysqli_query($connect, $query);
			$ketnoi->dongketnoi($connect);
			return $table;
		} else {
			return false;
		}
	}

	function Updatebaivietkhongcoanh($Id_BaiViet, $NgayDang, $NoiDung, $Id_Phong, $Id_Quanly, $TieuDe)
	{
		$ketnoi = new clsketnoi();
		if ($ketnoi->ketnoiDB($connect)) {
			$query = "UPDATE `baiviet` SET `Id_BaiViet` = '$Id_BaiViet',
				`NgayDang` = '$NgayDang',
				`NoiDung` = '$NoiDung',
				`Id_Phong` = '$Id_Phong',
				`Id_Quanly` = '$Id_Quanly',
				`TieuDe` = '$TieuDe'
				 WHERE `Id_BaiViet` =$Id_BaiViet";
			$table = mysqli_query($connect, $query);
			$ketnoi->dongketnoi($connect);
			return $table;
		} else {
			return false;
		}
	}
}
