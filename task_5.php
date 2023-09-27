<?php
function generatePassword($length)
{

    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';


    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;


    $password = '';


    for ($i = 0; $i < $length; $i++) {

        $randomChar = $allChars[rand(0, strlen($allChars) - 1)];

        $password .= $randomChar;
    }

    return $password;
}


$length = 12;
$generatedPassword = generatePassword($length);


echo "Generated Password: $generatedPassword\n";
