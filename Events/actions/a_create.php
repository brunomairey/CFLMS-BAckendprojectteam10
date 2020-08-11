<?php 
ob_start();
session_start();
require_once '../../db_connect.php';

if (!isset($_SESSION['admin']) && !isset($_SESSION['user'])) {
    header("Location: ../Events/eventsAdmin.php");
    exit;
 }
 if (isset($_SESSION["user"])) {
    header("Location: ../Events/eventsAdmin.php");
    exit;
 }
 // select logged-in users details
 $res = mysqli_query($conn, "SELECT * FROM users WHERE userID=" . $_SESSION['admin']);
 $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
 

if ($_POST) {
    //table animal
   $eventsID = $_POST['eventID'];
   $name = $_POST['eventName'];
   $image = $_POST['eventImage'];
   $description = $_POST['description'];
   $date = $_POST['eventDate'];
   


d
    if($conn->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
       header ("refresh:2; url=../admin.php" ); 
       echo "You will be redirected in 2 seconds.";
        echo "<a href='../admin.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }

   $conn->close();
}

?>