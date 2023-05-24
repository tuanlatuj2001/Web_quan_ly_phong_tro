<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
</head>
<style>
	td {
		padding: 3px 0px 3px 5px;
	}
</style>
<?php
include_once("controller/cDanhsachtk.php");
$p = new ControllerDanhsachtk();
$table = $p->getDanhsachtk();
if ($table) {
	if (mysqli_num_rows($table) > 0) {
		echo "<h3  style='color: black; text-align:center;'>DANH SÁCH TÀI KHOẢN</h3>";
		echo "<table style='width:500px; margin-left: 220px;' >";
		echo "<tr style='border: 1px solid white;'>";
		echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Tên đăng nhập</td>";
		echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Mật khẩu</td>";
		echo "<td style='color: white; text-align:center;border: 1px solid white;  background: #015f95;'>Khoá tài khoản</td>";
		echo "</tr>";
		while ($row = mysqli_fetch_assoc($table)) {
			if ($row["KhoaTaiKhoan"] == 1) {

				echo "</td>";
				echo "<td style='border: 1px solid white; background: #ebecd0;'>";
				echo $row["UserName"];
				echo "</td>";
				echo "<td style='border: 1px solid white; background: #ebecd0;'>";
				echo $row["Password"];
				echo "</td>";
				echo "<td style='border: 1px solid white; background: #ebecd0;text-align: center;'> <a href='admin2.php?khoataikhoan=" . $row["Id_TaiKhoan"] . " style='margin-left: 0px;'>Khóa</a>";
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