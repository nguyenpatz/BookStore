<?php 

    include 'header_trangchu.php';

    if(isset($_SESSION['taikhoan'])) {

        // echo "<script>alert('".$_SESSION['taikhoan']."')</script>";

    }

?>

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
        
    <!-- Chi tiet san pham -------------------------------- -->
    <div class="grid">
        <sectiom class="product">
            <div class="product__container">
                <div class="product__container-top row">
                <?php 

                    $id = $_GET['id'];

                    $sql = "SELECT * FROM sach WHERE sach_id = '$id'";

                    $stmt = $conn->prepare($sql);

                    $stmt->execute();

                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($result as $value) {
                                    // code...
                    ?> 
                    <p><?php echo $value['ten']?></p>
                   

                </div>

                <div class="product__container-content">

                    <div class="product__content-left row">

                        <div class="product__content-left-big">
                        
                            <img class="product__content-left-big-img" src="<?php echo './uploads/'.$value['anh']?>" alt="">

                        </div>
                        <!-- <div class="product__content-left-small">
                            <img src="../images/sp1.jpg" alt="" class="product__content-left-small-img">
                            <img src="../images/sp1-small.jpeg" alt="" class="product__content-left-small-img">
                            <img src="../images/sp1-small2.png" alt="" class="product__content-left-small-img">
                            <img src="../images/smallsp1.jpg" alt="" class="product__content-left-small-img">
                        </div> -->
                    </div>
                    <div class="product__content-right row">
                        <div class="product__content-right-infor">
                            <ul class="product__content-right-infor-list">
                                <li class="product__content-right-infor-item">
                                    <h3 class="product__content-right-infor-title">
                                        <?php echo $value['ten'];?>
                                    </h3>
                                    <p>T??c gi???: <span class="product__content-right-author"><?php echo $value['tacgia']?></span></p>
                                </li>
                                <li class="product__content-right-infor-item">
                                    <span class="product__content-right-infor-price-new"><?php echo $value['giatien'].'VND'?></span>
                                    <p>Gi?? c??: <span class="product__content-right-infor-price-old"><?php echo $value['giatien'].'VND'?></span></p>
                                </li>
                                <li class="product__content-right-infor-item">
                                    <label>T??nh tr???ng: </label>
                                    <span class="product__content-right-infor-status"><?php 
                                        if($value['trangthai'] == 0) {
                                            echo "H???t h??ng";
                                        } else {
                                            echo "C??n h??ng";
                                        }
                                    ?></span>
                                </li>
                                <!-- form gio hang -->
                                <form action="giohang2.php" method="POST">
                                    <li class="product__content-right-infor-item">
                                        <label>S??? l?????ng</label>
                                        <input type="number" name="soluong" min="0" value="1" class="product__content-right-infor-sum">
                                    </li>
                                    <li class="product__content-right-infor-item buy">
                                        
                                            <i class="buy__addcart fas fa-cart-plus"><input class="product__content-right-infor-buy" type="submit" name="addcart" value="Th??m v??o gi??? h??ng"></i>
                                            
                                        
                                        <!-- <button class="product__content-right-infor-buy" type="submit" name="addcart">
                                            <i class="buy__addcart fas fa-cart-plus"></i>
                                            Th??m v??o gi??? h??ng
                                        </button> -->
                                        <!-- <button class="product__content-right-infor-buy">
                                            <i class="buy__buynow fas fa-shopping-basket"></i>
                                        Mua ngay
                                        </button> -->
                                    </li>
                                    <input type="hidden" name="sach_id" value="<?php echo $value['sach_id']?>">
                                    <input type="hidden" name="hinhanh" value="<?php echo './uploads/'.$value['anh'];?>">
                                    <input type="hidden" name="tensp" value="<?php echo $value['ten']?>">
                                    <input type="hidden" name="tacgia" value="<?php echo $value['tacgia']?>">
                                    <input type="hidden" name="giatien" value="<?php echo $value['giatien']?>">
                                </form>
                                <!-- form gio hang -->
                                <li class="product__content-right-infor-item">
                                    <p><i class="fas fa-phone-volume"></i> G???i ??i???n t?? v???n ?????t h??ng t???i: <span class="product__content-right-infor-call">12495094</span></p>
                                </li>
                            </ul>
                            <div class="product__content-right-bottom">
                                <div class="product__content-right-bottom-control">
                                    <button class="down"><i class="fas fa-chevron-down"></i></button>
                                </div>
                                <div class="product__content-right-bottom-content">
                                    <div class="product__content-right-bottom-content-title row">
                                        <div class="product__content-right-bottom-content-title-item infor">
                                            <p>Th??ng tin s???n ph???m</p>                                    
                                        </div>
                                        <div class="product__content-right-bottom-content-title-item detail">
                                            <p>Chi ti???t s???n ph???m</p>
                                        </div>
                                    </div>
                                    <div class="product__content-right-bottom-content-data">
                                        <div class="product__content-right-bottom-content-data-infor">
                                            <?php echo $value['gioithieu'];?>
                                        </div>
                                        <div class="product__content-right-bottom-content-data-detail">
                                            <ul>
                                                <li>T??n s??ch: <span id="introduce__body-namebook"><?php echo $value['ten']?></span></li>
                                                <li>T??c gi???: <span id="introduce__body-author"><?php echo $value['tacgia']?></span></li>
                                                <li>S??? trang: <span id="introduce__body-page"><?php echo $value['sotrang']?></span></li>
                                                <!-- <li>????? tu???i: <span id="introduce__body-aboutold">12+</span></li> -->
                                                <li>Ng??y xu???t b???n: <span id="introduce__body-date"><?php echo $value['ngayxuatban']?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <div class="product__content-right-ship">
                            <ul class="product__content-right-ship-list">
                                <li class="product__content-right-ship-item"><i class="far fa-heart"></i> Th??m v??o ?????u th??ch</li>
                                <li class="product__content-right-ship-item">
                                    <a href="" class="product__content-right-ship-item-link"><i class="fas fa-user-lock"></i> ??u ????i kh??ch h??ng th??n thi???t</a>
                                </li>
                                <li class="product__content-right-ship-item">
                                    <a href="">
                                        <i class="fas fa-shipping-fast"></i> ????? ???????c giao h??ng mi???n ph??
                                    </a>
                                </li>
                                <li class="product__content-right-ship-item">
                                    <p>share ????? nh???n xu - Mua h??ng kh??ng ?????ng</p>
                                    <ul class="app__share">
                                        <li class="app__share-item"><a href="" class="app__share-item-fb"><i class="fas fa-thumbs-up"></i> Th??ch</a></li>
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
                        C?? th??? b???n quan t??m
                    </div>
                    <div class="product__container-bottom-sp">
                        <div class="grid__col-10b">
                            <div class="grid__row">
                                <?php 

                                $xemthem = "SELECT * FROM sach";

                                $stmt = $conn->prepare($xemthem);

                                $stmt->execute();

                                $result_xemthem = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($result_xemthem as  $value2) {
                                    // code...
                                

                                ?>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <!-- <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img> -->
                                            <img class="product__container-bottom-sp-img" src="<?php echo './uploads/'.$value2['anh'];?>" alt="">
                                        </a>
                                        <h3 class="product__container-bottom-sp-name"><?php echo $value2['ten'];?></h4>
                                        <h4 class="product__container-bottom-sp-name-tg"><?php echo $value2['tacgia'];?></h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old"><?php echo $value2['giatien'].'VND';?></span>
                                            <span class="product__container-bottom-sp-price-new"><?php echo $value2['giatien'].'VND';?></span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Y??u th??ch
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">0%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GI???M</span>
                                        </div>
                                    </div>
                                </div>
                                <?php  }?>
                                <!-- <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">S??ch- H???c sinh ch??n kinh t???p 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Y??u th??ch
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GI???M</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">S??ch- H???c sinh ch??n kinh t???p 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Y??u th??ch
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GI???M</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">S??ch- H???c sinh ch??n kinh t???p 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Y??u th??ch
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GI???M</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">S??ch- H???c sinh ch??n kinh t???p 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Y??u th??ch
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GI???M</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">S??ch- H???c sinh ch??n kinh t???p 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Y??u th??ch
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GI???M</span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </sectiom>
    </div>
    <!-- <div class="grid">
        <sectiom class="product">
            <div class="product__container">
                <div class="product__container-top row">
                    <p> Trang ch???</p> <i class="category-top__icon fas fa-hand-point-right"></i> 
                    <p>Thi???u nhi</p> <i class="category-top__icon fas fa-hand-point-right"></i> <p>Truy???n tranh</p> <i class="category-top__icon fas fa-hand-point-right"></i> 
                    <p>H???C SINH CH??N KINH T???P 25</p>
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
                                        H???C SINH CH??N KINH T???P 25
                                    </h3>
                                    <p>H???a s??: <span class="product__content-right-author">R.B.O</span></p>
                                </li>
                                <li class="product__content-right-infor-item">
                                    <span class="product__content-right-infor-price-new">28.000 VND</span>
                                    <p>Gi?? c??: <span class="product__content-right-infor-price-old">30.000 VND</span></p>
                                </li>
                                <li class="product__content-right-infor-item">
                                    <label>T??nh tr???ng: </label>
                                    <span class="product__content-right-infor-status">C??n h??ng</span>
                                </li>
                                <li class="product__content-right-infor-item">
                                    <label>S??? l?????ng</label>
                                    <input type="number" min="0" value="1" class="product__content-right-infor-sum">
                                </li>
                                <li class="product__content-right-infor-item buy">
                                    <button class="product__content-right-infor-buy"><i class="buy__addcart fas fa-cart-plus"></i>Th??m v??o gi??? h??ng</button>
                                    <button class="product__content-right-infor-buy"><i class="buy__buynow fas fa-shopping-basket"></i>Mua ngay</button>
                                </li>
                                <li class="product__content-right-infor-item">
                                    <p><i class="fas fa-phone-volume"></i> G???i ??i???n t?? v???n ?????t h??ng t???i: <span class="product__content-right-infor-call">12495094</span></p>
                                </li>
                            </ul>
                            <div class="product__content-right-bottom">
                                <div class="product__content-right-bottom-control">
                                    <button class="down"><i class="fas fa-chevron-down"></i></button>
                                </div>
                                <div class="product__content-right-bottom-content">
                                    <div class="product__content-right-bottom-content-title row">
                                        <div class="product__content-right-bottom-content-title-item infor">
                                            <p>Th??ng tin s???n ph???m</p>                                    
                                        </div>
                                        <div class="product__content-right-bottom-content-title-item detail">
                                            <p>Chi ti???t s???n ph???m</p>
                                        </div>
                                    </div>
                                    <div class="product__content-right-bottom-content-data">
                                        <div class="product__content-right-bottom-content-data-infor">
                                            H???c Sinh Ch??n Kinh l?? b??? truy???n tranh thi???u ni??n Vi???t Nam d??i t???p ???????c s??ng
                                            t??c b???i B.R.O v?? ph??t h??nh b???i c??ng ty Phan Th???. T???p ?????u c???a b??? truy???n, Mu??n
                                            s??? t???i nh??n, ph??t h??nh v??o gi???a n??m 2013. Tuy nhi??n, b??? truy???n tranh ???? b??? 
                                            ng???ng ph??t tri???n v??o th??ng 5 n??m 2019
                                        </div>
                                        <div class="product__content-right-bottom-content-data-detail">
                                            <ul>
                                                <li>T??n s??ch: <span id="introduce__body-namebook">H???c sinh ch??n kinh</span></li>
                                                <li>T??c gi???: <span id="introduce__body-author">B.R.O</span></li>
                                                <li>S??? trang: <span id="introduce__body-page">120</span></li>
                                                <li>????? tu???i: <span id="introduce__body-aboutold">12+</span></li>
                                                <li>Ng??y xu???t b???n: <span id="introduce__body-date">12/02/2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__content-right-ship">
                            <ul class="product__content-right-ship-list">
                                <li class="product__content-right-ship-item"><i class="far fa-heart"></i> Th??m v??o ?????u th??ch</li>
                                <li class="product__content-right-ship-item">
                                    <a href="" class="product__content-right-ship-item-link"><i class="fas fa-user-lock"></i> ??u ????i kh??ch h??ng th??n thi???t</a>
                                </li>
                                <li class="product__content-right-ship-item">
                                    <a href="">
                                        <i class="fas fa-shipping-fast"></i> ????? ???????c giao h??ng mi???n ph??
                                    </a>
                                </li>
                                <li class="product__content-right-ship-item">
                                    <p>share ????? nh???n xu - Mua h??ng kh??ng ?????ng</p>
                                    <ul class="app__share">
                                        <li class="app__share-item"><a href="" class="app__share-item-fb"><i class="fas fa-thumbs-up"></i> Th??ch</a></li>
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
                        C?? th??? b???n quan t??m
                    </div>
                    <div class="product__container-bottom-sp">
                        <div class="grid__col-10b">
                            <div class="grid__row">
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">S??ch- H???c sinh ch??n kinh t???p 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Y??u th??ch
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GI???M</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">S??ch- H???c sinh ch??n kinh t???p 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Y??u th??ch
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GI???M</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">S??ch- H???c sinh ch??n kinh t???p 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Y??u th??ch
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GI???M</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">S??ch- H???c sinh ch??n kinh t???p 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Y??u th??ch
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GI???M</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">S??ch- H???c sinh ch??n kinh t???p 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Y??u th??ch
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GI???M</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">S??ch- H???c sinh ch??n kinh t???p 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Y??u th??ch
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GI???M</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </sectiom>
    </div> -->
    <footer class="footer">
        <section class="footer-app">
            <p>T???i ???ng d???ng BookShop</p>
            <div class="app-google">
                <img src="../images/appstore.jpg" alt="" class="app-google__img">
                <img src="../images/googleplay.jpg" alt="" class="app-google__img">
            </div>
            <p>Nh???n th??ng b??o t??? ch??ng t??i</p>
            <input type="text" placeholder="Nh???p email c???a b???n...">
        </section>
        <div class="footer-top">
            <li class="footer-top__item"><a href="" class="footer__item-link">Li??n h???</a></li>
            <li class="footer-top__item"><a href="" class="footer__item-link">Tuy???n d???ng</a></li>
            <li class="footer-top__item"><a href="" class="footer__item-link">Gi???i thi???u</a></li>
            <li class="footer-top__item">
                <a href="" class="footer__item-icon fab fa-facebook"></a>
                <a href="" class="footer__item-icon fab fa-twitter"></a>
                <a href="" class="footer__item-icon fab fa-youtube"></a>
            </li>
        </div>
        <div class="footer__infor">
            <span>
                C??ng ty TNHH 3 th??nh vi??n Vmu v???i s??? ????ng k?? kinh doanh: 01234556 <br>
                ?????a ch??? ????ng k??: L???ch Tray L?? Ch??n H???i Ph??ng - 024376786986 <br>
                T?? v???n qua s??? ??i???n tho???i: <span class="footer__infor-phone">025695 587689</span>
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