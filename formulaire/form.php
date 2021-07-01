<?php
if (isset($_POST['user_mail'])&&!empty($_POST['user_mail'])) {
    $name = $_POST['user_name'];
    $password = $_POST['user_password'];
    $email = $_POST['user_mail'];
    $message = $_POST['user_message'];
    $birthdate = $_POST['user_birthdate'];
    $recipient = "a.bederiat@codeur.online";
    $messages=$mail.'
     '.$message;
    $headerFields = array(
        "From: {$email}",
        "MIME-Version: 1.0",
        "Content-Type: text/html;charset=utf-8"
        );

    mail($recipient, $messages, $name, implode("\r\n", $headerFields) );
    echo "message envoyé";
} else {
    echo 'votre message n\' a pas été envoyé' ;
}







echo $birthdate ;

$currentDate = date('Y-m-d');
echo '<br>' . $currentDate ; 

$age = $currentDate-$birthdate;
echo '<br>' . $age ;
