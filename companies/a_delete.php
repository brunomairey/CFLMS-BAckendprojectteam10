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
$url = "../index.php";
  $url2 = "../create.php";
require_once '../db_connect.php';

if (isset($_POST['all'])) {
   $id = $_POST['id'];

   $sql = "DELETE FROM `companies` WHERE id = {$id}";
    if($conn->query($sql) === TRUE) {
       echo "<h4 class=\"text mx-5 my-3\" style=\"color: #135887;\">Erfolgreich gelöscht!!</h4>" ;
       echo "<a href='admin.php'><button type='button' class=\"btn btn-info mx-5\" style=\"background-color: #135887; border: #135887;\">Zurück zum Admin Menu</button></a>";
   } else {
       echo "Error updating record : " . $conn->error;
   }


}

if (isset($_POST['image'])) {
   $id = $_POST['id'];
   $image="";
   $sql = "UPDATE `companies` SET `firmenlogo` = '$image' WHERE id = {$id}";
    if($conn->query($sql) === TRUE) {
       echo "<h4 class=\"text mx-5 my-3\" style=\"color: #135887;\">Bilder erfolgreich gelöscht!!</h4>" ;
       echo "<a href='admin.php'><button type='button' class=\"btn btn-info mx-5\" style=\"background-color: #135887; border: #135887;\">Zurück zum Admin Menu</button></a>";
   } else {
       echo "Error updating record : " . $conn->error;
   }

   $conn->close();
}


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