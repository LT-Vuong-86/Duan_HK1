<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Đánh giá | TVT-Shop</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <style>
        .all_submit_form{
            margin-left: -25px;
        }

        .body_acount_right{
            background-color: rgb(255, 255, 255);
            max-height: 400px;
            overflow: scroll;
            border-left: 15px solid whitesmoke;
            border-top: 15px solid whitesmoke;
            border-radius: 25px;
            border-right: 15px solid whitesmoke;
            border-bottom: 15px solid whitesmoke;
        }

        .body_acount_right form li {
            margin-top: 20px;
            width: 200px;
        }

        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
                                -webkit-appearance: none;
                                margin: 0;
        }
        input[type="radio"] {
        display: none;
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
                            <a href="?controller=home"><img src="../images/home/<?php echo $thongtinshop[0]['logo_shop'] ?>" alt="" /></a>
                        </div>
                        
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                                <li><a href=""><i class="fa fa-star"></i>Danh sách yêu thích</a></li>
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
                        <!-- <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                        </div> -->
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li>
                                    <a href="?controller=home" class="active">Trang chủ</a>
                                    <p>Tài khoản</p>
                                </li>                                    
                                
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
    
           
                                
            <div class="tab-pane fade active in col-md-8 col-md-offset-2"  id="reviews">
            <form action="#" method="post">
                                       <p><b>Write Your Review</b></p>
                                    <div class="pager-area" style="border-bottom: 2px solid gray;">
                                            <ul class="pager pull-right">
                                               
                                            </ul>
                                        </div>
                                        
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                    </ul>
                                    <b>Xếp hạng: </b>
                                    <ul id="star_product">
                                        <input type="radio" name="gender" id="male1" value="1" hidden >
                                        <label for="male1">
                                        <li>1&#9734; </li>
                                        </label>
                                        <input type="radio" name="gender" id="male2" value="2" hidden >
                                        <label for="male2">
                                        <li>2&#9734; </li>
                                        </label>
                                        <input type="radio" name="gender" id="male3" value="3" hidden >
                                        <label for="male3">
                                        <li>3&#9734; </li>
                                        </label>
                                        <input type="radio" name="gender" id="male4" value="4" hidden >
                                        <label for="male4">
                                        <li> 4&#9734; </li>
                                        </label>
                                        <input type="radio" name="gender" id="male5" value="5" hidden >
                                        <label for="male5">
                                        <li>5&#9734; </li>
                                        </label>     
                                        <?php if (isset($loi['gender_rate'])) {?>
                                        <li><span color="red"><?php echo $loi['gender_rate'] ?></span></li>
                                   <?php } ?>
                                    </ul>
                                   
                                
                                        <textarea name="content_rate" placeholder="Nội dung bình luận"></textarea>
                                       
                                        <input  type="submit" name="btn_rate_sp" class="btn btn-default pull-right"
											value="Đăng đánh giá"
                                            >
                 </form>
</div>
    <footer id="footer">
        <!--Footer-->
        <div class="footer-widget">
            <div class="container">
                <div class="row" style="height: 20px">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2" style="border-right: 1px solid black; text-align: center;">
                        <div class="single-widget" >
                            <a href=""><h4>Hỗ trợ trực tuyến</h4></a>
                        </div>
                    </div>
                    <div class="col-sm-2" style="border-right: 1px solid black; text-align: center;">
                        <div class="single-widget">
                            <a href=""><h4>Liên hệ chúng tôi</h4></a>
                        </div>
                    </div>
                    <div class="col-sm-2" style="border-right: 1px solid black; text-align: center;">
                        <div class="single-widget">
                            <a href=""><h4>Chính sách bảo mật</h4></a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <a href=""><h4>Chính sách vận chuyển</h4></a>
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
	


  
</body>
</html>