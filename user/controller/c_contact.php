<?php
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
    $mail->addAddress('nguyenhienvuong666@gmail.com');
    $mail->isHTML(true);
    $mail->addReplyTo($_POST['email'], 'Sender Name');
    // Set the subject and body of the email.
    $mail->Subject =$_POST['subject'];
    $mail->Body =$_POST['message'];
   
    
    if ($mail->send()) {
        echo "<script>alert('thàng công')</script>";
    } else {
        echo 'Failed to send email: ';
    }
}
    require_once("view/v_contact.php") ;
?>