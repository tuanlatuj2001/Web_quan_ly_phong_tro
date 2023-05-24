<?php
include_once("../model/mtaikhoan.php");
class controlTaiKhoan
{
	//lấy tất cả sản phẩm
	function laytaikhoan()
	{
		$p = new modelTaiKhoan();
		$tblPro = $p->chontaikhoan();
		return ($tblPro);
	}
	function laykhoataikhoan($ma)
	{
		$p = new modelTaiKhoan();
		$tblPro = $p->chonkhoataikhoan($ma);
		if ($tblPro) {
			return 1;
		} else {
			return 0;
		}
	}
	function createtaikhoan($username,$pass,$id_role){
		$modelTaiKhoan = new modeltaikhoan();
		return $modelTaiKhoan->InsertTaiKhoan($username,$pass,$id_role); 
	}
}
