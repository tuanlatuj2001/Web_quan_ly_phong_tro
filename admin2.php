<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./css/css.css">
  <link rel="stylesheet" type="text/css" href="./css/admin.css">
  <title>Trang chủ</title>
</head>

<body style="background-color:#17475a;">
  <div class="header" style="margin: 10px; background-color: #015f95;">
    <div class="logo">
      <img src="./img/admin.png" alt="" style="height: 70px;">
    </div>
  <div class="dx">
    <a href="#" >Đăng xuất</a>
  </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light " id="nav1" style="margin: 10px;">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="admin2.php" id="navbarDropdown">
            Trang Chủ
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="" id="navbarDropdown">
            Giới Thiệu
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="./view/dangxuat.php" id="navbarDropdown">
          Đăng xuất
          </a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown">
            Bài Viết
          </a>
        </li> -->
      </ul>
    </div>
  </nav>
  <div class="container-fluid" id="container2" >
    <div class="row">
      <div class="col-3" style="  height:700px">
        <div id="mainnav">
          <ul>
            <li class="thefirst"><a href="#">Quản lý tài khoản</a>
              <ul class="sub-menu">
                <li><a href="admin2.php?dstk">Danh sách tài khoản</a></li>
                <li><a href="admin2.php?ttk">Tạo tài khoản</a>
                  <!-- <ul class="sub-menu2">
            <li><a href="#">item 1</a></li>
            <li><a href="#">item 2</a></li>
            <li><a href="#">item 3</a></li>
          </ul> -->
                </li>
              </ul>
            </li>
            <li><a href="#">Quản lý phòng</a>
              <ul class="sub-menu">
                <li><a href="admin2.php?dsp">Danh sách phòng</a></li>
                <li><a href="admin2.php?tp">Thêm phòng</a>
                </li>
              </ul>
            </li>
            <li><a href="#">Quản lý giường</a>
              <ul class="sub-menu">
                <li><a href="admin2.php?dsg">Danh sách Giường</a>
                </li>
              </ul>
            </li>
            <li><a href="#">Quản lý hợp đồng</a>
              <ul class="sub-menu">
                <li><a href="admin2.php?xhd">Danh sách hợp đồng</a></li>
                <li><a href="admin2.php?thd">Tạo hợp đồng</a>
                </li>
              </ul>
            </li>
            <li><a href="#">Quản lý bài viết</a>
              <ul class="sub-menu">
                <li><a href="admin2.php?dsbv">Danh sách bài viết</a></li>
                <li><a href="admin2.php?tbv">Tạo bài viết</a>
                </li>
              </ul>
            </li>
            <li><a href="#">Quản lý nhà</a>
              <ul class="sub-menu">
                <li><a href="admin2.php?dsn">Danh sách nhà</a></li>
                <li><a href="admin2.php?addnha">Thêm nhà</a>
                </li>
              </ul>
            </li>
            <li><a href="#">Quản lý thanh toán</a>
              <ul class="sub-menu">
                <li><a href="admin2.php?dstt">Danh sách thanh toán</a></li>
                <li><a href="admin2.php?ttt">Tạo hóa đơn</a>
                </li>
              </ul>
            </li>
            <li><a href="#">Quản lý khách hàng</a>
              <ul class="sub-menu">
                <li><a href="admin2.php?dskh">Danh sách khách hàng</a></li>
                <li><a href="admin2.php?tkh">Tạo khách hàng</a>
                </li>
              </ul>
            </li>
            <li><a href="admin2.php?ttcn">Xem thông tin cá nhân</a></li>
          </ul>
        </div>
      </div>
      <div class="col-8" style="margin-left: 50px;">
        <div class="box" style="height:auto;">
          <div >
            <h2 class="Dashbord">Dashbord</h2>
            <div>
            <?php
    if (isset($_REQUEST["dstk"])) {
      include("View/vDanhsachtk.php");
    }elseif (isset($_REQUEST["khoataikhoan"])) {
      include("View/vkhoataikhoan.php");
    }elseif (isset($_REQUEST["ttk"])) {
      include("view/vTaoTaiKhoan.php");
    }elseif (isset($_REQUEST["dsn"])) {
      include("View/vDanhsachnha.php");
    }elseif (isset($_REQUEST["dsg"])) {
      include("View/vdsgiuong.php");
    }elseif (isset($_REQUEST["xg"])) {
      include("View/vkhoagiuong.php");
    }elseif (isset($_REQUEST["dsp"])) {
      include("View/vdsphong.php");
    }elseif (isset($_REQUEST["addnha"])) {
      include("View/vThemnha.php");
    }elseif (isset($_REQUEST["deletenha"])) {
      include("View/vDeletenha.php");
    }elseif (isset($_REQUEST["tbv"])) {
      include("View/taobaiviet.php");
    }elseif (isset($_REQUEST["thd"])) {
      include("View/taohopdong.php");
    }elseif (isset($_REQUEST["xhd"])) {
      include("View/vdshopdong.php");
    }elseif (isset($_REQUEST["uhd"])) {
      include("View/vupdatehopdong.php");
    }elseif (isset($_REQUEST["udp"])) {
      include("View/vupdatephong.php");
    }elseif (isset($_REQUEST["udg"])) {
      include("View/vupdategiuong1.php");
    }elseif (isset($_REQUEST["dsbv"])) {
      include("View/vdsbaiviet.php");
    }elseif (isset($_REQUEST["udbv"])) {
      include("View/vUpdateThongTinBaiViet.php");
    }elseif (isset($_REQUEST["dstt"])) {
      include("View/vdsthanhtoan.php");
    }elseif (isset($_REQUEST["ttt"])) {
      include("View/vtaothanhtoan.php");
    }elseif (isset($_REQUEST["ttcn"])) {
      include("View/vthcn_ql.php");
    }elseif (isset($_REQUEST["updatettcnql"])) {
      include("View/vupdatethcn_ql.php");
    }elseif (isset($_REQUEST["updatehoadon"])) {
      include("View/vupdatethanhtoan.php");
    }elseif (isset($_REQUEST["deletephong"])) {
      include("View/vDeletephong.php");
    }elseif (isset($_REQUEST["dskh"])) {
      include("View/vdskhachhang.php");
    }elseif (isset($_REQUEST["udkh"])) {
      include("View/vupdatekhachhang.php");
    }elseif (isset($_REQUEST["tkh"])) {
      include("View/vtaokhachhang.php");
    }elseif (isset($_REQUEST["cthd"])) {
      include("View/vXemhopdong.php");
    }elseif (isset($_REQUEST["tp"])) {
      include("View/vXemhopdong.php");
    }
    ?>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <div>

  </div>
  </div>
</body>

</html>