<?php
require_once 'C:\xampp\htdocs\Attendance\vendor\autoload.php';

class SendEmail{

    public static function sendMail($to,$suject,$content){
        $key = 'ffdghjkljhgfdsrd nnbjhvjgvjhvkhfgfhgjhkjlklkjhgf';
        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("chevvaun@yahoo.com","ChevaunMcIntosh");
        $email->setSubject($suject);
        $email->addTo($to);
        $email->addContent("text/plain",$content);

        $sendgrid = new \SendGrid($key);

            try {
                $response = $sendgrid->send($email);
                return $response;
            } catch (Exception $e) {
               echo 'email exception caught:'.$e->getMessage()."/n";
            }

        }
}

?>