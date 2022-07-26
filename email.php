<?php
mb_internal_encoding("UTF-8");

$formStatus = '';


if (isset($_GET['send']))
    $formStatus = 'Email byl úspěšně odeslán, odpovím Vám, co nejdříve to bude možné.';

if (isset($_GET['error']))
    $formStatus = 'Vyplňte prosím všechna pole.';

if (isset($_GET['mailerror']))
    $formStatus = 'Zadaný email není validní!';

if (isset($_GET['failed']))
    $formStatus = 'Došlo k chybě. Email se nepodařilo odeslat.';


if ($_POST) 
{
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $subject = htmlspecialchars($_POST['subject'], ENT_QUOTES);
    $message = nl2br(htmlspecialchars($_POST['message'], ENT_QUOTES));

    if (empty($name) || empty($email) || empty($subject) || empty(trim(($message)))) {
        header('Location: index.php?error#status');
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: index.php?mailerror#status');
    }
    else {

        $headers = [
            'MIME-Version' => '1.0',
            'Content-type' => 'text/html; charset=utf8',
            'From' => $_POST['email'],
            'Reply-To' => $_POST['email'],
            'X-Mailer' => 'PHP/' . phpversion()
        ];

        $sendTo = 'amozisova@gmail.com';
        $subject = 'Zpráva z mozisa.eu: ' . $_POST['subject'];
        $sendMail = mb_send_mail($sendTo, $subject, $message, $headers);
        if ($sendMail) {
            header('Location: index.php?send#status');
            exit;
        }
        else
            header('Location: index.php?failed#status');
        exit;
    }
}

/* injection check  /*if (!isset($_POST['submit'])) {
 echo "<h1>Error</h1>\n
 <p>Accessing this page directly is not allowed.</p>";
 exit;
 }
 
 $email = preg_replace("([\r\n])", "", $email);
 
 $find = "/(content-type|bcc:|cc:)/i";
 if (preg_match($find, $name) || preg_match($find, $email) || preg_match($find, $subject) || preg_match($find, $message)) {
 
 $hlaska = 'Detekován spam. Váš email nemůže být odeslán.';
 header('Location: index.php?#status');
 exit;
 }
 
 if (($name!='') && ($surname!='') && ($email!='') && ($subject!='') && ($message!='')) 
 {
 $headers = [
 'MIME-Version' => '1.0',
 'Content-type' => 'text/html; charset=utf8',
 'From' => $_POST['email'],
 'Reply-To' => $_POST['email'],
 'X-Mailer' => 'PHP/' . phpversion()
 ];
 $hlavicka = 'From:' . $_POST['email'];
 $hlavicka .= 'Jméno:' . $_POST['name'] . $_POST['surname'];
 $hlavicka .= "\nMIME-Version: 1.0\n";
 $hlavicka .= "Content-Type: text/html; charset=\"utf-8\"\n";
 $sendTo = 'amozisova@gmail.com';
 $subject = 'Zpráva z formuláře na webu mozisa.eu:'.$_POST['subject'];
 $uspech = mb_send_mail($sendTo, $subject, $_POST['message'], $headers);
 if ($uspech)
 {
 header('Location: index.php?send#status');
 exit;
 }
 else
 header('Location: index.php?failed#status');
 exit;
 }
 else 
 header('Location: index.php?error#status');
 exit; }
 
/*
 
mb_internal_encoding("UTF-8");
 
if (isset($_GET['sent'])) {
 $formStatus = 'Email byl úspěšně odeslán. Na Vaši zprávu odpovím, co nejdříve to bude možné.'; }
 
if (isset($_GET['failed'])) {
 $formStatus .= 'Chyba.'; }
 
$formStatus = '';
 
if ($_POST) {
 $name = $_POST['name'];
 $surname = $_POST['surname'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];
 if (empty($name) || empty($surname) || empty($email) || empty($subject) || empty($message)) {
 $formStatus = 'Formulář není správně vyplněn. Zkontrolujte zadané údaje.';
 header('Location: index.php?failed');
 } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $formStatus = 'Zadaný email není validní.';
 header('Location: index.php?failed');
 } else {
 $mail_header = 'From:' . $email;
 $mail_header .= 'Name:' . $name . ' ' . $surname;
 $mail_header .= "\nMIME-Version: 1.0\n";
 $mail_header .= "Content-Type: text/html; charset=\"utf-8\"\n";
 $sendTo = 'amozisova@gmail.com';
 $sendMail = mb_send_mail($sendTo, $subject, $message, $mail_header);
 if ($sendMail) {
 //$formStatus = 'Email byl úspěšně odeslán, brzy vám odpovíme.';
 header('Location: index.php?sent');
 } else {
 return $formStatus = 'Email se nepodařilo odeslat. Zkontrolujte adresu.';
 //   header('Location: index.php#status');
 }
 } } 
 
 
/*
 
$errors = []; $errorMessage = '';
 
if (!empty($_POST)) {
 $name = $_POST['name'];
 $surname = $_POST['surname'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];
 if (empty($name)) {
 $errors[] = 'Name is empty';
 }
 if (empty($surname)) {
 $errors[] = 'Surname is empty';
 }
 if (empty($email)) {
 $errors[] = 'Email is empty';
 } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $errors[] = 'Email is invalid';
 }
 if (empty($subject)) {
 $errors[] = 'Subject is empty';
 }
 if (empty($message)) {
 $errors[] = 'Message is empty';
 }
 if (!empty($errors)) {
 $allErrors = join('<br/>', $errors);
 $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
 } else {
 $mail = new PHPMailer();
 // specify SMTP credentials
 $phpmailer = new PHPMailer();
 $phpmailer->isSMTP();
 $phpmailer->Host = 'smtp.mailtrap.io';
 $phpmailer->SMTPAuth = true;
 $phpmailer->Port = 2525;
 $phpmailer->Username = '475daccf93c975';
 $phpmailer->Password = '193f437a89e1e5';
 $mail->setFrom($email, 'user');
 $mail->addReplyTo('amozisova@gmail.com', 'Alzbeta Mozisova');
 $mail->addAddress('amozisova@gmail.com', 'Me');
 $mail->Subject = $subject;
 // Enable HTML if needed
 $mail->isHTML(true);
 $bodyParagraphs = ["Name: {$name}","Surname: {$surname}","Email: {$email}","Subject: {$subject}", "Message:", nl2br($message)];
 $body = join('<br />', $bodyParagraphs);
 $mail->Body = $body;
 echo $body;
 if($mail->send()){
 header('Location: index.php'); // redirect to 'thank you' page
 } else {
 $errorMessage = 'Oops, something went wrong. Mailer Error: ' . $mail->ErrorInfo;
 }
 } }
 
*/