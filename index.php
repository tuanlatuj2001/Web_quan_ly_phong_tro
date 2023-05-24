<?php
session_start();
include_once("./controller/cTimKiem.php");
include_once("./controller/cbaiviet.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_REQUEST["timkiembaiviet"])) {
  $tukhoa = $_REQUEST["tukhoa"];
  
  if ($tukhoa != "") {
    $controllerTimkiem = new ControllerTimKiem();
    $table = $controllerTimkiem->getThongTinByTuKhoa($tukhoa);
  }
 

} else { 
  $p = new controllerbaiviet();
  $table = $p->laybaiviet();
}
?>
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
  <title>Trang chủ</title>
  <style>

  </style>
</head>

<body style="background-color: #f5f5f5">

  <div class="header">
    <div class="logo">
      <img src="../img/logo.png" alt="" style="height: 70px;">
    </div>
    <div class="text-hello" id="TieuDeChinh">
      KÝ TÚC XÁ TƯ NHÂN
    </div>
    <div>
      <?php
      if (isset($_SESSION["login"])) {
        echo '<nav class="navbar navbar-expand-lg navbar-light ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" style="border: 1px solid #02a2ff ; background-color:#02a2ff ; border-radius: 5px; margin-left: 500px;">
                                Quản lý tài khoản
                            </a>
                            <div class="dropdown-content" style="margin-left: 500px;">
                                <a class="dropdown-item" href="./view/vThongTinCaNhan.php">Xem thông tin cá nhân</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./view/vUpdateThongTinCaNhan.php">Cập nhật thông tin cá nhân</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="">Xem hợp đồng</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="">Xem trạng thái thanh toán</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./view/dangxuat.php">Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>';
      } else {
        echo '<nav class="navbar navbar-expand-lg navbar-light ">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="./view/login.php" id="navbarDropdown" style="border: 1px solid #02a2ff ; background-color:#02a2ff ; border-radius: 5px; margin-left: 500px;">
                    Đăng nhập
                    </a>
                    
                </li>
            </ul>
        </div>
    </nav>';
      }
      ?>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light " id="nav1">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="./index.php" id="navbarDropdown">
            Trang Chủ
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="" id="navbarDropdown">
            Giới Thiệu
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
  <div class="container">
    <div class="timkiem">
      <div class="tk">
        <div class="tk1">
          <input type="text" placeholder="Tìm kiếm " id="top1" style="width: 150px; height: 30px;" disabled>
          <input type="text" placeholder="Nhập từ khóa tìm kiếm ..." id="top1"name="tukhoa" style="width: 500px; height: 30px;">
        </div>
        <div class="tk2">
          <select name="" id="" style="width: 218px; height: 27px;">
            <option value=""><i class="fas fa-search-location"></i>Toàn quốc</option>
            <option value="">Hồ Chí Minh</option>
            <option value="">Hà Nội</option>
          </select>
          <select name="" id="" style="width: 218px; height: 27px;">
            <option value="">Giá</option>
            <option value="">Dưới 1 triệu</option>
            <option value="">1 triệu đến 2 triệu</option>
          </select>
          <select name="" id="" style="width: 218px; height: 27px;">
            <option value="">Diện tích</option>
            <option value="">Dưới 1 triệu</optio>
            <option value="">1 triệu đến 2 triệu</option>
          </select>
          <a id="btn" href="#">Tìm kiếm</a>
        </div>
      </div>
    </div>
  </div>

  </div>
  <div class="container-fluid" style="background-color: #f5f5f5">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8 " style="background-color:white;">
        <div class="post">
          <?php
          if (isset($_REQUEST["ctsp"])) {
            include("view/vchitietbaiviet.php");
          } else {
            include("./view/vdsbaivietchinh.php");
          }
          ?>
        </div>
      </div>
      <div class="col-2 "></div>
    </div>
  </div>
  <div class="comtact" style="background-color: white">
    <section class="section section-support">
      <div class="support-bg"></div>
      <div class="list-support clearfix">
        <div class="list-support-title">Liên hệ với chúng tôi nếu bạn cần hỗ trợ:</div>
        <div class="support-item">
          <span class="support-item-title">Hỗ trợ thanh toán</span>
          <a rel="nofollow" href="tel:0917686101">Điện thoại: 0917686101</a>
          <a rel="nofollow" target="_blank" href="#">Zalo: 0917686101</a>
        </div>
        <div class="support-item">
          <span class="support-item-title">Hỗ trợ khách hàng</span>
          <a rel="nofollow" href="tel:0902657123">Điện thoại: 0902657123</a>
          <a rel="nofollow" target="_blank" href="#">Zalo: 0902657123</a>
        </div>
        <div class="support-item">
          <span class="support-item-title">Hotline 24/7</span>
          <a rel="nofollow" href="tel:0917686101">Điện thoại: 0917686101</a>
          <a rel="nofollow" target="_blank" href="#">Zalo: 0917686101</a>
        </div>

      </div>
    </section>
  </div>
  <footer id="page-footer">
    <div class="page-footer-content">
      <div class="inner">
        <div class="bottom-links clearfix">
        </div>
        <div class="footer-row clearfix">
          <div class="footer-col first"><a class="footer-logo" href="#">Thuê phòng trọ</a>
            <p style="line-height: 1.3;">KTX.vn tự hào có lượng dữ liệu bài đăng lớn nhất trong lĩnh vực cho
              thuê ktx.</p>
          </div>
          <div class="footer-col"><span class="footer-col-title">Về KTX.VN</span>
            <ul class="footer-menu">
              <li><a href="#">Trang chủ</a></li>
              <li><a rel="nofollow" href="./html/gioithieu.html">Giới thiệu</a></li>
              <li><a rel="nofollow" href="./html/quychehoatdong.html">Quy chế hoạt động</a></li>
              <li><a rel="nofollow" href="./html/quydinhsudung.html">Quy định sử dụng</a></li>
              <li><a rel="nofollow" href="./html/chinhsachbaomat.html">Chính sách bảo mật</a></li>
              <li><a rel="nofollow" href="./html/lienhe.html">Liên hệ</a></li>
            </ul>
          </div>
          <div class="footer-col"><span class="footer-col-title">Hỗ trợ khách hàng</span>
            <ul class="footer-menu">
              <li><a rel="nofollow" href="./html/Cauhoithuonggap.html">Câu hỏi thường gặp</a></li>
              <li><a rel="nofollow" href="./html/giaiquyetkhieunai.html">Giải quyết khiếu
                  nại</a></li>
            </ul>
          </div>
          <div class="footer-col"><span class="footer-col-title">Liên hệ với chúng tôi</span>
            <div class="social-links"><a class="social-fb" rel="nofollow" target="_blank" href="#"><i></i></a><a class="social-youtube" rel="nofollow" target="_blank" href="#"><i></i></a><a class="social-zalo" rel="nofollow" target="_blank" href="#"><i></i></a><a class="social-viber" rel="nofollow" target="_blank" href="#"><i></i></a><a class="social-twitter" rel="nofollow" target="_blank" href="#"><i></i></a></div><br><span class="footer-col-title">Phương thức thanh toán</span>
            <div class="clearfix">
              <img src="../img/method-payment-icon.jpg" alt="" style="width: 350px;">
            </div>
          </div>
        </div>
        <div class="footer-company">
          <p class="company_name"><strong>CÔNG TY TNHH </strong></p>
          <p><strong>Tổng đài CSKH: 0917686101</strong></p>
          <p>Copyright © 2015 - 2022 KTX.vn</p>
          <p>Email: cskh.ktx123@gmail.com</p>
          <p>Địa chỉ: LE-4.07, Toà nhà Lexington Residence, Số 78 Mai Chí Thọ, Phường An Phú, Quận 4, Tp. Hồ Chí Minh
          </p>
          <p>Giấy phép đăng ký kinh doanh số 0313588502 do Sở kế hoạch và Đầu tư thành phố Hồ Chí Minh cấp ngày 24 tháng
            12 năm 2015.</p>
        </div>
      </div>
    </div>
  </footer>


</body>

</html>