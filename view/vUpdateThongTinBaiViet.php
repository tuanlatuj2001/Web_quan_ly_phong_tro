<?php
include_once("Controller/cbaiviet.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/css.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/XemThongTinCaNhan.css"> -->
    <title>Document</title>
</head>
<?php

$controllerThongTinCaNhan = new controllerbaiviet();
$Id_BaiViet = $_REQUEST["udbv"];
$table = $controllerThongTinCaNhan->lay1baiviet($Id_BaiViet);

if ($table) {

    if (mysqli_num_rows($table) > 0) {
        while ($row = mysqli_fetch_assoc($table)) {
            $idbv = $row["Id_BaiViet"];
            $date = $row["NgayDang"];
            $noidung = $row["NoiDung"];
            $idphong = $row["Id_Phong"];
            $idql = $row["Id_Quanly"];
            $tieude = $row["TieuDe"];
            $anh  = $row["AnhChinh"];
        }
    }
}

?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="ml-sm-auto col-lg-1"></div>

            <main role="main" class="ml-sm-auto col-lg-10">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2" style="padding-left: 100px;">CHỈNH SỬA THÔNG TIN BÀI VIẾT</h1>
                </div>

                <form class="js-form-submit-data" action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group row mt-5">
                        <label for="user_id" class="col-md-2 offset-md-2 col-form-label">Tiêu đề</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control " id="tieude" name="tieude" value="<?php if (isset($tieude)) echo $tieude ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_phone" class="col-md-2 offset-md-2 col-form-label">Ngày đăng</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control " id="user_phone" name="date" value="<?php if (isset($date)) echo $date ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_zalo" class="col-md-2 offset-md-2 col-form-label">Phòng</label>
                        <div class="col-md-6">
                            <select name="sophong">
                                <?php
                                include_once("controller/cphong.php");
                                $controllerphong = new controllerPhong();
                                $table2 = $controllerphong->laygiuong();
                                if (mysqli_num_rows($table2)>0) {
                                    while ($row = mysqli_fetch_assoc($table2)) {
                                        if ($row["Id_Phong"] == $idphong) {
                                            echo "<option Selected value='" . $row["Id_Phong"] . "'>" . $row["SoPhong"] . "</option>";
                                        } else {
                                            echo "<option value='" . $row["Id_Phong"] . "'>" . $row["SoPhong"] . "</option>";
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="user_name" class="col-md-2 offset-md-2 col-form-label">Tên Quản Lý</label>
                        <div class="col-md-6">
                            <select name="idql">
                                <?php
                                include_once("controller/cquanli.php");
                                $ql = new controlql();
                                $table3 = $ql->layquanli();
                                if (mysqli_num_rows($table3)) {
                                    while ($row3 = mysqli_fetch_assoc($table3)) {
                                        if ($row3["Id_QuanLy"] == $idql) {
                                            echo "<option Selected value='" . $row3["Id_QuanLy"] . "'>" . $row3["HoVaTen"] . "</option>";
                                        } else {
                                            echo "<option value='" . $row3["Id_QuanLy"] . "'>" . $row3["HoVaTen"] . "</option>";
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_email" class="col-md-2 offset-md-2 col-form-label">Ảnh</label>
                        <div class="col-md-6">
                            <?php if (isset($anh)) echo '<img width=200px height=100px  src="' . "anh/" . $anh . '"/>'; ?>
                            <input type="file" class="form-control" id="file" name="file">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_zalo" class="col-md-2 offset-md-2 col-form-label">Nội dung</label>
                        <div class="col-md-6">
                            <input type="phone" class="form-control" id="noidng" name="noidung" value="<?php if (isset($noidung)) echo $noidung ?>">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="user_email" class="col-md-2 col-form-label"></label>
                        <div class="col-md-8">
                            <button type="submit" name="update" class="btn btn-primary btn-lg mb-2 btn-block">CẬP NHẬT BÀI VIẾT</a></button>
                        </div>
                    </div>
                </form>
                <br><br>
            </main>
            <div class="ml-sm-auto col-lg-1"></div>
        </div>
    </div>
</body>
<?php
// này viuew bài viet mà t gộp lại lun m chạy t xem 
if (isset($_REQUEST["update"])) {
    $TieuDe = $_REQUEST["tieude"];
    $NgayDang = $_REQUEST["date"];
    $Id_Phong = $_REQUEST["idphong"];
    $Id_Quanly = $_REQUEST["idql"];
    $NoiDung  = $_REQUEST["noidung"];

    $hinhanh = $_FILES["file"]["tmp_name"];
    $tenanh = $_FILES["file"]["name"];
    $loaianh = $_FILES["file"]["type"];
    $kichcoanh = $_FILES["file"]["size"];


    if ($tenanh != "") {
        $updatebaiviet = $controllerThongTinCaNhan->updatebaiviet($Id_BaiViet, $NgayDang, $NoiDung, $hinhanh, $Id_Phong, $Id_Quanly, $TieuDe, $tenanh, $loaianh, $kichcoanh);

        switch ($updatebaiviet) {
            case 1:
                echo header("refresh:0; url='admin2.php?dsbv'");
                echo "<script>alert('update dữ liệu thành công')</script>";
                break;
            case 0:
                echo "<script>alert('Update không thành công')</script>";
                break;
            case -1:
                echo "<script>alert('Không thể upload ảnh')</script>";
                break;
            case -2:
                echo "<script>alert('Kích thước ảnh quá lớn')</script>";
                break;
            case -3:
                echo "<script>alert('Không đúng định dạng jpeg hoặc png')</script>";
                break;
            default:
                echo "<script>alert('Lỗi khác')</script>";
                break;
        }
    } else {
        $updatebaiviet = $controllerThongTinCaNhan->updatebaivietKhongCoAnh($Id_BaiViet, $NgayDang, $NoiDung, $Id_Phong, $Id_Quanly, $TieuDe);
        if ($updatebaiviet) {
            // echo header("refresh:0; url='vThongTinCaNhan.php'");
            echo "<script>alert('update dữ liệu thành công')</script>";
        } else {
            echo "<script>alert('update dữ liệu không thành công')</script>";
        }
    }
}
?>

</html>