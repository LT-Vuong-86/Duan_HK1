<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cửa hàng | TVT-Shop</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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

    
        section .container .row #main_shop .features_items h4{
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
                            <a href="?controller=home"><img src="../images/home/<?php echo $thongtinshop[0]['logo_shop'] ?>" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                            <li><a href="?controller=account"><i class="fa fa-user"></i> Tài khoản</a></li>
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

                                <li class="dropdown"><a href="?controller=shop" class="active">Cửa hàng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">

                                        <li><a href="?controller=checkout">Thủ tục thanh toán</a></li>
                                        <li><a href="?controller=cart">Giỏ hàng</a></li>
                                    </ul>
                                </li>

                                <li><a href="?controller=blog">Blog </a></li>
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
                        <div class="navigation">
                            <h3>Danh mục</h3>
                            <ul>
                                <?php 
                                    foreach($data_danhmuc as $key => $value){
                                ?>
                                    <a href="?controller=shop&id_dm=<?php echo $value['id_danhmuc']?>">
                                        <li class="active"> &#10132;
                                            <span class="title"><?php echo $value['danhmuc']?></span>
                                        </li>
                                    </a>
                                <?php }?>
                            </ul>
                        </div>

                        <div class="shipping text-center">
                            <img src="../images/home/<?php echo $banner[0]['image_left']?>" alt="" />
                        </div>

                    </div>
                </div>

                <div id="main_shop" class="col-sm-9 padding-right">
                    <div class="features_items" >
                        <!--features_items-->
                        <h2 class="title text-center">Cửa hàng</h2>
                        <?php
                            $i = 0;
                            foreach ($sanpham as $key => $value) {
                              
                                // Hiển thị sản phẩm
                                ?>
                                <div class="col-sm-4"> 
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                            <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>"> <img class="img-responsive" style="width:100%; height:250px; object-fit: cover;" src="../images/sanpham/<?php echo $value['anh_chinh']?>" alt="" /></a>
                                                <h5><?php echo $value['tensanpham']?></h5>

                                            </div>
                                            <div class="bottom">
                                                <h4><sup>đ</sup><?php echo number_format($value['gia'])?></h4>
                                                <h6>Đã bán: <?php echo $value['daban']?></h6>
                                                <a href="?controller=product-detail&id=<?php echo $value['id_sanpham']?>">
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
                                            // echo "<li><a href='?controller=shop&page=$i'>&raquo;</a></li>";
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

    <script>
        let toggle = document.querySelector(".toggle");
        let navigation = document.querySelector(".navigation");
        let main = document.querySelector(".main");
        let topbar = document.querySelector(".topbar");
        
        toggle.onclick = function(){
            navigation.classList.toggle("active");
            main.classList.toggle("active");
            topbar.classList.toggle("active");
        }
    </script>


</body>

</html>