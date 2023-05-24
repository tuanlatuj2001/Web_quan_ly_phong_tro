<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
</head>
<?php
include_once("Controller/chopdong.php");
$p = new controllerhopdong();
$table = $p->layhopdong();
if ($table) {
	if (mysqli_num_rows($table) > 0) {
		echo "<h3 style='color: black; text-align:center;'>THÔNG TIN HỢP ĐỒNG</h3>";
		echo "<table style='width:95%; margin: 10px;' border = '1'>";
		echo "<tr>";
		echo "<td  style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Tên hợp đồng</td>";
		echo "<td  style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Ngày lập</td>";
		echo "<td  style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Họ và tên bên A</td>";
		echo "<td  style='color: white; text-align:center;border: 1px solid white;  background: #015f95;' style='border: 1px solid white;text-align:center; background: #ebecd0;'>Họ và tên bên B</td>";
		echo "<td  style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Thời hạn</td>";
		echo "<td  style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Tiền cọc</td>";
		echo "<td  style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Cập nhật</td>";
		echo "</tr>";
		while ($row = mysqli_fetch_assoc($table)) {
			echo "</td>";
			echo "<td style='border: 1px solid white; background: #ebecd0;'>";
			echo $row["TenHopDong"];
			echo "</td>";
			echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
			echo $row["NgayLap"];
			echo "</td>";
			echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
			echo $row["HoTenBenA"];
			echo "</td>";
			echo "<td style='border: 1px solid white; background: #ebecd0;'>";
			echo $row["HoTenBenB"];
			echo "</td>";
			echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
			echo $row["ThoiHan"];
			echo "</td>";
			echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
			echo $row["Tiencoc"];
			echo "</td>";
			echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
			echo "<a href='admin2.php?uhd=" . $row["Id_HopDong"] . "'>Sửa</a>";
			echo "<a href='admin2.php?cthd=".$row["Id_HopDong"]."'>| Xem</a>";echo "</td>";
			echo "</td>";
			echo "</tr>";
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