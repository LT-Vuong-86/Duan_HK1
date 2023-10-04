<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Thanh toán | TVT-Shop</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
    <style>
        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
                                -webkit-appearance: none;
                                margin: 0;
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
                        
                    </div>
                    <div class="col-sm-8">
                        
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->
    </header>
    <!--/header-->
    <form action="" method="post"> 
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="?controller=home">Trang chủ</a></li>
                    <li class="active">Thanh toán</li>
                </ol>
            </div>
            <!--/breadcrums-->
            <div class="shopper-informations">
                <div class="row">
                <div class="col-sm-3">
                        <div class="shopper-info">
                            <p>Thông tin người mua hàng</p>
                            
                                <input placeholder="Tên khách hàng" type="text" required name="full_name" value="<?php if (isset( $khachhang)) {
                                    echo $khachhang[0]['full_name'];
                                } ?>">
                                <p>
                                <?php if (isset( $loi['full_name'])) {
                                    echo  $loi['full_name'];
                                } ?></p>
                                <input type="tel" pattern="[0-9]{10}" title="Hãy nhập lại." required placeholder="Số điện thoại" name="sdt" value="<?php if (isset( $khachhang)) { echo $khachhang[0]['sdt'];}?>">
                                <p><?php if (isset( $loi['sdt'])) {
                                    echo  $loi['sdt'];
                                } ?></p>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="shopper-info">
                            <p>Địa chỉ người mua</p>
                            
                               <input required name="diachi" rows="3" placeholder="Địa chỉ nhận hàng" value="<?php if (isset( $khachhang)) { echo $khachhang[0]['diachi'];}?>">
                                <p><?php if (isset( $loi['diachi'])) {
                                    echo  $loi['diachi'];
                                } ?></p>
                                <input type="text" placeholder="email" name="email" value="<?php if (isset( $khachhang)) { echo $khachhang[0]['email'];}?>">
                             
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="shopper-info">
                            <p>Ghi chú đơn hàng</p>
                            <textarea name="ghichu" id="ghichu"  placeholder="Ghi chú đơn hàng"  cols="30" rows="3"></textarea>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-payment">
                <h2>Xác nhận & Thanh toán</h2>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu text-center">
                            <td class="image">Ảnh</td>
                            <td class="description">Tên sản phẩm</td>
                            <td class="quantity">Số lượng</td>
                            <td>loại</td>
                            <td>size</td>
                            <td class="price">Giá</td>
                            <td class="total">Tổng</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $tongtiensp = 0;
                            $tongsl = 0;
                            $tongtien = 0;
                            if(isset($_SESSION['cart'])){
                                foreach ($_SESSION['cart'] as $key => $value){
                                    $tongsl+=$value['sl'];
                                    $tongtiensp+=$value['sl']*$value['gia'];
                                    $tongtien = $tongtiensp;
                        ?>
                        <tr class="text-center">
                            <td class="">
                                <img style="width:100px" src="../images/sanpham/<?php echo $value['anh_chinh']?>" alt="">
                            </td>
                            <td class="">
                                <h4><?php echo $value['tensanpham']?></h4>
                            </td>

                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <p><?php echo $value['sl']?></p>
                                </div>
                            </td>
                            <td><div><p><?php echo $value['loai_sp']?></p></div></td>
                            <td><div><p><?php echo $value['size_name']?></p></div></td>

                            <td class="cart_price">
                                <p><?php echo number_format($value['gia'])?>đ</p>                                
                            </td>
                            
                            <td class="cart_total">
                                <p class="cart_total_price"><?php echo number_format($value['tong'])?>đ</p>
                            </td>

                            
                        </tr>
                        <?php } } else{ if(isset($giohang)){ 
                            $tongsl = 0;
                            foreach ($giohang as $key => $value) {
                                $donhang=$db->get('sanpham',array('id_sanpham'=>$value['id_sanpham']));
                                $tongsl+=$value['soluong'];  
                                $tongtiensp+=$value['soluong']*$donhang[0]['gia'];
                                ?>
                                 <tr class="text-center">
                            <td class="">
                                <img style="width:100px" src="../images/sanpham/<?php echo $donhang[0]['anh_chinh']?>" alt="">
                            </td>
                            <td class="">
                                <h4><?php echo $donhang[0]['tensanpham']?></h4>
                            </td>

                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <p><?php echo $value['soluong']?></p>
                                </div>
                            </td>
                            <td><div><p><?php echo $value['loai_sp']?></p></div></td>
                            <td><div><p><?php echo $value['size']?></p></div></td>

                            <td class="cart_price">
                                <p><?php echo number_format($donhang[0]['gia'])?>đ</p>                                
                            </td>
                            
                            <td class="cart_total">
                                <p class="cart_total_price"><?php echo number_format($value['tong'])?>đ</p>
                            </td>

                            
                        </tr>
                          <?php } } } ?>
                    </tbody>

                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Tổng số lượng</td>
                                    <td><?php echo $tongsl?></td>
                                    <td>Tổng tiền</td>
                                    <td><span><?php echo number_format($tongtiensp)?></span>đ</td>
                                    <td class="cart_delete">
                                        <a class="cart_quantity_delete" style="color: black;" href="?controller=cart">Sửa</a>
                                    </td>
                                </tr>

                                
                            </table>
                           <input type="submit"  class="btn btn-default check_out" name="btn_thanhtoan" value="Đồng ý với các quyết định trên: Mua ngay"><br>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <!--/#cart_items-->
    </form>


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