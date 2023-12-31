<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop | E-Shopper</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <style>
        h4{
            float: left; 
            color: crimson;
        }
        h5{
            color: black; 
            position: absolute; 
            margin-top: 10px; 
        }
        h6{
            float: left;
            position: absolute;
            margin-top: 35px;
            margin-left: 10px;
        }
        .product-image-wrapper{
            height: 360px;
            padding: 5px;
            border: 1px solid black;
        }
        .product-image-wrapper:hover{
            cursor: pointer;
            box-shadow: 0 0 10px;
        }
        .product-image-wrapper .single-products a button.watch{
            border: none; 
            border-radius: 18px;
            background: orange;
        }
        .bottom{
            margin-top:45px; 
            width: 100%; 
            height: 100%; 
            position: absolute;
        }
    </style>
</head>
<!--/head-->

<body>
    <header id="header">
        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="?controller=home"><img src="../images/home/logo.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                            <li><a href="?controller=account"><i class="fa fa-user"></i> Tài khoản</a></li>
                                <li><a href=""><i class="fa fa-star"></i>Danh sách yêu thích</a></li>
                                <li><a href="?controller=checkout"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
                                <li><a href="?controller=cart"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                                <li><?php if (isset($_SESSION['ss_user'])) {
                                    echo "<a href='?controller=logout'><i class='fa fa-lock'></i>Đăng xuất</a>";
                                }else{
                                    echo "<a href='?controller=login'><i class='fa fa-lock'></i>Đăng nhập</a>";
                                } ?></li>
                             </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="?controller=home">Trang chủ</a></li>
                                <li class="dropdown"><a href="#" class="active">Mail<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="?controller=shop" class="active">Cửa hàng</a></li>
                                        <li><a href="?controller=checkout">Thủ tục thanh toán</a></li>
                                        <li><a href="?controller=cart">Giỏ hàng</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="?controller=blog">Blog List</a></li>
                                        <li><a href="?controller=blog-single">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="?controller=contact">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    <form action="" method="get">
                        <div class="search_box pull-right">
                            <input type="hidden" name="controller" value="shop">
                            <input type="text"  name="keywork" value="<?php  isset($_GET['keywork']) ? $_GET['keywork'] : '' ?>"  placeholder="Search..."/>
                            <button><span> &#8689;</span></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="advertisement">
        <div class="container">
            <img src="../images/shop/advertisement.jpg" alt="" />
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Loại</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            <div class="panel-group category-products" id="accordian">
                                <!--category-productsr-->
                            
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span> Nam
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="mens" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="?controller=shop&id_dm=6">Áo Vest</a></li>
                                                <li><a href="?controller=shop&id_dm=5">Quần</a></li>
                                                <li><a href="?controller=shop&id_dm=4">Áo Polo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span> Nữ
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="womens" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="?controller=shop&id_dm=3">Đầm</a></li>
                                                <li><a href="?controller=shop&id_dm=2">Quần</a></li>
                                                <li><a href="?controller=shop&id_dm=1">Áo nữ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#kid">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span> trẻ em
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="kid" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="?controller=shop&id_dm=7">Áo</a></li>
                                                <li><a href="?controller=shop&id_dm=8">Quần</a></li>
                                                <li><a href="?controller=shop&id_dm=9">Cả bộ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
    
                            </div>

                        </div>
                        <!--/category-products-->
                        
                        <div class="price-range">
                            <!--price-range-->
                            <h2>Phạm vi giá</h2>
                            <div class="well">
                                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
                                <b>$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div>
                        <!--/price-range-->

                        <div class="shipping text-center">
                            <!--shipping-->
                            <img src="../images/home/shipping.jpg" alt="" />
                        </div>
                        <!--/shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items" >
                        <!--features_items-->
                        <h2 class="title text-center">Cửa hàng</h2>
                        <?php
                            $i = 0;
                            $random_products = array_rand($sanpham, min(count($sanpham), 13));
                            foreach ($random_products as $key => $value) {
                                if(++$i == 13) break;

                                // Kiểm tra xem giá trị $random_products[$key] có phải là một khóa hợp lệ của mảng $sanpham không
                                if (array_key_exists($value, $sanpham)) {
                                    $random_product = $sanpham[$value];
                                } else {
                                    // Nếu giá trị $random_products[$key] không phải là một khóa hợp lệ của mảng $sanpham, thì bỏ qua sản phẩm này
                                    continue;
                                }

                                // Hiển thị sản phẩm
                                ?>
                                <div class="col-sm-4"> 
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img class="img-responsive" style="width:100%; height:250px; object-fit: cover;" src="../images/sanpham/<?php echo $random_product['anh_chinh']?>" alt="" />
                                                <h5><?php echo $random_product['tensanpham']?></h5>

                                            </div>
                                            <div class="bottom">
                                                <h4><sup>đ</sup><?php echo number_format($random_product['gia'])?></h4>
                                                <h6>Đã bán: <?php echo $random_product['daban']?></h6>
                                                <a href="?controller=product-detail&id=<?php echo $random_product['id_sanpham']?>">
                                                <button class="watch" style="float:right; margin-top:30px; margin-left:20px">Xem ngay</button>
                                            </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <?php }?>


                        <ul class="pagination">
                            <?php 
                                if (isset($total_pages)) {
                                    for ($i = 1; $i <= $total_pages; $i++) {
                                        if ($i == $current_page) {
                                            echo "<li class='active'><a href='?controller=shop&page=$i'>$i</a></li>";
                                        }else{
                                            echo "<li><a href='?controller=shop&page=$i'>$i</a></li>";
                                            echo "<li><a href='?controller=shop&page=$i'>&raquo;</a></li>";
                                        }
                                    }  
                                }
                            ?>
                        </ul>
                        </div>
                    </div>
                    <!--features_items-->
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <!--Footer-->
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Dịch vụ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Hỗ trợ trực tuyến</a></li>
                                <li><a href="">Liên hệ chúng tôi</a></li>
                                <li><a href="">Tình trạng đặt hàng</a></li>
                                <li><a href="">Thay đổi địa điểm</a></li>
                                <li><a href="">câu hỏi thường gặp</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Áo thun</a></li>
                                <li><a href="">Nam</a></li>
                                <li><a href="">Nữ</a></li>
                                <li><a href="">Thẻ quà tặng</a></li>
                                <li><a href="">Giày</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>chính sách</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Điều khoản sử dụng</a></li>
                                <li><a href="">Chính sách bảo mật</a></li>
                                <li><a href="">Chính sách hoàn tiền</a></li>
                                <li><a href="">Hệ thống thanh toán</a></li>
                                <li><a href="">hệ thống vé</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Giới thiệu về người mua hàng</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Thông tin công ty</a></li>
                                <li><a href="">nghề nghiệp</a></li>
                                <li><a href="">Vị trí cửa hàng</a></li>
                                <li><a href="">Chương trình liên kết</a></li>
                                <li><a href="">bản quyền</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Giới thiệu về người mua hàng</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Nhận các bản cập nhật mới nhất từ <br />trang web của chúng tôi và tự cập nhật cho chính bạn...</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">bản quyền © 2013 E-Shopper. All rights reserved.</p>
                    <p class="pull-right">Thiết kế bởi <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->



    <script src="../js/jquery.js"></script>
    <script src="../js/price-range.js"></script>
    <script src="../js/jquery.scrollUp.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>