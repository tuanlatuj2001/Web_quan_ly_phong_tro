<?php
include_once("model/mgiuong.php");
class controllergiuong
{
	//lấy tất cả sản phẩm
	function laygiuong()
	{
		$p = new modelgiuong();
		return	$p->chongiuong();
	}
	function lay1giuong($ma)
	{
		$p = new modelgiuong();
		return	 $p->chon1giuong($ma);
	}
	function laykhoagiuong($ma)
	{
		$p = new modelgiuong();
		$table = $p->chonkhoagiuong($ma);
		if ($table) {
			return 1;
		} else {
			return 0;
		}
	}
	function layupdategiuong($id_guong, $sogiuong, $giathue, $id_khach, $tt, $id_phong)
	{
		$p = new modelgiuong();
		$table = $p->chonupdategiuong($id_guong, $sogiuong, $giathue, $id_khach, $tt, $id_phong);
		if ($table) {
			return 1;
		} else {
			return 0; //không thể chèn
		}
	}
	function layupdategiuong1($id_guong, $id_khach,$sogiuong, $giathue, $tt, $id_phong)
	{
		$p = new modelgiuong();
		$table = $p->chonupdategiuong1($id_guong, $id_khach,$sogiuong, $giathue, $tt, $id_phong);
		if ($table) {
			return 1;
		} else {
			return 0; //không thể chèn
		}
	}
}
