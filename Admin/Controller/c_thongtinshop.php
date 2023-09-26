<?php 
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('thongtinshop', array('id'=>$_SESSION['ss_admin']));
        $thongtinshop = $db->get('thongtinshop', array());
        if(isset($_POST['btn_click'])){
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

            $loi =[];
            if($ten_shop == ''){
                $loi['ten_shop'] = 'ten_shop không được để trống';
            }


            if($email_shop == ''){
                $loi['email_shop'] = 'Email không được để trống';
            }

            if($sdt_shop == ''){
                $loi['sdt_shop'] = 'SĐT không được để trống';
            }

            
            if($diachi_shop == ''){
                $loi['diachi_shop'] = 'Địa chỉ không được để trống';
            }
            if(!$loi){
                $db->update('thongtinshop',array(
                    'logo_shop'=>$logo_shop,
                    'ten_shop'=>$ten_shop,
                    'email_shop'=>$email_shop,
                    'sdt_shop'=>$sdt_shop,
                    'diachi_shop'=>$diachi_shop,
                    'matkhau_shop'=>$matkhau_shop
                   
                ),array('id'=>1));
               
                header('location: ?controller=thongtinshop');
            }
        }
    }else{
        header('location: ?controller=login');
    }
    require "View_web/v_thongtinshop.php";
?>