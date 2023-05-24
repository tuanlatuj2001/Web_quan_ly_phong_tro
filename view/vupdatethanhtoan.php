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
include_once("Controller/cthanhtoan.php");
$p = new controlthanhtoan();
$table = $p->lay1thanhtoan($_REQUEST["updatehoadon"]);
if ($table) {

    if (mysqli_num_rows($table) > 0) {
        while ($row = mysqli_fetch_assoc($table)) {
            $Id_HoaDon  = $row["Id_HoaDon"];
            $Gia = $row["Gia"];
            $NgayLap = $row["NgayLap"];
            $TrangThaiTT = $row["TrangThaiTT"];
            $Id_HopDong  = $row["Id_HopDong"];
            $ThangThue = $row["ThangThue"];
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
                    <h1 class="h2" style="padding-left: 100px;">CẬP NHẬP THANH TOÁN</h1>
                </div>

                <form class="js-form-submit-data" action="#" method="POST">
                    <div class="form-group row mt-5">
                        <label for="id_ql" class="col-md-2 offset-md-2 col-form-label">Tên khách thuê phòng</label>
                        <div class="col-md-6">
                            <select name="id_hopdong">
                                <?php
                                if (isset($Id_HopDong)) {
                                    include_once("Controller/chopdong.php");
                                    $p1 = new controllerhopdong();
                                    $table1 = $p1->layhopdong();
                                    if (mysqli_num_rows($table)) {
                                        while ($row1 = mysqli_fetch_assoc($table1)) {
                                            if ($row1["Id_HopDong"] == $Id_HopDong) {
                                                echo "<option Selected value='" . $row1["Id_HopDong"] . "'>" . $row1["HoTenBenB"] . "-" . $row1["SoGiuong"] . "</option>";
                                            } else {
                                                echo "<option value='" . $row1["Id_HopDong"] . "'>" . $row1["HoTenBenB"] . "-" . $row1["SoGiuong"] . "</option>";
                                            }
                                        }
                                    }
                                }

                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Gia" class="col-md-2 offset-md-2 col-form-label">Số tiền thanh toán</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control " id="Gia" name="Gia" value="<?php if (isset($Gia)) echo $Gia ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="NgayLap" class="col-md-2 offset-md-2 col-form-label">Ngày thanh toán</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control " id="NgayLap" name="NgayLap" value="<?php if (isset($NgayLap)) echo $NgayLap ?>">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="ThangThue" class="col-md-2 offset-md-2 col-form-label">Tháng thanh toán</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="ThangThue" name="ThangThue" value="<?php if (isset($ThangThue)) echo $ThangThue ?>">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="mota" class="col-md-2 offset-md-2 col-form-label">Trạng thái thanh toán</label>
                        <div class="col-md-6">
                            <?php
                            if (isset($TrangThaiTT)) {
                                if ($TrangThaiTT == 1) {
                                    echo "Đã thanh toán<input type='radio' name='tt' value='1' checked />";
                                    echo "Chưa thanh toán<input type='radio' name='tt' value='0' />";
                                } else {
                                    echo "Đã thanh toán<input type='radio' name='tt' value='1' />";
                                    echo "Chưa thanh toán<input type='radio' name='tt' value='0' checked />";
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="user_email" class="col-md-2 col-form-label"></label>
                        <div class="col-md-8">
                            <button type="submit" name="btnsubmit" class="btn btn-primary btn-lg mb-2 btn-block">Cập nhật thanh toán</button>
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
        $ma1 = $_REQUEST["updatehoadon"];
        $Gia1 = $_REQUEST["Gia"];
        $NgayLap1 = $_REQUEST["NgayLap"];
        $ThangThue1 = $_REQUEST["ThangThue"];
        $tt1 = $_REQUEST["tt"];
        $id_hopdong1 = $_REQUEST["id_hopdong"];
        $kq = $p->layupdatethanhtoan($ma1, $Gia1, $NgayLap1, $ThangThue1, $tt1, $id_hopdong1);
        if ($kq == 1) {
            echo "<script>alert('cập nhật dữ liệu thành công')</script>";
            echo header("refresh:0; url='admin2.php?dstt'");
        } elseif ($kq == 0) {
            echo "<script>alert('Không thể cập nhật')</script>";
        }
    }
    ?>
</body>

</html>