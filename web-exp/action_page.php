<?php
$name = $_REQUEST['sender'];
$company = $_REQUEST['company'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

$mailBody = "Name: $name\nCompany: $company\nPhone no: $phone\nEmail: $email\n\n$message";

mail("systemfireprotection@gmail.com", "Form msg", $mailBody, "From: $name <$email>");

header("Location: contact.php?sucess")

// echo "<script type='text/javascript'> alert('Thank you! Your message has been successfully sent. We will contact you very soon! For urgent enquiries please call us on one of our telephone numbers.');
//     window.history.log(-1);
// </script>";
?>