<?php
include_once("controller/cphong.php");
include_once("Controller/cquanli.php");
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

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="ml-sm-auto col-lg-1"></div>

            <main role="main" class="ml-sm-auto col-lg-10">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2" style="padding-left: 100px;">Tạo bài viết</h1>
                </div>

                <form class="js-form-submit-data" action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group row mt-5">
                        <label for="tieude" class="col-md-2 offset-md-2 col-form-label">Tiêu đề</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control " name="tieude" id="tieude" value="">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="id_ql" class="col-md-2 offset-md-2 col-form-label">Tên người tạo</label>
                        <div class="col-md-6">
                            <select name="id_ql">
                                <?php
                                $comp = new controlql();
                                $table = $comp->layquanli();
                                if (mysqli_num_rows($table)) {
                                    while ($row = mysqli_fetch_assoc($table)) {
                                        echo "<option value='" . $row["Id_QuanLy"] . "'>" . $row["HoVaTen"] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="sophong" class="col-md-2 offset-md-2 col-form-label">số phòng</label>
                        <div class="col-md-6">
                            <select name="sophong">
                                <?php
                                $controllerphong = new controlPhong();
                                $table = $controllerphong->laygiuong();
                                if (mysqli_num_rows($table)) {
                                    while ($row = mysqli_fetch_assoc($table)) {
                                        echo "<option value='" . $row["Id_Phong"] . "'>" . $row["SoPhong"] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="anh" class="col-md-2 offset-md-2 col-form-label">Chọn ảnh chính</label>
                        <div class="col-md-6">
                            <input type="file" class="form-control " id="anh" name="ffile" value="">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="ngay" class="col-md-2 offset-md-2 col-form-label">Ngày lập</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control " id="ngay" name="ngay" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mota" class="col-md-2 offset-md-2 col-form-label">Mô tả</label>
                        <div class="col-md-6">
                            <textarea name="mota" class="form-control " id="mota" cols="79" rows="5"></textarea><br>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <button type="submit" name="btnsubmit" id="btn1" style=" height: 50px; width: 100px; float: left; margin-left: 500px;">Tạo</button>
                        <button type="submit" id="btn" style=" width: 100px; margin-left: 100px; ">Hủy</button>
                    </div>
                    <input type="hidden" name="user_id" value="116526">
                </form>


                <br><br>

            </main>
            <div class="ml-sm-auto col-lg-1"></div>
        </div>
    </div>
    <?php
    include("controller/cbaiviet.php");
    if (isset($_REQUEST["btnsubmit"])) {
        $tieude = $_REQUEST["tieude"];
        $id_ql = $_REQUEST["id_ql"];
        $id_p = $_REQUEST["sophong"];
        $nd = $_REQUEST["mota"];
        $ngay = $_REQUEST["ngay"];
     
        $file = $_FILES["ffile"]["tmp_name"];
        $loaianh = $_FILES["ffile"]["type"];
        $anh = $_FILES["ffile"]["name"];
        $sizeanh = $_FILES["ffile"]["size"];

        $p = new controllerbaiviet();
        $kq = $p->addPro($tieude, $id_ql, $id_p, $nd, $ngay, $file, $loaianh, $anh, $sizeanh);
        if ($kq == 1) {
            echo "<script>alert('Thêm dữ liệu thành công')</script>";
            echo header ("refresh:0; url='admin2.php?dsbv'");
        } elseif ($kq == 0) {
            echo "<script>alert('Không thể insert')</script>";
        } elseif ($kq == -1) {
            echo "<script>alert('Không thể upload ảnh')</script>";
        } elseif ($kq == -2) {
            echo "<script>alert('Size ảnh phải bé hơn 2MB')</script>";
        } elseif ($kq == -3) {
            echo "<script>alert('Không đúng định dạng')</script>";
        } else {
            echo "<script>alert('Không xác định được lỗi')</script>";
        }
    }
    ?>
</body>

</html>