<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog | TVT-Shop</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
   </head><!--/head-->

<body>
	<header id="header">
        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                        <a href="?controller=home"><img src="../images/home/<?php echo $thongtinshop[0]['logo_shop'] ?>" alt="" /></a>
                        </div>
                        
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                            <li><a href="?controller=account"><i class="fa fa-user"></i> Tài khoản</a></li>
                               <li><a href="?controller=checkout"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
                                <li><a href="?controller=cart"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                                <li><a href="?controller=logout"><i class="fa fa-lock"></i>Đăng xuất</a></li>
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
								<span class="sr-only">Chuyển đổi điều hướng</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="?controller=home">Trang chủ</a></li>
                                <li class="dropdown">
                                    <a href="?controller=shop">Cửa hàng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu ">
                                        <li><a href="?controller=checkout">Thủ tục thanh toán</a></li>
                                        <li><a href="?controller=cart">Giỏ hàng</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="?controller=blog" class="active">Blog</a></li>
                                <li><a href="?controller=contact">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                       
                        <!--/category-products-->

                        <!-- <div class="brands_products">
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div> -->
                    <!--price-range-->
                        <!-- <div class="price-range">
                           
                            <h2>PHẠM VI GIÁ</h2>
                            <div class="well">
                                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
                                <b>$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div> -->
                        <!--/price-range-->

                        <div class="shipping text-center">
                            <!--shipping-->
                            <img src="../images/home/shipping.jpg" alt="" />
                        </div>
                        <!--/shipping-->
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="blog-post-area">
                        <h2 class="title text-center">Mới nhất từ ​​Blog của chúng tôi</h2>
                        <?php foreach ($reversed_array as $key => $value) {?>
                     
                        <div class="single-blog-post">
                            <h3><?php echo $value['tensanpham']?></h3>
                            <div class="post-meta">
                                <ul>
                                    <li><i class="fa fa-user"></i>  <?php echo $value['nguoitao'] ?></li>
                      
                                    <li><i class="fa fa-calendar"></i> DEC <?php echo $value['ngaytao'] ?> </li>
                                </ul>
                                <span>
                                <?php global $color; for ($i=0; $i <5 ; $i++) { ?>
                                                    
                                                    <?php 
                                                    if (isset($rating)) {
                                                    if($i<$rating){
                                                    $color="color:#FFA617";
                                                    }else{
                                                    $color="color:";
                                                    } }?>
                                                   <span style=" font-size: 20px;<?php echo $color ?>"> &#9733;</span>
                                               <?php } ?>
								</span>
                            </div>
                            <a href="">
                                <img src="../images/sanpham/<?php echo $value['anh_chinh']  ?>" alt="">
                            </a>
                            <p><?php echo nl2br($value['nd_sp'])  ?></p>
                            <a class="btn btn-primary" href="">Read More</a>
                        </div>
                        <?php } ?>
                       
                        
                        <div class="pagination-area">
                            <ul class="pagination">
                            <?php if (isset($total_pages)) {
                            for ($i = 1; $i <= $total_pages; $i++) {
                            if ($i == $current_page) {
                                echo "<li class='active'><a href='?controller=blog&page=$i'>$i</a></li>";
                            } else {
                                echo "<li><a href='?controller=blog&page=$i'>$i</a></li>";
                                
                            }
                            }  }
                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="footer-widget">
            <div class="container">
                <div class="row" style="height: 20px">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3" style="border-right: 1px solid black; text-align: center;">
                        <div class="single-widget">
                            <a href="?controller=contact"><h4>Liên hệ chúng tôi qua Email</h4></a>
                        </div>
                    </div>
                    <div class="col-sm-3" style="border-right: 1px solid black; text-align: center;">
                        <div class="single-widget">
                            <a href="<?php
                                echo $link = sprintf('https://www.facebook.com/%s', $thongtinshop[0]['id_fanpage_fb']);
                            ?>">
                            <h4>Fanpage Facebook</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4" >
                        <div class="single-widget">
                            <a href="<?php
                                echo $link = sprintf('https://m.me/%s', $thongtinshop[0]['id_fanpage_fb']);
                            ?>"><h4>Liên hệ trực tuyến qua Messenger</h4></a>
                        </div>
                    </div>
                </div>
                <div style="text-align: center">
                    <img style="width: 150px; margin-right:10px" src="../images/home/logoCCDV.png" class=" img_information_shop" name="logo_shop" alt="">
                    <img style="width: 150px" src="../images/home/logoCCDV.png" class=" img_information_shop" name="logo_shop" alt="">
                    <h3>TVT-Shop</h3>
                    <?php echo $thongtinshop[0]['diachi_shop']?>
                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">©2023 - Bản quyền thuộc về Công ty TVT-Shop</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>

    </footer><!--/Footer-->
	

  
    <script src="../js/jquery.js"></script>
	<script src="../js/price-range.js"></script>
	<script src="../js/jquery.scrollUp.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>