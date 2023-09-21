<?php
    //Kiểm tra xem người dùng đã đăng nhập chưua
<<<<<<< HEAD
$donhang=array();
=======
>>>>>>> 219ea85eab6b09abd85d69cc3f7ec147567f1e62
	if (isset($_SESSION['ss_admin'])) {
        //Nếu đã đăng nhập thì lấy thông tin người dùng theo ss
        $donhang=$db->get('donhang',array());
        if (isset($_POST['search'])) {

            global $codition_search;
            $codition_search=$_POST['codition_search'];
            $content=$_POST['content'];
            $donhang = $db->get_like('donhang',$codition_search,$content,array());
    }
              
    //     if (isset($_POST['search'])) {
    //         $codition_search=$_POST['codition_search'];
    //         $content=$_POST['content'];
    //         $khachhang=$db->get_like('khachhang',$codition_search,$content,array('id_kh'=>$value['id_kh']));
    //     }else{ $donhang=$db->get('donhang',array());

    //   }
<<<<<<< HEAD
=======
    require_once('View_web/v_donhang.php');
>>>>>>> 219ea85eab6b09abd85d69cc3f7ec147567f1e62
    }
   else{
       //Nếu chưa đăng nhập thì sẽ cho người dùng về trang login
       header('location: ?controller=login');
   } 

<<<<<<< HEAD
    require_once('View_web/v_donhang.php');
=======
   
>>>>>>> 219ea85eab6b09abd85d69cc3f7ec147567f1e62
?>