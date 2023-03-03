<?php

$errors = '';
$myemail = 'D00241714@student.dkit.ie';

/*
  Form fields:
  Your Name* = name
  Mobile Number* = number
  Email Address* = email
  Reason for contact (Lost Animal/Found Animal)* = reason
  Type of Animal* = typeOfAnimal
  Pet Name = petName
  Breed = breed
  Picture = image
  Message* = message
*/

if(empty($_POST['name'])  ||
   empty($_POST['number'])  ||
   empty($_POST['email']) ||
   empty($_POST['reason'])  ||
   empty($_POST['typeOfAnimal']) ||
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$headers .= 'From: '.$myemail."\r\n".
    'Reply-To: '.$myemail."\r\n" .
    'X-Mailer: PHP/' . phpversion();


$name = $_POST['name'];
$number = $_POST['number'];
$email_address = $_POST['email'];
$reason = $_POST['reason'];
$type_of_animal = $_POST['typeOfAnimal'];
$pet_name = $_POST['petName'];
$breed = $_POST['breed'];
$image = $_POST['image'];
$message = $_POST['message'];

if (!preg_match(
    "/[a-z]/",
    $name))
    {
        $errors .= "\n Error: Invalid name";
    }
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

/*Remember to also upload datetime to database
try console logging to check format of input datetime*/
if( empty($errors))
{
        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n Number: $number \n Email: $email_address \n Reason: $reason \n Type of Animal: $type_of_animal \n Pet's Name: $pet_name \n Breed: $breed \n Image: $image \n Message: \n $message";

        mail($to,$email_subject,$email_body,$headers);
        //redirect to the 'thank you' page
        header('Location: contact-form-thank-you.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
        <title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>
</body>
</html>