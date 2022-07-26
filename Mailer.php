<?php

class Mailer
{



    function validate($formData)
    {
        foreach ($formData as $input) {
            if (empty(trim(($input)))) {
                return 'Vyplňte prosím všechna pole.';
            } 
        }
    }

    function validateEmail($email)
    {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 'Zadaný email není validní!';
        }
    }

    function html($formData)
    {
        foreach ($formData as $input) {
            htmlspecialchars($input, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        }
        return $formData;
    }



    function sendMail($email, $message, $sendTo, $subject)
    {

        $headers = [
            'MIME-Version' => '1.0',
            'Content-type' => 'text/html; charset=utf8',
            'From' => $email,
            'Reply-To' => $email,
            'X-Mailer' => 'PHP/' . phpversion()
        ];

        $subject = 'Zpráva z mozisa.eu:' . $subject;

        $sendMail = mb_send_mail($sendTo, $subject, $message, $headers);
        if ($sendMail) {
            return 'Email byl úspěšně odeslán, odpovím Vám, co nejdříve to bude možné.';
        } else
            return 'Došlo k chybě. Email se nepodařilo odeslat.';
    }
}
