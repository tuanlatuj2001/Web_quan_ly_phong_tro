<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php 
	include_once("Controller/cthanhtoan.php");
	$p = new controlthanhtoan();
	$table = $p -> laythanhtoan();
		if($table){
			if(mysqli_num_rows($table)>0){
				echo "<h3 style='color: black; text-align:center;'>THÔNG TIN THANH TOÁN</h3>";
				echo "<table style='width:95%; margin: 10px;' border = '1'>";
				echo "<tr>";
				echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Mã hóa đơn</td>";
				echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Số giường</td>";
				echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Tháng thuê</td>";
				echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Thời gian thanh toán</td>";
				echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Số tiền</td>";
                echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Tình trạng</td>";
				echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Cập nhật</td>";
				echo "</tr>";
				while($row=mysqli_fetch_assoc($table)){
					echo "<tr>";
						echo "<td style='border: 1px solid white; background: #ebecd0;'>";echo $row["Id_HoaDon"];echo "</td>";
						echo "<td style='border: 1px solid white; background: #ebecd0;'>";echo $row["SoGiuong"];echo "</td>";
						echo "<td style='border: 1px solid white; background: #ebecd0;'>";echo $row["ThangThue"];echo "</td>";
						echo "<td style='border: 1px solid white; background: #ebecd0;'>";echo $row["NgayLap"];echo "</td>";
                        echo "<td style='border: 1px solid white; background: #ebecd0;'>";echo $row["Gia"];echo "</td>";
                        echo "<td style='border: 1px solid white; background: #ebecd0;'>";
					
						if($row["TrangThai"]==0){
							echo "Chưa thanh toán";
						}else{
							echo "Đã thanh toán";
						}
						
						echo "</td>";
						echo "<td style='border: 1px solid white; background: #ebecd0;'>";echo "<a href='admin2.php?updatehoadon=".$row["Id_HoaDon"]."'>Sửa</a>";echo "</td>";
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
</table>
</body>
</html>