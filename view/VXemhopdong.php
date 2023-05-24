<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
</head>
<div style="    border: 1px solid black;">
<div style="    padding: 50px;">
<?php
include_once("Controller/chopdong.php");
$p = new controllerhopdong();
$table = $p->lay1hopdong($_REQUEST["cthd"]);
if ($table) {
    if (mysqli_num_rows($table) > 0) {
        while ($row = mysqli_fetch_assoc($table)) {
            echo "<p style='text-align: center;'><strong>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</strong></p>";
            echo "<p style='text-align: center;'><strong>Độc lập – Tự do – Hạnh phúc<br> ___________</strong></p>";
            echo "<p style='text-align: center;'><strong>HỢP ĐỒNG THUÊ GIƯỜNG KÝ TÚC XÁ</strong></p>";
            echo "<p style='text-align: justify;'>Hôm nay, $row[NgayLap] </p>";
            echo "<p style='text-align: justify;'>Hai bên gồm:</p>";
            echo "<p style='text-align: justify;'><strong>BÊN CHO THUÊ (Bên A):</strong></p>";
            echo "<p style='text-align: justify;'>Họ tên: $row[HoTenBenA]</p>";
            echo "<p style='text-align: justify;'>Chức vụ: Quản lý</p>";
            echo '<?php';
            include_once("controller/cquanli.php");
            $ql = new controlql();
            $table2 = $ql->layquanli();
            if (mysqli_num_rows($table2)) {
                while ($row2 = mysqli_fetch_assoc($table2)) {
                    if ($row2["Id_QuanLy"] == $row["Id_QuanLy"]) {
                        echo "<p style='text-align: justify;'>Số điện thoại: $row2[SĐT]</p>";
                        echo "<p style='text-align: justify;'>Email: $row2[Email]</p>";
                    }
                }
            }
            echo "<p style='text-align: justify;'><strong>BÊN CHO THUÊ (Bên B):</strong></p>";
            echo "<p style='text-align: justify;'>Họ tên: $row[HoTenBenB]</p>";
            echo '<?php';
            include_once("controller/ckhachhang.php");
            $p1 = new controlkhachhang();
			$table1 = $p1->laykhachhang1();
            if (mysqli_num_rows($table1)) {
                while ($row1 = mysqli_fetch_assoc($table1)) {
                    if ($row1["Id_KhachThuePhong"] == $row["Id_KhachThuePhong"]) {
                        echo "<p style='text-align: justify;'>Số điện thoại: $row1[SDT]</p>";
                        echo "<p style='text-align: justify;'>Email: $row1[Email]</p>";
                        echo "<p style='text-align: justify;'>Ngày sinh: $row1[NgaySinh]</p>";
                        echo "<p style='text-align: justify;'>Số CCCD: $row1[CCCD]</p>";
                    }
                }
            }
            echo "<p style='text-align: justify;'>Bên A, cùng Bên B, thống nhất ký kết Hợp đồng cho thuê chỗ ở tại ký túc xá tư nhân với các điều khoản sau:</p>";
            echo "<p style='text-align: justify;'><strong>Điều 1:</strong></p>";
            echo"<p style='text-align: justify;'>Bên A đồng ý cho Bên B thuê 01 chỗ ở nội trú tại phòng số: $row[SoPhong]. Số giường:  $row[SoGiuong].  Nhà: $row[DiaChi]. Bên B được phép sử dụng các tài sản do công ty trang bị tại phòng ở cũng như các phòng sinh hoạt tập thể thuộc khuôn viên nhà theo Quy chế tổ chức &amp; hoạt động, các quy định và nội quy của công ty.</p>";
            echo"<p style='text-align: justify;'><strong>Điều 2: Giá cả, thời gian và phương thức thanh toán.</strong></p>";
            echo"<p style='text-align: justify;'>2.1. Đơn giá cho thuê: $row[GiaTien]/ tháng.</p>";
            echo"<p style='text-align: justify;'>2.2. Thời gian cho thuê: $row[ThoiHan] </p>";
            echo"<p style='text-align: justify;'>Ngoài ra Bên B phải đóng thêm tiền điện là: 1.678 (đồng/kWh)</p>";
            echo"<p style='text-align: justify;'>2.3. Phương thức thanh toán: Bên B thanh toán cho Bên A tiền thuê chỗ ở bằng tiền mặt 1 hoặc chuyển khoản theo từng tháng.</p>";
            echo"<strong>Điều 3: Hợp đồng hết hiệu lực và bên A không có trách nhiệm hoàn trả tiền cho bên B khi:</strong>";
            echo"<p style='text-align: justify;'>– Thời hạn ghi trong hợp đồng kết thúc.</p>";
            echo"<p style='text-align: justify;'>– Bên B không đảm bảo về sức khỏe, mắc các chứng bệnh về lây nhiễm theo kết luận của cơ quan y tế cấp quận (huyện) trở lên.</p>";
            echo"<p style='text-align: justify;'>– Bên B vi phạm Nội quy Ký túc xá, bị xử lý kỷ luật theo Khung kỷ luật ban hành mức chấm dứt hợp đồng, cho ra khỏi Ký túc xá.</p>";
            echo"<p style='text-align: justify;'><strong>Điều 4: Trách nhiệm của bên B.</strong></p>";
            echo"<p style='text-align: justify;'>– Ở đúng nơi đã được Ban quản trị Ký túc xá sắp xếp (vị trí phòng ở và giường ở).</p>";
            echo"<p style='text-align: justify;'>– Chấp hành sự điều chuyển chỗ ở của Ban quản trị Ký túc xá trong trường hợp cần thiết và có lý do chính đáng: (Ký túc xá sửa chữa nâng cấp, lý do về an ninh trật tự và một số lý do khác).</p>";
            echo"<p style='text-align: justify;'>– Không được cho thuê lại chỗ ở cũng như tự ý chuyển nhượng lại hợp đồng cho người khác.</p>";
            echo"<p style='text-align: justify;'><strong>Điều 5: Trách nhiệm của Bên A.</strong></p>";
            echo"<p style='text-align: justify;><span style='text-align: left;'>– Không được đun nấu trong phòng ở và xung quanh khu nội trú.</span></p>";
            echo"<p style='text-align: justify;'><span style='text-align: left;'>– Tự bảo quản tài sản và đồ dùng cá nhân, tự chịu trách nhiệm về việc bảo vệ an toàn cho mình đối với việc sử dụng các dụng cụ, thiết bị cũng như các hoạt động khác.</span></p>";
            echo"<p style='text-align: justify;'><span style='text-align: left;'>– Có ý thức tự giác trong việc bảo quản tài sản công, triệt để tiết kiệm, chống lãng phí, thực hiện nghĩa vụ đầy đủ về trật tự vệ sinh Ký túc xá. Cam kết giữ nghiêm, có tinh thần trách nhiệm và ý thức tập thể.</span></p>";
            echo"<p style='text-align: justify;'><span style='text-align: left;'>– Bồi thường các mất mát hư hỏng tài sản công do mình gây ra theo quy định chung của nhà trường.</span></p>";
            echo"<p style='text-align: justify;'><span style='text-align: left;'>– Tự thanh toán các chi phí dịch vụ cá nhân khác như dịch vụ ăn uống, gửi xe… </span></p>";
            echo"<p style='text-align: justify;'><span style='text-align: left;'>– </span><span style='text-align: left;'>Thanh toán đầy đủ các khoản phí đúng hạn, lưu giữ phiếu thu để đối chiếu khi cần thiết.</span></p>";
            echo"<p style='text-align: justify;'><span style='text-align: left;'>– </span><span style='text-align: left;'>Cam kết giữ nghiêm kỷ luật nội trú, có tinh thần trách nhiệm và ý thức tập thể.</span></p>";
            echo"<p style='text-align: justify;'><span style='text-align: left;'>– Phải trả phòng và ra khỏi ký túc xá vào ngày hợp đồng hết hiệu lực</span></p>";
            echo"<strong>Điều 6: Điều khoản chung.</strong>";
            echo"<p style='text-align: justify;'>– Bên nào muốn chấm dứt hợp đồng trước thời hạn phải có văn bản báo cho bên thứ hai biết trước ít nhất là 15 ngày (trừ trường hợp SV bị xử lý kỷ luật vì các lý do khác, hay bị kỷ luật vì vi phạm quy định KTX).</p>";
            echo"<p style='text-align: justify;'>– Quy chế tổ chức &amp; hoạt động Ký túc xá, Nội quy Ký túc xá, Phiếu đăng ký ở nội trú, Bản cam kết đã ký là bộ phận chung của hợp đồng này.</p>";
            echo"<p style='text-align: justify;'>– Hai bên cam kết thực hiện theo đúng các điều khoản của hợp đồng và Bản cam kết.</p>";
            echo"<p style='text-align: justify;'>-Hợp đồng được lập thành 02 bản có giá trị ngang nhau, Bên A giữ 01 bản và Bên B giữ 01 bản.</p>";
            echo"<p style='text-align: justify;'>-Bên B phải bàn giao trang thiết bị phòng ở cho bên A khi nghỉ hè (Tết), thực tập và trước khi kết thúc hợp đồng.</p>";

            echo"<p style='text-align: center;'><strong>Bên A&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Bên B<br> </strong><em>$row[HoTenBenA]&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </em><em>$row[HoTenBenB]</em></p>";

        }
        echo "</table>";
    } else {
        echo "0 result";
    }
} else {
    echo "Erro";
}
?>
</div>
</div>
<body>

</body>

</html>