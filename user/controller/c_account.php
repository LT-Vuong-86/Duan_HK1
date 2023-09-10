<?php
if(isset($_SESSION['ss_user'])){
    $account = $db->get('taikhoan', array('id'=>$_SESSION['ss_user']));
    $khachhang=$db->get('khachhang',array('sdt'=>$account[0]['sdt']));
    if (isset($khachhang[0]['id_kh'])) {
        $donhang=$db->get('donhang',array('id_kh'=>$khachhang[0]['id_kh']));
    }
   
  
}else{
    echo "<script>alert('Chức năng này cần đăng nhập')</script>";
    header('location: ?controller=login');
}
    require("view/v_account.php") ;
?>