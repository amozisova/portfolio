<?php
mb_internal_encoding("UTF-8");
/*
session_start();
$_SESSION['formStatus'] = $formStatus;
*/
session_start();
$_SESSION['POSTDATA'] = $_POST;


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = nl2br($_POST['message']);

$formData = [
    'name' => $name,
    'email' => $email,
    'subject' => $subject,
    'message' => $message
];

$formStatus = '';

if (isset($_GET['send']))
    $formStatus = 'Email byl úspěšně odeslán, odpovím Vám, co nejdříve to bude možné.';

if (isset($_GET['error']))
    $formStatus = 'Vyplňte prosím všechna pole.';

if (isset($_GET['mailerror']))
    $formStatus = 'Zadaný email není validní!';

if (isset($_GET['failed']))
    $formStatus = 'Došlo k chybě. Email se nepodařilo odeslat.';



include_once 'Mailer.php';
$mailer = new Mailer();


if (!empty($formStatus = $mailer->validate($formData))) {
    header('Location: index.php?error#status');
} else if (!empty($formStatus = $mailer->validateEmail($email))) {
    header('Location: index.php?mailerror#status');
} else {
    $validData = $mailer->html($formData);
    $sendTo = 'amozisova@gmail.com';

    if($mailer->sendMail($email, $validData['message'], $sendTo, $validData['subject'])) {
        header('Location: index.php?send#status');
    }    else {
        header('Location: index.php?failed#status');
    }
}



