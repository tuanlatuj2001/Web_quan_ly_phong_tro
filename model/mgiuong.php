<?php 
	include_once("ketnoi.php");
	class modelgiuong{
		//chọn tất cả sản phẩm
		function chongiuong(){
		
			$p = new clsketnoi();
			if ($p->ketnoidb($con)){
				$chuoi="SELECT *
				FROM `giuong`";
				$table =  mysqli_query($con,$chuoi);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
        function chon1giuong($ma){
		
			$p = new clsketnoi();
			if ($p->ketnoidb($con)){
				$chuoi="SELECT *
				FROM `giuong`
				WHERE `Id_Giuong` = '$ma'";
				$table =  mysqli_query($con,$chuoi);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
		function chonkhoagiuong($ma){
		
			$p = new clsketnoi();
			if ($p->ketnoidb($con)){
				$chuoi="UPDATE giuong set IsDelete = 0 WHERE Id_Giuong='".$ma."'";
				$table =  mysqli_query($con,$chuoi);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
        function chonupdategiuong($id_guong, $sogiuong, $giathue, $id_khach, $tt, $id_phong){
			$p = new clsketnoi();
			if ($p->ketnoidb($con)){
				$chuoi="UPDATE `kytucxa`.`giuong` SET `TrangThai` = '$tt',
				`GiaTien` = '$giathue',
				`Id_KhachThuePhong` = $id_khach,
				`Id_Phong` = '$id_phong',
				`SoGiuong` = '$sogiuong'
				 WHERE `giuong`.`Id_Giuong` ='$id_guong'";
                //update giuong set SoGiuong = 1013,Id_KhachThuePhong=, GiaTien = 500000, TrangThai = 0 where Id_Giuong='12'
				$table =  mysqli_query($con,$chuoi);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
        function chonupdategiuong1($id_guong, $id_khach,$sogiuong, $giathue, $tt, $id_phong){
		
			$p = new clsketnoi();
			if ($p->ketnoidb($con)){
				$chuoi="UPDATE `kytucxa`.`giuong` SET `TrangThai` = ' $tt',
				`GiaTien` = '$giathue',
				`Id_Phong` = '$id_phong',
				`SoGiuong` = '$sogiuong',
				`Id_KhachThuePhong` = NULL WHERE `giuong`.`Id_Giuong` = '$id_guong'";
				$table =  mysqli_query($con,$chuoi);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
	}
?>