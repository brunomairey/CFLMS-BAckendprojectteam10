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
    
  


if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM `companies` WHERE id = {$id}" ;
   $result = $conn->query($sql);
   $data = $result->fetch_assoc();

   $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Unternehmen löschen</title>
   <style type= "text/css">
          #contactForm {
    margin: 2vw; 
    padding: 2vw; 
    background-color: #d7e1cc;
    border-radius: 10px; 
    box-shadow: 5px 10px 18px #888888; 
    width: 60vw;
    position: relative;
    left: 20vw;
     }
   </style>
</head>
<body style="background-color: #DEEAE3">
<div id="contactForm">
<h3 class="text-danger m-5" >Wollen Sie das Bild des Unternehmens wirklich löschen?</h3>
<form action ="a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $data['id'] ?>">
   <button type="submit" name="image" class="btn btn-info my-2 mx-5" style="background-color: #135887; border: #135887;">Ja, bitte!</button>
   <a href="admin.php"><button type="button" class="btn btn-info" style="background-color: #135887; border: #135887;">Nein, zurück!</button></a>
</form>
</div>

<div id="contactForm">
<h3 class="text-danger m-5" >Wollen Sie dieses Unternehmen wirklich löschen?</h3>
<form action ="a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $data['id'] ?>">
   <button type="submit" name="all" class="btn btn-info  my-2 mx-5" style="background-color: #135887; border: #135887;">Ja, bitte!</button>
   <a href="admin.php"><button type="button" class="btn btn-info" style="background-color: #135887; border: #135887;">Nein, zurück!</button></a>
</form>
</div>
</body>
<?php
}
?>
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
</html>

