<?php
function validateFunction($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  $input = preg_replace("/[ ]{2,}/", " ", $input);
  return $input;
}
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
    $errors .= "\n Error: all required fields must be filled in";
}

$headers .= 'From: '.$myemail."\r\n".
    'Reply-To: '.$myemail."\r\n" .
    'X-Mailer: PHP/' . phpversion();


$name = validateFunction($_POST['name']);
$number = validateFunction($_POST['number']);
$email_address = validateFunction($_POST['email']);
$reason = validateFunction($_POST['reason']);
$type_of_animal = validateFunction($_POST['typeOfAnimal']);
if ($_POST['petName'] == "") $pet_name = "No name provided";
else $pet_name = validateFunction($_POST['petName']);

$pet_breed = validateFunction($_POST['breed']);

if ($_POST['breed'] == "") $pet_breed = "No breed provided";
else $pet_Breed = validateFunction($_POST['petBreed']);

$image = validateFunction($_POST['image']);
$message = validateFunction($_POST['message']);

if (!preg_match("/[A-Za-z]/", $name)) $errors .= "\n Error: Invalid name";

if (!preg_match("/08[35679]\d{7}$/", $number)) $errors .= "\n Error: Invalid number";

if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address)) $errors .= "\n Error: Invalid email address";

if ($reason == "") $errors .= "\n Error: Invalid reason";

if (!preg_match("/^[A-Za-z ]{1,30}$/", $type_of_animal)) $errors .= "\n Error: Invalid animal type";

if (!preg_match("/^[A-Za-z ]{1,30}$/", $pet_name) && $pet_name != "") $errors .= "\n Error: Invalid pet name";

if (!preg_match("/^[A-Za-z ]{1,30}$/", $pet_breed) && $pet_breed != "") $errors .= "\n Error: Invalid pet breed ";

if (!preg_match("/^[\s\S]{1,3000}$/", $message)) $errors .= "\n Error: Invalid message";



/*Remember to also upload datetime to database
try console logging to check format of input datetime*/
if( empty($errors))
{
        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n Name:\n $name \n\n Number: \n $number \n\n Email: \n $email_address \n\n Reason: \n $reason \n\n Type of Animal: \n $type_of_animal \n\n Pet's Name: \n $pet_name \n\n Breed: \n $pet_breed \n\n Image: \n $image \n\n Message: \n $message";

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