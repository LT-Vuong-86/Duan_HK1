<?php
    if(isset($_SESSION['ss_admin'])){
        $thongtinshop = $db->get('thongtinshop', array());
        $tong =$db->get('sanpham', array());
        global $tongdoanhthu;
        global $tongdaban;
        foreach ($tong as $key => $value) {
            $tongdaban+=$value['daban'];
            $tongdoanhthu+=$value['daban']*$value['gia'];
        }
        $tong = $db->get('rate_sp',array());
        $count_rate= count($tong);

    }else{
        header('location: ?controller=login');
    }

    require 'View_web/v_trangchu.php';
?>