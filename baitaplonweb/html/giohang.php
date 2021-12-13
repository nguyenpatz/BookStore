<?php 

    include 'header_trangchu.php';

    if(isset($_SESSION['taikhoan'])) {

        // echo "<script>alert('".$_SESSION['taikhoan']."')</script>";

    }
    else {
        echo "<script>location.href='login.php'</script>";
    }

    if(!isset($_SESSION['giohang'])) {

        $_SESSION['giohang'] = [];

    }

    // xoá toàn bộ giỏ hàng
    if(isset($_GET['delcart']) && $_GET['delcart'] == 1) {

        unset($_SESSION['giohang']);

    }

    // xóa từng sản phẩm
    if(isset($_GET['delid']) && $_GET['delid'] >= 0) {

        array_splice($_SESSION['giohang'], $_GET['delid'], 1);

    }

    // lấy dữ liệu từ form chitietsp.php

    if(isset($_POST['addcart']) && ($_POST['addcart'])) {

        $hinhanh = $_POST['hinhanh'];

        $tensp = $_POST['tensp'];

        $tacgia = $_POST['tacgia'];

        $soluong = $_POST['soluong'];

        $giatien = $_POST['giatien'];

        
        // kiểm tra sp có trong giỏ hàng không

        $fl = 0; // Kiểm tra sp có trùng giỏ hàng không

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            // code...
            if($_SESSION['giohang'][$i][1] == $tensp) {

                $fl = 1;

                $soluongnew = $soluong + $_SESSION['giohang'][$i][3];

                $_SESSION['giohang'][$i][3] = $soluongnew;

                break;
            }

        }

        // nếu không trùng thì thêm mới
        if($fl ==0) {

        // thêm mới sản phẩm
        $sp = [$hinhanh, $tensp, $tacgia, $soluong, $giatien];

        // $sp = [$hinhanh, $tensp, $tacgia, $soluong, $giatien];

        $_SESSION['giohang'][] = $sp;

        }
    }

    function showGioHang() {
        if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
            $tong = 0;
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][3];
                $tong += $tt;
                // code...
                echo '<tr>
                        <td><img src="'.$_SESSION['giohang'][$i][0].'" class="cart__content-left-table-img" alt=""></td>
                        <td><p>'.$_SESSION['giohang'][$i][1].'</p></td>
                        <td><p>'.$_SESSION['giohang'][$i][2].'</p></td>
                        <td><p>'.$_SESSION['giohang'][$i][3].'</p></td>
                        <td><p>'.$tt.' <sup>VND</sup></p></td>
                        <td><span><a href="giohang.php?delid='.$i.'" >X</a></span></td>
                    </tr>';
            }
        }
    }

    function showTongTien() {
        if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
            $tong = 0;
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][3];
                $tong += $tt;
                // code...
                echo '<table class="cart__content-right-table">
                     <tr>
                         <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                     </tr>
                     <tr>
                         <td>TỔNG SẢN PHẨM</td>
                         <td>'.sizeof($_SESSION['giohang']).'</td>
                     </tr>
                     <tr>
                         <td>TỔNG TIỀN HÀNG</td>
                         <td><p>'.$tong.' <sup>VND</sup></p></td>
                     </tr>
                     <tr>
                         <td>TẠM TÍNH</td>
                         <td><p style="color: black; font-weight: bold;">'.$tong.' <sup>VND</sup></p></td>
                     </tr>
                 </table>';
            }
        }
    }

