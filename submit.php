
<?php
$lastName = $_POST['LastName'];
$firstName = $_POST['FirstName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birthdate = $_POST['bday'];
$title = $_POST['title'];

$data = "Last Name: " . $lastName . "\n" .
    "First Name: " . $firstName . "\n" .
    "Email: " . $email . "\n" .
    "Phone: " . $phone . "\n" .
    "Birthdate: " . $birthdate . "\n" .
    "Title: " . $title . "\n";

$file = fopen("submission.txt", "w");
fwrite($file, $data);
fclose($file);

echo "Form submitted successfully!";
?>