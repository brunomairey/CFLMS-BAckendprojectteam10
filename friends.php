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


<!DOCTYPE html>
<html>
<head>
  <title>Our friends</title>
</head>
<style>
    .media:hover {
          box-shadow: 0 0 0.5vw 0.5vw #135887;
          transition: 0.3s;
      }
  </style>
<body style="background-color: #DEEAE3">
  <?php 

include 'db_connect.php'; ?>
<div class="jumbotron" style="background-color: #DEEAE3">

<ul class="list-unstyled">
 <a href="https://fridaysforfuture.at/" style="text-decoration: none; color:black">
  <li class="media" style="border: solid #135887 2.5px">
    <img src="images/logo_fffuture.png" class="mr-3 rounded-circle" width="10%" alt="fridays for future">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Fridays for future</h5>
      <p> What do we want ? Climate Justice!<br>
       Wir fordern eine Klimapolitik in Einkang mit dem 1,5°C-Ziel</p>
    </div>
  </li></a>
  
  <a href="https://www.gruenewirtschaft.at/" style="text-decoration: none; color:black">
  <li class="media my-4" style="border: solid #135887 2.5px">
       <img src="images/greeneco.png" class="mr-3" width="10%"  alt="Die Grüne Wirtschaft">
    <div class="media-body">
      <h5 class="mt-0 mb-1">grüne Wirtschaft.at</h5>
      Wir sind deine Stimme <br> Auch in der Krise. <br> Schreib und dein Anliegen & Lass und #deinestimme sein! 

</li>
  </li></a>
    
  <a href="https://www.lebensart.at/" style="text-decoration: none; color:black">
    <div style="border: solid #135887 2.5px">
    <li class="media my-2">
    <img src="images/lebensart.png" class="mr-3" width="10%" alt="lebensart">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Lebensart</h5>
Nachhaltig.gut.leben. Das ist unsere Vision. Alle Menschen sollen heute und in Zukunft ein gutes Leben führen können. Dazu tragen wir mit unserer Information und unseren Medien bei.
    </div>
  </li></a>



  <a href="https://www.businessart.at/" style="text-decoration: none; color:black">
    <li class="media">
    <img src="images/businessart.png" class="mr-3" width="10%" alt="lebensart">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Businessart</h5>
nachhaltig.gut.leben. Das ist unsere Vision. Alle Menschen sollen heute und in Zukunft ein gutes Leben führen können. Dazu tragen wir mit unserer Information und unseren Medien bei.
    </div>
  </li></a>
</div>



</ul>
</div>

</body>
</html>
 <?php  $conn->close(); ?>
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