<?php
    if(isset($_SESSION['ss_admin'])){
        $thongtinshop = $db->get('thongtinshop', array());
        $user = $db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));
        if (isset($_POST['search'])) {
            $search_codition=$_POST['search_codition'];
            $content=$_POST['content'];
            $data_khachhang = $db->get_like('khachhang',$search_codition,$content,array());
        }else {
            $data_khachhang = $db->get('khachhang', array());
        }
    }else{
        header('location: ?controller=login');
    }

            $records_per_page = 10;
            $total_records = count($data_khachhang);
            // Calculate the total number of pages
            global $total_pages;
            $total_pages = ceil($total_records / $records_per_page);
            // Get the current page number
            $current_page = $_GET['page'] ?? 1 ; 
            // var_dump($current_page);
            // Get the start and end records for the current page
            $start_record = ($current_page - 1) * $records_per_page;
            $data_khachhang = array_slice($data_khachhang, $start_record, $records_per_page);
    require_once('View_web/v_khachhang.php');
?>