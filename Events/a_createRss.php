<?php 
// ob_start();
// session_start();
require_once '../db_connect.php';

if (!isset($_SESSION['admin']) ) {
   header("Location: events.php");
   exit;
}
 // select logged-in users details
 $res = mysqli_query($conn, "SELECT * FROM users WHERE userID=" . $_SESSION['admin']);
 $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
 

 if ($_POST) {

   $feedurl = $_POST['feedurl'];


   
$sql = "INSERT INTO feeds (`url`) values('$feedurl')";


    if($conn->query($sql) === TRUE) {
       echo "<div class= 'bg-info text-light pt-2 pb-2'>";
       echo "<p><center>Neuer Feed wurde erstellt</center></p>" ;
       echo "<div class= 'd-flex justify-content-center'>";
       echo "<a href='createRss.php'><button type='button' class= 'btn btn-outline-light'>Back</button></a>";
       echo "</div>";
       header ("refresh:2; url=eventsAdmin.php"); 
       echo "<center>Weiterleitung erfolgt in 2 Sekunden.</center>";
       echo "</div>";

   } else  {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }

   $conn->close();
}

?>