<?php
include_once("ketnoi.php");
class modelTaiKhoan
{
	//chọn tất cả sản phẩm
	function chontaikhoan()
	{
		$p = new clsketnoi();
		if ($p->ketnoidb($con)) {
			$chuoi = "select * from taikhoan INNER JOIN roletaikhoan on taikhoan.Id_TaiKhoan=roletaikhoan.Id_TaiKhoan
                GROUP BY taikhoan.Id_TaiKhoan";
			$table =  mysqli_query($con, $chuoi);
			$p->dongketnoi($con);
			return $table;
		} else {
			return false;
		}
	}
	function chonkhoataikhoan($ma)
	{
		$p = new clsketnoi();
		if ($p->ketnoidb($con)) {
			$chuoi = "Update taikhoan set KhoaTaiKhoan = 0 where Id_TaiKhoan = '" . $ma . "'";
			$table =  mysqli_query($con, $chuoi);
			$p->dongketnoi($con);
			return $table;
		} else {
			return false;
		}
	}
	/**
	 * thêm tài khoản
	 * sau khi thêm tài khoản xong thì thêm vào role tai khoản id vs id role
	 *
	 * @param [type] $username
	 * @param [type] $pass
	 * @return void
	 */
	function InsertTaiKhoan($username, $pass, $id_role)
	{
		$ketnoi = new clsketnoi();
		if ($ketnoi->ketnoidb($connect)) {
			$querytaikhoan = "INSERT INTO `qlktx`.`taikhoan` (
				`Id_TaiKhoan` ,
				`UserName` ,
				`Password` ,
				`KhoaTaiKhoan`
				)
				VALUES (
				NULL , '$username', '$pass', '1'
				);
				";
			$table =  mysqli_query($connect, $querytaikhoan);
			$last_id = mysqli_insert_id($connect);

			$queryroletaikhoan = "INSERT INTO `qlktx`.`roletaikhoan` (
				`Id_TaiKhoan` ,
				`Id_Role`
				)
				VALUES (
				'$last_id', '$id_role'
				);";
			$table =  mysqli_query($connect, $queryroletaikhoan);
			$ketnoi->dongketnoi($connect);
			return $table;
		} else {
			return false;
		}
	}
}
