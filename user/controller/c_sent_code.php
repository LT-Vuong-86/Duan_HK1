<?php
    if(isset($_SESSION['ss_user'])){
        header('location: ?controller=home');
    }
    if(isset($_POST['btn_confirm'])){
        $email = $_SESSION['ss_email'];
        $user = $db->get('taikhoan', array());
        $code = $_POST['token'];
        $new_pass = $_POST['new_password'];
        $confirm_pass = $_POST['confirm_password'];
        $code_get = $db->get('token', array('email'=>$email));
        $max_code = max($code_get);

        $loi = array();

        if(!empty($max_code)){
            if($max_code['code_token'] != $code){
                $loi['token'] = 'Mã code không tồn tại';
            }
        }
        if($code == ''){
            $loi['token'] = 'Mã không được để trống';
        }
        if($new_pass == ''){
            $loi['new_password'] = 'Mật khẩu không được để trống';
        }
        
        
        
        if ($new_pass != $confirm_pass) {
            // Mật khẩu không khớp
            $loi['confirm_password'] = 'Sai mật khẩu nhập lại';
        }

        if(!$loi){
            $db->update('taikhoan', array(
                'pass'=>md5($new_pass)
            ),array('email'=>$email));
            $db->delete('token', array(
                'email'=>$email
            ));
        }
        
        
        if(!$loi){
            echo "<script>alert('Cập nhật thành công!')</script>";
            echo "<script>window.location.href = '?controller=login';</script>";
        }
    }
    require 'view/v_sent_code.php';
?>