<?php

namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;

class EmailService
{
    protected $app_name;
    protected $username;
    protected $password;
    protected $host;
    protected $port;

    public function __construct()
    {
        // Récupérer les informations de configuration depuis le fichier config/app.php
        $this->app_name = config('app.name');
        $this->username = config('app.mail_username');
        $this->password = config('app.mail_password');
        $this->host     = config('app.mail_host');
        $this->port     = config('app.mail_port');
    }

    // Méthode pour envoyer un e-mail avec phpmailler
    public function sendEmail($subject, $email, $name, $html, $message )
    {
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = $this->host;
            $mail->Port = $this->port;
            $mail->Username = $this->username;
            $mail->Password = $this->password;
            $mail->SMTPAuth = true;
            $mail->$subject = $subject;
            $mail->setFrom($this->username, $this->app_name);
            $mail->addReplyTo($this->username, $this->app_name);
            $mail->addAddress($email, $name);
            $mail->isHTML($html);
            $mail->Body = $message;
            $mail->send();


    }

}
