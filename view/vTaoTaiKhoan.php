<?php
include_once("controller/ctaikhoan.php");
include_once("controller/crole.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="ml-sm-auto col-lg-1"></div>

            <main role="main" class="ml-sm-auto col-lg-10">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2" style="padding-left: 100px;">Tạo Tài Khoản</h1>
                </div>
                <form class="js-form-submit-data" action="#" method="POST">
                    <div class="form-group row">
                        <label for="tendangnhap" class="col-md-2 offset-md-2 col-form-label">Tên đăng nhập</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control " id="tendangnhap" name="tendangnhap" required value="">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="matkhau" class="col-md-2 offset-md-2 col-form-label">Mật khẩu</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="matkhau" name="matkhau" required value="">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="nhaplaimatkhau" class="col-md-2 offset-md-2 col-form-label">Nhập lại mật khẩu</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="nhaplaimatkhau" required name="nhaplaimatkhau" value="">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="id_ql" class="col-md-2 offset-md-2 col-form-label">Role</label>
                        <div class="col-md-6">
                            <select name="id_role">
                                <?php
                                $controllerrole = new ControllerRole();
                                $tablerole = $controllerrole->getTatCaRole();
                                if (mysqli_num_rows($tablerole)) {
                                    while ($row = mysqli_fetch_assoc($tablerole)) {
                                        echo "<option value='" . $row["Id_Role"] . "'>" . $row["Pemission"] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="user_email" class="col-md-2 col-form-label"></label>
                        <div class="col-md-8">
                            <button type="submit" name="btnsubmit" class="btn btn-primary btn-lg mb-2 btn-block">Tạo hợp đồng</button>
                        </div>
                    </div>

                </form>


                <br><br>

            </main>

        </div>
    </div>




</body>

</html>

<?php
if (isset($_REQUEST["btnsubmit"])) {
    $tendangnhap = $_REQUEST["tendangnhap"];
    $matkhau = $_REQUEST["matkhau"];
    $nhaplaimatkhau = $_REQUEST["nhaplaimatkhau"];
    $id_role = $_REQUEST["id_role"];

    if ($matkhau != $nhaplaimatkhau) {
        echo "<script>alert('Nhập lại mật khẩu không đúng!')</script>";
    } else {
        $controllerTaiKhoan = new controlTaiKhoan();
        $kq = $controllerTaiKhoan->createtaikhoan($tendangnhap, $matkhau, $id_role);
        if ($kq == 1) {
            echo "<script>alert('Tạo tài khoản thành công')</script>";
            echo header ("refresh:0; url='admin2.php?dstk'");
        } elseif ($kq == 0) {
            echo "<script>alert('Không thể tạo tài khoản')</script>";
        }
    }
}
?>