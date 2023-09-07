<?php
    //Lấy id trên thanh url
    if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //Lấy dữ liệu theo id tương ứng đã lấy được
    $product = $db->get('sanpham',array('id_sanpham'=>$id));
    $anhphu1=$db->get('loai_sp', array('id_sanpham'=>$id));
    $size_name='';
    $loai_sp='';
    if (isset($_POST['themgiohang'])) {
    $ten=$product[0]['tensanpham'];
    if (isset($_POST['size_name'])) {
        $size_name=$_POST['size_name'];
    }
    if (isset($_POST['loai_sp'])) {
    $loai_sp=$_POST['loai_sp'];
    }
    $gia=$product[0]['gia'];
    if (isset($_POST['loai_sp'])) {
    $sl=$_POST['sl'];
    
    $tong=$gia*$sl;
    }
    $loi = array();
   if($size_name == ''){
            $loi['size_name'] = 'vui lòng chọn size';
        }
    if($loai_sp == ''){
            $loi['loai_sp'] = 'vui lòng chọn loại sp';
   }
   if (!$loi) {
    
    if (isset($_SESSION['ss_user'])) {
        $giohang=$db->get('giohang',array('id_taikhoan'=>$_SESSION['ss_user'],'id_sanpham'=>$id,'size'=>$size_name));
        foreach ($giohang as $key => $value) {
         if (isset($giohang)) {
         foreach ($giohang as $key => $value) {
             $db->update('giohang',array(
                 'soluong'=>$value['soluong']+$sl,
                 'tong'=>$value['tong']+$tong
             ),array('id_taikhoan'=>$_SESSION['ss_user'],'size'=>$size_name,'id_sanpham'=>$id));};
           
            }else {
        $db->insert('giohang',array(
            'id_taikhoan'=>$_SESSION['ss_user'],
            'id_sanpham'=>$id,
            'loai_sp'=>$loai_sp,
            'size'=>$size_name,
            'soluong'=>$sl,
            'tong'=>$tong
        ));}}
    }else{
        echo "<script>alert('Chức năng này cần đăng nhập')</script>";
    }
  
       
    }
    
    
     }
     if (isset($_POST['muangay'])) {
        $ten=$product[0]['tensanpham'];
        if (isset($_POST['size_name'])) {
            $size_name=$_POST['size_name'];
        }
        if (isset($_POST['loai_sp'])) {
        $loai_sp=$_POST['loai_sp'];
        }
        $gia=$product[0]['gia'];
        if (isset($_POST['loai_sp'])) {
        $sl=$_POST['sl'];
        
        $tong=$gia*$sl;
        }
        $loi = array();
       if($size_name == ''){
                $loi['size_name'] = 'vui lòng chọn size';
            }
        if($loai_sp == ''){
                $loi['loai_sp'] = 'vui lòng chọn loại sp';
       }
       if (!$loi) {
        
       
       if (isset($_SESSION['ss_user'])) {    
       $giohang=$db->get('giohang',array('id_taikhoan'=>$_SESSION['ss_user'],'id_sanpham'=>$id,'size'=>$size_name));
       foreach ($giohang as $key => $value) {
        if (isset($giohang)) {
        foreach ($giohang as $key => $value) {
            $db->update('giohang',array(
                'soluong'=>$value['soluong']+$sl,
                'tong'=>$value['tong']+$tong
            ),array('id_taikhoan'=>$_SESSION['ss_user'],'size'=>$size_name,'id_sanpham'=>$id));};
           header("location: ?controller=checkout");
           }else {
            $db->insert('giohang',array(
                'id_taikhoan'=>$_SESSION['ss_user'],
                'id_sanpham'=>$id,
                'loai_sp'=>$loai_sp,
                'size'=>$size_name,
                'soluong'=>$sl,
                'tong'=>$tong
            ));
            header("location: ?controller=cart");
           }
         
       }
       
      
    }else{
        if (isset($_SESSION['cart'])){
            echo "sydvhv";
            if (isset($_SESSION['cart'][$id])){
               
                //Nếu đã có sản phẩm đó rồi thì +1 sản phẩm
                $_SESSION['cart'][$id]['sl']+=1;
                $_SESSION['cart'][$id]['loai_sp']=$_SESSION['cart'][$id]['loai_sp'].", ".$loai_sp;
            }else{
                echo "ácvi";
        $_SESSION['cart'][$id]['id_sanpham'] = $id;
        $_SESSION['cart'][$id]['tensanpham'] = $product[0]['tensanpham'];
        $_SESSION['cart'][$id]['gia'] = $product[0]['gia'];
        $_SESSION['cart'][$id]['sl'] = $sl;
        $_SESSION['cart'][$id]['anh_chinh'] = $product[0]['anh_chinh'];
        $_SESSION['cart'][$id]['loai_sp'] = $loai_sp;
        $_SESSION['cart'][$id]['size_name'] = $size_name;
        $_SESSION['cart'][$id]['tong'] = $tong;
        header("location: ?controller=cart");
            }
       }else{
         $_SESSION['cart'][$id]['id_sanpham'] = $id;
        $_SESSION['cart'][$id]['tensanpham'] = $product[0]['tensanpham'];
        $_SESSION['cart'][$id]['gia'] = $product[0]['gia'];
        $_SESSION['cart'][$id]['sl'] = $sl;
        $_SESSION['cart'][$id]['anh_chinh'] = $product[0]['anh_chinh'];
        $_SESSION['cart'][$id]['loai_sp'] = $loai_sp;
        $_SESSION['cart'][$id]['size_name'] = $size_name;
        $_SESSION['cart'][$id]['tong'] = $tong;
        header("location: ?controller=cart");

       }
    }

    }
     }
    // $loai_sp=$_POST['jehvd'];
                          
        // $size_phu = $_POST['size_name'];  
   
    }
    require_once ("view/v_product-detail.php");
?>