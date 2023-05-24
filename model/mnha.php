<?php 
	include_once("ketnoi.php");
	class modelnha{
		function chonnha(){
			$con;
			$p = new clsketnoi();
			if ($p->ketnoidb($con)){
				$chuoi="SELECT * FROM `nha`";
				$table =  mysqli_query($con,$chuoi);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
	}
?>