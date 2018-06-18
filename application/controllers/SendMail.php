<?php
class SendMail extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->library("phpmailer");
        $mail = $this->phpmailer->load();
      $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; 
                $mail->Username = "Your email johndoe@gmail.com";                 
                $mail->Password = 'Your password 123456abc'; 
                $mail->Port = 465; 
                $mail->SMTPSecure = 'ssl';  
                $mail->SMTPAuth = true;
               $mail->isHTML(true); 
               
               $mail->setFrom('Your email johndoe@gmail.com');
               $mail->addAddress('What email do you want to send a message: johndoe2@gmail.com');
               $mail->Subject = 'Testing PHPMailer in Codeigniter';
               $mail->Body = '<h1 style="font-size: 100px; background-color:green; color:white;">Testing Successfully</h1>';
               
        if($mail->send()){
            echo 'Send Successfully';
        }else{
            echo 'Sending Failed';
        }
}
}
