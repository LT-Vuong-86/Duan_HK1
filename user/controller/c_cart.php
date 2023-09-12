<?php
if(isset($_SESSION['ss_user'] )){
    $giohang = $db->get('giohang',array('id_taikhoan'=>$_SESSION['ss_user']));
}else{
   
    echo "<script>alert 'Cần đăng nhập'</script>";
    header('location: ?controller=login');
}

    require ("view/v_cart.php");
   
?>