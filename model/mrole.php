<?php
include_once("ketnoi.php");
class modelrole
{
	/**
     * lấy tất cả role
     *
     * @return void
     */
	function selectAllRole()
	{
		$ketnoi = new clsketnoi();
		if ($ketnoi->ketnoidb($connect)) {
			$query = "SELECT *
            FROM `roles`";
			$table =  mysqli_query($connect, $query);
			$ketnoi->dongketnoi($connect);
			return $table;
		} else {
			return false;
		}
	}
}