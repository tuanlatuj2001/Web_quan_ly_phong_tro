<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/css.css">
    <title>Document</title>
</head>
<body>
<?php 
	include_once("controller/cbaiviet.php");
	$p = new controllerbaiviet();
		$tblPro = $p -> laybaiviet();
	if($tblPro){
		if(mysqli_num_rows($tblPro)>0){
			$dem = 0;
			echo "<table  style='background-color: #fff9f3; width: 100%; border-color: white;'>";
			while ($row=mysqli_fetch_assoc($tblPro)){
				if($dem==0){
					echo "<tr style=' border-color: #ffc3ab;'>";
				}
				echo "<td style='border-color: #ffc3ab;'>";
				echo "<image style='padding:5px;'   width=300px height=200px src='img/".$row['AnhChinh']."'/>";
				echo "</td>";
				echo "<td style='padding: 30px;border-color: #ffc3ab;'>";
				echo "<h5 ><a href='index.php?ctsp=".$row["Id_BaiViet"]."' style='color: #E13427;font-weight: 700;'>".$row["TieuDe"]."</a></h5>";
				echo "<p ><b style='font-size: 1.2rem; font-weight: 700; color: #16c784; '>
				".$row["GiaTien"]." VND/Tháng</b>  
				<span style='padding-left: 50px;'>".$row["DienTichPhong"]." </span> 
				<span style='padding-left: 50px;'>".$row["DiaChi"]."</span> </p>";
				echo substr("<p style='margin: 10px 0 0; color: #8a8d91;'>".$row['NoiDung'], 0, 500)."..."."</p>"; 
				
				echo "</td>";
				$dem ++;
				if($dem%1==0){
					echo "</tr>";
					$dem = 0;
				}
			}

				echo "<br>";
			echo "</table>";
		}else{
			echo "0 result";
		}
	}else{
		echo "Không có giá trị!!";
	}
?>
</body>
</html>

