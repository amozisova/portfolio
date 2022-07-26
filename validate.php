<?php


function validateData($name, $surname, $email, $subject, $message, $formStatus)
{
    if (empty($name) || empty($surname) || empty($email) || empty($subject) || empty($message)) {
        $formStatus = 'Formulář není správně vyplněn. Zkontrolujte zadané údaje.';
    } else $formStatus='';
}


function validateEmail($email, $formStatus)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formStatus = 'Zadaný email není validní.';
    } else $formStatus='';
}
