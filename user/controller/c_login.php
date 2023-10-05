<?php
    if(isset($_SESSION['ss_user'])){
        header('location: ?controller=home');
    }
    if(isset($_POST['btn_log'])){
     
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $loi = array();
        if($email == ''){
            $loi['email'] = 'Email không được để trống';
        }
        if($password == ''){
            $loi['pass'] = 'Mật khẩu không được để trống';
        }
       
        if(!$loi){
            $password=md5($_POST['pass']);          
            $user = $db->get('taikhoan', array('email'=>$email));
            if (!empty($user)) {    
                if ($user[0]['vaitro']=="user") {  
                    if(!empty($vaitro['email'])){
                        $loi['email'] = 'Tên đăng nhập không tồn tại';
                    }else{
                        if($password != $user[0]['pass']) {
                            $loi['pass'] = 'Sai mật khẩu hoặc tài khoản  ';
                        }
                    }
                }else {
                    $loi['pass'] = 'Sai mật khẩu hoặc tài khoản';
                }
               
            }else{
                $loi['pass'] = 'Sai mật khẩu hoặc tài khoản';
                }        
        }
        
        if(!$loi){
            $_SESSION['ss_user'] = $user[0]['id'];
            header('location: ?controller=home');
        }
    }
    require 'view/v_login.php';
?>