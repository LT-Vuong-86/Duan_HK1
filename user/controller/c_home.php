<?php
    $index = 0;
	$sanpham = $db->get('sanpham', array());
    $data_danhmuc = $db->get('danhmuc', array());
    $id_dm=[];
    $id_dm_main=0;
foreach ($data_danhmuc as $key => $value) {
    $id_dm[]=$value['id_danhmuc'];
    
}
for ($i = 0; $i < count($id_dm); $i++) {
    $id_dm_main=array_rand($id_dm);
     $id_dm_main=$id_dm[$id_dm_main];
     $id_dm_main1=array_rand($id_dm);
     $id_dm_main1=$id_dm[$id_dm_main1];
  }

for ($i = 0; $i < count($id_dm); $i++) {
    if ($id_dm[$i] == $id_dm_main) {
      unset($id_dm[$i]);
    }
  }
// echo "<pre>";
// print_r($id_dm);
// print_r($id_dm_main);
// die;


    require "view/v_home.php";
?>