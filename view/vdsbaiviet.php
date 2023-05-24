<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>

</head>
<style>
	td {
		padding: 2px 2px 3px 5px;
	}
</style>
<?php
include_once("controller/cbaiviet.php");
$p = new controllerbaiviet();
$table = $p->laybaiviet();
if ($table) {
	if (mysqli_num_rows($table) > 0) {
		echo "<h3 style='color: black; text-align:center;'>THÔNG TIN BÀI VIẾT</h3>";
		echo "<table style='width:95%; margin: 10px;' border = '1'>";
		echo "<tr >";
		echo "<th style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Tiêu đề</th>";
		echo "<th style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Số phòng</th>";
		echo "<th style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Tên người đăng</th>";
		echo "<th style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Ảnh chính</th>";
		echo "<th style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Ngày đăng</th>";
		echo "<th style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Nội dung</th>";
		echo "<th style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Cập nhật</th>";
		echo "</tr>";
		while ($row = mysqli_fetch_assoc($table)) {
			echo "<tr>";
			echo "<td style='border: 1px solid white; background: #ebecd0;'>";
			echo $row["TieuDe"];
			echo "</td>";
			echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
			// echo $row["Id_Phong"];
			include_once("controller/cphong.php");
			$p2 = new controllerPhong();
			$table2 = $p2->lay1phong($row["Id_Phong"]);
			$row2 = mysqli_fetch_assoc($table2);
			echo $row2["SoPhong"];
			echo "</td>";
			echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
			include_once("controller/cquanli.php");
			$p1 = new controlql();
			$table1 = $p1->lay1quanliql($row["Id_Quanly"]);
			$row1 = mysqli_fetch_assoc($table1);
			echo $row1["HoVaTen"];
			echo "</td>";
			echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
			echo '<img width=50px height=50px  src="' . "img/" . $row["AnhChinh"] . '"/>';
			echo "</td>";
			echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;width: 90px;'>";
			echo $row["NgayDang"];
			echo "</td>";
			echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
			echo substr($row['NoiDung'], 0, 100);
			echo "...";
			echo "</td>";
			echo "<td style='border: 1px solid white;text-align:center; background: #ebecd0;'>";
			echo "<a href='admin2.php?udbv=" . $row["Id_BaiViet"] . "'>Sửa</a>";
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