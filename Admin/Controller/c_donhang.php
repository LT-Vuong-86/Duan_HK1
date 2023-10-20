<?php
    //Kiểm tra xem người dùng đã đăng nhập chưa
    if (isset($_SESSION['ss_admin'])) {
        $donhang=array();
        $thongtinshop = $db->get('thongtinshop', array());
        //Nếu đã đăng nhập thì lấy thông tin người dùng theo ss
        $donhang=$db->get('donhang',array());
        if (isset($_POST['search'])) {
            global $codition_search;
            $codition_search=$_POST['codition_search'];
            $content=$_POST['content'];
            if ($codition_search == 'sdt') {
                $donhang = $db->get_like('khachhang', $codition_search, $content, array());
            } else {
                $donhang = $db->get_like('donhang', $codition_search, $content, array());
            }
        }else {
            $donhang = $db->get('donhang', array());
        }              
    }
    else{
       header('location: ?controller=login');
    } 
        $records_per_page = 15;
        $total_records = count($donhang);
        // Calculate the total number of pages
        global $total_pages;
        $total_pages = ceil($total_records / $records_per_page);
        // Get the current page number
        $current_page = $_GET['page'] ?? 1 ; 
        // var_dump($current_page);
        // Get the start and end records for the current page
        $start_record = ($current_page - 1) * $records_per_page;

        $donhang = array_slice($donhang, $start_record, $records_per_page);
    require_once('View_web/v_donhang.php');

?>