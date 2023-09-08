<?php
if(isset($_SESSION['ss_user'])){
    $account = $db->get('taikhoan', array('id'=>$_SESSION['ss_user']));
}else{
    echo "<script>alert('Chức năng này cần đăng nhập')</script>";
    header('location: ?controller=home');
}
    require("view/v_account.php") ;
?>