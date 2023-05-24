<?php 
	include_once("model/mphong.php");
	class controllerPhong{
		//lấy tất cả sản phẩm
		function laygiuong(){
			$p = new modelphong();
			$tblPro = $p->chonphong();
			return ($tblPro);
		}
		function lay1phong($ma){
			$p = new modelphong();
			$tblPro = $p->chon1phong($ma);
			return ($tblPro);
		}
		function layupdatephong($ma, $sophong, $sogiuong, $dientich, $mota, $id_nha){
			$p = new modelphong();
			$table = $p -> chonupdatephong($ma, $sophong, $sogiuong, $dientich, $mota, $id_nha);
            if($table){
                return 1;
            }else{
                return 0; //không thể chèn
            }
		}

		function Deletephong($idphong){
			$p = new  modelphong();
			$tblnha = $p->Deletephong($idphong);
			return $tblnha;
		}
	}
	
?>