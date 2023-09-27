<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt lại mật khẩu | TVT-Shop</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body{
            display: grid;
            place-items: center;
            padding: 24px;
            font-family: "Ubuntu";
            color: #000;
            transition: all 1s;
        }

        html, body{
            height: 100%;  
        }

        .container{
            width: 400px;
            border: 1px solid black;
            border-radius: 10px;
            padding: 40px;
        }

        .container h2{
            text-align: center;
        }

        body .button{
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .button{
            color: black;
            text-decoration: none;
            position: relative;
            display: flex;
            align-items: center;
            transition: all .3s;
            cursor: pointer;
            border-radius: 18px;
            background: #E0FFFF;
        }

        .button:hover{
            color: black;
            background: #fe890f;
        }

        .button span{
            position: relative;
            line-height: 1;
            font-weight: 500;
            letter-spacing: 0;
            text-transform: uppercase;
        }

        .button:active{
            transform: scale(.95);
        }
        
        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
                                -webkit-appearance: none;
                                margin: 0;
        }
        
        #canhbao{
            position: absolute;
            margin-top: -20px;
            margin-left: 0px;
        }
        
        .dangky{
            padding-top: 5px;
            text-align: end;
        }

        .dangky a:hover{
            color: crimson;
        }

    
       
    </style>
   </head><!--/head-->

<body>
    <section id="form">
        <!--form-->
        <div class="container">
            <div id="form-login-over" class="row" class="col-md-4 col-md-offset-5">
                <div class="col-sm-12">
                    <div id="code_sent">
                        <div class="login-form">
                            <!--login form-->
                            <h2 style="text-align:center">Nhập mã</h2>
                            <form action="#" method="post">
                                <div class="row mt-5">
                                    <input type="number" name="token" placeholder="Mã" class="form-control col-md-6" 
                                    value="<?php echo (isset($token))?$token:'' ?>">
                                </div>
                                <div id="canhbao" class="row mt-1">
                                    <?php if (isset($loi['token'])) {?>
                                        <p class="text-danger"><?php echo $loi['token'] ?></p>			
                                    <?php } ?>
                                </div>

                                <div class="row mt-5">
                                    <input type="password" name="new_password" placeholder="Nhập mật khẩu mới" class="form-control col-md-6" 
                                    value="<?php echo (isset($new_pass))?$new_pass:'' ?>">
                                </div>
                                <div id="canhbao" class="row mt-1">
                                    <?php if (isset($loi['new_password'])) {?>
                                        <p class="text-danger"><?php echo $loi['new_password'] ?></p>			
                                    <?php } ?>
                                </div>

                                <div class="row mt-5">
                                    <input type="password" name="confirm_password" placeholder="Nhập lại mật khẩu mới" class="form-control col-md-6" 
                                    value="<?php echo (isset($confirm_pass))?$confirm_pass:'' ?>">
                                </div>
                                <div id="canhbao" class="row mt-1">
                                    <?php if (isset($loi['confirm_password'])) {?>
                                        <p class="text-danger"><?php echo $loi['confirm_password'] ?></p>			
                                    <?php } ?>
                                </div>
                                <input class="button" type="submit" name="btn_confirm" value="Xác nhận">
                            </form>
                            <h5><span><a href="?controller=login">Quay lại</a></span></h5>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>

    <script src="../js/jquery.js"></script>                                
</body>
</html>
