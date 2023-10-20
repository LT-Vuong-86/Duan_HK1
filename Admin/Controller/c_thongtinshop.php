<?php 
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));
        $thongtinshop = $db->get('thongtinshop', array());
        
            if(isset($_POST['btn_click'])){
                if(($user[0]['vaitro']=='admin')){
                $logo_shop1 = $_FILES['logo_shop'];
                $logo_shop= $db->uploadfile($logo_shop1) ;
                if ($logo_shop=='') {
                    $logo_shop=$thongtinshop[0]['logo_shop'];
                }
                $ten_shop = $_POST['ten_shop'];
                $email_shop = $_POST['email_shop'];
                $sdt_shop=$_POST['sdt_shop'];
                $matkhau_shop=$_POST['matkhau_shop'];
                $diachi_shop = $_POST['diachi_shop'];
                $id_fanpage_fb = $_POST['id_fanpage_fb'];
            
                $db->update('thongtinshop',array(
                    'logo_shop'=>$logo_shop,
                    'ten_shop'=>$ten_shop,
                    'email_shop'=>$email_shop,
                    'sdt_shop'=>$sdt_shop,
                    'diachi_shop'=>$diachi_shop,
                    'matkhau_shop'=>$matkhau_shop,
                    'id_fanpage_fb'=>$id_fanpage_fb
                
                ),array('id'=>1));
            
                header('location: ?controller=thongtinshop');
                
            }else{
                echo '<script type="text/javascript">alert("Bạn không có quyền hạn");           
                </script>';
                echo "<script>window.location.href = '?controller=thongtinshop';</script>";
            }
        }
    }else{
        header('location: ?controller=login');
    }
    require "View_web/v_thongtinshop.php";
?>