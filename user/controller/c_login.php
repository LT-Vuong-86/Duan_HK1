<?php
    if(isset($_SESSION['ss_user'])){
        header('location: ?controller=home');
    }
    if(isset($_POST['btn_log'])){
     
        $username = $_POST['username'];
        $password = $_POST['pass'];

        $loi = array();
        if($username == ''){
            $loi['username'] = 'Tên đăng nhập không được để trống';
        }
        if($password == ''){
            $loi['pass'] = 'Mật khẩu không được để trống';
        }
       
        if(!$loi){
            $user = $db->get('taikhoan', array('username'=>$username));
            
            if (!empty($user)) {    
                // print_r($user);
                foreach ($user as $key => $value) {
            if ($value['vaitro']=="user") {
                if(!empty($vaitro['username'])){
                    $loi['username'] = 'Tên đăng nhập không tồn tại';
                }else{
                    if($password != $value['pass']){
                        $loi['pass'] = 'Sai mật khẩu hoặc tài khoản';
                    }
                }
            }else {
                $loi['pass'] = 'Sai mật khẩu hoặc tài khoản';
            }
           
        }
        }else{
            $loi['pass'] = 'Sai mật khẩu hoặc tài khoản';
            }
        
        }
        
        if(!$loi){
            $_SESSION['ss_user'] = $value['id'];
            $_SESSION['ss_name'] = $value['full_name'];
            header('location: ?controller=home');
        }
    }
    require 'view/v_login.php';
?>