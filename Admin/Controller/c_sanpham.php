<?php
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));
        $thongtinshop = $db->get('thongtinshop', array());
        if (isset($_POST['search'])) {
            $search_codition=$_POST['search_codition'];
            $content=$_POST['content'];
            $data_sanpham = $db->get_join(array(
                "id_sanpham", "tensanpham", "anh_chinh", "tonkho", "gia", "xuatxu", "daban", 'danhmuc.danhmuc'),
                'sanpham', 'danhmuc', 'JOIN', 'danhmuc.id_danhmuc = sanpham.id_danhmuc',
                array(),array($search_codition=>$content),array("id_sanpham" => "asc"/*desc|giảm|*/));
                require_once 'View_web/v_sanpham.php';
                die;
        }
        else {
            $data_sanpham = $db->get_join(array(
            "id_sanpham", "tensanpham", "anh_chinh", "tonkho", "gia", "xuatxu", "daban", 'danhmuc.danhmuc'),
            'sanpham','danhmuc', 'JOIN', 'danhmuc.id_danhmuc = sanpham.id_danhmuc',
            array(),array(),array("id_sanpham" => "asc"/*desc|giảm|*/));
        }
        
    }else{
        header('location: ?controller=login');
    }

            $records_per_page = 10;
            $total_records = count($data_sanpham);
            // Calculate the total number of pages
            global $total_pages;
            $total_pages = ceil($total_records / $records_per_page);
            // Get the current page number
            $current_page = $_GET['page'] ?? 1 ; 
            // var_dump($current_page);
            // Get the start and end records for the current page
            $start_record = ($current_page - 1) * $records_per_page;

            $data_sanpham = array_slice($data_sanpham, $start_record, $records_per_page);
    require 'View_web/v_sanpham.php';

?>