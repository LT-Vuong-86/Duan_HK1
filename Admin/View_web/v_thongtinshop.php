<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/adminstyle.css">
    <title>TVT-Shop | Admin</title>
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

        .search{
            position: relative;
            width: 400px;
            margin: 0 10px;
        }

        .search label{
            position: relative;
            width: 100%;
        }

        .search label input{
            width: 100%;
            height: 40px;
            border-radius: 40px;
            padding: 5px 20px;
            padding-left: 35px;
            font-size: 18px;
            outline: none;
            border: 1px solid var(--black);
        }

        .search label span:hover{
            cursor: pointer;
            opacity: 0.6;
        }
        .search label span{
            position: absolute;
            top: 0;
            margin-top: -11px;
            border-radius: 45%;
            margin-right: -10px;
            right: 10px;
           cursor: pointer;
            font-size: 1.2rem;
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
            padding: 20px;

        }

        .cardBox .card{
            width: 100%;
            height: auto;
            position: relative;
            background: var(--white);
            padding: 30px;
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
            cursor: pointer;
            box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
        }

        .cardBox .card .cardName{
            text-align: center;
            color: var(--grey);
            font-size: 28px;
            margin-top: 5px;
        }
        
        .details{
            position: relative;
            width: 100%;
            padding: 20px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            grid-gap: 30px;
            margin-top: 10px;
        }
       

        .details .recentstaff{
            position: relative;
            display: grid;
            min-height: 600px;
            background: var(--white);
            padding: 20px;
            box-shadow: 0 7px 25px var(--black);
            border-radius: 20px;
        }

        .details .cardHeader{
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .cardHeader h2{
            font-weight: 600;
            color: var(--black);
        }

        .cardHeader .btn{
            position: relative;
            padding: 5px 10px;
            background: var(--yellow);
            text-decoration: none;
            color: var(--white);
            border-radius: 6px;
        }

        .details table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .details table thead td{
            font-weight: 600;
        }

        .details .recentstaff table tr{
            color: var(--grey);
            border-bottom: 1px solid var(--black);
        }

        .details .recentstaff table tr:last-child{
            border-bottom: none;
        }

        .details .recentstaff table tbody tr:hover{
            background: var(--yellow);
            color: var(--black );
        }

        .details .recentstaff table tr td{
            padding: 10px;
        }
        .active_admin{
            background: var(--yellow);
        }
        .search_codition{
            position: absolute;
        }
        .search_codition h4 {
            margin-left: -120px;
           
        }
        .search_codition select{
            margin-left: -120px;
            
        }
       .toggle form {
            width:2000px ;
            display: flex;
        }

        .information_shop{
            width: 550px;
            border: none;
            font-size: 20px;
            float: right;
            text-align: start;
            background: transparent;
        }

        .left_name{
            width: 400px;
            color: black;
            font-size: 20px;
            float: left;
        }
        .logo_main_shop{
            text-align:center;
            width: auto;
            color: black;
            font-size: 20px;
        }
        .left_logo{
            width: auto;
            color: black;
            font-size: 20px;
        }

        .img_information_shop{
            width: 150px;
        }

        .lleff_right{
            position: absolute;
            bottom: 10px;
            right: 10px;
            padding: 5px 10px;
            background: var(--black);
            text-decoration: none;
            color: var(--white);
            border-radius: 6px;
            cursor: pointer;
        }
        
        .full_map{
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            background-color: white;
            display: none;
        }
        .form_Information{
            border-radius: 20px;
            position: absolute;
            width: 400px;
            top: 5%;
            left: 30%;
            right: 30%;
            background-color: aliceblue;
            padding: 20px 20px 20px 20px;
           
        }
        .form_Information input{
            width: 300px;
            height: 30px;
        }

        .form_Information button .luu{

            float: left;
        }

        .form_Information button .huy{
            float: right;
        }
        .form_Information .dif_change{
            width: 100%;
        }
        .navigation li .icon img{
            position: relative;
            border-radius: 18px;
            width: 50%;
            margin-top: 10px;
        }
        .full_info{
            width: 100%;
            line-height: auto;
        }
        .full_table_info{
            width: 100%;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="?controller=trangchu" >
                        <span class="icon">
                            <img src="../images/home/<?php echo $thongtinshop[0]['logo_shop'] ?>" alt="">
                        </span>
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
                    <a href="?controller=thongtinshop" class='active_admin'>
                        <span class="icon"><i class='bx bx-info-circle'></i></span>
                        <span class="title">Thông tin Shop</span>
                    </a>
                </li>
                <li>
                    <a href="?controller=banner">
                        <span class="icon"><i class='bx bx-slideshow'></i></span>
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
            </div>

            <div class="cardBox">
               <a style="text-decoration:none" href="#">
                    <div class="card">
                        <div class="full_table_info">
                            <div class="cardName"><span>Thông tin của <?php echo $thongtinshop[0]['ten_shop']?></span></div>
                            
                            <div class="logo_main_shop">
                                <span class="left_logo">Logo:</span>
                                <img src="../images/home/<?php echo $thongtinshop[0]['logo_shop']?>" class=" img_information_shop" name="logo_shop" alt="">
                            </div>

                            <div class="full_info">
                                <div>
                                    <span class="left_name">Tên Shop:</span><input class="information_shop" name="ten_shop" disabled type="text" value="<?php echo $thongtinshop[0]['ten_shop']?>">                
                                </div>
                            
                                <div>
                                    <span class="left_name">Số điện thoại:</span><input class="information_shop" disabled type="number" value="<?php echo $thongtinshop[0]['sdt_shop']?>">                
                                </div>
                                <div>
                                    <span class="left_name">Gmail Shop:</span><input class="information_shop" disabled type="email" value="<?php echo $thongtinshop[0]['email_shop']?>">                
                                </div>
                                <div>
                                    <span class="left_name">Mật khẩu ứng dụng:</span><input class="information_shop" name="matkhau_shop" disabled type="text" value="<?php echo $thongtinshop[0]['matkhau_shop']?>">                
                                </div>
                                <div>
                                    <span class="left_name">Địa chỉ Shop:</span><input class="information_shop" disabled type="text" value="<?php echo $thongtinshop[0]['diachi_shop']?>">                
                                </div>
                                <div>
                                    <span class="left_name">Fanpage facebook</span><input class="information_shop" disabled name="id_fanpage_fb" type="text" value="<?php echo $thongtinshop[0]['id_fanpage_fb']?>">      
                                </div>
                            </div>
                            
                            <div><button id="click_show_taikhoan" class="lleff_right"><p>Thay đổi thông tin shop</p></button></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="full_map" id="click_none_form_taikhoan">
                <form action="" class="form_Information" method="post" enctype="multipart/form-data">
                    <div>
                        <span class="left_name">Logo:</span>
                        <input class="right1" type="file" name="logo_shop[]" id="image-input" onchange="chooseFile(this)" accept="image/*">
                        <img alt="" id="image" width="100%" height="150px" src="../images/home/<?php echo $thongtinshop[0]['logo_shop']?>">               
                    </div>
                    <div>
                        <span class="left_name">Tên Shop:</span><input  name="ten_shop"  type="text" value="<?php echo $thongtinshop[0]['ten_shop']?>">  
                    <?php if (isset($loi['ten_shop'])) {
                        echo $loi['ten_shop'];
                    } ?>        
                    </div>
                    
                    <div>
                        <span class="left_name">Số điện thoại:</span><input name="sdt_shop"  type="number" value="<?php echo $thongtinshop[0]['sdt_shop']?>">                
                    </div>
                    <div>
                        <span class="left_name">Gmail Shop:</span><input name="email_shop" value="<?php echo $thongtinshop[0]['email_shop']?>">                
                    </div>
                    <div>
                        <span class="left_name">Mật khẩu ứng dụng:</span><input name="matkhau_shop"  type="text" value="<?php echo $thongtinshop[0]['matkhau_shop']?>">                
                    </div>
                    <div>
                        <span class="left_name">Địa chỉ Shop:</span><input name="diachi_shop" type="text" value="<?php echo $thongtinshop[0]['diachi_shop']?>">      
                    </div>
                    <div>
                        <span class="left_name">Fanpage facebook</span><input name="id_fanpage_fb" type="text" value="<?php echo $thongtinshop[0]['id_fanpage_fb']?>">      
                    </div>
                    <div class="dif_change">
                        <button class="luu" name='btn_click'>Lưu</button>
                        <button class="huy" id="click_hide_taikhoan">Hủy</button>
                    </div>
                </form>
            </div>
    </div>

    <script>
        document.getElementById("image-input").addEventListener("change", function(event) {
        var selectedImage = document.getElementById("image");
        var selectedFile = event.target.files[0];

        if (selectedFile) {
            var reader = new FileReader();

            reader.onload = function(e) {
                selectedImage.src = e.target.result;
            }

            reader.readAsDataURL(selectedFile);
        } else {
            selectedImage.src = "#"; // Đặt nguồn ảnh về một giá trị mặc định nếu không có hình ảnh được chọn
        }
    });

    </script>
    <script>
        
  document.getElementById('click_hide_taikhoan').addEventListener('click', function() {
  document.getElementById('click_none_form_taikhoan').style.display = 'none';
});

document.getElementById('click_show_taikhoan').addEventListener('click', function() {
  document.getElementById('click_none_form_taikhoan').style.display = 'block';
});      //add hovered
               
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