<?php
$giohang=$db->get('giohang',array('id_taikhoan'=>$_SESSION['ss_user']));
    require ("view/v_cart.php");
   
?>