<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Trang chủ | VTV-</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root{
            --black: black;
            --white: #fff;
            --yellow: #F5A623;
            --grey: grey;
            --smoke: rgb(220, 220, 220);
        }

        .product-image-wrapper{
            height: 330px;
        }

        #spin{
            height: 440px;
        }

        .features_items .product-image-wrapper .single-products h5{
            word-wrap: break-word;
            white-space: normal;
            overflow: hidden;
            display: -webkit-box;
            text-overflow: ellipsis;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            line-height: 14px; 
            font-size: 16px;
            color: black;
        }
        .features_items .product-image-wrapper .single-products h4{
            float: left; 
            color: crimson;

        }

        .features_items .product-image-wrapper .single-products h6{
            float: right;
        }

        .category-tab .product-image-wrapper .single-products img,
        .recommended_items .product-image-wrapper .single-products img{
            width:100%; height:250px; object-fit: cover;
        }

        h5{
            color: black; 
            position: absolute; 
            margin-top: 10px; 
        }

        .bottom{
            margin-top:45px; 
            width: 100%; 
            height: 100%; 
            position: absolute;
        }


        .topbar{
            position: absolute;
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10px;
        }

        .topbar.active{
            top: 0;
            bottom: 0;
        }

        .toggle{
            position: relative;
            top: 0;
            height: 60px;
            width: 60px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.5rem;
            cursor: pointer;
        }
        .navigation h3{
            text-align: center;
        }
        .navigation li {
            line-height: 30px;
            margin-left: 10px;
            color: black;
            cursor: pointer;
        }
        .navigation li:hover{
            color: orange;
        }
       
        .float-contact {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99999;
        }


        .chat-facebook,
        .call-hotline {
            display: block;
            margin-bottom: 6px;
            line-height: 0;
        }

        @media (max-width: 480px) {


            .chat-facebook,
            .call-hotline {
                display: inline-block;
            }
        }
   
    </style>
    </head><!--/head-->

