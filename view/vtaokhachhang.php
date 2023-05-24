<?php
ob_start();
session_start();
include_once("Controller/ckhachhang.php");
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
    <link rel="stylesheet" type="text/css" href="../css/XemThongTinCaNhan.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="ml-sm-auto col-lg-1"></div>

            <main role="main" class="ml-sm-auto col-lg-10">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2" style="padding-left: 100px;">Tạo khách hàng</h1>
                </div>

                <form class="js-form-submit-data" action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group row mt-5">
                        <label for="user_avatar" class="col-md-2 offset-md-2 col-form-label" style="padding-top: 0;">Ảnh đại diện</label>
                        <div class="col-md-6">
                            <div class="user-avatar-upload-wrapper js-one-image-wrapper ">
                                <div class="user-avatar-upload clearfix">
                                    <input type="file" name="file" class="btn-add-avatar js-change-image-file">
                                    <!-- <input type="hidden" name="user_avatar" class="js-input-value" value=""> -->
                                    <!-- <input type="file" name="file" required id=""> -->
                                </div>
                            </div> <!-- end one_featured_image_wrapper -->
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="user_id" class="col-md-2 offset-md-2 col-form-label">Họ và tên</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control " id="user_name" name="HoTen" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_phone" class="col-md-2 offset-md-2 col-form-label">Giới Tính</label>
                        <div class="col-md-6">
                            Nữ<input type='radio' name='GioiTinh' value='0' />  
                            Nam<input type='radio' name='GioiTinh' value='1' /> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_phone" class="col-md-2 offset-md-2 col-form-label">Số điện thoại</label>
                        <div class="col-md-6">
                            <input type="phone" class="form-control " id="user_phone" name="SDT" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_zalo" class="col-md-2 offset-md-2 col-form-label">Ngày sinh</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="user_date" name="NgaySinh" value="">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="user_name" class="col-md-2 offset-md-2 col-form-label">Email</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="user_email" name="Email" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_email" class="col-md-2 offset-md-2 col-form-label">CCCD/CMNN</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="user_cccd" name="CCCD" value="" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_zalo" class="col-md-2 offset-md-2 col-form-label">Địa chỉ</label>
                        <div class="col-md-6">
                            <input type="phone" class="form-control" id="user_date" name="DiaChi" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_facebook" class="col-md-2 offset-md-2 col-form-label">Dân tộc</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="user_dantoc" name="DanToc" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_facebook" class="col-md-2 offset-md-2 col-form-label">Quê quán</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="user_que" name="QueQuan" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_facebook" class="col-md-2 offset-md-2 col-form-label">Chọn tài khoản</label>
                        <div class="col-md-6">
                        <select name="Id_TaiKhoan">
                            <?php 
                                include_once("Controller/ctaikhoan1.php");
                                $p = new controltaikhoan();
                                $table = $p -> laytaikhoan();
                            if(mysqli_num_rows($table)>0){
                                while($row1 = mysqli_fetch_assoc($table)){
                                    echo "<option value='".$row1["Id_TaiKhoan"]."'>".$row1["UserName"]."</option>";
                                }
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="user_email" class="col-md-2 col-form-label"></label>
                        <div class="col-md-8">
                            <input type="submit" value="TẠO KHÁCH HÀNG" class="btn btn-primary btn-lg mb-2 btn-block" name="update">

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

if (isset($_REQUEST["update"])) {
    $HoTen = $_REQUEST["HoTen"];
    $GioiTinh = $_REQUEST["GioiTinh"];
    $NgaySinh = $_REQUEST["NgaySinh"];
    $DiaChi = $_REQUEST["DiaChi"];
    $QueQuan  = $_REQUEST["QueQuan"];
    $CCCD = $_REQUEST["CCCD"];
    $Email = $_REQUEST["Email"];
    $ID_TaiKhoan = $_REQUEST["Id_TaiKhoan"];
    $SDT   = $_REQUEST["SDT"];
    $DanToc   = $_REQUEST["DanToc"];
    $hinhanh = $_FILES["file"]["tmp_name"];
    $tenanh = $_FILES["file"]["name"];
    $loaianh = $_FILES["file"]["type"];
    $kichcoanh = $_FILES["file"]["size"];

    $controllerThongTinCaNhan = new controlkhachhang();
        $updatethongtincanhan = $controllerThongTinCaNhan->
        laythemkhachhang($hinhanh, $tenanh, $loaianh, $kichcoanh, $HoTen,  $GioiTinh, $NgaySinh, $DiaChi, $QueQuan, $CCCD, $Email, $SDT, $DanToc,$ID_TaiKhoan);

        switch ($updatethongtincanhan) {
            case 1:
                echo header("refresh:0; url='admin2.php?dskh'");
                echo "<script>alert('Tạo dữ liệu thành công')</script>";
                break;
            case 0:
                echo "<script>alert('Tạo không thành công')</script>";
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
    }

?>

</html>