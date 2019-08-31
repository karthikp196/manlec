<?php

        // include 'config/config.php';

         require("phpmailer.php");

         require("smtp.php");

        function contact_form($user_name,$user_email,$user_subject,$user_message) 
        {

          $name = $user_name;

          $email = $user_email;

          $subject = $user_subject;

          $message = $user_message;

              
          $mail = new PHPMailer();

          $mail->IsSMTP();     // set mailer to use SMTP                                 

          $mail->Host = "mail.fixxgroup.co";  // specify main and backup server //mail.fixxgroup.co

          $mail->SMTPAuth = true;     // turn on SMTP authentication

          $mail->Username = "test@fixxgroup.co";  // SMTP username

          $mail->Password = "pin@http10"; // SMTP password

          $mail->Port="587";

          $mail->From ="test@fixxgroup.co";

          $mail->FromName = "Manlec";

          $final_email = "khitesh1996@gmail.com";
          
          $mail->AddAddress($final_email);                  // name is optional  
                                        //$mail->AddReplyTo("info@example.com", "Information");

                                        //$mail->WordWrap = 50;                                 // set word wrap to 50 characters

                                        //$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments

                                        //$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name

          $mail->IsHTML(true);                                  // set email format to HTML

          $mail->Subject =  "Manlec - Contact Form";
                                        
          $mail->Body    = nl2br("Hi ,\n
                                                            
                                      There is a message from a user. \n

                                      Subject : ".$subject."\n

                                      Message :".$message."\n

                                      User Name :".$name."\n

                                      User Email Id :".$email."\n

                                      \n
                                                            
                                      Regards.\n
                                      
                                      Admin/Manager.\n

                                ");


          $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

          $mail->SMTPDebug = 2;

         // $mail->SMTPSecure = 'ssl';

          $mail->Send();


        }
       
       

?>