?>

                       
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../css/base.css">
     <title>Website - Giỏ hàng</title>
 </head>
 <body>
    
 <!-- -------------------------cart---------------- -->
 <section class="cart">
     <div class="container">
         <div class="cart__top-wrap">
            <div class="cart__top-list">
                <div class="cart__top-cart cart__top-item">
                   <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="cart__top-adress cart__top-item">
                   <i class="fas fa-map-marker-alt "></i>
                </div>
                <div class="cart__top-payment cart__top-item">
                   <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
         </div>
     </div>
     <div class="container">
         <div class="cart__content row">
             <div class="cart__content-left">
                <table class="cart__content-left-table">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Tác giả</th>
                        <th>SL</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                    </tr>
                    <?php showGioHang();?>
                    <!-- <tr>
                        <td><img src="../images/sp1-small.jpeg" class="cart__content-left-table-img" alt=""></td>
                        <td><p>Học sinh chân kinh tập 25</p></td>
                        <td><p>R.B.O</p></td>
                        <td><input type="number" value="1" min="1"></td>
                        <td><p>28.000 <sup>VND</sup></p></td>
                        <td><span>X</span></td>
                    </tr> -->
                    <!-- <tr>
                        <td><img src="../images/sp1.jpg" class="cart__content-left-table-img" alt=""></td>
                        <td><p>Học sinh chân kinh tập 24</p></td>
                        <td><p>R.B.O</p></td>
                        <td><input type="number" value="1" min="1"></td>
                        <td><p>28.000 <sup>VND</sup></p></td>
                        <td><span>X</span></td>
                    </tr> -->
                </table>
             </div>
             <div class="cart__content-right">
                <?php showTongTien();?>
                 <!-- <table class="cart__content-right-table">
                     <tr>
                         <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                     </tr>
                     <tr>
                         <td>TỔNG SẢN PHẨM</td>
                         <td>2</td>
                     </tr>
                     <tr>
                         <td>TỔNG TIỀN HÀNG</td>
                         <td><p>58.000 <sup>VND</sup></p></td>
                     </tr>
                     <tr>
                         <td>TẠM TÍNH</td>
                         <td><p style="color: black; font-weight: bold;">58.000 <sup>VND</sup></p></td>
                     </tr>
                 </table> -->
                 <div class="cart__content-right-text">
                     <p>Bạn sẽ được free ship khi đơn hàng của bạn mua trên 200.000 VND</p>
                     <p style="color: red; font-weight: bold;">Mua thêm <span style="font-size: 18px;" class="cart__content-right-text-buymore">142.000đ</span> để được FREE SHIP</p>
                 </div>
                 <div class="cart__content-right-button">
                    <button> <a href="giohang.php?delcart=1">Xoá đơn hàng</a></button>
                     <button><a href="sanpham.php" style="text-decoration: none">TIẾP TỤC MUA SẮM</a></button>
                     <button> <a href="./thanhtoan.php">THANH TOÁN</a></button>
                 </div>
                 <div class="cart__content-right-login">
                     <p>Hãy <a href="">Đăng nhập </a>tài khoản của bạn để tích xu</p>
                    
                 </div>
            </div>
         </div>
     </div>
 </section>
 
 <!-- -------------------------Footer -->
 <footer class="footer">
    <section class="footer-app">
        <p>Tải ứng dụng BookShop</p>
        <div class="app-google">
            <img src="../images/appstore.jpg" alt="" class="app-google__img">
            <img src="../images/googleplay.jpg" alt="" class="app-google__img">
        </div>
        <p>Nhận thông báo từ chúng tôi</p>
        <input type="text" placeholder="Nhập email của bạn...">
    </section>
    <div class="footer-top">
        <li class="footer-top__item"><a href="" class="footer__item-link">Liên hệ</a></li>
        <li class="footer-top__item"><a href="" class="footer__item-link">Tuyển dụng</a></li>
        <li class="footer-top__item"><a href="" class="footer__item-link">Giới thiệu</a></li>
        <li class="footer-top__item">
            <a href="" class="footer__item-icon fab fa-facebook"></a>
            <a href="" class="footer__item-icon fab fa-twitter"></a>
            <a href="" class="footer__item-icon fab fa-youtube"></a>
        </li>
    </div>
    <div class="footer__infor">
        <span>
            Công ty TNHH 3 thành viên Vmu với số đăng ký kinh doanh: 01234556 <br>
            Địa chỉ đăng ký: Lạch Tray Lê Chân Hải Phòng - 024376786986 <br>
            Tư vấn qua số điện thoại: <span class="footer__infor-phone">025695 587689</span>
        </span>
    </div>
    <br>
    <div class="footer__bottom">
        @DANGVANLOC78722 <?php var_dump($_SESSION['giohang']);?>
    </div>
</footer>


<script src="script.js"></script>



</body>
</html>                      