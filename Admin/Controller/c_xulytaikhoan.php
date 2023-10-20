<?php
if(isset($_SESSION['ss_admin'])){
    $user = $db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));
    if(($user[0]['vaitro']=='admin') ){

        $method = $_GET['method'];
        $id = $_GET['id'];
        switch ($method) {
            case 'xoa':
                $id = $_GET['id'];
                $db->delete('taikhoan', array('id'=>$id));
                header('Location: ?controller=taikhoan');
                break;

            case 'sua':
                $id = $_GET['id'];
                $data_nhanvien = $db->get('taikhoan', array('id'=>$id));
                if(isset($_POST['btn_suanhanvien'])){
                    $username = $_POST['username'];
                    $dang_username = '/^[a-zA-Z0-9-]+$/';
                    $full_name = $_POST['full_name'];
                    $email = $_POST['email'];
                    $dang_email = '/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]+$/';
                    $sdt = $_POST['sdt'];
                    $vaitro = $_POST['vaitro'];
                    $diachi = $_POST['diachi'];

                    $loi = array();
                    if(empty($username)){
                        $loi['username'] = 'Tên tài khoản cần viết liền ko dấu';
                    }elseif(!preg_match($dang_username, $username)) {
                        $loi['username'] = 'Tên tài khoản cần viết liền ko dấu';
                    }

                    if(empty($full_name)){
                        $loi['full_name'] = 'Tên đầy đủ không được để trống';
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
                    }
                    
                    if(empty($diachi)){
                        $loi['diachi'] = 'Địa chỉ không được để trống';
                    }

                    // Kiểm tra username
                    $taikhoan_username = $db->get('taikhoan',array('username'=>$username));
                    if(!empty($taikhoan_username)){
                        $loi['username'] = 'Tên tài khoản đã tồn tại';
                    }

                    // Kiểm tra sđt
                    $taikhoan_sdt = $db->get('taikhoan',array('sdt'=>$sdt));
                    if(!empty($taikhoan_sdt)){
                        $loi['sdt'] = 'Số điện thoại đã tồn tại';
                    }

                    // Kiểm tra email
                    $taikhoan_email = $db->get('taikhoan',array('email'=>$email));
                    if(!empty($taikhoan_email)){
                        $loi['email'] = 'Email đã tồn tại';
                    }

                    // Nếu không có lỗi, thì thực hiện cập nhật dữ liệu tài khoản
                    if(empty($loi)){
                        $db->update('taikhoan',array(
                            'username'=>$username,
                            'full_name'=>$full_name,
                            'email'=>$email,
                            'sdt'=>$sdt,
                            'vaitro'=>$vaitro,
                            'diachi'=>$diachi
                        ),array('id' => $id));

                        // Chuyển hướng đến trang danh sách tài khoản
                        echo "<script>window.location.href = '?controller=taikhoan';</script>";
                    }
                }
                require 'View_web/v_suataikhoan.php';
                break;

            default:

            break;    
        }    
        
    }            
    else
    {
        echo '<script type="text/javascript">alert("Bạn không có quyền hạn");           
        </script>';
        header('location: ?controller=taikhoan');
    }
}
?>