<body>
	<header id="header">
        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="?controller=home">
                                <img src="../images/home/<?php echo $thongtinshop[0]['logo_shop'] ?>" alt=""/>
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="?controller=account"><i class="fa fa-user"></i> Tài khoản</a></li>
                                <!-- <li><a href="#"><i class="fa fa-star"></i>Danh sách yêu thích</a></li> -->
                                <li><a href="?controller=checkout"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
                                <li><a href="?controller=cart"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                                <li>
                                <?php if (isset($_SESSION['ss_user'])) {
                                    echo "<a href='?controller=logout'><i class='fa fa-lock'></i>Đăng xuất</a>";
                                }else{
                                    echo "<a href='?controller=login'><i class='fa fa-lock'></i>Đăng nhập</a>";
                                } ?>
                                </li>

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
                                <li><a href="?controller=home" class="active">Trang chủ</a></li>
                                <li class="dropdown">
                                    <a href="?controller=shop">Cửa hàng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu ">
                                        <li><a href="?controller=checkout">Thủ tục thanh toán</a></li>
                                        <li><a href="?controller=cart">Giỏ hàng</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="?controller=blog">Blog</a></li>
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
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                            <li data-target="#slider-carousel" data-slide-to="3"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-12 col-md-6">
                                    <h1><span><?php echo $thongtinshop[0]['ten_shop'] ?></span></h1>
                                    <h2><?php echo $banner[0]['name_baner'] ?></h2>
                                    <p><?php echo $banner[0]['nd_baner'] ?></p>
                                    <!-- <button type="button" class="btn btn-default get">Get it now</button> -->
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <img src="../images/home/<?php echo $banner[0]['anh_banner'] ?>" class="girl img-responsive" alt="" />
                                    <img src="../images/home/<?php echo $banner[0]['images_sale'] ?>" class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-12 col-md-6">
                                    <h1><span><?php echo $thongtinshop[0]['ten_shop'] ?></span></h1>
                                    <h2><?php echo $banner[1]['name_baner'] ?></h2>
                                    <p><?php echo $banner[1]['nd_baner'] ?> </p>
                                    <!-- <button type="button" class="btn btn-default get">Get it now</button> -->
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <img src="../images/home/<?php echo $banner[1]['anh_banner'] ?>" class="girl img-responsive" alt="" />
                                    <img src="../images/home/<?php echo $banner[1]['images_sale'] ?>" class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-12 col-md-6">
                                    <h1><span><?php echo $thongtinshop[0]['ten_shop'] ?></span></h1>
                                    <h2><?php echo $banner[2]['name_baner'] ?></h2>
                                    <p><?php echo $banner[2]['nd_baner'] ?> </p>
                                    <!-- <button type="button" class="btn btn-default get">Get it now</button> -->
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <img src="../images/home/<?php echo $banner[2]['anh_banner'] ?>" class="girl img-responsive" alt="" />
                                    <img src="../images/home/<?php echo $banner[2]['images_sale'] ?>" class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-12 col-md-6">
                                    <h1><span><?php echo $thongtinshop[0]['ten_shop'] ?></span></h1>
                                    <h2><?php echo $banner[3]['name_baner'] ?></h2>
                                    <p><?php echo $banner[3]['nd_baner'] ?> </p>
                                    <!-- <button type="button" class="btn btn-default get">Get it now</button> -->
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <img src="../images/home/<?php echo $banner[3]['anh_banner'] ?>" class="girl img-responsive" alt="" />
                                    <img src="../images/home/<?php echo $banner[3]['images_sale'] ?>" class="pricing" alt="" />
                                </div>
                            </div>
                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <div class="navigation">
                            <h3>Danh mục</h3>
                            <ul>
                                <?php 
                                    foreach($data_danhmuc as $key => $value){
                                ?>
                                    <a href="?controller=shop&id_dm=<?php echo $value['id_danhmuc']?>">
                                        <li> &#10132;
                                            <span class="title active"><?php echo $value['danhmuc']?></span>
                                        </li>
                                    </a>
                                <?php }?>
                            </ul>
                        </div>

                        <div class="shipping text-center">
                            <img src="../images/home/<?php echo $banner[0]['image_left']?>" alt="" />
                        </div>
                        <!--/shipping-->

                    </div>
                </div>

                <div class="col-md-9 col-xs-12 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Một số sản phẩm nổi bật</h2>

                        <?php
                            $i = 0;
                            $random_products = array_rand($sanpham, min(count($sanpham), 10));
                            foreach ($random_products as $key => $value) {
                                if(++$i == 10) break;

                                // Kiểm tra xem giá trị $random_product_id có phải là một khóa hợp lệ của mảng $sanpham không
                                if (array_key_exists($value, $sanpham)) {
                                    $random_product = $sanpham[$value];
                                } else {
                                    // Nếu giá trị $random_product_id không phải là một khóa hợp lệ của mảng $sanpham, thì bỏ qua sản phẩm này
                                    continue;
                                }

                        ?>
                        <a href="?controller=product-detail&id=<?php echo $random_product['id_sanpham']?>">
                            <div class="col-sm-4"> 
                                <div class="product-image-wrapper">
                                    <div class="single-products text-center">
                                        <div class="productinfo">
                                            <a href="?controller=product-detail&id=<?php  echo $random_product['id_sanpham'] ?>">
                                                <img class="img-responsive" style="width:100%; height:250px; object-fit: cover;" src="../images/sanpham/<?php echo $random_product['anh_chinh']?>" alt="" />
                                            </a> 
                                            <h5><?php echo $random_product['tensanpham']?></h5>
                                        </div>
                                        <div class="bottom">
                                            <h4><sup>đ</sup><?php echo number_format($random_product['gia'])?></h4>
                                            <h6>Đã bán: <?php echo $random_product['daban']?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php }?>
                    </div>
                    <!--features_items-->

                    <div class="category-tab">
                        <!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <!-- <li class="active"><a href="#tshirt" data-toggle="tab">Vest</a></li> -->
                                <?php 
                                    $danhmuc_extra=$db->get('danhmuc',array('id_danhmuc'=>$id_dm_main))
                                    ?>
                                    <?php foreach ($danhmuc_extra as $key => $value) {?>
                      
                                <li class="active"><a href="#danhmuc<?php echo $value['id_danhmuc'] ?>" data-toggle="tab"><?php echo $value['danhmuc'] ?></a></li>
                                <?php } ?>
                                
                                <!-- <li><a href="#blazers" data-toggle="tab">Quần nữ</a></li>
                                <li><a href="#dress" data-toggle="tab">Váy, đầm</a></li>
                                <li><a href="#boys" data-toggle="tab">Áo nam</a></li>
                                <li><a href="#kids" data-toggle="tab">Trẻ em</a></li> -->
                                <?php foreach ($id_dm as $key => $value1) {
                                    $danhmuc_extra=$db->get('danhmuc',array('id_danhmuc'=>$value1))
                                    ?>
                                    <?php foreach ($danhmuc_extra as $key => $value) {?>
                      
                                <li><a href="#danhmuc<?php echo $value['id_danhmuc'] ?>" data-toggle="tab"><?php echo $value['danhmuc'] ?></a></li>
                                <?php } ?>
                                <?php  } ?>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <?php foreach ($id_dm as $key => $value1) { 
                                $danhmuc_extra=$db->get('danhmuc',array('id_danhmuc'=>$value1))?>
                                <?php foreach ($danhmuc_extra as $key => $value9) {?>
                        <div class="tab-pane fade " id="danhmuc<?php echo $value9['id_danhmuc']  ?>">
                                <?php
                                $sanpham_danhmuc1=$db->get('sanpham',array('id_danhmuc'=>$value9['id_danhmuc']));
                                $sanpham_danhmuc = [];
                                for ($i = 0; $i < count($sanpham_danhmuc1); $i++) {
                                    $rand_index = mt_rand(0, count($sanpham_danhmuc1) - 1);
                                    $rand_element = $sanpham_danhmuc1[$rand_index];
                                    if (!in_array($rand_element, $sanpham_danhmuc)) {
                                        $sanpham_danhmuc[] = $rand_element;
                                    }
                                }
                                $dk=4;
                                foreach ($sanpham_danhmuc as $key => $value) { ?>  
                                    <?php if ($key < $dk) {?>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper" id="spin">
                                            <div class="single-products text-center">
                                                <div class="productinfo">
                                                <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>"> <img class="img-responsive" src="../images/sanpham/<?php echo $value['anh_chinh'] ?>" alt="" /></a>
                                                    <h5><?php echo $value['tensanpham']?></h5>
                                                </div>
                                                <div class="bottom">
                                                    <h3><span><?php echo number_format($value['gia'])?></span>đ</h3>
                                                    <p>Đã bán: <?php echo $value['daban']?></p>
                                                    <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                <?php }?>
                                <?php } ?>
                            </div>
                            <?php  } ?>

                            <div class="tab-pane fade active in" id="danhmuc<?php echo $id_dm_main  ?>">
                                <?php
                                 $sanpham_danhmuc_main=$db->get('sanpham',array('id_danhmuc'=>$id_dm_main));
                                $dk=4;
                                foreach ($sanpham_danhmuc_main as $key => $value) { ?>  
                                    <?php if ($key < $dk) {?>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper" id="spin">
                                            <div class="single-products text-center">
                                                <div class="productinfo">
                                                <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>"><img class="img-responsive" src="../images/sanpham/<?php echo $value['anh_chinh'] ?>" alt="" /></a>
                                                    <h5><?php echo $value['tensanpham']?></h5>
                                                </div>
                                                <div class="bottom">
                                                    <h3><span><?php echo number_format($value['gia'])?></span>đ</h3>
                                                    <p>Đã bán: <?php echo $value['daban']?></p>
                                                    <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                <?php }?>
                            
                            </div>

                            
                        </div>
                    </div>
                    <!--/category-tab-->

                    <div class="recommended_items">
                        <!--recommended_items-->
                        <h2 class="title text-center">Recommended items</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                <?php
                                 $sanpham_danhmuc_main=$db->get('sanpham',array('id_danhmuc'=>$id_dm_main1));
                                $dk=3;
                                foreach ($sanpham_danhmuc_main as $key => $value) { ?>  
                                    <?php if ($key < $dk) {?>       
                                    <div class="col-sm-4">
                                            <div class="product-image-wrapper" id="spin">
                                                <div class="single-products text-center">
                                                    <div class="productinfo">
                                                    <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>"><img class="img-responsive" src="../images/sanpham/<?php echo $value['anh_chinh'] ?>" alt="" /></a>
                                                        <h5><?php echo $value['tensanpham']?></h5>
                                                    </div>
                                                    <div class="bottom">
                                                        <h3><span><?php echo number_format($value['gia'])?></span>đ</h3>
                                                        <p>Đã bán: <?php echo $value['daban']?></p>
                                                        <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php }?>
                                </div>
                                
                                
                                <?php
                                 foreach ($id_dm as $key => $value1) { 
                                    $danhmuc_extra=$db->get('danhmuc',array('id_danhmuc'=>$value1))?>
                                    <div class="item">
                                    <?php foreach ($danhmuc_extra as $key => $value9) {
                                $sanpham_danhmuc1=$db->get('sanpham',array('id_danhmuc'=>$value9['id_danhmuc']));
                                $sanpham_danhmuc = [];
                                for ($i = 0; $i < count($sanpham_danhmuc1); $i++) {
                                    $rand_index = mt_rand(0, count($sanpham_danhmuc1) - 1);
                                    $rand_element = $sanpham_danhmuc1[$rand_index];
                                    if (!in_array($rand_element, $sanpham_danhmuc)) {
                                        $sanpham_danhmuc[] = $rand_element;
                                    }
                                }
                                $dk=3;
                                foreach ($sanpham_danhmuc as $key => $value) { ?>  
                                    <?php if ($key < $dk) {?>      
                                    <div class="col-sm-4">
                                            <div class="product-image-wrapper" id="spin">
                                                <div class="single-products text-center">
                                                    <div class="productinfo">
                                                    <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>"><img class="img-responsive" src="../images/sanpham/<?php echo $value['anh_chinh'] ?>" alt="" /></a>
                                                        <h5><?php echo $value['tensanpham']?></h5>
                                                    </div>
                                                    <div class="bottom">
                                                        <h3><span><?php echo number_format($value['gia'])?></span>đ</h3>
                                                        <p>Đã bán: <?php echo $value['daban']?></p>
                                                        <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>  
                                    <?php }?>
                                <?php }?>
                                </div>
                                <?php } ?>  
                                
                                
                            </div>
                            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!--/recommended_items-->

                </div>
            </div>
        </div>
        <div class="float-contact">
        <!-- <div class="call-hotline">
            <a href="tel:0388937608"><i style="font-size: 48px; color: greenyellow;" class="fa-solid fa-phone"></i></a>
        </div><br> -->
        <div class="chat-facebook">
            <?php
            echo $link = sprintf('<a href="https://m.me/%s" target="_blank"><i style="font-size: 48px; color: blue;" class="fa-brands fa-facebook-messenger"></i></a>', $thongtinshop[0]['id_fanpage_fb']);
            ?>
            <!-- <a href="https:m.me/141601539033801" target="_blank"><i style="font-size: 48px; color: blue;" class="fa-brands fa-facebook-messenger"></i></a> -->
        </div>
    </div>
    </section>

    <footer id="footer">
        <!--Footer-->
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
                    <div class="col-sm-4">
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
                    <p class="pull-right">Thiết kế bởi <span><a target="_blank" href="">TVT-Shop</a></span></p>
                </div>
            </div>
        </div>

    </footer><!--/Footer-->

    <script src="../js/jquery.scrollUp.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/price-range.js"></script>    
    <script src="../js/main.js"></script>

</body>
</html>