<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/adminstyle.css">
    <title>TVT-Shop | Admin</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style>
       
        *{
            font-family: 'Ubuntu', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root{
            --black: black;
            --white: #fff;
            --yellow: #F5A623;
            --grey: grey;
            --smoke: rgb(220, 220, 220);
        }

        body{
            min-height: 100vh;
            overflow-x: hidden;
        }

        .container{
            position: relative;
            width: 100%;
        }

        .navigation{
            position: fixed;
            width: 300px;
            height: 100%;
            background: var(--black);
            border-left: 10px solid var(--black);
            transition: 0.5s;
            overflow: hidden;
        }

        .navigation.active{
            width: 80px;
        }

        .navigation ul{
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
        }
        .item  p {
	color:#363432;
	font-size:16px;
	font-weight:300;
	/* font-family: 'Roboto', sans-serif; */
 font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
        .navigation ul li{
            position: relative;
            width: 100%;
            list-style: none;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        /* .navigation ul li:hover,
        .navigation ul li.hovered{
            background: var(--white);
        } */

        .navigation ul li:nth-child(1){
            margin-bottom: 40px;
            pointer-events: none;
        }

        .navigation ul li a{
            position: relative;
            display: block;
            width: 100%;
            display: flex;
            text-decoration: none;
            color: var(--white);
        }

        /* .navigation ul li:hover a,
        .navigation ul li.hovered a{
            color: var(--black);
        } */

        .navigation ul li a .icon{
            position: relative;
            display: block;
            min-width: 60px;
            height: 60px;
            line-height: 75px;
            text-align: center;
        }

        .navigation ul li a .icon img{
            font-size: 1.75rem;
        }

        .navigation ul li a .icon i{
            font-size: 1.75rem;
        }

        .navigation ul li a .title{
            position: relative;
            display: block;
            padding: 0 10px;
            line-height: 60px;
            text-align: start;
            white-space: nowrap;
        }


        .main{
            position: absolute;
            width: calc(100% - 300px);
            left: 300px;
            min-height: 100vh;
            background: var(--white);
            transition: 0.5s;
        }

        .main.active{
            width: calc(100% - 80px);
            left: 80px;
        }

        .topbar{
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10px;
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



        .user{
            position: relative;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
        }

        .user img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cardBox{
            position: relative;
            width: 100%;
            display: grid;
            grid-template-columns: repeat(4 ,1fr);
            grid-gap: 30px;
        }

.total_banner .item{
  max-height: 400px;
}
        .active_admin{
            background: var(--yellow);
        }
        .search_codition{
            position: absolute;
        }
      
    </style>

</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="?controller=trangchu" >
                    <span class="icon"><img style="width: 40px; height: 40px;" src="../images/home/<?php echo $thongtinshop[0]['logo_shop'] ?>" alt=""></span>
                        <span class="title"><?php echo $thongtinshop[0]['ten_shop'] ?>
                    </a>
                </li>

                <li>
                    <a href="?controller=trangchu" >
                        <span class="icon"><i class='bx bx-home'></i></span>
                        <span class="title">Trang chủ</span>
                    </a>
                </li>

                <li>
                    <a href="?controller=taikhoan">
                        <span class="icon"><i class='bx bxs-user-detail'></i></span>
                        <span class="title">Tài khoản</span>
                    </a>
                </li>

                <li>
                    <a href="?controller=danhmuc">
                        <span class="icon"><i class='bx bx-list-ul'></i></span>
                        <span class="title">Danh mục</span>
                    </a>
                </li>

                <li>

                    <a href="?controller=sanpham">
                        <span class="icon"><i class='bx bxl-product-hunt'></i></span>
                        <span class="title">Sản phẩm</span>
                    </a>
                </li>

                <li>
                    <a href="?controller=donhang">
                        <span class="icon"><i class='bx bx-notepad'></i></span>
                        <span class="title">Đơn hàng</span>
                    </a>
                </li>

                <li>
                    <a href="?controller=khachhang">
                        <span class="icon"><i class='bx bx-user nav_icon'></i></span>
                        <span class="title">Khách hàng</span>
                    </a>
                </li>

                <li>
                    <a href="?controller=thongtinshop">
                        <span class="icon"><i class='bx bx-info-circle'></i></span>
                        <span class="title">Thông tin Shop</span>
                    </a>
                </li>
                <li>
                    <a href="?controller=banner" class='active_admin'>
                        <span class="icon"><i class='bx bx-info-circle'></i></span>
                        <span class="title">Banner</span>
                    </a>
                </li>
                <li>
                    <a href="?controller=dangxuat">
                        <span class="icon"><i class='bx bx-log-out'></i></span>
                        <span class="title">Đăng xuất</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <i class='bx bx-menu'></i>
                </div>
                
                <div class="user">
                    <img src="../images/home/<?php echo $thongtinshop[0]['logo_shop'] ?>" alt="">
                </div>
                <a href="?controller=sua_banner"><button>Sửa banner</button></a>
            </div>

            <div class="total_banner">
           
                            <div class="item active">
                                <div class="col-sm-12 col-md-3">
                                    <h1><span><?php echo $thongtinshop[0]['ten_shop'] ?></span></h1>
                                    <h2><?php echo $banner[0]['name_baner'] ?></h2>
                                    <p><?php echo $banner[0]['nd_baner'] ?></p>
                                    <!-- <button type="button" class="btn btn-default get">Get it now</button> -->
                                </div>
                                <div class="col-sm-12 col-md-3">
                                    <img src="../images/home/<?php echo $banner[0]['anh_banner'] ?>" class="girl img-responsive" alt="" />
                                    <img src="../images/home/<?php echo $banner[0]['images_sale'] ?>" class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-12 col-md-3">
                                    <h1><span><?php echo $thongtinshop[0]['ten_shop'] ?></span></h1>
                                    <h2><?php echo $banner[1]['name_baner'] ?></h2>
                                    <p><?php echo $banner[1]['nd_baner'] ?> </p>
                                    <!-- <button type="button" class="btn btn-default get">Get it now</button> -->
                                </div>
                                <div class="col-sm-12 col-md-3">
                                    <img src="../images/home/<?php echo $banner[1]['anh_banner'] ?>" class="girl img-responsive" alt="" />
                                    <img src="../images/home/<?php echo $banner[1]['images_sale'] ?>" class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-12 col-md-3">
                                    <h1><span><?php echo $thongtinshop[0]['ten_shop'] ?></span></h1>
                                    <h2><?php echo $banner[2]['name_baner'] ?></h2>
                                    <p><?php echo $banner[2]['nd_baner'] ?> </p>
                                    <!-- <button type="button" class="btn btn-default get">Get it now</button> -->
                                </div>
                                <div class="col-sm-12 col-md-3">
                                    <img src="../images/home/<?php echo $banner[2]['anh_banner'] ?>" class="girl img-responsive" alt="" />
                                    <img src="../images/home/<?php echo $banner[2]['images_sale'] ?>" class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-12 col-md-3">
                                    <h1><span><?php echo $thongtinshop[0]['ten_shop'] ?></span></h1>
                                    <h2><?php echo $banner[3]['name_baner'] ?></h2>
                                    <p><?php echo $banner[3]['nd_baner'] ?> </p>
                                    <!-- <button type="button" class="btn btn-default get">Get it now</button> -->
                                </div>
                                <div class="col-sm-12 col-md-3">
                                    <img src="../images/home/<?php echo $banner[3]['anh_banner'] ?>" class="girl img-responsive" alt="" />
                                    <img src="../images/home/<?php echo $banner[3]['images_sale'] ?>" class="pricing" alt="" />
                                </div>
                            </div>
                        </div>

            
        </div>
    </div>
    <script>
                //add hovered
               
        // let list = document.querySelectorAll(".navigation li");
        // function activeLink(){
        //     list.forEach(item=>{
        //         item.classList.remove("hovered");
        //     });
        //     this.classList.add("hovered");
        // }
        // list.forEach((item) => item.addEventListener("mouseover", activeLink));

        //menu toggle
        let toggle = document.querySelector(".toggle");
        let navigation = document.querySelector(".navigation");
        let main = document.querySelector(".main");

        toggle.onclick = function(){
            navigation.classList.toggle("active");
            main.classList.toggle("active");
        }
    </script>


    
</body>
</html>