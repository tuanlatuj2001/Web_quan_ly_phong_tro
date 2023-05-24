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
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2" style="padding-left: 100px;">TẠO THANH TOÁN</h1>
                </div>
                <form class="js-form-submit-data" action="#" method="POST">
                <div class="form-group row mt-5">
                        <label for="id_ql" class="col-md-2 offset-md-2 col-form-label" >Tên khách thuê phòng</label>
                        <div class="col-md-6">
                            <select name="Id_HoaDon">
                            <?php 
                                include_once("Controller/chopdong.php");
                                $p = new controlsp();
                                $table = $p -> layhopdong();
                            if(mysqli_num_rows($table)>0){
                                while($row1 = mysqli_fetch_assoc($table)){
                                    echo "<option value='".$row1["Id_HopDong"]."'>".$row1["HoTenBenB"]."-".$row1["SoGiuong"]."</option>";
                                }
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                <div class="form-group row">
                        <label for="tienthanhtoan" class="col-md-2 offset-md-2 col-form-label"  >Số tiền thanh toán</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control " id="tienthanhtoan" name="tienthanhtoan" value=""  >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-md-2 offset-md-2 col-form-label"  >Ngày lập</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control " id="date" name="date" value=""  >
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="ThangThue" class="col-md-2 offset-md-2 col-form-label">Tháng thanh toán</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="ThangThue" name="ThangThue" value="">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="thanhtoan" class="col-md-2 offset-md-2 col-form-label">Trạng thái thanh toán</label>
                        <div class="col-md-6">
                            Đã thanh toán<input type='radio' name='tt' value='Đã thanh toán' />  
                            Chưa thanh toán<input type='radio' name='tt' value='Chưa thanh toán' />  
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="user_email" class="col-md-2 col-form-label"></label>
                        <div class="col-md-8">
                            <button type="submit" name="btnsubmit" class="btn btn-primary btn-lg mb-2 btn-block">Tạo thanh toán</button>
                        </div>
                    </div>
                    
                </form>


                <br><br>

            </main>
            <div class="ml-sm-auto col-lg-1"></div>
        </div>
    </div>
    <?php 
    include("Controller/cthanhtoan.php");
	if(isset($_REQUEST["btnsubmit"])){
		$id_hopdong=$_REQUEST["Id_HoaDon"];
		$gia=$_REQUEST["tienthanhtoan"];
		$ngay=$_REQUEST["date"];
		$thangthue=$_REQUEST["ThangThue"];
		$trangthai=$_REQUEST["tt"];
		$p=new controlthanhtoan();
		$kq=$p->laythemthanhtoan($gia, $ngay, $trangthai, $id_hopdong, $thangthue);
		if($kq==1){
			echo "<script>alert('Thêm dữ liệu thành công')</script>";
			//echo header ("refresh:0; url='admin.php?addPro'");
		}elseif($kq==0){
			echo "<script>alert('Không thể insert')</script>";
		}
	}
	?>
</body>

</html>