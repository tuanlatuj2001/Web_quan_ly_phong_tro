<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
</head>
<?php
include_once("controller/cgiuong.php");
$controllergiuong = new controllergiuong();
$table = $controllergiuong->laygiuong();
if ($table) {
	if (mysqli_num_rows($table) > 0) {
		echo "<h3 style='color: black; text-align:center;'>THÔNG TIN GIƯỜNG</h3>";
		echo "<table style='width:95%; margin: 10px;' border = '1'>";
		echo "<tr>";
		echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Số giường</td>";
		echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Thuộc phòng</td>";
		echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Giá thuê</td>";
		echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Tên khách thuê</td>";
		echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Trạng thái</td>";
		echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Cập nhật</td>";
		echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Xóa giường</td>";
		echo "</tr>";
		while ($row = mysqli_fetch_assoc($table)) {
			if ($row["IsDelete"] == 1) {
				echo "<td style='border: 1px solid white; text-align:center;background: #ebecd0;'>";
				echo $row["SoGiuong"];
				echo "</td>";
				echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
				if ($row["Id_Phong"]) {
					include_once("controller/cphong.php");
					$p1 = new controllerPhong();
					$table1 = $p1->lay1phong($row["Id_Phong"]);
					$row1 = mysqli_fetch_assoc($table1);
					echo $row1["SoPhong"];
				}
				"</td>";
				echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
				echo $row["GiaTien"];
				echo "</td>";
				echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
				if ($row["Id_KhachThuePhong"]) {
					include_once("Controller/ckhachhang.php");
					$p1 = new controlkhachhang();
					$table1 = $p1->laykhachhang($row["Id_KhachThuePhong"]);
					$row1 = mysqli_fetch_assoc($table1);
					echo $row1["HoTen"];
				}
				echo "</td>";
				echo "<td style='border: 1px solid white; background: #ebecd0;'>";
				if ($row["TrangThai"] == 0) {
					echo "Trống";
				} else {
					echo "Đã cho thuê";
				}

				echo "</td>";
				echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
				echo "<a href='admin2.php?udg=" . $row["Id_Giuong"] . "'>Sửa</a>";
				echo "</td>";
				echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
				echo "<a href='admin2.php?xg=" . $row["Id_Giuong"] . "'>Xóa</a>";
				echo "</td>";
				echo "</tr>";
			}
		}
		echo "</table>";
	} else {
		echo "0 result";
	}
} else {
	echo "Erro";
}
?>

<body>
	</table>
</body>

</html>