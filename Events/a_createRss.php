<?php
$urlimage = "../images/logo_entre.png";
$urlindex = "../index.php";
$urlsign = "../companies/create.php";
$urlcompanies = "../companies/index.php";
$urlevents = "../events/events.php";

$urlfriends = "../friends.php";
$urlcontact = "../contact.php";
$urlvideos = "../stories.php";



$urladmin = "../login/login.php";

$admincompanies = "../companies/admin.php";
$adminevents = "../events/eventsAdmin.php";
$admincreateevents = "../events/create.php";
$adminRSSfeeds = "../events/createRss.php";
$logout = "../Login/logout.php?logout";
include '../db_connect.php';
include('../navbar.php');



?>


<body style="background-color: #DEEAE3">
   <div style="height: 65vh">

      <?php
      // ob_start();
      // session_start();
      require_once '../db_connect.php';

      if (!isset($_SESSION['admin'])) {
         header("Location: events.php");
         exit;
      }
      // select logged-in users details
      $res = mysqli_query($conn, "SELECT * FROM users WHERE userID=" . $_SESSION['admin']);
      $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);


      if ($_POST) {

         $feedurl = $_POST['feedurl'];



         $sql = "INSERT INTO feeds (`url`) values('$feedurl')";


         if ($conn->query($sql) === TRUE) {
            echo "<div class= 'text-dark font-weight-bold pt-2 pb-2'>";
            echo "<p><center>Neuer Feed wurde erstellt</center></p>";
            echo "<div class= 'd-flex justify-content-center'>";
            echo "<a href='createRss.php'><button type='button' class= 'btn btn-info'>Back</button></a>";
            echo "</div>";
            header("refresh:2; url=eventsAdmin.php");
            echo "<center>Weiterleitung erfolgt in 2 Sekunden.</center>";
            echo "</div>";
         } else {
            echo "Error " . $sql . ' ' . $conn->connect_error;
         }

         $conn->close();
      }

      ?>
   </div>
</body>
<?php

$facebookfooter = "../Images/facebook.png";
$instafooter = "../Images/insta.png";
$twitterfooter = "../Images/twitter.png";
$youtubefooter = "../Images/youtube.png";
$linkedinfooter = "../Images/linkedin.png";
$impressum = "../impressum.php";
$datenschutz = "../datenschutz.php";
$loginadmin = "../login/login.php";
include('../footer.php');

?>