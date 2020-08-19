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

      require_once '../db_connect.php';

      if (!isset($_SESSION['admin'])) {
         header("Location: events.php");
         exit;
      }
      // select logged-in users details
      $res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['admin']);
      $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

      if (isset($_POST['but_upload'])) {

         $name = $_FILES['fileInput']['name'];
         $target_dir = "upload/";
         $target_file = $target_dir . basename($_FILES["fileInput"]["name"]);

         // Select file type
         $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

         // Valid file extensions
         $extensions_arr = array("jpg", "jpeg", "png", "gif");

         // Check extension
         if (in_array($imageFileType, $extensions_arr)) {
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['fileInput']['tmp_name']));
            $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
         }



         $eventID = $_POST['eventID'];
         $name = $_POST['name'];
         $description = $_POST['description'];
         $date = $_POST['date'];
         $location = $_POST['location'];
         echo $action = $_POST['todo'];


         
         if ($image == "" && $action!= 'delete') {
         $sql = "UPDATE events SET eventName = '$name', eventDescription = '$description', eventDate = '$date', eventLocation = '$location' WHERE eventID = $eventID";
            echo "sql update ohne image";
         } elseif ($action == 'delete'){
            $sql = "UPDATE events SET eventName = '$name', eventDescription = '$description', `image` = '', eventDate = '$date', eventLocation = '$location' WHERE eventID = $eventID";
            echo "sql update: Image gelöscht";
         }     
         else {
         $sql = "UPDATE events SET eventName = '$name', eventDescription = '$description', `image` = '$image', eventDate = '$date', eventLocation = '$location' WHERE eventID = $eventID";
            echo "sql update mit image";
         }





         if (mysqli_query($conn, $sql)) {

            echo "<div class= 'text-dark pt-2 pb-2'>";
            echo "<div class= 'd-flex justify-content-center'>";
            echo "<a href='create.php'><button type='button' class= 'btn btn-info'>Home </button></a>";
            echo "</div>";
            header("refresh:2; url=eventsAdmin.php");
            echo "<center><b>Weiterleitung erfolgt in 2 Sekunden.</b></center>";
            echo "</div>";

         } else {
            echo "Error while updating record : " . $conn->error;
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