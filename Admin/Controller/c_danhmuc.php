<?php
if(isset($_SESSION['ss_admin'])){
    $danhmuc = $db->get('danhmuc', array('id_danhmuc'=>$_SESSION['ss_admin']));
    $thongtinshop = $db->get('thongtinshop', array());
    if (isset($_POST['search'])) {
        $search_codition=$_POST['search_codition'];
        $content=$_POST['content'];
        $data_danhmuc = $db->get_like('danhmuc',$search_codition,$content,array());
    }else {
        $data_danhmuc = $db->get('danhmuc', array()); 
    }
    
}else{
    header('location: ?controller=login');
}
        $records_per_page = 15;
        $total_records = count($data_danhmuc);
        // Calculate the total number of pages
        global $total_pages;
        $total_pages = ceil($total_records / $records_per_page);
        // Get the current page number
        $current_page = $_GET['page'] ?? 1 ; 
        // var_dump($current_page);
        // Get the start and end records for the current page
        $start_record = ($current_page - 1) * $records_per_page;

        $data_danhmuc = array_slice($data_danhmuc, $start_record, $records_per_page);
    require 'View_web/v_danhmuc.php';
?>