<?php 
	include_once("ketnoi.php");
	class modelphong{
		//chọn tất cả sản phẩm
		function chonphong(){
			$p = new clsketnoi();
			if ($p->ketnoidb($con)){
				$chuoi="SELECT * FROM `phong`  INNER JOIN nha on nha.Id_Nha=phong.Id_Nha
                GROUP BY phong.Id_phong";
				$table =  mysqli_query($con,$chuoi);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
		function chon1phong($ma){
			$con;
			$p = new clsketnoi();
			if ($p->ketnoidb($con)){
				$chuoi="select * from phong where Id_Phong='".$ma."'";
				$table =  mysqli_query($con,$chuoi);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
		
		function chonupdatephong($ma, $sophong, $sogiuong, $dientich, $mota, $id_nha){
			$con;
			$p = new clsketnoi();
			if ($p->ketnoidb($con)){
				$chuoi="update phong set SoPhong ='$sophong', SoGiuong ='$sogiuong', DienTichPhong ='$dientich', 
				MoTa ='$mota', Id_Nha ='$id_nha'
                where Id_Phong='$ma'";
				$table =  mysqli_query($con,$chuoi);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}

		function Deletephong($idphong)
		{
			$ketnoi = new clsketnoi();
	
			if ($ketnoi->ketnoidb($connect)) {
				$query = "UPDATE `kytucxa`.`phong` SET `IsDelete` = '0' WHERE `phong`.`Id_Phong` = '$idphong'";
				$table = mysqli_query($connect, $query);
				$ketnoi->dongketnoi($connect);
				return $table;
			} else {
				return false;
			}
		}
	
	}
?>