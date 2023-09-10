<?php
if (isset($_SESSION['ss_user'])) {
if (isset($_GET['id'])) {
    $loi=[];
    $account = $db->get('taikhoan', array('id'=>$_SESSION['ss_user']));
    $khachhang=$db->get('khachhang',array('sdt'=>$account[0]['sdt']));
    if (isset($khachhang[0]['id_kh'])) {
        $donhang=$db->get('donhang',array('id_kh'=>$khachhang[0]['id_kh']));
    }
    $id = $_GET['id'];
    $gender_rate=null;
    $content_rate=null;
    if (isset($_POST['btn_rate_sp'])) {
        $gender_rate=$_POST['gender'];
       
        if (isset($_POST['content_rate'])) {
            $content_rate=$_POST['content_rate'];
        }
        if($gender_rate == ''){
            $loi['gender_rate'] = 'Hãy chọn đánh giá';
        }
if (!$loi) {
    echo "yugcs";
    foreach ($donhang as $key => $value) { 
        
        if ($value['id_tinhtrang']==3) {
    $db->insert('rate_sp',array(
        'id_sanpham'=>$id,
        'rate_rating'=>$gender_rate,
        'rate_content'=>$content_rate,
        'id_taikhoan'=>$_SESSION['ss_user']
            ));
header('location: ?controller=product-detail&id='.$id);
           }}}
}
}  }    
    
    require "view/v_rate.php";
?>