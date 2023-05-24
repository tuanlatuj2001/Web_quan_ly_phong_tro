<?php 
	include_once("model/mhopdong.php");
	class controllerhopdong{
		//lấy tất cả sản phẩm
		function laythemhopdong($ten, $ngay, $tena, $tenb, $mab, $maa, $tg, $tien){
			$p = new modelhopdong();
			$tblPro = $p->chonthemhopdong($ten, $ngay, $tena, $tenb, $mab, $maa, $tg, $tien);
			if($tblPro){
                return 1;
            }else{
                return 0; //không thể chèn
            }
		}
		function layhopdong(){
			$p = new modelhopdong();
			$tblPro = $p->chonhopdong();
			return ($tblPro);
		}
		function lay1hopdong($ma){
			$p = new modelhopdong();
			$tblPro = $p->chon1hopdong($ma);
			return ($tblPro);
		}
		function lay1hopdongkh($ma){
			$p = new modelhopdong();
			$tblPro = $p->chon1hopdongkh($ma);
			return ($tblPro);
		}
		function layupdatethemhopdong($id_hopdong,  $ten, $ngay, $tena, $tenb, $maa, $mab, $tien, $tg){
			$p = new modelhopdong();
			$tblPro = $p->chonupdatehopdong($id_hopdong,  $ten, $ngay, $tena, $tenb, $maa, $mab, $tien, $tg);
			if($tblPro){
                return 1;
            }else{
                return 0; //không thể chèn
            }
		}
	}
?>