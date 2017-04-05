<?php
 if ($_POST['submit']) {
  if ($name != '' && $email != '') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $from = 'From: Contact Form';
  $message = $_POST['message'];  $to = 'info@jatorontoes.com';
  $subject = 'Contact Form';
  $body = 'From: $name\n E-Mail: $email\n Message:\n $message';
  if (mail ($to, $subject, $body, $from)) {
    echo '<p>Your message has been sent!</p>';
  }
  else {
    echo '<p>Something went wrong, go back and try again!</p>';
  }
  else {
        echo '<p>You need to fill in all required fields!!</p>';}
      }
}
?>
