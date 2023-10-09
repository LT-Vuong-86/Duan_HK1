<?php
if(isset($_SESSION['ss_admin'])){
    $user=$db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));

    if(($user[0]['vaitro']=='admin') || ($user[0]['vaitro']=='manager')){
        if(isset($_POST['btn_adddonhang'])){
            $ten = $_POST['ten'];
            $sdt = $_POST['sdt'];
            $diachi = $_POST['diachi'];
            $slmasp = $_POST['slmasp'];
            $tong=$_POST['tong'];
            $loai_sp=$_POST['loai_sp'];
            $size_name=$_POST['size'];
            $ghichu=$_POST['ghichu'];
            $date_oder = date("d/m/y");
            $names = [];
            $soluong=[];
            for ($i = 0; $i < $slmasp; $i++) {
             $names[] = $_POST["masp$i"];
             $soluong[]=$_POST["soluong$i"];
            }
            
            $loi=[];
            if($loai_sp == ''){
                $loi['loai_sp'] = 'Loại sản phẩm không được để trống';
            }
            if($size_name == ''){
                $loi['size'] = 'Kích thước không được để trống';
            }
            if($ten == ''){
                $loi['ten'] = 'Tên sản phẩm không được để trống';
            }

            if($sdt == ''){
                $loi['sdt'] = 'Số điện thoại người nhận không được để trống';
            }

            if($diachi == ''){
                $loi['diachi'] = 'Địa chỉ nhận hàng không được để trống';
            }

            if($slmasp == ''){
                $loi['slmasp'] = 'Số lượng mã sản phẩm không được để trống';
            }

            if($tong == ''){
                $loi['tong'] = 'Tổng tiền không được để trống';
            }
            
            if($ghichu == ''){
                $loi['ghichu'] = 'Đã bán không được để trống';
            }     
            for ($i=0; $i < $slmasp; $i++) { 
                $sanpham=$db->get('sanpham',array('id_sanpham'=>$names[$i]));  

                if(empty($sanpham[0]['id_sanpham'])){
                    $loi['masp'] = 'Sản phẩm ko tồn tại';
                }
              }      
            if(!$loi){
               
                $db->insert('khachhang',array(                    
                    'username'=>$ten,
                    'sdt'=>$sdt,
                    'diachi'=>$diachi                   
                ));    
                $id_kh=$db->insert_id();
                $db->insert('donhang',array(                    
                    'id_kh'=>$id_kh,
                    'tong'=>$tong,
                    "id_tinhtrang"=>1              
                )); 
                $id_dh=$db->insert_id();
               
                for ($i=0; $i < $slmasp; $i++) {             
                $db->insert('ctdonhang',array(
                    'id_donhang'=>$id_dh,
                    'id_sanpham'=>$names[$i],
                    'size'=>$size_name,
                    'loai_sp'=>$loai_sp,
                    'soluongsp'=>$soluong[$i],
                    'ghichu'=>$ghichu,
                    'ngaydat'=>$date_oder
                ));
            }
                header('location: ?controller=donhang');
            }
        }
    }else{
    header('location: ?controller=login');
}
}
    require 'View_web/v_adddonhang.php';
?>