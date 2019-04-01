<?php
    $mailto = 'admin@esolarsonic.com';
    $mailfrm = $_POST['mail_to'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];

   require 'PHPMailer-master/PHPMailerAutoload.php';
$main = "Name =".$fname." ".$lname." Email =".$mailfrm." Message =".$mailMsg;
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "vermeshwar95@gmail.com";
   $mail ->Password = "ethidox1";
   $mail ->SetFrom("admin@esolarsonic.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $main;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {

       echo  '<script type="text/javascript">alert("Mail Not Sent")</script>';

   }
   else
   {
       echo  '<script type="text/javascript">alert("Mail Sent")</script>';
   }
header("Location: http://ethidox.xyz/js/test/tour/contact.html/");
?>
