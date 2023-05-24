<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
</head>
<style>
	td {
		padding: 3px 3px 3px 5px;
	}
</style>
<?php
include_once("controller/cphong.php");
$p = new controllerPhong();
$table = $p->laygiuong();
if ($table) {
	if (mysqli_num_rows($table) > 0) {
		echo "<h3  style='color: black; text-align:center;'>DANH SÁCH PHÒNG</h3>";
		echo "<table style='width:900px; margin-left: 35px;' >";
		echo "<tr style='border: 1px solid white;'>";
		echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Số Phòng</td>";
		echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Diện tích</td>";
		echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Mô Tả</td>";
		echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Địa chỉ</td>";
		echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'> Xem chi tiết</td>";
		echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'> Sửa | Xóa</td>";
		echo "</tr>";
		while ($row = mysqli_fetch_assoc($table)) {
			if ($row["IsDelete"] == 1) {
				echo "</td>";
				echo "<td style='border: 1px solid white; background: #ebecd0;'>";
				echo $row["SoPhong"];
				echo "</td>";
				echo "<td style='border: 1px solid white; background: #ebecd0;'>";
				echo $row["DienTichPhong"];
				echo "</td>";
				echo "<td style='border: 1px solid white; background: #ebecd0;'>";
				echo substr($row["MoTa"], 0, 30);
				echo " ...";
				echo "</td>";
				echo "<td style='border: 1px solid white; background: #ebecd0;'>";
				echo substr($row["DiaChi"], 0, 25);
				echo " ...";
				echo "</td>";
				echo "<td style='border: 1px solid white; background: #ebecd0;'>";
				echo "<a href='admin2.php?xemchitietphong=" . $row["Id_Phong"] . "'>Xem chi tiết </a>";
				echo "</td>";
				echo "<td style='border: 1px solid white; background: #ebecd0;'>";
				echo "<a href='admin2.php?udp=" . $row["Id_Phong"] . "'>Sửa |</a>";
				echo "<a href='admin2.php?deletephong=" . $row["Id_Phong"] . "  style='margin-left: 0px;'>| Xóa</a>";
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