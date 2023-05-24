<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="#" method="post" enctype="multipart/form-data">
	<table style="border: 1px solid black; margin: 50px;margin-left: 70px; text-align: left; border: solid 1px;">
		<tr>
			<td colspan="2">CẬP NHẬT THÔNG TIN THANH TOÁN</td>
		</tr>
		<tr>
			<td>Mã thanh toán</td>
			<td><input type="text" name="" required></td>
		</tr>
		<tr>
			<td>Số phòng</td>
			<td><input type="text" name="" required></td>
		</tr>
		<tr>
			<td>Tháng thuê</td>
			<td><input type="text" name=""></td>
		</tr>
        <tr>
			<td>Thời gian thanh toán</td>
			<td><input type="text" name=""></td>
		</tr>
        <tr>
			<td>Trạng thái thanh toán</td>
			<td>
                <input type='radio' name='tt' value='0' />Chưa thanh toán 
				<input type='radio' name='tt' value='1' />Đã thanh toán 
            </td>
		</tr>
		<tr>
			<td>Chú thích</td>
			<td><textarea row="5" cols="22" name="txtMota"></textarea></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="btnsubmit" value="cập nhật">
                <input type="submit" name="" value="Hủy">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>