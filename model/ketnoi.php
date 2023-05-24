<?php 
		class clsketnoi {
			function ketnoidb (& $con){
				$con= mysqli_connect("localhost","tuan","1234");
				mysqli_set_charset($con,"utf8");
				if($con){
					return mysqli_select_db($con,"qlktx");
				}else{
					return false;
				}
			}
			function dongketnoi ($con) {
				mysqli_close($con);
			}
		}
	?>