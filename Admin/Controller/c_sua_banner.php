
<?php 
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('thongtinshop', array('id'=>$_SESSION['ss_admin']));
        $banner = $db->get('banner', array());
        $thongtinshop = $db->get('thongtinshop', array());
        if(isset($_POST['btn_luu'])){

   if (!empty($_FILES['anh_banner1']['name'])) {
     $anh_banner1=$_FILES['anh_banner1'];
     $description='../images/home';
     $anh_banner11=move_uploaded_file($anh_banner1['tmp_name'],  $description.'/'.$anh_banner1["name"]);
     $anh_banner11= $anh_banner1["name"];
    }else{
        $anh_banner11=$banner['0']['anh_banner'];
    }

    if (!empty($_FILES['anh_banner2']['name'])) {
     $anh_banner2=$_FILES['anh_banner2'];
     $description='../images/home';
     $anh_banner12=move_uploaded_file($anh_banner2['tmp_name'],  $description.'/'.$anh_banner2["name"]);
     $anh_banner12= $anh_banner2["name"];
    }else{
        $anh_banner12=$banner['1']['anh_banner'];
    }
    if (!empty($_FILES['anh_banner3']['name'])) {
     $anh_banner3=$_FILES['anh_banner3'];
     $description='../images/home';
     $anh_banner13=move_uploaded_file($anh_banner3['tmp_name'],  $description.'/'.$anh_banner3["name"]);
     $anh_banner13= $anh_banner3["name"];
    }else{
        $anh_banner13=$banner['2']['anh_banner'];
    }
    if (!empty($_FILES['anh_banner4']['name'])) {
     $anh_banner4=$_FILES['anh_banner4'];
     $description='../images/home';
     $anh_banner14=move_uploaded_file($anh_banner4['tmp_name'],  $description.'/'.$anh_banner4["name"]);
     $anh_banner14= $anh_banner4["name"];
    }else{
        $anh_banner14=$banner['3']['anh_banner'];
    }
    if (!empty($_FILES['images_sale1']['name'])) {
        $images_sale1=$_FILES['images_sale1'];
        $description='../images/home';
        $images_sale11=move_uploaded_file($images_sale1['tmp_name'],  $description.'/'.$images_sale1["name"]);
        $images_sale11= $images_sale1["name"];
       }else{
        $images_sale11=$banner['0']['images_sale'];
       }
    if (!empty($_FILES['images_sale2']['name'])) {
        $images_sale2=$_FILES['images_sale2'];
        $description='../images/home';
        $images_sale12=move_uploaded_file($images_sale2['tmp_name'],  $description.'/'.$images_sale2["name"]);
        $images_sale12= $images_sale2["name"];
       }else{
        $images_sale12=$banner['1']['images_sale'];
       }        
  if (!empty($_FILES['images_sale3']['name'])) {
        $images_sale3=$_FILES['images_sale3'];
        $description='../images/home';
        $images_sale13=move_uploaded_file($images_sale3['tmp_name'],  $description.'/'.$images_sale3["name"]);
        $images_sale13= $images_sale3["name"];
       }else{
        $images_sale13=$banner['2']['images_sale'];
       }
 if (!empty($_FILES['images_sale4']['name'])) {
    var_dump($_FILES['images_sale4']['name']);
        $images_sale4=$_FILES['images_sale4'];
        $description='../images/home';
        $images_sale14=move_uploaded_file($images_sale4['tmp_name'],  $description.'/'.$images_sale4["name"]);
        $images_sale14= $images_sale4["name"];
       }else{
        print_r('ngoài');
        $images_sale14=$banner['3']['images_sale'];
       } 
if (!empty($_FILES['image_left']['name'])) {
  $image_left=$_FILES['image_left'];
        $description='../images/home';
  $image_left1=move_uploaded_file($image_left['tmp_name'],  $description.'/'.$image_left["name"]);
  $image_left1= $image_left["name"];
 }else{
  $image_left1=$banner['0']['image_left'];
     }
       $name_baner1=$_POST['name_baner1']  ;
       $name_baner2=$_POST['name_baner2']  ;
       $name_baner3=$_POST['name_baner3']  ;
       $name_baner4=$_POST['name_baner4']  ;  
       $nd_baner1=$_POST['nd_baner1']  ;
       $nd_baner2=$_POST['nd_baner2']  ;
       $nd_baner3=$_POST['nd_baner3']  ;
       $nd_baner4=$_POST['nd_baner4']  ;  

            $loi =[];
            if($name_baner1 == ''){
                $loi['name_baner1'] = 'ten_shop không được để trống';
            }


            if($name_baner2 == ''){
                $loi['name_baner2'] = 'Email không được để trống';
            }

            if($name_baner3 == ''){
                $loi['name_baner3'] = 'SĐT không được để trống';
            }

            
            if($name_baner4 == ''){
                $loi['name_baner4'] = 'Địa chỉ không được để trống';
            }
            if(!$loi){
                $db->update('banner',array(
                    'anh_banner'=>$anh_banner11,
                    'name_baner'=>$name_baner1,
                    'images_sale'=>$images_sale11,
                    'nd_baner'=>$nd_baner1,
                   'image_left'=>$image_left1
                ),array('id'=>1));
                $db->update('banner',array(
                    'anh_banner'=>$anh_banner12,
                    'name_baner'=>$name_baner2,
                    'images_sale'=>$images_sale12,
                    'nd_baner'=>$nd_baner2
                   
                ),array('id'=>2));
                $db->update('banner',array(
                    'anh_banner'=>$anh_banner13,
                    'name_baner'=>$name_baner3,
                    'images_sale'=>$images_sale13,
                    'nd_baner'=>$nd_baner3
                   
                ),array('id'=>3));
                $db->update('banner',array(
                    'anh_banner'=>$anh_banner14,
                    'name_baner'=>$name_baner4,
                    'images_sale'=>$images_sale14,
                    'nd_baner'=>$nd_baner4
                   
                ),array('id'=>4));
               
                header('location: ?controller=banner');
            }
        }
    }else{
        header('location: ?controller=login');
    }
    require 'view_web/v_sua_banner.php';
?>
