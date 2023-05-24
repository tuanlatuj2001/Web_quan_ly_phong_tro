<?php
include_once("ketnoi.php");
class modelhopdong
{
	//chọn tất cả sản phẩm
	function chonhopdong()
	{
		$p = new clsketnoi();
		if ($p->ketnoidb($con)) {
			$chuoi = "select * from hopdong INNER JOIN khachthuephong on khachthuephong.Id_KhachThuePhong=hopdong.Id_KhachThuePhong
												INNER JOIN giuong on giuong.Id_KhachThuePhong=khachthuephong.Id_KhachThuePhong
												GROUP BY Id_HopDong";
			$table =  mysqli_query($con, $chuoi);
			$p->dongketnoi($con);
			return $table;
		} else {
			return false;
		}
	}
	function chon1hopdong($ma){
		$p = new clsketnoi();
		if ($p->ketnoidb($con)){
			$chuoi="SELECT *
			FROM hopdong
			INNER JOIN khachthuephong ON khachthuephong.Id_KhachThuePhong = hopdong.Id_KhachThuePhong
			INNER JOIN giuong ON giuong.Id_KhachThuePhong = khachthuephong.Id_KhachThuePhong
			INNER JOIN phong on  phong.Id_Phong=giuong.Id_Phong
			WHERE Id_HopDong = '$ma'
			GROUP BY Id_HopDong";
			$table =  mysqli_query($con,$chuoi);
			$p->dongketnoi($con);
			return $table;
		}else{
			return false;
		}
	}
	function chon1hopdongkh($ma){
		$p = new clsketnoi();
		if ($p->ketnoidb($con)){
			$chuoi="SELECT *
			FROM hopdong
			INNER JOIN khachthuephong ON khachthuephong.Id_KhachThuePhong = hopdong.Id_KhachThuePhong
			INNER JOIN giuong ON giuong.Id_KhachThuePhong = khachthuephong.Id_KhachThuePhong
			INNER JOIN phong on  phong.Id_Phong=giuong.Id_Phong
			WHERE khachthuephong.Id_KhachThuePhong = '$ma'
			GROUP BY Id_HopDong";
			$table =  mysqli_query($con,$chuoi);
			$p->dongketnoi($con);
			return $table;
		}else{
			return false;
		}
	}
	function chonupdatehopdong($id_hopdong,  $ten, $ngay, $tena, $tenb, $maa, $mab, $tien, $tg)
	{
		$p = new clsketnoi();
		if ($p->ketnoidb($con)) {
			$query = "UPDATE `hopdong` SET `TenHopDong` = '$ten',
			`NgayLap` = '$ngay',
			`HoTenBenA` = '$tena',
			`Id_KhachThuePhong` = '$mab',
			`HoTenBenB` = '$tenb',
			`Id_QuanLy` = ' $maa',
			`ThoiHan` = '$tg',
			`Tiencoc` = $tien WHERE `Id_HopDong` = '$id_hopdong'";
			$table =  mysqli_query($con, $query);
			$p->dongketnoi($con);
			return $table;
		} else {
			return false;
		}
	}

	function chonthemhopdong($ten, $ngay, $tena, $tenb, $mab, $maa, $tg, $tien)
	{
		$p = new clsketnoi();
		if ($p->ketnoidb($con)) {
			$chuoi = "INSERT INTO hopdong( TenHopDong, NgayLap, HoTenBenA, HoTenBenB, Id_KhachThuePhong, Id_QuanLy, ThoiHan, Tiencoc )
                VALUES ( '" . $ten . "', '" . $ngay . "', '" . $tena . "', '" . $tenb . "', " . $mab . ", " . $maa . ", '" . $tg . "', " . $tien . ")";
			$table =  mysqli_query($con, $chuoi);
			$p->dongketnoi($con);
			return $table;
		} else {
			return false;
		}
	}
}
