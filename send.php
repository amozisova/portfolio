<?php 

function send($name, $surname, $email, $subject, $message, $formStatus){

    $mail_header = 'From:' . $email;
    $mail_header .= 'Name:' . $name . ' ' . $surname;
    $mail_header .= "\nMIME-Version: 1.0\n";
    $mail_header .= "Content-Type: text/html; charset=\"utf-8\"\n";
    $sendTo = 'amozisova@gmail.com';

    $sendMail = mb_send_mail($sendTo, $subject, $message, $mail_header);

    if ($sendMail) {
        $formStatus = 'Email byl úspěšně odeslán, brzy vám odpovíme.';
    } else {
        $formStatus = 'Email se nepodařilo odeslat. Zkontrolujte adresu.';
    }

}


 