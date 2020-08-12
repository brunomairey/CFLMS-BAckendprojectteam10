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
 
 if (isset($_POST['but_upload'])) {

    $name = $_FILES['file']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
  
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
       // Convert to base64 
      $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
      $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
      
  } 
 

// if ($_POST) {
    $eventID = $_POST['eventID'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $location = $_POST['location'];

   $sql = "UPDATE events SET eventName = '$name', eventDescription = '$description', `image` = '$image', eventDate = '$date', eventLocation = '$location' WHERE eventID = $eventID" ;

  
   if (mysqli_query($conn, $sql)  ){
    echo "Event successfully updated <br> <a href='../eventsAdmin.php'>Back to Home</a><br>";
    header ("refresh:2; url=../eventsAdmin.php" ); 
    echo "Sie werden in 2 Sekunden weitergeleitet.";
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
