<?php
if(isset($_SESSION['ss_user'])){
    $khachhang = $db->get('taikhoan', array('id'=>$_SESSION['ss_user']));
    
    
}else{
    $tongtiensp = 0;
    $tongsl = 0;
    $tongtien = 0;
    $date_oder = date("d/m/y");
    if(isset($_SESSION['cart'])){
        foreach ($_SESSION['cart'] as $key => $value){
            $tongsl+=$value['sl'];
            $tongtiensp+=$value['sl']*$value['gia'];
            $tongtien = $tongtiensp;
        }}
        $ghichu="khách hàng đặt";

if(isset($_POST['btn_thanhtoan'])){
    //  print_r($_SESSION['cart']) ;
    // die;
    if (isset($_POST['full_name'])) {
        $full_name = $_POST['full_name'];
    }
    if (isset($_POST['email'])) {
    $email = $_POST['email'];
    }
    if (isset($_POST['sdt'])) {
    $sdt = $_POST['sdt'];
    }
    if (isset($_POST['diachi'])) {
    $diachi = $_POST['diachi'];
    }
    $loi = array();
    if($full_name == ''){
        $loi['full_name'] = 'vui lòng điền tên';
    }
    if($email == ''){
        $loi['email'] = 'vui lòng điền email';
    }
    if($sdt == ''){
        $loi['sdt'] = 'vui lòng chọn sdt';
    }
    if($diachi == ''){
        $loi['diachi'] = 'vui lòng chọn địa chỉ';
    }

    if(!$loi){
        $db->insert('khachhang',array(                    
            'username'=>$full_name,
            'sdt'=>$sdt,
            'diachi'=>$diachi ,
            'email'=>$email                  
        ));    
        $id_kh=$db->insert_id();
        $db->insert('donhang',array(                    
            'id_kh'=>$id_kh,
            'tong'=>$tongtien,
            "id_tinhtrang"=>1              
        )); 
    
    $id_dh=$db->insert_id();
    foreach ($_SESSION['cart'] as $key => $value) {
           
        $db->insert('ctdonhang',array(
            'id_donhang'=>$id_dh,
            'id_sanpham'=>$value['id_sanpham'],
            'size'=> $value['size_name'],
            'loai_sp'=> $value['loai_sp'],
            'soluongsp'=>$value['sl'],
            'ghichu'=>$ghichu,
            'ngaydat'=>$date_oder
        ));
    
    }
        // header('location: ?controller=donhang');
    }
}
}
    require "view/v_checkout.php";
?>