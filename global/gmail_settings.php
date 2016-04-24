<?php
echo "hello";
      include("gmail_setting.php");
      echo "hello";
      $to       =   "sarthak7u@gmail.com";
      $subject  =   "Hello";
      $message  =   "hello <i>how are you.</i>";
      $name     =   "Sarthak blondie";
      $mailsend =   sendmail($to,$subject,$message,$name);
      echo "hello";
      if($mailsend==1){
        echo '<h2>email sent.</h2>';
      }
      else{
        echo '<h2>There are some issue.</h2>';
      }
?>