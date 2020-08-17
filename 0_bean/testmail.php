<h1>Testing center</h1>
<?php

mail("bmairey3@gmail.com", "the world is mine", "here we are in the middle of the content", "From: donotreply@a.at");


?>

<?php
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$email = $_POST['email'];
$comments = $_POST['comment'];
$mail_to = 'bruno.mairey@yahoo.fr';

$subject = 'Message from a site visitor ' . $vorname;
$body_message = 'From: '.$nachname."\n";
$body_message .= 'E-mail: '.$email."\n";
$body_message .= 'Message: '.$comments;
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        // Print a message
        alert('Thank you for the message. We will contact you shortly.');
        // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
        window.location = 'index.php';
    </script>
    <?php
}

    else { ?>
    <script language="javascript" type="text/javascript">
        // Print a message
        alert('Message failed. Please, send an email to gordon@template-help.com');
        // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
        window.location = 'contact.php';
    </script>
<?php
};?>