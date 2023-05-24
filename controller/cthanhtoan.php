<?php 
	include_once("model/mthanhtoan.php");
	class controlthanhtoan{
		//lấy tất cả sản phẩm
		function laythanhtoan(){
			$p = new modelthanhtoan();
			$tblPro = $p->chonthanhtoan();
			return ($tblPro);
		}
		function lay1thanhtoan($ma){
			$p = new modelthanhtoan();
			$tblPro = $p->chon1thanhtoan($ma);
			return ($tblPro);
		}
		function lay1thanhtoankh($ma){
			$p = new modelthanhtoan();
			$tblPro = $p->chon1thanhtoankh($ma);
			return ($tblPro);
		}
		function laythemthanhtoan($gia, $ngay, $trangthai, $id_hopdong, $thangthue){
			$p = new modelthanhtoan();
			$tblPro = $p->chonthemthanhtoan($gia, $ngay, $trangthai, $id_hopdong, $thangthue);
			if($tblPro){
                return 1;
            }else{
                return 0; //không thể chèn
            }
		}
		function layupdatethanhtoan($ma, $Gia, $NgayLap, $ThangThue, $tt, $id_hopdong){
			$p = new modelthanhtoan();
			$tblPro = $p->chonupdatethanhtoan($ma, $Gia, $NgayLap, $ThangThue, $tt, $id_hopdong);
			if($tblPro){
                return 1;
            }else{
                return 0; //không thể chèn
            }
		}
	}
?>