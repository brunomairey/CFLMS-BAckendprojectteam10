<?php  
$urlimage="images/logo_entre.png";
$urlindex="index.php";
$urlsign="companies/create.php";
$urlcompanies="companies/index.php";
$urlevents ="events/events.php";

$urlfriends="friends.php";
$urlcontact="contact.php";
$urlvideos="stories.php";



$urladmin="login/login.php";

$admincompanies="companies/admin.php";
$adminevents="events/eventsAdmin.php";
$admincreateevents="events/create.php";
$adminRSSfeeds="events/createRss.php";
$logout="Login/logout.php?logout";
  include 'db_connect.php';
  include('navbar.php');
    
  

?>




<?php 
if ($_POST["email"]<>'') { 
    $ToEmail = 'bruno.mairey@yahoo.fr'; 
    $EmailSubject = 'Die Nachricht von'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Vorname: ".$_POST["vorname"].""; 
     $MESSAGE_BODY = "Nachname: ".$_POST["nachname"].""; 
    $MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"]).""; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
     echo "<p class=\"text mx-5 my-3\" style=\"color: #135887;\">Eure Nachricht wurde erfolgreich gesendet</p>" ;
     header("Refresh: 2; url= index.php");
?> 

<?php 
} else { echo "<p class=\"text-danger\">sent an email at georgeswbush@whitehouse.com"; };

?>  

<?php  
$facebookfooter="Images/facebook.png";
  $instafooter="Images/insta.png";
   $twitterfooter="Images/twitter.png";
    $youtubefooter="Images/youtube.png";
    $linkedinfooter="Images/linkedin.png";
      $impressum="impressum.php";
    $datenschutz="datenschutz.php";
    $loginadmin="login/login.php";
  include('footer.php');

?> 