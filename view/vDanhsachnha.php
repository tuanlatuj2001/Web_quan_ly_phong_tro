<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php 
	include_once("controller/cDanhsachnha.php");
	$p = new ControllerDanhsachnha();
	$table = $p -> getDanhsachnha();
		if($table){
			if(mysqli_num_rows($table)>0){
				echo "<h3  style='color: black; text-align:center;'>DANH SÁCH NHÀ</h3>";
				echo "<table style='width:600px; margin-left: 220px;' >";
				echo "<tr style='border: 1px solid white;'>";
				echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Địa chỉ</td>";
				echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Tên quản lý</td>";
                echo"<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Sửa | Xóa</td>";
				echo "</tr>";
				while($row=mysqli_fetch_assoc($table)){
					echo "<tr>";
						echo "<td style='border: 1px solid white; background: #ebecd0;'>";echo $row["DiaChi"];echo "</td>";
						echo "<td style='border: 1px solid white; background: #ebecd0;'>";
						include_once("controller/cquanli.php");
						$p1 = new controlql();
						$table1 = $p1 -> lay1quanliql($row["id_QuanLi"]);
						$row1=mysqli_fetch_assoc($table1);
						echo $row1["HoVaTen"];
						echo "</td>";
                        echo "<td style='border: 1px solid white; background: #ebecd0;'>";echo"<a href='#' >Sửa |</a>";
                        echo"<a href='admin2.php?deletenha" . "&idnha=" . $row["Id_Nha"] ." style='margin-left: 0px;'>| Xóa</a>"; echo "</td>";
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