<?php
header('Content-Type: application/json; charset=utf-8');

$name = isset($_POST['name'])?$_POST['name']:'';
$email = isset($_POST['email'])?$_POST['email']:'';
$message = isset($_POST['message'])?$_POST['message']:'';

$response = ['type'=>'warning', 'message'=>'Fields are empty'];

if($name && $email && $message){
    $headers  = 'From: '.$name.' <'.$email.'>' . "\r\n";
    $headers .= 'Reply-To: '.$email."\r\n";
    $headers .= 'Content-type: text/html' . "\r\n";
    $headers .= 'X-Mailer: PHP/'.phpversion()."\n";
    $headers .= 'MIME-Version: 1.0'."\n";
    $send = @mail('iam@thewalkingkode.com', 'Contact Form - TheWalkingKode.com', $message, $headers);
    if($send == true){
        $response = ['type'=>'success', 'message'=>'You message has been sent to TheWalkingKode'];
    }else{
        $response = ['type'=>'error', 'message'=>'Unable to send mail'];
    }
}

echo json_encode($response, true);
