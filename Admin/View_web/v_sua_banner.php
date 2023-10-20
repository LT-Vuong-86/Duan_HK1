<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/donhang.css">
    <title>Cập nhật banner</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');

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

        .details{
            position: relative;
            width: 100%;
            padding: 20px;
            display: grid;
            grid-gap: 30px;
            margin-top: 10px;
        }

        .details .recentstaff{
            position: relative;
            display: grid;
            min-height: 500px;
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
            position: absolute;
            bottom: 30px;
            right: 30px;
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

        .details .recentstaff table tr td:last-child {
            text-align: center;
        }

        .details .recentstaff table tr td:nth-child(1),
        .details .recentstaff table tr td:nth-child(2),
        .details .recentstaff table tr td:nth-child(5),
        .details .recentstaff table tr td:nth-child(6) {
            text-align: center;
        }

        .details .recentstaff table tr td:nth-child(3),
        .details .recentstaff table tr td:nth-child(4) {
            text-align: start;
        }

        .details .recentstaff table tr td:nth-child(7) {
            text-align: end;
        }

        .status.delivered{
            padding: 2px 4px;
            background: greenyellow;
            color: var(--white);
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .status.pending{
            padding: 2px 4px;
            background: rgb(255, 111, 0);
            color: var(--white);
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .status.return{
            padding: 2px 4px;
            background: red;
            color: var(--white);
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .status.inProgress{
            padding: 2px 4px;
            background: #1795ce;
            color: var(--white);
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .main{
            position: absolute;
            width: calc(100% - 300px);
            left: 300px;
            min-height: 100vh;
            background: var(--white);
            transition: 0.5s;
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
        .nd_baner{
            max-width: 300px;;
        }
        .save__banner{
            border: none;
            border-radius: 18px;
            background: var(--black);
            color: white;
            margin-left: 45%;
            padding: 10px 20px;
            cursor: pointer;
        }
        .save__banner:hover{
            background: var(--yellow);
            color: black;
        }
    </style>
</head>
<body>
    <div class="topbar">
        <div class="toggle">
            
        </div>


        <div class="user">
            <img src="../images/home/<?php echo $thongtinshop[0]['logo_shop'] ?> ?>" alt="">
        </div>
    </div>

    <div class="details">
        <div class="recentstaff">
        <h2>Sửa banner</h2>
        <a href="?controller=banner">Quay lại</a>
        <form action="" method="post" enctype="multipart/form-data">
        <button class="btn save__banner" name="btn_luu">Lưu banner</button>
            <div class="cardHeader">
            <table>
                <thead>
                    <tr>
                       <td>Ảnh</td>
                       <td>Ảnh sale  banner</td>
                       <td>Tên banner</td>
                       <td>Nội dung </td>
                    </tr>
                </thead>

                <tbody>
               
                    <tr>
            
                        <td ><span class="left_name">Ảnh chính:</span>
                                <input class="right1" type="file" name="anh_banner1" id="image-input1_0" onchange="chooseFile(this)" 
                                            accept="image/*">
                                <img alt="" id="image1_0" width="250px" height="150px" src="../images/home/<?php echo $banner[0]['anh_banner']?>"></td>                  
                           </td>
                       <td><span class="left_name">Ảnh sale:</span>
                                <input class="right1" type="file" name="images_sale1" id="image-input3_0" onchange="chooseFile(this)" 
                                            accept="image/*">
                                <img alt="" id="image3_0" width="250px" height="150px" src="../images/home/<?php echo $banner[0]['images_sale'] ?>"></td>                  
                          </td>
                          <td><input type="text" name="name_baner1" value="<?php echo $banner[0]['name_baner'] ?>"></td>
                       <td ><textarea name="nd_baner1" id="" cols="30" rows="10"><?php echo $banner[0]['nd_baner'] ?></textarea></td>

                    </tr>
                    <tr>
            
            <td ><span class="left_name">Ảnh chính:</span>
                    <input class="right1" type="file" name="anh_banner2" id="image-input1_1" onchange="chooseFile(this)" 
                                accept="image/*">
                    <img alt="" id="image1_1" width="250px" height="150px" src="../images/home/<?php echo $banner[1]['anh_banner']?>"></td>                  
               </td>
           <td><span class="left_name">Ảnh sale:</span>
                    <input class="right1" type="file" name="images_sale2" id="image-input3_1" onchange="chooseFile(this)" 
                                accept="image/*">
                    <img alt="" id="image3_1" width="250px" height="150px" src="../images/home/<?php echo $banner[1]['images_sale'] ?>"></td>                  
              </td>
              <td><input type="text" name="name_baner2" value="<?php echo $banner[1]['name_baner'] ?>"></td>
           <td ><textarea name="nd_baner2" id="" cols="30" rows="10"><?php echo $banner[1]['nd_baner'] ?></textarea></td>

        </tr>
        <tr>
            
            <td ><span class="left_name">Ảnh chính:</span>
                    <input class="right1" type="file" name="anh_banner3" id="image-input1_2" onchange="chooseFile(this)" 
                                accept="image/*">
                    <img alt="" id="image1_2" width="250px" height="150px" src="../images/home/<?php echo $banner[2]['anh_banner']?>"></td>                  
               </td>
           <td><span class="left_name">Ảnh sale:</span>
                    <input class="right1" type="file" name="images_sale3" id="image-input3_2" onchange="chooseFile(this)" 
                                accept="image/*">
                    <img alt="" id="image3_2" width="250px" height="150px" src="../images/home/<?php echo $banner[2]['images_sale'] ?>"></td>                  
              </td>
              <td><input type="text" name="name_baner3" value="<?php echo $banner[2]['name_baner'] ?>"></td>
           <td ><textarea name="nd_baner3" id="" cols="30" rows="10"><?php echo $banner[2]['nd_baner'] ?></textarea></td>

        </tr>
        <tr>
            
            <td ><span class="left_name">Ảnh chính:</span>
                    <input class="right1" type="file" name="anh_banner4" id="image-input1_3" onchange="chooseFile(this)" 
                                accept="image/*">
                    <img alt="" id="image1_3" width="250px" height="150px" src="../images/home/<?php echo $banner[3]['anh_banner']?>"></td>                  
               </td>
           <td><span class="left_name">Ảnh sale:</span>
                    <input class="right1" type="file" name="images_sale4" id="image-input3_3" onchange="chooseFile(this)" 
                                accept="image/*">
                    <img alt="" id="image3_3" width="250px" height="150px" src="../images/home/<?php echo $banner[3]['images_sale'] ?>"></td>                  
              </td>
              <td><input type="text" name="name_baner4" value="<?php echo $banner[3]['name_baner'] ?>"></td>
           <td ><textarea name="nd_baner4" id="" cols="30" rows="10"><?php echo $banner[3]['nd_baner'] ?></textarea></td>

        </tr>
                   
                </tbody>
            </table>
            <div>
            <span class="left_name">Ảnh quảng bá</span>
               <input class="right1" type="file" name="image_left" id="image-input2" onchange="chooseFile(this)" accept="image/*">
               <img alt="" id="image2" width="250px" height="150px" src="../images/home/<?php echo $banner[0]['image_left']?>">                
               </div>            
            </div>
            </form>
        </div>
    </div>

</body>
<script>
   
        document.getElementById("image-input2").addEventListener("change", function(event) {
        var selectedImage = document.getElementById("image2");
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
    for (let index = 0; index < 4; index++) {
       
   
    document.getElementById("image-input1_"+index).addEventListener("change", function(event) {
        var selectedImage = document.getElementById("image1_"+index);
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
         

    
    //image_sale
    document.getElementById("image-input3_"+index).addEventListener("change", function(event) {
        var selectedImage = document.getElementById("image3_"+index);
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
}
  

    </script>
    
</html>