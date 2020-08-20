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
$superadmin = "superadmin.php";
include '../db_connect.php';
include('../navbar_superadmin.php');

?>

<body style="background-color: #DEEAE3">
   <div style="height: 65vh">

      <?php

      require_once '../db_connect.php';

      if (!isset($_SESSION['superadmin'])) {
         header("Location: events.php");
         exit;
      }
      // select logged-in users details
      $res = mysqli_query($conn, "SELECT * FROM users WHERE userID=" . $_SESSION['superadmin']);
      $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

      if (isset($_POST['submit'])) {

         $userID = $_POST['userID'];
         $name = $_POST['name'];
         $status = $_POST['status'];
         $mail = $_POST['email'];



         echo  $sql = "UPDATE users SET userName = '$name', userEmail = '$mail', `status` = '$status' WHERE userID = $userID";


         if (mysqli_query($conn, $sql)) {

            echo "<div class= 'text-dark pt-2 pb-2'>";
            echo "<div class= 'd-flex justify-content-center'>";
            echo "<a href='superadmin.php'><button type='button' class= 'btn btn-info'>Home </button></a>";
            echo "</div>";
            header("refresh:1; url=superadmin.php");
            echo "<center><b>Weiterleitung erfolgt in 2 Sekunden.</b></center>";
            echo "</div>";
         } else {
            echo "Error while updating record : " . $conn->error;
         }
      }
      $conn->close();

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