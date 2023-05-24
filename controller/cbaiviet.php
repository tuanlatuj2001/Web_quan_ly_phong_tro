<?php
include_once("model/mbaiviet.php");
class controllerbaiviet
{
	//lấy tất cả sản phẩm
	function laybaiviet()
	{
		$p = new modelbv();
		$tblPro = $p->chonbaiviet();
		return ($tblPro);
	}
	function lay1baiviet($tenhang)
	{
		$p = new modelbv();
		$ten = $p->chon1baiviet($tenhang);
		return $ten;
	}
	function addPro($tieude, $id_ql, $id_p,	$nd, $ngay, $file, $loaianh, $anh, $sizeanh)
	{
		//echo "<script>alert('".$loaianh."')</script>";
		//if($loaianh == "image/jpeg" || $loaianh=="image/png"){
		if ($loaianh == "image/jpeg" || $loaianh == "image/png") {
			if ($sizeanh <= 2 * 1014 * 1024) {
				$create = move_uploaded_file($file, "./img/" . $anh);
				if ($create) {
					$p = new modelbv();
					$ins = $p->chonthembaiviet($tieude, $id_ql, $id_p, $anh, $ngay, $nd);
					if ($ins) {
						return 1;
					} else {
						return 0; //không thể chèn
					}
				} else {
					return -1; //không thể upload
				}
			} else {
				return -2; //Kích thước không được quá 2mb
			}
		} else {
			return -3; //Không đúng loại file
		}
	}


	function updatebaiviet($Id_BaiViet, $NgayDang, $NoiDung, $hinhanh, $Id_Phong, $Id_Quanly, $TieuDe, $tenanh, $loaianh, $kichcoanh)
	{
		if ($loaianh == "image/jpeg" || $loaianh == "image/png") {
			if ($kichcoanh <= 3 * 1024 * 1024) {
				date_default_timezone_set('Asia/Ho_Chi_Minh');
				//ảnh sẽ được đặt tên theo ngày tháng năm - giờ phút giây - tên ảnh
				$newname =  date('dmY-His') . "-" . $tenanh;
                $update = move_uploaded_file($hinhanh, "./img/" . $tenanh);
                if ($update) {
					$modelThongTinCaNhan = new modelbv();
					$update = $modelThongTinCaNhan->Updatebaiviet($Id_BaiViet, $NgayDang, $NoiDung, $tenanh, $Id_Phong, $Id_Quanly, $TieuDe);
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

	function updatebaivietKhongCoAnh($Id_BaiViet, $NgayDang, $NoiDung, $Id_Phong, $Id_Quanly, $TieuDe)
	{
		$modelThongTinCaNhan = new modelbv();
		return $modelThongTinCaNhan->Updatebaivietkhongcoanh($Id_BaiViet, $NgayDang, $NoiDung, $Id_Phong, $Id_Quanly, $TieuDe);
	}
}
