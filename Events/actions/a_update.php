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



   $sql = "UPDATE animals SET name = '$name', hobbies = '$hobbies', image = '$image', description = '$description', type = '$type', age = '$age' WHERE animalID = $animalID" ;

   $sql2 = "UPDATE address SET street = '$street', zipcode = '$zipcode', city = '$city' WHERE addressID= $addressID";


   if (mysqli_query($conn, $sql) && mysqli_query($conn,$sql2)  ){
    echo "Successfully updated <br> <a href='../admin.php'>Back to Home</a><br>";
    header ("refresh:2; url=../admin.php" ); 
    echo "You will be redirected in 2 seconds.";
}else {
    echo "Error while updating record : ". $conn->error;
}



//    if($connect->query($sql) === TRUE) {
//        echo  "<p>Successfully Updated</p>";
//        echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
//        echo  "<a href='../index.php'><button type='button'>Home</button></a>";
//    } else {
//         echo "Error while updating record : ". $connect->error;
//    }

   $conn->close();

}

?>