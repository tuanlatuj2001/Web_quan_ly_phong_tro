<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php 
	include_once("Controller/ckhachhang.php");
	$p = new controlkhachhang();
	$table = $p -> laykhachhang1();
		if($table){
			if(mysqli_num_rows($table)>0){
				echo "<h3 style='color: black; text-align:center;'>THÔNG TIN KHÁCH HÀNG</h3>";
				echo "<table style='width:95%; margin: 10px;' border = '1'>";
				echo "<tr >";
				echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Id khách thuê phòng</td>";
				echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Họ và tên</td>";
				echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Hình ảnh</td>";
				echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Giới tính</td>";  
				echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Ngày sinh</td>";
				echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Địa chỉ</td>";
                echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Quê quán</td>";
                echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>CCCD/CMND</td>";
                echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Email</td>";
                echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Số điện thoại</td>";
                echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Cập nhật</td>";                       
				echo "</tr>";
				while($row=mysqli_fetch_assoc($table)){
					echo "<tr>";
						echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";echo $row["Id_KhachThuePhong"];echo "</td>";
						echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";echo $row["HoTen"];echo "</td>";
						echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
						echo '<img width=30px height=20px  src="'."img/" . $row["anh"] . '"/>';
						echo "</td>";
                        echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
                            if($row["GioiTinh"]==1){
                                echo "Nam";
                            }else{
                                echo "Nữ";
                            }
                        echo "</td>";
                        echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";echo $row["NgaySinh"];echo "</td>";
                        echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";echo $row["DiaChi"];echo "</td>";
                        echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";echo $row["QueQuan"];echo "</td>";
                        echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";echo $row["CCCD/CMND"];echo "</td>";
                        echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";echo $row["Email"];echo "</td>";
                        echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";echo $row["SĐT"];echo "</td>";
						echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";echo "<a href='admin2.php?udkh=".$row["Id_KhachThuePhong"]."'>Sửa</a>";echo "</td>";
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