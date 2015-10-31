<?php
session_start();

$captcha=$_POST["captcha"];

if ($captcha==$_SESSION["captcha"])
{
    echo "Captcha successful!";
}
else
{
    echo "Value did not match.";
}
?>
