<?php 
ob_start();
session_start();
require_once 'db_connect.php';

if (!isset($_SESSION['admin']) && !isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
 }
 if (isset($_SESSION["user"])) {
    header("Location: home.php");
    exit;
 }
 // select logged-in users details
 $res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['admin']);
 $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
 

if ($_POST) {
   $animalID = $_POST['animalID'];

   $sql = "DELETE FROM animals WHERE animalID = $animalID";
    if($conn->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>" ;
       header ("refresh:2; url=../admin.php" ); 
       echo "You will be redirected in 2 seconds.";
       echo "<a href='../index.php'><button type='button'>Back</button></a>";
       


   } else {
       echo "Error updating record : " . $conn->error;
   }

   $conn->close();
}
