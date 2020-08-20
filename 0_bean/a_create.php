<?php  
$urlimage="../images/logo_entre.png";
$urlindex="../index.php";
$urlsign="../companies/create.php";
$urlcompanies="../companies/index.php";
$urlevents ="../events/events.php";

$urlfriends="../friends.php";
$urlcontact="../contact.php";
$urlvideos="../stories.php";



$urladmin="../login/login.php";

$admincompanies="../companies/admin.php";
$adminevents="../events/eventsAdmin.php";
$admincreateevents="../events/create.php";
$adminRSSfeeds="../events/createRss.php";
$logout="../Login/logout.php?logout";
  include '../db_connect.php';
  include('../navbar.php');
    
  

?>




<body style="background-color: #DEEAE3">
  <div style="height: 65vh">
    


<?php 

require_once '../db_connect.php';

$error = false;
if (isset($_POST['but_upload'])) {

  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Convert to base64 
    $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
    $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
    
}

   $titel = addslashes($_POST["titel"]);
   $vorname = $_POST['vorname'];
   $nachname = $_POST['nachname'];
  $email = $_POST['email'];
  $unternehmen = $_POST['unternehmen'];
  // $firmenlogo = $_POST['firmenlogo'];
  $funktion = $_POST['funktion'];
  $website_facebook = $_POST['website_facebook'];
    $plz = (int)$_POST['plz'];
    $ort = $_POST['ort'];
    $land = $_POST['land'];
       $description = $_POST['description'];
         $public = $_POST['public'];
        $contact = $_POST['contact'];

if (empty($email)) {
$error = true;
$emailError = "Please enter your email address.";
} 
else {echo $emailError ="here we are";}
  
if (!$error) {

  $sql = "INSERT INTO `companies` (`titel`, `vorname`, `nachname`, `email`, `unternehmen`,  `firmenlogo`, `funktion`, `website_facebook`, `plz`, `ort`,`land`, `description`, `public`, `contact`) 
  VALUES ('$titel', '$vorname', '$nachname', '$email', '$unternehmen',  '$image', '$funktion', '$website_facebook', $plz, '$ort', '$land', '$description', '$public', '$contact')";
    if($conn->query($sql) === TRUE) {
       echo "<p class=\"text mx-5 my-3\" style=\"color: #135887;\">Sie sind erfolgreich registriert</p>" ;
         echo "<a href='../index.php'><button type='button' class=\"btn btn-info mx-5 my-3\" style=\"background-color: #135887; border: #135887;\">Home</button></a>";
         // header("Refresh: 5; url= index.php");
   } else  {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }
}
 
}

?>
<?php
if (isset($_POST['but_upload'])){ 
    $ToEmail = $_POST["email"]; 
    $EmailSubject = 'Danke für Ihre Registrierung'; 
    $mailheader = "From: bruno.mairey@yahoo.fr\r\n"; 
    $mailheader .= "Reply-To: bruno.mairey@yahoo.fr\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Wir bedanken uns für die Registrierung bei Entrepreneurs for future. Gemeinsam können wir eine bessere Welt schaffen. Wir freuen uns, wenn Sie auch andere Entrepreneurs einladen."; 
     mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
     echo "<p class=\"text success mx-5 my-3\" style=\"color: #135887;\">Wir bedanken uns für die Registrierung bei Entrepreneurs for future. Gemeinsam können wir eine bessere Welt schaffen. Wir freuen uns, wenn Sie auch andere Entrepreneurs einladen.</p>" ;
     header("Refresh: 2; url= index.php");
?> 

<?php 
} else { echo "<p class=\"text-danger\">sent an email at georgeswbush@whitehouse.com"; };
  $conn->close();
?>  
</div>
</body>
<?php  
 
 $facebookfooter="../Images/facebook.png";
  $instafooter="../Images/insta.png";
   $twitterfooter="../Images/twitter.png";
    $youtubefooter="../Images/youtube.png";
    $linkedinfooter="../Images/linkedin.png";
    $impressum="../impressum.php";
    $datenschutz="../datenschutz.php";
    $loginadmin="../login/login.php";
  include('../footer.php');

?> 