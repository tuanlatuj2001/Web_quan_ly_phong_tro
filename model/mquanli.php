<?php 
	include_once("ketnoi.php");
	class modelquanly{
		//chọn tất cả sản phẩm
		function chonquanli(){
			$p = new clsketnoi();
			if ($p->ketnoidb($con)){
				$chuoi="SELECT *
				FROM `quanly`";
				$table =  mysqli_query($con,$chuoi);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
		function SelectThongTinQLByIdTaiKhoan($idtaikhoan){
			$ketnoi = new clsketnoi();
			if ($ketnoi->ketnoiDB($connect)) {
				$query = "SELECT *
				FROM `quanly`
				WHERE `Id_TaiKhoan` =$idtaikhoan";
				$table = mysqli_query($connect, $query);
				$ketnoi->dongketnoi($connect);
				return $table;
			} else {
				return false;
			}
		}
		function chon1quanliql($idtaikhoan){
			$p = new clsketnoi();
			if ($p->ketnoidb($con)){
				$chuoi="select * from quanly WHERE `Id_QuanLy` =$idtaikhoan";
				$table =  mysqli_query($con,$chuoi);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
		function chonpdatettcn($Id_QuanLi,$HoTen,$tenanh,$GioiTinh,$NgaySinh,$DiaChi,$QueQuan,$CCCD,$Email,$SĐT){
			$ketnoi = new clsketnoi();
			if ($ketnoi->ketnoiDB($connect)) {
				$query = "UPDATE `quanly` SET `HoVaTen` = '$HoTen',
				`AnhQL` = '$tenanh',
				`GioiTInh` = '$GioiTinh',
				`NgaySinh` = '$NgaySinh',
				`DiaChi` = '$DiaChi',
				`QueQuan` = '$QueQuan',
				`CCCD/CMND` = '$CCCD',
				`Email` = '$Email',
				`SĐT` = '$SĐT'
				 WHERE `Id_QuanLy` =$Id_QuanLi";
				$table = mysqli_query($connect, $query);
				$ketnoi->dongketnoi($connect);
				return $table;
			} else {
				return false;
			}
		}
		function chonpdatettcnkanh($Id_QuanLi,$HoTen,$GioiTinh,$NgaySinh,$DiaChi,$QueQuan,$CCCD,$Email,$SĐT){
			$ketnoi = new clsketnoi();
			if ($ketnoi->ketnoiDB($connect)) {
				$query = "UPDATE `quanly` SET `HoVaTen` = '$HoTen',
				`GioiTInh` = '$GioiTinh',
				`NgaySinh` = '$NgaySinh',
				`DiaChi` = '$DiaChi',
				`QueQuan` = '$QueQuan',
				`CCCD/CMND` = '$CCCD',
				`Email` = '$Email',
				`SĐT` = '$SĐT'
				 WHERE `Id_QuanLy` =$Id_QuanLi";
				$table = mysqli_query($connect, $query);
				$ketnoi->dongketnoi($connect);
				return $table;
			} else {
				return false;
			}
		}
	}
?>