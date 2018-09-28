<?php

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

		 $body = "<html><head></head>
           <body>
           <div style=\"background:#ecf0f1;width: 500px; height: 300px;font-family: Arial, Helvetica, sans-serif;\">
           <div style=\"width: 500px; height: 300px;background-color:#fefefe;font-family: Arial, Helvetica, sans-serif;\">
           <div ><br/><p style=\"margin-left: 10px;\">""</p>
           </div>
           <div style=\"width:500px;height: 300px;\">
           <div style=\"margin-left: 10px;margin-top:20px;\">
           <span>Thank You</span><br/>
           ".$name." 
           ".$email." 
           ".$mobile."               
           ".$message."
            
           </div>
           <br/>
           ".$body_image."
           </div>
           <br/>                        
           </div>
           </div>
           </body>
           </html>";

		require 'PHPMailerAutoload.php';
        require 'phpmailer/class.phpmailer.php';
        require 'phpmailer/class.smtp.php';
         
        $mail = new PHPMailer;
        $mail->SMTPDebug = 0;  
        $mail->CharSet = "UTF-8";
        $mail->isSMTP();                                      
        $mail->Host = 'ssl://smtp.gmail.com';  
        $mail->SMTPAuth = true;                              
        $mail->Username = 'sandippatel0098@gmail.com';
        $mail->Password = 'ccsfxgfwecqtjqrk';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        // $mail->setFrom('parth@empyrealinfotech.com', 'Parth');
        // if($email_1!=''){
        //   $mail->addAddress($email_1);
        // }
        // if($email_2!=''){
        //   $mail->addAddress($email_2);
        // }
        // if($email_3!=''){
        //   $mail->addAddress($email_3);
        // }   
        // $mail->addReplyTo('parth@empyrealinfotech.com', 'Parth');

        $mail->setFrom($employee_email, $fname.' '.$lname);
        
        $mail->addReplyTo('sandippatel0098@gmail.com', $fname.' '.$lname);

        
        $mail->isHTML(true);                   
        $mail->Subject = "Inquiry for our products";
        $mail->Body    = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if(!$mail->send()) {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
          echo 'Message has been sent';
        }
?>