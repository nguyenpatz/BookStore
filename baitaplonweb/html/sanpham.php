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
    <!-- Phần heder------------------------------------------------ -->
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


    <!-- sản phẩm------------------------ -->
    <!-- -------------------------------- -->
    <div class="app-container">
        <div class="app-container-main">
            <div class="grid">
                <div class="grid__row app-content">
                    <div class="grid__col-2 col-menu">
                        <div class="category-menu">
                            <ul class="category-menu__list">
                                <li class="category-menu__list-item">
                                    <a href="#" class="category-menu__list-item-link">Sách thiếu nhi</a>
                                    <ul class="category-menu__extends">
                                        
                                        <li class="category-menu__extends-item"> <a href="">Truyện tranh</a> </li>
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
                    </div>
                    <div class="grid__col-10">
                        <div class="category-grid__head">
                            <div id="category-grid__head-title">
                                <p>Truyện tranh</p>
                            </div>
                            <div class="scan">
                                <div id="category-grid__head-filter">
                                    <button class="category-grid__head-btn"><span>Lọc sản phẩm</span> <i class="fas fa-sort-down"></i></button>
                                    <form  class="category-grid__head-filter-extend">
                                        <div class="category-grid__head-filter-extend-item">
                                            <label> Lứa tuổi: </label>
                                            <select name="" id="" class="category-grid__head-filter-extend-select">
                                                <option value="" class="category-grid__head-filter-extend-option">6+</option>
                                                <option value="" class="category-grid__head-filter-extend-option">12+</option>
                                                <option value="" class="category-grid__head-filter-extend-option">16+</option>
                                            </select>
                                        </div>
                                        <div class="category-grid__head-filter-extend-item">
                                            <label>Giá sách: </label>
                                            <select name="" id="" class="category-grid__head-filter-extend-select">
                                                <option value="" class="category-grid__head-filter-extend-option">nhỏ hơn 50.000</option>
                                                <option value="" class="category-grid__head-filter-extend-option">từ 50.000 đến 200.000</option>
                                                <option value="" class="category-grid__head-filter-extend-option">trên 200.000</option>
                                            </select>
                                        </div>
                                        <div class="category-grid__head-filter-extend-item">
                                                <label>Hình thức thanh toán: </label>
                                                <select name="" id="" class="category-grid__head-filter-extend-select">
                                                    <option value="" class="category-grid__head-filter-extend-option">Thanh toán bằng thẻ</option>
                                                    <option value="" class="category-grid__head-filter-extend-option">Thanh toán khi nhận hàng</option>
                                                </select>
                                        </div>
                                        <div class="category-grid__head-filter-extend-item">
                                            <button class="category-grid__head-filter-extend-submit">Lọc sản phẩm</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="category-grid__head-sort">
                                    <select class="category-grid__head-select">
                                        <option value="">Sắp xếp</option>
                                        <option value="">Từ cao đến thấp</option>
                                        <option value="">Từ thấp đến cao</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- grid san pham------------------------------------ -->
                        <div class="home-product">

                            <!-- Hàng sản phẩm thứ 1 ----------------------------->
                            <div class="grid__row">
                                <div class="grid__col-2-4">


                                    <div class="home-product__item">
                                        <a href="../html/chitietsp.php">
                                            <img class="home-product__img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="home-product__name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="home-product__name-tg">R.B.O</h6>
                                        <div class="home-product__price">
                                            <span class="home-product__price-old">66.000VND</span>
                                            <span class="home-product__price-new">50.000VND</span>
                                        </div>
                                        <div class="home-product__favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="home-product__sale-off">
                                            <span class="home-product__sale-off-percent">10%</span>
                                            <br>
                                            <span class="home-product__sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="grid__col-2-4">
                                    <div class="home-product__item">
                                        <a href="">
                                            <img class="home-product__img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="home-product__name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="home-product__name-tg">R.B.O</h6>
                                        <div class="home-product__price">
                                            <span class="home-product__price-old">66.000VND</span>
                                            <span class="home-product__price-new">50.000VND</span>
                                        </div>
                                        <div class="home-product__favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="home-product__sale-off">
                                            <span class="home-product__sale-off-percent">10%</span>
                                            <br>
                                            <span class="home-product__sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4">
                                    <div class="home-product__item">
                                        <a href="">
                                            <img class="home-product__img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="home-product__name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="home-product__name-tg">R.B.O</h6>
                                        <div class="home-product__price">
                                            <span class="home-product__price-old">66.000VND</span>
                                            <span class="home-product__price-new">50.000VND</span>
                                        </div>
                                        <div class="home-product__favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="home-product__sale-off">
                                            <span class="home-product__sale-off-percent">10%</span>
                                            <br>
                                            <span class="home-product__sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="grid__col-2-4">
                                    <div class="home-product__item">
                                        <a href="">
                                            <img class="home-product__img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="home-product__name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="home-product__name-tg">R.B.O</h6>
                                        <div class="home-product__price">
                                            <span class="home-product__price-old">66.000VND</span>
                                            <span class="home-product__price-new">50.000VND</span>
                                        </div>
                                        <div class="home-product__favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="home-product__sale-off">
                                            <span class="home-product__sale-off-percent">10%</span>
                                            <br>
                                            <span class="home-product__sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Hàng sản phẩm thứ 2----------------------------------------- -->
                            <div class="grid__row">

                                <div class="grid__col-2-4">
                                    <div class="home-product__item">
                                        <a href="">
                                            <img class="home-product__img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="home-product__name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="home-product__name-tg">R.B.O</h6>
                                        <div class="home-product__price">
                                            <span class="home-product__price-old">66.000VND</span>
                                            <span class="home-product__price-new">50.000VND</span>
                                        </div>
                                        <div class="home-product__favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="home-product__sale-off">
                                            <span class="home-product__sale-off-percent">10%</span>
                                            <br>
                                            <span class="home-product__sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="grid__col-2-4">
                                    <div class="home-product__item">
                                        <a href="">
                                            <img class="home-product__img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="home-product__name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="home-product__name-tg">R.B.O</h6>
                                        <div class="home-product__price">
                                            <span class="home-product__price-old">66.000VND</span>
                                            <span class="home-product__price-new">50.000VND</span>
                                        </div>
                                        <div class="home-product__favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="home-product__sale-off">
                                            <span class="home-product__sale-off-percent">10%</span>
                                            <br>
                                            <span class="home-product__sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="grid__col-2-4">
                                    <div class="home-product__item">
                                        <a href="">
                                            <img class="home-product__img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="home-product__name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="home-product__name-tg">R.B.O</h6>
                                        <div class="home-product__price">
                                            <span class="home-product__price-old">66.000VND</span>
                                            <span class="home-product__price-new">50.000VND</span>
                                        </div>
                                        <div class="home-product__favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="home-product__sale-off">
                                            <span class="home-product__sale-off-percent">10%</span>
                                            <br>
                                            <span class="home-product__sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="grid__col-2-4">
                                    <div class="home-product__item">
                                        <a href="">
                                            <img class="home-product__img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="home-product__name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="home-product__name-tg">R.B.O</h6>
                                        <div class="home-product__price">
                                            <span class="home-product__price-old">66.000VND</span>
                                            <span class="home-product__price-new">50.000VND</span>
                                        </div>
                                        <div class="home-product__favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="home-product__sale-off">
                                            <span class="home-product__sale-off-percent">10%</span>
                                            <br>
                                            <span class="home-product__sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                       
                </div>
            </div>
        </div>
    </div>



<!-- -------------------FOOTER------------- --------------------------------------------------->
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