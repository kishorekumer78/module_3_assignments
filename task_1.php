<?php
function modifyText($inputText)
{

    $lowercaseText = strtolower($inputText);


    $modifiedText = str_replace("brown", "red", $lowercaseText);


    echo $modifiedText;
}


$text = "The quick brown fox jumps over the lazy dog.";


modifyText($text);
