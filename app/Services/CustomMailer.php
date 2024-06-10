<?php

namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class CustomMailer
{
    protected $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->setup();
    }

    protected function setup()
    {
        $this->mail->isSMTP();
        $this->mail->Host = env('MAIL_HOST', 'smtp.gmail.com');
        $this->mail->SMTPAuth = true;
        $this->mail->Username = env('MAIL_USERNAME');
        $this->mail->Password = env('MAIL_PASSWORD');
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mail->Port = env('MAIL_PORT', 587);

        $this->mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
    }

    public function sendEmail($to, $subject, $body,$bcc=[])
    {
        try {
            $this->mail->addAddress($to);
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body    = $body;
            if (!empty($bcc)) {
                foreach ($bcc as $bccAddress) {
                    $this->mail->addBCC($bccAddress);
                }
            }

            $this->mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
