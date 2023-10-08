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
    $mail->Username = 'nguyenhienvuong666@gmail.com';
    $mail->Password = 'hziobfiqqbshbxrq';
    $mail->SMTPSecure = 'ssl';// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 465; // TCP port to connect to
 
    // Set the sender and recipient addresses.
    $mail->setFrom($_POST['email'],$_POST['email']);
    $mail->addAddress('trissphan982004@gmail.com');
    $mail->isHTML(true);
    $mail->addReplyTo($_POST['email'], 'Sender Name');
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