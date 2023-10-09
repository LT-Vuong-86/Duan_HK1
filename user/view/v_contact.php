<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Liên hệ | TVT-Shop</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <style>
        .footer{
            position: fixed;
            bottom: 0;
            width: 100%;
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
                                <li><a href="?controller=likeproduct"><i class="fa fa-star"></i>Danh sách yêu thích</a></li>
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
                    <div class="col-sm-12">
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <!-- <div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
					</div>
				</div>-->
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Liên lạc</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" method="post">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required" placeholder="SĐT">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" placeholder="Chủ thể">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Tin nhắn của bạn ở đây"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Thêm">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center"> Thông tin liên lạc</h2>
                        <address>
	    					<p>Tên shop:<?php echo $thongtinshop[0]['ten_shop'] ?></p>
							
							<p>SĐT: <?php echo $thongtinshop[0]['sdt_shop'] ?></p>
							<p>Email: <?php echo $thongtinshop[0]['email_shop'] ?></p>
                            <p>Địa chỉ: <?php echo $thongtinshop[0]['diachi_shop'] ?></p>
                            <p>fanpage facebook: <?php echo $thongtinshop[0]['id_fanpage_fb'] ?></p>
	    				</address>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/#contact-page-->

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
                    <p class="pull-right">Thiết kế bởi <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->




    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="../js/gmaps.js"></script>

</body>

</html>