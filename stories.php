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
  <title>Contact us</title>
 <style>
  .hovereffect:hover {
    box-shadow: 0 0 0.5vw 0.5vw #135887;
    transition: 0.3s; }
 </style>
</head>
<body>
<main class="p-3" style="background-color: #DEEAE3">
 <!--   <div class="jumbotron jumbotron-fluid mb-0"> -->
  
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 m-4 justify-content-around" id="typescriptimport"> 
          
            </div>
      
<!-- </div> -->

</main>




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
   <script src="stories.js"></script>
   </body>
</html>