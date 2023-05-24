<?php
include_once("controller/cquanli.php");
// include_once("controller/cDanhsachnha.php");
// if (isset($_REQUEST["btnsubmit"])) {
//     // Lấy dữ liệu được nhập từ form
//     $diachi = $_REQUEST["txtdiachi"];
//     $idql = $_REQUEST["txtidql"];

//     $p = new ControllerDanhsachnha();
//     // Gọi hàm thêm dữ liệu vào DB từ controller
//     $kq = $p->Addnha($diachi, $idql);

//     // Hiển thị các thông báo cần thiết

//     if ($kq == 1) {
//         echo "<script> alert('Thêm dữ liệu thành công')</script>";
//         echo header("refresh: 0; url='admin2.php?dsn'");
//     } elseif ($kq == 0) {
//         echo "<script> alert('Không thể insert')</script>";
//     } else {
//         echo "Lỗi";
//     }
// }
// ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>THÊM NHÀ</h2>
    <form action="#" enctype="multipart/form-data" method="post">
        <table style="margin: auto; text-align: left">
            <tr>
                <td>Địa Chỉ</td>
                <td>
                    <input type="text" name="txtdiachi" id="">
                </td>
            </tr>
            <tr>
                <td>Tỉnh thành</td>
                <td>
                    <select name="tinhthanh">
                        <option value="">......</option>
                        <option value="An Giang">An Giang</option>
                        <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                        <option value="Bạc Liêu">Bạc Liêu</option>
                        <option value="Bắc Kạn">Bắc Kạn</option>
                        <option value="Bắc Ninh">Bắc Ninh</option>
                        <option value="Bến Tre">Bến Tre</option>
                        <option value="Bắc Giang">Bắc Giang</option>
                        <option value="Bình Dương">Bình Dương</option>
                        <option value="Bình Định">Bình Định</option>
                        <option value="Bình Phước">Bình Phước</option>
                        <option value="Bình Thuận">Bình Thuận</option>
                        <option value="Cà Mau">Cà Mau</option>
                        <option value="Cao Bằng">Cao Bằng</option>
                        <option value="Cần Thơ">Cần Thơ</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="Đắk Lắk">Đắk Lắk</option>
                        <option value="Đắk Nông">Đắk Nông</option>
                        <option value="Điện Biên">Điện Biên</option>
                        <option value="Đồng Nai">Đồng Nai</option>
                        <option value="Đồng Tháp">Đồng Tháp</option>
                        <option value="Gia Lai">Gia Lai</option>
                        <option value="Hà Giang">Hà Giang</option>
                        <option value="Hà Nam">Hà Nam</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="Hà Tĩnh">Hà Tĩnh</option>
                        <option value="Hải Dương">Hải Dương</option>
                        <option value="Hải Phòng">Hải Phòng</option>
                        <option value="Hậu Giang">Hậu Giang</option>
                        <option value="Hòa Bình">Hòa Bình</option>
                        <option value="Thành phố Hồ Chí Minh">Thành phố Hồ Chí Minh</option>
                        <option value="Hưng Yên">Hưng Yên</option>
                        <option value="Khánh Hòa">Khánh Hòa</option>
                        <option value="Kiên Giang">Kiên Giang</option>
                        <option value="Kon Tum">Kon Tum</option>
                        <option value="Lai Châu">Lai Châu</option>
                        <option value="Lạng Sơn">Lạng Sơn</option>
                        <option value="Lào Cai">Lào Cai</option>
                        <option value="Lâm Đồng">Lâm Đồng</option>
                        <option value="Long An">Long An</option>
                        <option value="Nam Định">Nam Định</option>
                        <option value="Nghệ An">Nghệ An</option>
                        <option value="Ninh Bình">Ninh Bình</option>
                        <option value="Ninh Thuận">Ninh Thuận</option>
                        <option value="Phú Thọ">Phú Thọ</option>
                        <option value="phuyen">Phú Yên</option>
                        <option value="Quảng Bình">Quảng Bình</option>
                        <option value="Quảng Nam">Quảng Nam</option>
                        <option value="Quảng Ngãi">Quảng Ngãi</option>
                        <option value="Quảng Ninh">Quảng Ninh</option>
                        <option value="Quảng Trị">Quảng Trị</option>
                        <option value="Sóc Trăng">Sóc Trăng</option>
                        <option value="Sơn La">Sơn La</option>
                        <option value="Tây Ninh">Tây Ninh</option>
                        <option value="Thái Bình">Thái Bình</option>
                        <option value="Thái Nguyên">Thái Nguyên</option>
                        <option value="Thanh Hóa">Thanh Hóa</option>
                        <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                        <option value="Tiền Giang">Tiền Giang</option>
                        <option value="Trà Vinh">Trà Vinh</option>
                        <option value="Vĩnh Long">Vĩnh Long</option>
                        <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                        <option value="Yên Bái"> Yên Bái</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Quản Lý</td>
                <td> <select name="id_quanly">
                        <?php
                        $controllerquanly = new controlql();
                        $table = $controllerquanly->layquanli();
                        if (mysqli_num_rows($table)) {
                            while ($row = mysqli_fetch_assoc($table)) {

                                echo "<option value='" . $row["Id_QuanLy"] . "'>" . $row["HoVaTen"] . "</option>";
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btnsubmit" value="Thêm" id="">
                    <input type="reset" name="" value="Nhập lại" id="">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
include_once("controller/cDanhsachnha.php");
if (isset($_REQUEST["btnsubmit"])) {
    // Lấy dữ liệu được nhập từ form
    $diachi = $_REQUEST["txtdiachi"];
    $idql = $_REQUEST["id_quanly"];
    $tinhthanh = $_REQUEST["tinhthanh"];
    // if ($diachi == "" || $idql == "" || $tinhthanh = "") {
    //     echo "<script> alert('Không được để trống')</script>";
    //     return false;
    // } else {
    if ($diachi != "" && $idql != "" && $tinhthanh != "") {
        $p = new ControllerDanhsachnha();
        // Gọi hàm thêm dữ liệu vào DB từ controller
        $kq = $p->Addnha($diachi, $idql, $tinhthanh);

        // Hiển thị các thông báo cần thiết

        if ($kq == 1) {
            echo "<script> alert('Thêm dữ liệu thành công')</script>";
            echo header("refresh: 0; url='admin2.php?dsn'");
        } elseif ($kq == 0) {
            echo "<script> alert('Không thể insert')</script>";
        } else {
            echo "Lỗi";
        }
    } else {
        echo "<script> alert('Không được để trống')</script>";
        return false;
    }
}
?>