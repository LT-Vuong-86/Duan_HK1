<?php
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));
        if (isset($_POST['search'])) {
            $search_codition=$_POST['search_codition'];
            $content=$_POST['content'];
            $data_khachhang = $db->get_like('khachhang',$search_codition,$content,array());
        }else {
            $data_khachhang = $db->get('khachhang', array());
        }
<<<<<<< HEAD
    }else{
        header('location: ?controller=khachhang');
    }
    require_once('View_web/v_khachhang.php');
=======
        require_once('View_web/v_khachhang.php');
    }else{
        header('location: ?controller=khachhang');
    }
 
>>>>>>> 219ea85eab6b09abd85d69cc3f7ec147567f1e62
?>