<?php
require_once("./includes/functions.php");
$name = $email = $phone = $website = $message = "";

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $name = testInput($_POST['username']);
    $phone = testInput($_POST['phone']);
    $email = testInput($_POST['email']);
    $website = testInput($_POST['website']);
    $message = testInput($_POST['message']);

    if(!empty($name) && !empty($message)){
       if(filter_var($email , FILTER_VALIDATE_EMAIL)){
        
            $reciever = "madrinsx@gmail.com";
            $subject = "From : $name <$email>";
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\nMessage: $message\n\nRegards: $name";
            $sender = 'From: ' . $email;

            if(mail($reciever, $subject, $body , $sender)){
                echo "Your message has been sent";
            }else{
                echo "Sorry, Failed to send message ";
            }   
       }else{
           echo "Please Enter a valid email";
       }
    }else{
       echo "Email or message fields are empty";
    }
  
}



?>