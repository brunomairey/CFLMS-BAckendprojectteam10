<?php 
// ob_start();
// session_start();
require_once '../../db_connect.php';

if (!isset($_SESSION['admin']) ) {
   header("Location: ../events.php");
   exit;
}
 // select logged-in users details
 $res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['admin']);
 $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
 

if ($_POST) {
   $eventID = $_POST['eventID'];

 $sql = "DELETE FROM events WHERE eventID = $eventID";
    if($conn->query($sql) === TRUE) {
       echo "<div class='bg-secondary'>";
       echo "<p><center>Event wurde gelöscht!!</center></p>" ;
       header ("refresh:2; url=../eventsAdmin.php" ); 
       echo "<center>You will be redirected in 2 seconds.</center>";
       echo "<center><a href='../eventsAdmin.php'><button type='button' class='btn btn-outline-info mb-2'>Back</button></a></center>";
       echo "</div>";


   } else {
       echo "Fehler beim Löschen : " . $conn->error;
   }

   $conn->close();
}
