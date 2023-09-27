<?php
    if(isset($_SESSION['ss_user'])){
        header('location: ?controller=home');
    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';
    if(isset($_POST['btn_confirm1'])){
        $email = $_POST['email'];
        $_SESSION['ss_email'] = $email;
        $loi = array();

        if($email == ''){
            $loi['email'] = 'Địa chỉ email không được để trống';
        }

        $email_get = $db->get('taikhoan', array('email'=>$email));
        if($email != $_SESSION['ss_email']){
            $loi['email'] = 'Địa chỉ email không tồn tại';
        }

        if(!$loi){
            $code = rand(100000, 999999);
            

            $subject = "Mã xác nhận đặt lại mật khẩu";
            $message = "Mã xác nhận đặt lại mật khẩu của bạn à: $code. Vui lòng nhập mã này vào trang Đặt lại mật khẩu.";
            mb_internal_encoding('UTF-8');
            $mail = new PHPMailer();
            // Configure the PHPMailer object.
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'nguyenhienvuong666@gmail.com';
            $mail->Password = 'hziobfiqqbshbxrq';
            $mail->SMTPSecure = 'ssl';// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port = 465; // TCP port to connect to
        
            // Set the sender and recipient addresses.
            $mail->setFrom($_POST['email'],$_POST['email']);
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->addReplyTo($_POST['email'], 'Sender Name');
            // Set the subject and body of the email.
            // Sử dụng thuộc tính Encoding để đảm bảo subject email được mã hóa bằng UTF-8
            
            $mail->Subject = htmlspecialchars($subject);
            $mail->Body = $message;
        
            
            if ($mail->send()) {
                echo "<script>alert('Thàng công!')</script>";
                $db->insert('token', array(
                    'code_token'=>$code,
                    'email'=>$email
                ));
                echo "<script>window.location.href = '?controller=sent_code';</script>";
            } else {
                echo "<script>alert('Địa chỉ email ko hợp lệ!')</script>";
            }
        }
    }
    require 'view/v_quenmk.php';
?>
