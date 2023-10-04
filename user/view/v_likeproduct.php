<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Danh sách yêu thích | TVT-Shop</title>
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

      .like_product{
        margin-top: 20px;
        background-color: white;
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
        <div  class="like_product ">
                    <div class="features_items ">
                        <!--features_items-->
                        <h2 class="title text-center">Sản phẩm yêu thích</h2>
                        
                        <?php
                            foreach ($sanphamlikeproduct as $key => $sanphamlikeproduct) {                               
                        ?>
                        <a href="?controller=product-detail&id=<?php echo $sanphamlikeproduct['id_sanpham']?>">
                            <div class="col-sm-4 col-md-2"> 
                                <div class="product-image-wrapper">
                                    <div class="single-products text-center">
                                        <div class="productinfo">
                                            <a href="?controller=product-detail&id=<?php  echo $sanphamlikeproduct['id_sanpham'] ?>">
                                                <img class="img-responsive" style="width:100%; height:250px; object-fit: cover;" src="../images/sanpham/<?php echo $sanphamlikeproduct['anh_chinh']?>" alt="" />
                                            </a> 
                                            <h5><?php echo $sanphamlikeproduct['tensanpham']?></h5>
                                        </div>
                                        <div class="bottom">
                                            <h4><sup>đ</sup><?php echo number_format($sanphamlikeproduct['gia'])?></h4>
                                            <h6>Đã bán: <?php echo $sanphamlikeproduct['daban']?></h6>
                                        </div>
                                    </div>
                        
                                    <a href="?controller=likeproduct&method=xoa&id=<?php  echo $sanphamlikeproduct['id_sanpham'] ?>"><input type="submit" onclick="return confirm('Bạn đồng ý xóa sản phẩm này?');" style="width:100%" value="xóa" class="btn btn-danger"></a>
                                </div>
                                
                            </div>
                        </a>
                       
                              
                        <?php }?>
                    </div>
                    <a href="?controller=likeproduct&method=xoatat"><input type="submit" onclick="return confirm('Bạn đồng ý xóa tất cả?');" style="width:100%" value="xóa tất cả" class="btn btn-danger"></a>
                </div>  
              
    <footer id="footer ">
        <!--Footer-->
        <div class="footer-widget col-md-12">
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