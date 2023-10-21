<?php
if(isset($_SESSION['ss_admin'])){
    $user = $db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));
    if(($user[0]['vaitro']=='admin') || ($user[0]['vaitro']=='manager')){
        
        $method = $_GET['method'];
        $id = $_GET['id'];
        switch ($method) {
            case 'xoa':
                $id = $_GET['id'];   
                $db->delete('loai_sp',array('id_sanpham'=>$id)) ;      
                $db->delete('sanpham', array('id_sanpham'=>$id));  
                           
                header('Location: ?controller=sanpham');
                break;

            case 'sua':
                $id = $_GET['id'];
                $data_sanpham = $db->get('sanpham', array('id_sanpham'=>$id));
                if(isset($_POST['btn_suasanpham'])){
                    $tensanpham = isset($_POST['tensanpham']) ? $_POST['tensanpham']  : $data_sanpham[0]['tensanpham'] ;
                    $tonkho = isset($_POST['tonkho']) ? $_POST['tonkho'] : $data_sanpham[0]['tonkho'];
                    $gia = isset($_POST['gia']) ? $_POST['gia'] : $data_sanpham[0]['gia'];
                    $xuatxu = isset($_POST['xuatxu']) ? $_POST['xuatxu'] : $data_sanpham[0]['xuatxu'];
                    $daban = isset($_POST['daban']) ? $_POST['daban'] : $data_sanpham[0]['daban'];
                    $danhmuc = isset($_POST['id_dm']) ? $_POST['id_dm'] : $data_sanpham[0]['id_dm'];
                    $uploadedFile=$_FILES['anh_chinh'];
                    $uploadedFilevdb=$_FILES['anh_chinh']['tmp_name'];
                                   
                        $anh_chinh=$db->uploadfile($uploadedFile );
                     
                    $loi = array();
                    if(empty($tensanpham)){
                        $loi['tensanpham'] = 'Tên sản phẩm không được để trống';
                    }

                    if(empty($xuatxu)){
                        $loi['xuatxu'] = 'Xuất xứ không được để trống';
                    }

                    if(empty($uploadedFile)){
                        $loi['anh_chinh'] = 'Ảnh sp không được để trống';
                    }
                    
                    if(empty($gia)){
                        $loi['gia'] = 'Giá tiền không được để trống';
                    }
                    if(empty($loi)){
                        if (!empty($anh_chinh)) {
                            $db->update('sanpham',array(
                                'tensanpham'=>$tensanpham,  
                                'anh_chinh' =>$anh_chinh,
                                'tonkho'=>$tonkho,
                                'gia'=>$gia,
                                'xuatxu'=>$xuatxu,
                                'daban'=>$daban,
                                'id_danhmuc'=>$danhmuc
                            ),array('id_sanpham'=>$id));
                            
                        }else {
                            $db->update('sanpham',array(
                                'tensanpham'=>$tensanpham,  
                                'tonkho'=>$tonkho,
                                'gia'=>$gia,
                                'xuatxu'=>$xuatxu,
                                'daban'=>$daban,
                                'id_danhmuc'=>$danhmuc
                            ),array('id_sanpham'=>$id));
                        
                        }
                        header('location: ?controller=sanpham');
                    }  
                }
                require 'View_web/v_suasanpham.php';
                break;

            default:

            break;    
        }    
        
    }            
    else
    {
        echo '<script type="text/javascript">alert("Bạn không có quyền hạn");           
        </script>';
    }
}
?>

