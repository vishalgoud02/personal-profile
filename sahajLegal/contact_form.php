<?php
    //error_reporting(E_ALL);
    //ini_set('display_errors', '1');   
    require_once(__DIR__.'/PHPMailer/PHPMailer/src/PHPMailer.php');
    require_once(__DIR__.'/PHPMailer/PHPMailer/src/SMTP.php');
    require_once(__DIR__.'/PHPMailer/PHPMailer/src/Exception.php');  
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


    // request variables // important
      
    $fulName = $_POST["name"];
    $from = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];    


    $captcha = $_POST['g-recaptcha-response'];
   $ip = $_SERVER['REMOTE_ADDR'];
   $key = '6LdxpMQkAAAAAIedJca4E99bcbo_3jXHZPb687WP';
   $url = 'https://www.google.com/recaptcha/api/siteverify';
  
        
    $email = new PHPMailer(true);

    /*

    $email->isSMTP();
    $email->SMTPDebug = 0; //Alternative to above constant
    $email->Host     = 'www.sahajlegal.com/sllf';
    $email->SMTPAuth = true;
    $email->Username = 'advice@sahajlegal.com';
    $email->Password = 'advice@123';   
    $email->SMTPSecure = 'tls';
    $email->Port     = 587;      
    
    */
    
    //$mail->SMTPSecure = 'ssl';
    //$mail->Port     = 465;                         //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

     
     //Create a new PHPMailer instance
    //$email = new PHPMailer\src\PHPMailer();

    $email->SetFrom($from, $fulName); //Name is optional
    $email->IsHTML(true);                                  //Set email format to HTML
    $email->Subject = 'Sahaj Legal Enquiry ';
    
    $bodytext = "Name: ".$fulName."\n\nEmail: ".$from."\n\Subject: ".$subject."\n\Message: ".$message;



    $email->Body = "<html>
                    <head>
                        <title></title>
                        <style>
                            table, th, td {
                                border-collapse: collapse;
                                border: 1px solid black;
                            }
                             th{
                                text-align: left;
                            }
                        </style>
                    </head>
                    <body>      
                        <p>Hello sir,</p>                          
                        <p>Hope you are having a great day.</p>
                        <p>I would require some of the following Information:</p>                       
                        <table cellspacing='0' width='100%' >                            
                            <tbody>   
                                <tr>    
                                    <th>Name</th>                                      
                                    <td>".$fulName."</td>      
                                </tr> 
                                <tr>
                                    <th>Email</th>  
                                    <td>".$from."</td>                
                                </tr> 
                                <tr>
                                    <th>Subject</th>                                                                                                  
                                    <td>".$subject."</td>                               
                                </tr> 
                                <tr>
                                    <th>Message</th>                                                                                                  
                                    <td>".$message."</td>                       
                                </tr> 
                            </tbody> 
                        </table>
                        <p>Thank you for your precious time, I look forward to hear from you.</p>
                        <p>Thanks & Regards,</p>

                    </body>
                </html>";


   
    //$email->AddAddress('info@renowiztech.com');
    $email->AddAddress('support@sahajlegal.com');
 
    $res = $email->Send();

  
    if($res == 1 && isset($_POST['g-recaptcha-response'])){   



   // RECAPTCHA SETTINGS
   
   //  if(isset($_POST['g-recaptcha-response']))
   //  {


   // // RECAPTCH RESPONSE
   //     $recaptcha_response = file_get_contents($url.'?secret='.$key.'&response='.$captcha.'&remoteip='.$ip);
   //     $data = json_decode($recaptcha_response);

   //     if(isset($data->success) &&  $data->success === true) {
   //     }
   //     else {
   //         $response = array(
   //                  'status' => false,
   //                  'message' => 'select captcha'
   //              );  
   //               echo json_encode($response);  
   //     }
   //   }

// RECAPTCHA SETTINGS end



        $emailNoReply = new PHPMailer(true);
        //Create a new PHPMailer instance
        //$email = new PHPMailer\src\PHPMailer();

        /*

        $emailNoReply->isSMTP();
        $emailNoReply->SMTPDebug = 0; //Alternative to above constant
        $emailNoReply->Host     = 'www.sahajlegal.com';
        $emailNoReply->SMTPAuth = true;
        $emailNoReply->Username = 'advice@sahajlegal.com';
        $emailNoReply->Password = 'advice@123';   
        $emailNoReply->SMTPSecure = 'tls';
        $emailNoReply->Port     = 587;    
        
        */

        $emailNoReply->SetFrom('support@sahajlegal.com','Sahaj Legal'); //Name is optional
        $emailNoReply->IsHTML(true);                                  //Set email format to HTML
        $emailNoReply->Subject = 'Thank You For Connecting with Sahaj Legal';
        
        $emailNoReply->Body = "<html>
                                <head>
                                    <title></title>
                                    <style>
                                    
                                    </style>
                                </head>
                                <body>
                                <p>Hello,</p>
                                <p> Thanks for reaching out to us and sharing your requirement. Our business analysts will get back to you soon. Meanwhile, you may check out our Services at <a href='https://sahajlegal.com'>https://sahajlegal.com/</a> to get an idea about the quality of our services.</p>
                                     <br>
                                      <p> Another way to reach us with this digital card <a href='https://sahajlegal.com/amar'>https://sahajlegal.com/amar/</a></p>
                                      <br>
                                     <p>Kindly note, our office remains open from 10:00 AM to 07:00 PM IST (GMT+5.5) Monday to Saturday, except for national holidays. We regret the delay in response over the non-working hours.</p>
                                     <br>
                                     <p>Thanks & Regards,</p>
                                      <br>
                                     <p>Sahaj Legal Law Firm</p>
                                </body>
                              </html>";

        
        //$email->AddAddress('info@renowiztech.com');
        $emailNoReply->AddAddress($from);

        $resNoReply = $emailNoReply->Send();
        
        if($resNoReply == 1)    
            $response = array(
                'status' => true,
                'message' => 'Email send successfully.'
            );    
        else
            $response = array(
                'status' => true,
                'message' => 'Email not send. Some error occur.'
            );    


    }else
        $response = array(
            'status' => false,
            'message' => 'Email not send. Some error occur.'
        );    
        
    echo json_encode($response);
    

?>