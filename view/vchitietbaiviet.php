<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php 
	include_once("controller/cbaiviet.php");
	$p = new controllerbaiviet();
	if(isset($_REQUEST["ctsp"])){
		$stt=$_REQUEST["ctsp"];
		$table = $p -> lay1baiviet($stt);
	}
		if($table){
			/*if(isset($_SESSION["themthanhcong"])){
				echo "Thêm sản phẩm thành công!!!";
			}*/
			if(mysqli_num_rows($table)>0){
				while($row=mysqli_fetch_assoc($table)){

					echo "<table style='background-color: white;'>";
					echo "<td colspan = 2  style='border-color: white;' >";
						echo "<image  style='border-color: white; padding:	10px;' width=100% height=500px src='anh/".$row['AnhChinh']."'/>";
					echo "</td>";
					echo "<tr ><td colspan = 2 style='background-color: white; border-color: white;'>";
					echo "<h3  style='color: #E13427; padding-left: 20px; '>".$row["TieuDe"]."</h3>";
					echo "<p ><b style='padding-left: 20px;'>Diện tích: </b>".$row["DienTichPhong"]." <span style='padding-left: 50px;  '><b >Đơn giá: </b>".$row["GiaTien"]." VND/Tháng  </span> <span style='padding-left: 50px;  '>".$row["DiaChi"]." </span></p>";
					echo "</td></tr>";
					echo "<tr >";
					echo "<td colspan = 2 style=' padding: 20px; border-color: white;' width='60%'  >";
						echo "<b>Mô tả: </b><br>".$row["NoiDung"]."<br>";
					echo "</td>";
					echo "</tr>";
			}
				echo "</table>";
			}else{
				echo "0 result";
			}
		}else{
			echo "Erro";
		}
?>
<body>

</body>
</html>