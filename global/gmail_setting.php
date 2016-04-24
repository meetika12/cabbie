<?php
    require_once('class.phpmailer.php');
    function sendmail($to,$subject,$message,$name)
    {
                  $mail             = new PHPMailer();
                  echo "bye";
                  $body             = $message;
                  $mail->IsSMTP();
                  $mail->SMTPAuth   = true;
                  $mail->Host       = "smtp.gmail.com";
                  $mail->Port       = 587;
                  $mail->Username   = "rajdev.meetika@gmail.com";
                  $mail->Password   = "rkfan@123";
                  $mail->SMTPSecure = 'tls';
                  $mail->SetFrom('rajdev.meetika@gmail.com', 'Meetika');
                 // $mail->AddReplyTo("youraccount@gmail.com","Your name");
                  $mail->Subject    = $subject;
                  $mail->AltBody    = "Any message.";
                  $mail->MsgHTML($body);
                  $address = $to;
                  $mail->AddAddress($address, $name);
                  echo "bye";
                  if(!$mail->Send()) {
                      echo "0";
                  } else {
                        echo 1;
                 }
    }
?>