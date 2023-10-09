<?php
$thongtinshop = $db->get('thongtinshop', array());
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Địa chỉ Gmail cố định
if (isset($_POST['submit'])) {
    mb_internal_encoding('UTF-8');
    $mail = new PHPMailer();
    // Configure the PHPMailer object.
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $thongtinshop[0]['email_shop'];
    $mail->Password = $thongtinshop[0]['matkhau_shop'];
    $mail->SMTPSecure = 'ssl';// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 465; // TCP port to connect to
 
    // Set the sender and recipient addresses.
    $mail->setFrom($_POST['name'],$_POST['email']);
    $mail->addAddress($thongtinshop[0]['email_shop']);
    $mail->isHTML(true);
    // Set the subject and body of the email.
    // Sử dụng thuộc tính Encoding để đảm bảo subject email được mã hóa bằng UTF-8
    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['message'];
   
    
    if ($mail->send()) {
        echo "<script>alert('Thàng công!')</script>";
    } else {
        echo "<script>alert('Thất bại!')</script>";
    }
}
    require_once("view/v_contact.php") ;
?>