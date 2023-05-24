<?php
// Start the session
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
    <title>Đăng nhập</title>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="../img/logo.png" alt="" style="height: 70px;">
        </div>
        <div class="text-hello">
            Xin Chào bạn đã đến ..........
        </div>
        
    </div>
    <nav class="navbar navbar-expand-lg navbar-light " id="nav1">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="../html/index.html" id="navbarDropdown">
                        Trang Chủ
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown">
                        Giới Thiệu
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown">
                        Bài Viết
                    </a>
            </ul>
        </div>
    </nav>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2" ></div>
            <div class="col-8 " style="background-color:white;">
                <section class="section1 section-access">
                    <div class="section-header">
                        <h1 class="section-title-big">Đăng nhập</h1>
                    </div>
                    <div class="section-content">
                        <form class="login-form " method="POST">
                            <div class="form-group-User">
                                <label for="inputUeserLogin">Tên đăng nhập</label>
                                <input type="text" class="form-control" id="inputUeserLogin" required=""
                                    placeholder="" name="loginname">
                            </div>
                            <div class="form-group form-group-password">
                                <label for="password">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" required="" placeholder="" name="password">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="nut" class="btn2 btn-submit" id="nut"  value="đăng nhập">Đăng nhập</button>
                            </div>
                            <div class="form-group clearfix">
                                <a href="#">Bạn quên mật khẩu?</a>
                                <a style="float: right;" href="#">Tạo tài khoản mới</a>
                            </div>
                                <input type="hidden" name="redirect" value="#">
                                <?php 
                                    echo "<meta charset='utf-8'>";
                                    if(isset($_REQUEST["nut"])){
                                        $email=$_REQUEST["loginname"];
                                        $mk=$_REQUEST["password"];
                                        include_once("../controller/ctaikhoan.php");
                                        $p = new controlTaiKhoan();
                                        $table = $p -> laytaikhoan();
                                            if($table){
                                                if(mysqli_num_rows($table)>0){
                                                    while($row=mysqli_fetch_assoc($table)){
                                                        if($email==$row["UserName"] && $mk==$row["Password"]){
                                                            $_SESSION["login"]="123";
                                                            $_SESSION["manguoidung"]=$row["Id_TaiKhoan"];
                                                            // echo "Đăng nhập thành công!!!"."<br>";
                                                            print_r($_SESSION["manguoidung"]);
                                                            if($row["Id_Role"]==2){
                                                                echo header("refresh:1; url='../admin2.php'");
                                                            }elseif($row["Id_Role"]==1){
                                                                echo header("refresh:1; url='../customer.php'");
                                                            }
                                                            //echo header("refresh:1; url='admin.php?tk'");
                                                        }
                                                }
                                            }
                                        }
                                        
                                    }
                                ?>
                        </form>
                    </div>
                </section>

            </div>
            <div class="col-2 " ></div>
        </div>
    </div>
    <div class="comtact">
        <section class="section section-support">
            <div class="support-bg"></div>
            <div class="list-support clearfix">
                <div class="list-support-title">Liên hệ với chúng tôi nếu bạn cần hỗ trợ:</div>
                <div class="support-item">
                    <span class="support-item-title">Hỗ trợ thanh toán</span>
                    <a rel="nofollow" href="#">Điện thoại: 0917686101</a>
                    <a rel="nofollow" target="_blank" href="#">Zalo: 0917686101</a>
                </div>
                <div class="support-item">
                    <span class="support-item-title">Hỗ trợ đăng tin</span>
                    <a rel="nofollow" href="#">Điện thoại: 0902657123</a>
                    <a rel="nofollow" target="_blank" href="#">Zalo: 0902657123</a>
                </div>
                <div class="support-item">
                    <span class="support-item-title">Hotline 24/7</span>
                    <a rel="nofollow" href="#">Điện thoại: 0917686101</a>
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
                        <p style="line-height: 1.3;">KTX.com tự hào có lượng dữ liệu bài đăng lớn nhất trong lĩnh vực
                            cho
                            thuê ktx.</p>
                    </div>
                    <div class="footer-col"><span class="footer-col-title">Về KTX.COM</span>
                        <ul class="footer-menu">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a rel="nofollow" href="#">Giới thiệu</a></li>
                            <li><a rel="nofollow" href="#">Blog</a></li>
                            <li><a rel="nofollow" href="#">Quy chế hoạt động</a></li>
                            <li><a rel="nofollow" href="#">Quy định sử dụng</a></li>
                            <li><a rel="nofollow" href="#">Chính sách bảo mật</a></li>
                            <li><a rel="nofollow" href="#">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="footer-col"><span class="footer-col-title">Hỗ trợ khách hàng</span>
                        <ul class="footer-menu">
                            <li><a rel="nofollow" href="#">Câu hỏi thường gặp</a></li>
                            <li><a rel="nofollow" href="#">Hướng dẫn đăng tin</a></li>
                            <li><a rel="nofollow" href="#">Bảng giá dịch vụ</a></li>
                            <li><a rel="nofollow" href="#">Quy định đăng tin</a></li>
                            <li><a rel="nofollow" href="#">Giải quyết khiếu
                                    nại</a></li>
                        </ul>
                    </div>
                    <div class="footer-col"><span class="footer-col-title">Liên hệ với chúng tôi</span>
                        <div class="social-links"><a class="social-fb" rel="nofollow" target="_blank"
                                href="#"><i></i></a><a class="social-youtube" rel="nofollow" target="_blank"
                                href="#"><i></i></a><a class="social-zalo" rel="nofollow" target="_blank"
                                href="#"><i></i></a><a class="social-viber" rel="nofollow" target="_blank"
                                href="#"><i></i></a><a class="social-twitter" rel="nofollow" target="_blank"
                                href="#"><i></i></a></div><br><span class="footer-col-title">Phương thức thanh
                            toán</span>
                        <div class="clearfix">
                            <img src="../img/method-payment-icon.jpg" alt="" style="width: 350px;">
                        </div>
                    </div>
                </div>
                <div class="footer-company">
                    <p class="company_name"><strong>CÔNG TY TNHH </strong></p>
                    <p><strong>Tổng đài CSKH: 0917686101</strong></p>
                    <p>Copyright © 2015 - 2022 KTX123.com</p>
                    <p>Email: cskh.ktx123@gmail.com</p>
                    <p>Địa chỉ: LE-4.07, Toà nhà Lexington Residence, Số 78 Mai Chí Thọ, Phường An Phú, Quận 4, Tp. Hồ
                        Chí Minh
                    </p>
                    <p>Giấy phép đăng ký kinh doanh số 0313588502 do Sở kế hoạch và Đầu tư thành phố Hồ Chí Minh cấp
                        ngày 24 tháng
                        12 năm 2015.</p>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>