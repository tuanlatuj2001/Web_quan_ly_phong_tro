<?php
include_once("controller/cgiuong.php");
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
    <title>Document</title>
</head>
<?php
$p = new controllergiuong();
$id_guong = $_REQUEST["udg"];
$table = $p->lay1giuong($id_guong);

if ($table) {
    if (mysqli_num_rows($table) > 0) {
        while ($row = mysqli_fetch_assoc($table)) {
            $Id_Giuong = $row["Id_Giuong"];
            $TrangThai = $row["TrangThai"];
            $GiaTien = $row["GiaTien"];
            $Id_KhachThuePhong = $row["Id_KhachThuePhong"];
            $Id_Phong = $row["Id_Phong"];
            $SoGiuong = $row["SoGiuong"];
            $IsDelete  = $row["IsDelete"];
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
                    <h1 class="h2" style="padding-left: 100px;">SỬA THÔNG TIN GIƯỜNG</h1>
                </div>
                <form class="js-form-submit-data" action="#" method="POST">
                    <div class="form-group row">
                        <label for="sogiuong" class="col-md-2 offset-md-2 col-form-label">Số giường</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control " id="sogiuong" name="sogiuong" value="<?php if (isset($SoGiuong)) echo $SoGiuong ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="giathue" class="col-md-2 offset-md-2 col-form-label">Giá thuê</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control " id="giathue" name="giathue" value="<?php if (isset($GiaTien)) echo $GiaTien ?>">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="id_ql" class="col-md-2 offset-md-2 col-form-label">Số phòng</label>
                        <div class="col-md-6">
                            <select name="id_phong">
                                <?php
                                include_once("controller/cphong.php");
                                $comp = new controllerPhong();
                                $table1 = $comp->laygiuong();
                                if (mysqli_num_rows($table1)) {
                                    while ($row1 = mysqli_fetch_assoc($table1)) {
                                        if ($row1["Id_Phong"] == $row["Id_Phong"]) {
                                            echo "<option Selected value='" . $row1["Id_Phong"] . "'>" . $row1["SoPhong"] . "</option>";
                                        } else {
                                            echo "<option value='" . $row1["Id_Phong"] . "'>" . $row1["SoPhong"] . "</option>";
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="idkhach" class="col-md-2 offset-md-2 col-form-label">khách thuê</label>
                        <div class="col-md-6">
                            <select name="id_khach">
                                <?php
                                include_once("controller/ckhachhang.php");
                                $comp = new controlkhachhang();
                                $table1 = $comp->laykhachhang1();
                                if (mysqli_num_rows($table1)) {
                                    // if ($ttkh["Id_KhachThuePhong"]) {
                                    while ($row1 = mysqli_fetch_assoc($table1)) {
                                        if ($row1["Id_KhachThuePhong"] == $Id_KhachThuePhong) {
                                            echo "<option Selected value='" . $row1["Id_KhachThuePhong"] . "'>" . $row1["HoTen"] . "</option>";
                                        } else {
                                            echo "<option value='" . $row1["Id_KhachThuePhong"] . "'>" . $row1["HoTen"] . "</option>";
                                        }
                                    }
                                    echo "<option value='NULL'>Chưa có khách thê</option>";
                                    // } else {
                                    //     while ($row1 = mysqli_fetch_assoc($table1)) {
                                    //         echo "<option value='" . $row1["Id_KhachThuePhong "] . "'>" . $row1["HoTen"] . "</option>";
                                    //     }
                                    //     echo "<option Selected value='null'>Chưa có khách thê</option>";
                                    // }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="name_a" class="col-md-2 offset-md-2 col-form-label">Trạng thái</label>
                        <div class="col-md-6">
                            <?php
                            if ($ttkh['TrangThai'] == 0) {
                                echo "Trống<input type='radio' name='tt' value='0' checked />";
                                echo "Đã có khách thuê<input type='radio' name='tt' value='1' />";
                            } else {
                                echo "Trống<input type='radio' name='tt' value='0' />";
                                echo "Đã có khách thuê<input type='radio' name='tt' value='1' checked />";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="user_email" class="col-md-2 col-form-label"></label>
                        <div class="col-md-8">
                            <button type="submit" name="btnsubmit" class="btn btn-primary btn-lg mb-2 btn-block">Cập nhật hợp đồng</button>
                        </div>
                    </div>

                </form>

                <br><br>

            </main>
            <div class="ml-sm-auto col-lg-1"></div>
        </div>
    </div>
    <?php
    if (isset($_REQUEST["btnsubmit"])) {
        $sogiuong = $_REQUEST["sogiuong"];
        $giathue = $_REQUEST["giathue"];
        $id_khach = $_REQUEST["id_khach"];
        $tt = $_REQUEST["tt"];
        $id_phong = $_REQUEST["id_phong"];
        // if ($idkhach == "null") {
        //     $kq = $p->layupdategiuong1($id_guong, $id_khach,$sogiuong, $giathue, $tt, $id_phong);
        //     if ($kq == 1) {
        //         echo "<script>alert('cập nhật giường thành công')</script>";
        //         echo header("refresh:0; url='admin2.php?dsg'");
        //     } elseif ($kq == 0) {
        //         echo "<script>alert('không thể cập nhật giường')</script>";
        //     }
        // } else {
            $kq = $p->layupdategiuong($id_guong, $sogiuong, $giathue, $id_khach, $tt, $id_phong);
            //layupdategiuong($ma, $sogiuong, $tien, $idkhach, $trangthai){
            if ($kq == 1) {
                echo "<script>alert('Cập nhật giường thành công')</script>";
                echo header("refresh:0; url='admin2.php?dsg'");
            } elseif ($kq == 0) {
                echo "<script>alert('Không thể insert lỗi 1')</script>";
            }
        // }
    }
    ?>
</body>

</html>