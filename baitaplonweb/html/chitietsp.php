<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/base.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <!-- <img src="../images/logo.png" alt="" id="logo__img"> -->
            <a href="../html/trangchu.php" class="logo__link">
                Book<span>Shop </span><i class="fas fa-book-reader"></i> 
            </a>
        </div>

        <div class="menu">
            <li class="menu__item">
                <a href="#" class="menu__link">Sản phẩm</a>
                    <ul class="sub-menu">

                        <!-- Mục sản phẩm Sách thiếu nhi-->
                        <li><a href="../html/sanpham.php" class="sub-menu__link">Sách thiếu nhi <span class="dau">&rsaquo;</span></a> <!--&rsaquo; trong thẻ span là kí hiệu > -->
                            <!-- Phần mở rộng của mục Sách thiếu nhi-->
                            <ul id="sub-menu__list-chidren">
                                <li class="sub-menu__item-child">
                                    <a href="./sanpham.php" class="sub-menu__link-child">Truyện tranh </a>
                                </li>
                                <li class="sub-menu__item-child">
                                    <a href="" class="sub-menu__link-child">Sách khoa học cho trẻ</a>
                                </li>
                                <li class="sub-menu__item-child">
                                    <a href="" class="sub-menu__link-child">Sách rèn luyện kỹ năng</a>
                                </li>
                                <li class="sub-menu__item-child">
                                    <a href="" class="sub-menu__link-child">Mỹ thuật âm nhạc</a>
                                </li>
                                <li class="sub-menu__item-child">
                                    <a href="" class="sub-menu__link-child">Sách ngoại ngữ</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Mục sản phẩm sách giáo khoa-->
                        <li><a href="" class="sub-menu__link">Sách giáo khoa <span class="dau">&rsaquo;</span></a>
                            <!-- Phần mở rộng của mục Sách giáo khoa-->
                            <ul id="sub-menu__list-textbook">
                                <li class="sub-menu__item-child">
                                    <a class="sub-menu__link-child">Sách giáo khoa</a>
                                </li>
                                <li class="sub-menu__item-child">
                                    <a class="sub-menu__link-child">Sách bài tập</a>
                                </li>
                                <li class="sub-menu__item-child">
                                    <a class="sub-menu__link-child">Sách tham khảo</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Mục sản phẩm sách kinh doanh-->
                        <li><a href="" class="sub-menu__link">Sách kinh tế <span class="dau">&rsaquo;</span></a>
                            <!-- Phần mở rộng của mục Sách kinh doanh-->
                            <ul id="sub-menu__list-business">
                                <li><a href="" class="sub-menu__link-child">Quản trị và lãnh đạo</a></li>
                                <li><a href="" class="sub-menu__link-child">Kinh tế tài chính</a></li>
                                <li><a href="" class="sub-menu__link-child">Marketing và bán hàng</a></li>
                                <li><a href="" class="sub-menu__link-child">Đầu tư và chứng khoán</a></li>
                                <li><a href="" class="sub-menu__link-child">Nhân sự, việc làm</a></li>
                            </ul>
                        </li>

                        <!-- Mục sản phẩm sách bách khoa -->
                        <li><a href="" class="sub-menu__link">Sách chuyên ngành <span class="dau">&rsaquo;</span></a>
                            <!-- Phần mở rộng của mục Sách bách khoa-->
                            <ul id="sub-menu__list-wikipedia">
                                <li class="sub-menu__link-child">Âm nhạc, nghệ thuật</li>
                                <li class="sub-menu__link-child">Khoa học kỹ thuật</li>
                                <li class="sub-menu__link-child">Công nghệ thông tin</li>
                                <li class="sub-menu__link-child">Du lịch</li>
                                <li class="sub-menu__link-child">Thể thao</li>
                                <li class="sub-menu__link-child">Y học</li>
                            </ul>
                        </li>

                        <!-- Mục sản phẩm sách cũ -->
                        <li><a href="" class="sub-menu__link">Thường thức đời sống <span class="dau">&rsaquo;</span></a>
                            <ul id="sub-menu__list-booklife">
                                <li class="sub-menu__link-child">Bí quyết làm đẹp</li>
                                <li class="sub-menu__link-child">Hạnh phúc gia đình</li>
                                <li class="sub-menu__link-child">Sách nấu ăn</li>
                                <li class="sub-menu__link-child">Nuôi trồng</li>
                                <li class="sub-menu__link-child">Sinh lý học</li>
                                <li class="sub-menu__link-child">Tâm lý học</li>
                            </ul>
                        </li>

                        <!-- Mục sản phẩm văn phòng phẩm -->
                        <li><a href="" class="sub-menu__link">Tạp chí văn phòng phẩm <span class="dau">&rsaquo;</span></a>
                            <ul id="sub-menu__list-stationery">
                                <li class="sub-menu__link-child">Sổ tay,giấy in</li>
                                <li class="sub-menu__link-child">Dụng cụ vẽ</li>
                                <li class="sub-menu__link-child">Lịch</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            <li class="menu__item"><a href="./Gioithieu.php" class="menu__link">Giới thiệu</a></li>
            <li class="menu__item"><a href="" class="menu__link">Chính sách đại lý</a></li>
            <li class="menu__item"><a href="./lienhe.php" class="menu__link">Liên hệ</a></li>
            <li class="menu__item"><a href="./tintuc.php" class="menu__link">Tin tức</a></li>
        </div>
        <div class="others">
            <li class="others__item"><input type="text" placeholder="Tìm kiếm sách..." class="others__item-input"><i class="fas fa-search"></i></li>
            <li class="others__item"><i class="mobile-search-icon fas fa-search"></i></li>
            <li class="others__item"><a href="./login.php" class="fa fa-user"></a></li>
            <li class="others__item"><a href="./giohang.php" class="fa fa-shopping-bag"></a></li>
            <li class="others__item-1">
                <div class="menu-mobile__btn">
                    <i class="fas fa-bars"></i>
                </div>
            </li>
        </div>
        <div class="menu__overlay"></div>
        <div class="menu-mobile">
            <div class="menu-mobile__times">
                <i class="menu-check fas fa-times"></i>
            </div>
            <li class="menu-mobile__item sp_mobile"><a href="#" class="menu-mobile__link">Sản phẩm</a></li>
            <div class="category-mobile-menu">
                <ul class="category-menu__list">
                    <li class="category-menu__list-item">
                        <a href="#" class="category-menu__list-item-link">Sách thiếu nhi</a>
                        <ul class="category-menu__extends">
                            
                            <li class="category-menu__extends-item"> <a href="./sanpham.php">Truyện tranh</a> </li>
                            <li class="category-menu__extends-item"> <a href="">Sách khoa học cho trẻ em</a> </li>
                            <li class="category-menu__extends-item"><a href="">Sách rèn luyện kỹ năng</a> </li>
                            <li class="category-menu__extends-item"><a href="">Mỹ thuật âm nhạc</a> </li>
                            <li class="category-menu__extends-item"><a href="">Sách ngoại ngữ</a> </li>

                        </ul>       
                    </li>
                </ul>
                <ul class="category-menu__list">
                    <li class="category-menu__list-item">
                        <a href="#" class="category-menu__list-item-link">Sách giáo khoa</a>
                        <ul class="category-menu__extends">       

                            <li class="category-menu__extends-item"><a href="">Sách giáo khoa</a> </li>
                            <li class="category-menu__extends-item"><a href="">Sách bài tập</a> </li>
                            <li class="category-menu__extends-item"><a href="">Sách tham khảo</a> </li>

                        </ul>
                    </li>
                </ul>
                <ul class="category-menu__list">
                    <li class="category-menu__list-item">
                        <a href="#" class="category-menu__list-item-link">Sách kinh tế</a>
                        <ul class="category-menu__extends">

                            <li class="category-menu__extends-item"><a href="">Quản trị và lãnh đạo</a> </li>
                            <li class="category-menu__extends-item"><a href="">Kinh tế tài chính</a> </li>      
                            <li class="category-menu__extends-item"><a href="">Marketing và bán hàng</a> </li>
                            <li class="category-menu__extends-item"><a href="">Đầu tư và chứng khoán</a> </li>
                            <li class="category-menu__extends-item"><a href="">Nhân sự và việc làm</a> </li>
                            
                        </ul>
                    </li>
                </ul>
                <ul class="category-menu__list">
                    <li class="category-menu__list-item">
                        <a href="#" class="category-menu__list-item-link">Sách chuyên ngành</a>
                        <ul class="category-menu__extends">

                            <li class="category-menu__extends-item"><a href="">Âm nhạc và nghệ thuật</a> </li>
                            <li class="category-menu__extends-item"><a href="">Khoa học kỹ thuật</a> </li>
                            <li class="category-menu__extends-item"><a href="">Công nghệ thông tin</a> </li>
                            <li class="category-menu__extends-item"><a href="">Du lịch</a> </li>
                            <li class="category-menu__extends-item"><a href="">Thể thao</a> </li>
                            <li class="category-menu__extends-item"><a href="">Y học</a> </li>

                        </ul>
                    </li>
                </ul>
                <ul class="category-menu__list">
                    <li class="category-menu__list-item">
                        <a href="#" class="category-menu__list-item-link">Thường thức và đời sống</a>
                        <ul class="category-menu__extends">

                            <li class="category-menu__extends-item"> <a href="">Bí quyết làm đẹp</a></li>
                            <li class="category-menu__extends-item"> <a href="">Hạnh phúc gia đình</a></li>
                            <li class="category-menu__extends-item"> <a href="">Sách nấu ăn</a></li>
                            <li class="category-menu__extends-item"> <a href="">Nuôi chồng</a></li>
                            <li class="category-menu__extends-item"> <a href="">Sinh lý học</a></li>
                            <li class="category-menu__extends-item"> <a href="">Tâm lý học</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
            <li class="menu-mobile__item"><a href="./Gioithieu.php" class="menu-mobile__link">Giới thiệu</a></li>
            <li class="menu-mobile__item"><a href="" class="menu-mobile__link">Chính sách đại lý</a></li>
            <li class="menu-mobile__item"><a href="" class="menu-mobile__link">Liên hệ</a></li>
            <li class="menu-mobile__item"><a href="" class="menu-mobile__link">Tin tức</a></li>
        </div>
        <div class="mobile__search">
            <input type="text" class="mobile__input" placeholder="Tim kiem sach...."><i class="fas fa-check"></i>
            <br>
            <div class="search__close">
                <i class="search__up fas fa-chevron-up"></i>
            </div>
        </div>
    </header>
    
    <!-- Chi tiet san pham -------------------------------- -->
    <div class="grid">
        <sectiom class="product">
            <div class="product__container">
                <div class="product__container-top row">
                    <p> Trang chủ</p> <i class="category-top__icon fas fa-hand-point-right"></i> 
                    <p>Thiếu nhi</p> <i class="category-top__icon fas fa-hand-point-right"></i> <p>Truyện tranh</p> <i class="category-top__icon fas fa-hand-point-right"></i> <p>HỌC SINH CHÂN KINH TẬP 25</p>
                </div>
                <div class="product__container-content">
                    <div class="product__content-left row">
                        <div class="product__content-left-big">
                            <img class="product__content-left-big-img" src="../images/sp1.jpg" alt="">
                        </div>
                        <div class="product__content-left-small">
                            <img src="../images/sp1.jpg" alt="" class="product__content-left-small-img">
                            <img src="../images/sp1-small.jpeg" alt="" class="product__content-left-small-img">
                            <img src="../images/sp1-small2.png" alt="" class="product__content-left-small-img">
                            <img src="../images/smallsp1.jpg" alt="" class="product__content-left-small-img">
                        </div>
                    </div>
                    <div class="product__content-right row">
                        <div class="product__content-right-infor">
                            <ul class="product__content-right-infor-list">
                                <li class="product__content-right-infor-item">
                                    <h3 class="product__content-right-infor-title">
                                        HỌC SINH CHÂN KINH TẬP 25
                                    </h3>
                                    <p>Họa sĩ: <span class="product__content-right-author">R.B.O</span></p>
                                </li>
                                <li class="product__content-right-infor-item">
                                    <span class="product__content-right-infor-price-new">28.000 VND</span>
                                    <p>Giá cũ: <span class="product__content-right-infor-price-old">30.000 VND</span></p>
                                </li>
                                <li class="product__content-right-infor-item">
                                    <label>Tình trạng: </label>
                                    <span class="product__content-right-infor-status">Còn hàng</span>
                                </li>
                                <li class="product__content-right-infor-item">
                                    <label>Số lượng</label>
                                    <input type="number" min="0" value="1" class="product__content-right-infor-sum">
                                </li>
                                <li class="product__content-right-infor-item buy">
                                    <button class="product__content-right-infor-buy"><i class="buy__addcart fas fa-cart-plus"></i>Thêm vào giỏ hàng</button>
                                    <button class="product__content-right-infor-buy"><i class="buy__buynow fas fa-shopping-basket"></i>Mua ngay</button>
                                </li>
                                <li class="product__content-right-infor-item">
                                    <p><i class="fas fa-phone-volume"></i> Gọi điện tư vấn đặt hàng tại: <span class="product__content-right-infor-call">12495094</span></p>
                                </li>
                            </ul>
                            <div class="product__content-right-bottom">
                                <div class="product__content-right-bottom-control">
                                    <button class="down"><i class="fas fa-chevron-down"></i></button>
                                </div>
                                <div class="product__content-right-bottom-content">
                                    <div class="product__content-right-bottom-content-title row">
                                        <div class="product__content-right-bottom-content-title-item infor">
                                            <p>Thông tin sản phẩm</p>                                    
                                        </div>
                                        <div class="product__content-right-bottom-content-title-item detail">
                                            <p>Chi tiết sản phẩm</p>
                                        </div>
                                    </div>
                                    <div class="product__content-right-bottom-content-data">
                                        <div class="product__content-right-bottom-content-data-infor">
                                            Học Sinh Chân Kinh là bộ truyện tranh thiếu niên Việt Nam dài tập được sáng
                                            tác bởi B.R.O và phát hành bởi công ty Phan Thị. Tập đầu của bộ truyện, Muôn
                                            sự tại nhân, phát hành vào giữa năm 2013. Tuy nhiên, bộ truyện tranh đã bị 
                                            ngừng phát triển vào tháng 5 năm 2019
                                        </div>
                                        <div class="product__content-right-bottom-content-data-detail">
                                            <ul>
                                                <li>Tên sách: <span id="introduce__body-namebook">Học sinh chân kinh</span></li>
                                                <li>Tác giả: <span id="introduce__body-author">B.R.O</span></li>
                                                <li>Số trang: <span id="introduce__body-page">120</span></li>
                                                <li>Độ tuổi: <span id="introduce__body-aboutold">12+</span></li>
                                                <li>Ngày xuất bản: <span id="introduce__body-date">12/02/2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__content-right-ship">
                            <ul class="product__content-right-ship-list">
                                <li class="product__content-right-ship-item"><i class="far fa-heart"></i> Thêm vào ỷêu thích</li>
                                <li class="product__content-right-ship-item">
                                    <a href="" class="product__content-right-ship-item-link"><i class="fas fa-user-lock"></i> Ưu đãi khách hàng thân thiết</a>
                                </li>
                                <li class="product__content-right-ship-item">
                                    <a href="">
                                        <i class="fas fa-shipping-fast"></i> Để được giao hàng miễn phí
                                    </a>
                                </li>
                                <li class="product__content-right-ship-item">
                                    <p>share để nhận xu - Mua hàng không đồng</p>
                                    <ul class="app__share">
                                        <li class="app__share-item"><a href="" class="app__share-item-fb"><i class="fas fa-thumbs-up"></i> Thích</a></li>
                                        <li class="app__share-item"><a href="" class="app__share-item-twitter"><i class="fab fa-twitter"></i> Tweet</a></li>
                                        <li class="app__share-item"><a href="" class="app__share-item-pinterest"><i class="fab fa-pinterest"></i> Save</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product__container-bottom">
                    <div class="product__container-bottom-title" style="margin-bottom: 20px; font-size: 16px; font-weight: 600;">
                        Có thể bạn quan tâm
                    </div>
                    <div class="product__container-bottom-sp">
                        <div class="grid__col-10b">
                            <div class="grid__row">
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </sectiom>
    </div>
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
            @DANGVANLOC78722
        </div>
    </footer>
</body>
<script src="../js/main.js">
</script>
</html>