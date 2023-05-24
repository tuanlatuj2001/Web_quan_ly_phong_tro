<?php
include_once("Controller/cquanli.php");
session_start();
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

$controllerThongTinCaNhan = new controlql();
$idtaikhoan =  $_SESSION["manguoidung"];
// $idtaikhoan = 1;

$thongtincanhan = $controllerThongTinCaNhan->getThongTinQLByIdTaiKhoan($idtaikhoan);

if ($thongtincanhan) {

    if (mysqli_num_rows($thongtincanhan) > 0) {
        while ($row = mysqli_fetch_assoc($thongtincanhan)) {
            $Id_QuanLy  = $row["Id_QuanLy"];
            $HoTen = $row["HoVaTen"];
            $AnhQL = $row["AnhQL"];
            $GioiTinh = $row["GioiTInh"];
            $NgaySinh = $row["NgaySinh"];
            $DiaChi = $row["DiaChi"];
            $QueQuan  = $row["QueQuan"];
            $CCCD = $row["CCCD/CMND"];
            $Email = $row["Email"];
            $SĐT   = $row["SĐT"];
            $Id_TaiKhoan  = $row["Id_TaiKhoan"];
            
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
                    <h1 class="h2" style="padding-left: 100px;">Thông tin cá nhân</h1>
                </div>

                <form class="js-form-submit-data" action="#" method="GET">
                    <div class="form-group row mt-5">
                        <label for="user_avatar" class="col-md-2 offset-md-2 col-form-label" style="padding-top: 0;">Ảnh đại diện</label>
                        <div class="col-md-6">
                            <div class="user-avatar-upload-wrapper js-one-image-wrapper ">
                                <div class="user-avatar-inner js-one-image-inner">

                                
                                    <div class="user-avatar-preview js-one-image-preview" style="background: url(./img/<?php if (isset($AnhQL)) echo  $AnhQL  ?>) center no-repeat; background-size: cover;"></div>
                                </div>
                                <div class="user-avatar-upload clearfix">
                                    <!-- <input type="file" class="btn-add-avatar js-change-image-file" multiple=""> -->
                                    <!-- <input type="hidden" name="user_avatar" class="js-input-value" value=""> -->
                                </div>
                            </div> <!-- end one_featured_image_wrapper -->
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="user_id" class="col-md-2 offset-md-2 col-form-label">Họ và tên</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control " id="user_name" readonly name="HoTen" value="<?php if (isset($HoTen)) echo $HoTen ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_phone" class="col-md-2 offset-md-2 col-form-label">Số điện thoại</label>
                        <div class="col-md-6">
                            <input type="phone" class="form-control " id="user_phone" readonly name="SDT" value="<?php if (isset($SĐT)) echo $SĐT ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_zalo" class="col-md-2 offset-md-2 col-form-label">Ngày sinh</label>
                        <div class="col-md-6">
                            <input type="phone" class="form-control" id="user_date" readonly name="NgaySinh" value="<?php if (isset($NgaySinh)) echo $NgaySinh ?>">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="user_name" class="col-md-2 offset-md-2 col-form-label">Email</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="user_email" readonly name="Email" value="<?php if (isset($Email)) echo $Email ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_email" class="col-md-2 offset-md-2 col-form-label">CCCD/CMNN</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="user_cccd" readonly name="CCCD" value="<?php if (isset($CCCD)) echo $CCCD ?>" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_zalo" class="col-md-2 offset-md-2 col-form-label">Địa chỉ</label>
                        <div class="col-md-6">
                            <input type="phone" class="form-control" id="user_date" readonly name="DiaChi" value="<?php if (isset($DiaChi)) echo $DiaChi ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_facebook" class="col-md-2 offset-md-2 col-form-label">Quê quán</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="user_que" readonly name="QueQuan" value="<?php if (isset($QueQuan)) echo $QueQuan ?>">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="user_password" class="col-md-2 offset-md-2 col-form-label" style="padding-top: 0;">Mật khẩu</label>
                        <div class="col-md-6">
                            <a class="" href="#">Đổi mật khẩu</a>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="user_email" class="col-md-2 col-form-label"></label>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary btn-lg mb-2 btn-block"><a href="admin2.php?updatettcnql" style="text-decoration: none;  font-weight: 700;color: white">CẬP NHẬT THÔNG TIN</a></button>
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="116526">
                </form>
                <?php
                print_r($_SESSION["manguoidung"]);
                echo'a';
                print_r($AnhQL);
                ?>
                <br><br>

            </main>
            <div class="ml-sm-auto col-lg-1"></div>
        </div>
    </div>
</body>

</html>