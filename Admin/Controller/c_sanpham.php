<?php
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));
        
        if (isset($_POST['search'])) {
            $search_codition=$_POST['search_codition'];
            $content=$_POST['content'];
            $data_sanpham = $db->get_join(array(
                "id_sanpham", "tensanpham", "anh_chinh", "tonkho", "gia", "xuatxu", "daban", 'danhmuc.danhmuc'),
                'sanpham', 'danhmuc', 'JOIN', 'danhmuc.id_danhmuc = sanpham.id_danhmuc',
                array(),array($search_codition=>$content),array("id_sanpham" => "asc"/*desc|giảm|*/));
            
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
    require 'View_web/v_sanpham.php';

?>