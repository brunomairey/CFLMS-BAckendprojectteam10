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
    //table animal
   $animalID = $_POST['animalID'];
   $name = $_POST['name'];
   $hobbies = $_POST['hobbies'];
   $image = $_POST['image'];
   $description = $_POST['description'];
   $type = $_POST['type'];
   $age = $_POST['age'];

   //table address
   $street = $_POST['street'];
   $zipcode = $_POST['zipcode'];  
   $city = $_POST['city'];
   $addressID = $_POST['addressID'];

   $sql = "INSERT into animals (name, hobbies, image, description, type, age, addressID)  values ('$name', '$hobbies','$image', '$description','$type','$age', '$addressID')" ;

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