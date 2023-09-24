<?php 
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('thongtinshop', array('id'=>$_SESSION['ss_admin']));
        $thongtinshop = $db->get('thongtinshop', array());
    }else{
        header('location: ?controller=login');
    }
    require "View_web/v_thongtinshop.php";
?>