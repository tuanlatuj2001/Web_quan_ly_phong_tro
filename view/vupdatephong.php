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
include_once("Controller/cphong.php");
$p = new controllerPhong();
$table = $p->lay1phong($_REQUEST["udp"]);
$row = mysqli_fetch_assoc($table);
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="ml-sm-auto col-lg-1"></div>

            <main role="main" class="ml-sm-auto col-lg-10">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2" style="padding-left: 100px;">CẬP NHẬP PHÒNG</h1>
                </div>

                <form class="js-form-submit-data" action="#" method="POST">
                    <div class="form-group row">
                        <label for="sophong" class="col-md-2 offset-md-2 col-form-label">Số phòng</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control " id="sophong" name="sophong" value="<?php echo $row["SoPhong"] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sogiuong" class="col-md-2 offset-md-2 col-form-label">Số lượng giường</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control " id="sogiuong" name="sogiuong" value="<?php echo $row["SoGiuong"] ?>">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="dientich" class="col-md-2 offset-md-2 col-form-label">Diện tích phòng</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="dientich" name="dientich" value="<?php echo $row["DienTichPhong"] ?>">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="mota" class="col-md-2 offset-md-2 col-form-label">Mô tả phòng</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="mota" name="mota" value="<?php echo $row["MoTa"] ?>">
                        </div>
                    </div>
                   
                    <div class="form-group row mt-5">
                        <label for="id_ql" class="col-md-2 offset-md-2 col-form-label">Địa chỉ</label>
                        <div class="col-md-6">
                            <select name="id_nha">
                                <?php
                                include_once("Controller/cnha.php");
                                $comp = new controlnha();
                                $table1 = $comp->laynha();
                                if (mysqli_num_rows($table1)) {
                                    while ($row1 = mysqli_fetch_assoc($table1)) {
                                        if ($row1["Id_Nha"] == $row["Id_Nha"]) {
                                            echo "<option Selected value='" . $row1["Id_Nha"] . "'>" . $row1["DiaChi"] . "</option>";
                                        } else {
                                            echo "<option value='" . $row1["Id_Nha"] . "'>" . $row1["DiaChi"] . "</option>";
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="user_email" class="col-md-2 col-form-label"></label>
                        <div class="col-md-8">
                            <button type="submit" name="btnsubmit" class="btn btn-primary btn-lg mb-2 btn-block">Cập nhật phòng</button>
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
        $ma = $_REQUEST["udp"];
        $sophong = $_REQUEST["sophong"];
        $sogiuong = $_REQUEST["sogiuong"];
        $dientich = $_REQUEST["dientich"];
        $mota = $_REQUEST["mota"];
        $id_nha = $_REQUEST["id_nha"];
        $kq = $p->layupdatephong($ma, $sophong, $sogiuong, $dientich, $mota, $id_nha);
        if ($kq == 1) {
            echo "<script>alert('cập nhật dữ liệu thành công')</script>";
            echo header("refresh:0; url='admin2.php?dsp'");
        } elseif ($kq == 0) {
            echo "<script>alert('Không thể cập nhật')</script>";
        }
    }
    ?>
</body>

</html>