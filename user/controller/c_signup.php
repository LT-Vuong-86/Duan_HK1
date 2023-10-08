<?php

    if(isset($_POST['btn_signup'])){
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $sdt = $_POST['sdt'];
        $email=0;
        $email = $_POST['email'];
        $vaitro = $_POST['vaitro'];
        $diachi = $_POST['diachi'];
        $date = date('d/m/y');
        
        $mk=md5($password);
        $taikhoan = $db->get('taikhoan',array('email'=> $email));
        $taikhoan_check = $db->get('taikhoan',array('username'=> $username));
        $taikhoan_check_sdt = $db->get('taikhoan',array('sdt'=> $sdt));

        if (empty($taikhoan)) {
            if(!empty($full_name) && !empty($username) && !empty($password) && !empty($sdt) && 
            !empty($diachi)){
                if(empty($taikhoan_check)) {
                    if(empty($taikhoan_check_sdt)){
                        $db->insert('taikhoan',array(
                            'username'=>$username,
                            'full_name'=>$full_name,
                            'pass'=>md5($password),
                            'email'=>$email,
                            'sdt'=>$sdt,
                            'vaitro'=>$vaitro,
                            'ngaytao'=>$date_oder,
                            'diachi'=>$diachi
                        ));
                        echo("<script>alert('Đăng ký thành công')</script>");
                        echo "<script>window.location.href = '?controller=login';</script>";
                    }else{
                        echo 'Số điện thoại đã tồn tại';
                    }
                }else {
                    echo 'Tên đăng nhập đã tồn tại';
                }
            }
        }else {
            echo 'Email đã tồn tại';
        }
    }
    require 'view/v_signup.php';
?>