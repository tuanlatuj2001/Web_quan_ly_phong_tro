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
include_once("controller/chopdong.php");
$p = new controllerhopdong();
$id_hopdong = $_REQUEST["uhd"];
$table = $p->lay1hopdong($id_hopdong);
$row = mysqli_fetch_assoc($table);
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="ml-sm-auto col-lg-1"></div>

            <main role="main" class="ml-sm-auto col-lg-10">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2" style="padding-left: 100px;">CẬP NHẬT HỢP ĐỒNG</h1>
                </div>

                <form class="js-form-submit-data" action="#" method="POST">
                    <div class="form-group row">
                        <label for="tenhopdong" class="col-md-2 offset-md-2 col-form-label">Tên hợp đồng</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control " id="tenhopdong" name="tenhopdong" value="<?php echo $row["TenHopDong"] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-md-2 offset-md-2 col-form-label">Ngày lập</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control " id="date" name="date" value="<?php echo $row["NgayLap"] ?>">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="name_a" class="col-md-2 offset-md-2 col-form-label">Họ tên bên A</label>
                        <div class="col-md-6">
                            <select name="id_a">
                                <?php
                                include_once("controller/cquanli.php");
                                $ql = new controlql();
                                $table2 = $ql->layquanli();
                                if (mysqli_num_rows($table2)) {
                                    while ($row2 = mysqli_fetch_assoc($table2)) {
                                        if ($row2["Id_QuanLy"] == $row["Id_QuanLy"]) {
                                            echo "<option Selected value='" . $row2["Id_QuanLy"] . "'>" . $row2["HoVaTen"] . "</option>";
                                        } else {
                                            echo "<option value='" . $row2["Id_QuanLy"] . "'>" . $row2["HoVaTen"] . "</option>";
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="name_b" class="col-md-2 offset-md-2 col-form-label">Họ tên bên B</label>
                        <div class="col-md-6">
                            <select name="id_b">
                                <?php
                                include_once("controller/ckhachhang.php");
                                $comp = new controlkhachhang();
                                $table1 = $comp->laykhachhang1();
                                if (mysqli_num_rows($table1)) {
                                    while ($row1 = mysqli_fetch_assoc($table1)) {
                                        if ($row1["Id_KhachThuePhong"] == $row["Id_KhachThuePhong"]) {
                                            echo "<option Selected value ='" . $row1["Id_KhachThuePhong"] . "'>" . $row1["HoTen"] . "</option>";
                                        } else {
                                            echo "<option value='" . $row1["Id_KhachThuePhong"] . "'>" . $row1["HoTen"] . "</option>";
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="coc" class="col-md-2 offset-md-2 col-form-label">Tiền cọc</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="coc" name="coc" value="<?php echo $row["Tiencoc"] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="thoihan" class="col-md-2 offset-md-2 col-form-label">Thời hạn</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="thoihan" name="thoihan" value="<?php echo $row["ThoiHan"] ?>">
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
        $ten = $_REQUEST["tenhopdong"];
        $ngay = $_REQUEST["date"];
       
        $maa = $_REQUEST["id_a"];
        $tablelaymaquanly = $ql->lay1quanli($maa);
        if (mysqli_num_rows($tablelaymaquanly)) {
            while ($row = mysqli_fetch_assoc($tablelaymaquanly)) {
                $tena = $row["HoVaTen"];
            }
        } 
        // else {
        //     echo "<script>alert('lõi ')</script>";
        // }

        $mab = $_REQUEST["id_b"];
        $tablelaykhach = $comp->laykhachhang($mab);
        if (mysqli_num_rows($tablelaykhach)) {
            while ($row = mysqli_fetch_assoc($tablelaykhach)) {
                $tenb =  $row["HoTen"];
            }}
        // } else {
        //     echo "<script>alert('lõi ')</script>";
        // }

        $tien = $_REQUEST["coc"];
        $tg = $_REQUEST["thoihan"];
        // echo "<script>alert('$id_hopdong ')</script>";
        // echo "<script>alert('$tenb ')</script>";
        // echo "<script>alert('$maa ')</script>";
        // echo "<script>alert('$mab ')</script>";

        $kq = $p->layupdatethemhopdong($id_hopdong,  $ten, $ngay, $tena, $tenb, $maa, $mab, $tien, $tg);
        if ($kq == 1) {
            echo "<script>alert('cập nhật dữ liệu thành công')</script>";
            echo header("refresh:0; url='admin2.php?xhd'");
        } elseif ($kq == 0) {
            echo "<script>alert('Không thể cập nhật')</script>";
        }
    }
    ?>
</body>

</html>