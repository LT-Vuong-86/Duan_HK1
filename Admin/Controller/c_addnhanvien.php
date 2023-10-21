<?php
if(isset($_SESSION['ss_admin'])){
    $user=$db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));

    if(($user[0]['vaitro']=='admin') || ($user[0]['vaitro']=='manager')){
        if ($user[0]['vaitro'] == 'manager') {
            $vaitro='user';
        }else{
            $vaitro=null;
        }
        $email=0;
        if(isset($_POST['btn_addnhanvien'])){
            $username = $_POST['username'];
            $dang_username = '/^[a-zA-Z0-9-]+$/';
            $full_name = $_POST['full_name'];
            $password = $_POST['pass'];  
            $email = $_POST['email'];
            $dang_email = '/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]+$/';
            $sdt = $_POST['sdt'];
            $vaitro = trim($_POST['vaitro']);
            $date_create = date("d/m/y");
            $diachi = $_POST['diachi'];
            
            $loi = array();
            if(empty($username)){
                $loi['username'] = 'Tên tài khoản không được để trống';
            }elseif(!preg_match($dang_username, $username)) {
                $loi['username'] = 'Tên tài khoản cần viết liền ko dấu';
            }

            if(empty($full_name)){
                $loi['full_name'] = 'Tên đầy đủ không được để trống';
            }

            if(empty($password)){
                $loi['pass'] = 'Mật khẩu không được để trống';
            }

            if(empty($email)){
                $loi['email'] = 'Email không được để trống';
            }elseif(!preg_match($dang_email, $email)) {
                $loi['email'] = "Email không hợp lệ. Vui lòng nhập lại.";
            }

            if(empty($sdt)){
                $loi['sdt'] = 'SĐT không được để trống';
            }

            if(empty($vaitro)){
                $loi['vaitro'] = 'Vai trò không được để trống';
            }elseif(!in_array($vaitro, ['user', 'admin', 'manager'])) {
                $loi['vaitro'] = 'Vai trò phải là user hoặc admin hoặc manager';
            }
            
            if(empty($diachi)){
                $loi['diachi'] = 'Địa chỉ không được để trống';
            }
            
            //Kiểm tra khi insert dữ liệu mới vào bảng taikhoan có bị trùng với dữ liệu sẵn có ở trong bảng taikhoan nếu bị trùng thì báo lỗi đã tồn tại
            //và ko insert được phải nhập lại
            
            $taikhoan = $db->get('taikhoan',array('email'=> $email));
            $taikhoan_check = $db->get('taikhoan',array('username'=> $username));
            $taikhoan_check_sdt = $db->get('taikhoan',array('sdt'=> $sdt));
            if(empty($loi)){
                if(empty($taikhoan_check)){
                    if(!empty($full_name) && !empty($username) && !empty($password) && !empty($sdt) && !empty($vaitro) && !empty($diachi)){
                        if(empty($taikhoan_check_sdt)) {
                            if(empty($taikhoan)){
                                $db->insert('taikhoan',array(
                                    'username'=>$username,
                                    'full_name'=>$full_name,
                                    'pass'=>md5($password),
                                    'email'=>$email,
                                    'sdt'=>$sdt,
                                    'vaitro'=>$vaitro,
                                    'ngaytao'=>$date_create,
                                    'diachi'=>$diachi
                                ));        
                                echo "<script>window.location.href = '?controller=taikhoan';</script>";
                            }else{
                                $loi['email'] = 'Email đã tồn tại';
                            }
                        }else {
                            $loi['sdt'] = 'Số điện thoại đã tồn tại';
                        }
                    }
                }else {
                    $loi['username'] = 'Tên tài khoản đã tồn tại';
                }
            }
        }
    }
}
    require 'View_web/v_addnhanvien.php'
?>