<?php
mb_internal_encoding("UTF-8");

// default error message - empty
$formStatus = '';

//error messages after validation
if (isset($_GET['send']))
    $formStatus = 'Email byl úspěšně odeslán, odpovím Vám, co nejdříve to bude možné.';

if (isset($_GET['error']))
    $formStatus = 'Vyplňte prosím všechna pole.';

if (isset($_GET['mailerror']))
    $formStatus = 'Zadaný email není validní!';

if (isset($_GET['failed']))
    $formStatus = 'Došlo k chybě. Email se nepodařilo odeslat.';


if ($_POST) {

    // sanitizing inputs
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $subject = htmlspecialchars($_POST['subject'], ENT_QUOTES);
    $message = nl2br(htmlspecialchars($_POST['message'], ENT_QUOTES));

    //check for empty values
    if (empty($name) || empty($email) || empty($subject) || empty(trim(($message)))) {
        header('Location: index.php?error#status');
        
        // email address validation
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: index.php?mailerror#status');
        
        // send email
    } else {

        $headers = [
            'MIME-Version' => '1.0',
            'Content-type' => 'text/html; charset=utf8',
            'From' => $email,
            'Reply-To' => $email,
            'X-Mailer' => 'PHP/' . phpversion()
        ];

        $sendTo = 'amozisova@gmail.com';
        $email_subject = 'Zpráva z mozisa.eu: ' . $subject;
        $email_message = '<p><strong>' . $name . '</strong> s emailem <strong>' . $email . '</strong> posílá následující zprávu:</p>' . $message;
        $sendMail = mb_send_mail($sendTo, $email_subject, $email_message, $headers);
        if ($sendMail) {
            header('Location: index.php?send#contact');
            exit;
        } else
            header('Location: index.php?failed#contact');
        exit;
    }
}
