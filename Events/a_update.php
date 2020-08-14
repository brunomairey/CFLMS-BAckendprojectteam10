<?php 

require_once '../db_connect.php';

if (!isset($_SESSION['admin']) ) {
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
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
  
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
       // Convert to base64 
      $image_base64 = base64_encode(file_get_contents($_FILES['fileInput']['tmp_name']) );
      $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
      
  } 
 


    $eventID = $_POST['eventID'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $location = $_POST['location'];


   if($image == ""){
      $sql = "UPDATE events SET eventName = '$name', eventDescription = '$description', eventDate = '$date', eventLocation = '$location' WHERE eventID = $eventID" ;
      // echo "sql update ohne image";
   }else {
      $sql = "UPDATE events SET eventName = '$name', eventDescription = '$description', `image` = '$image', eventDate = '$date', eventLocation = '$location' WHERE eventID = $eventID" ;
      // echo "sql update mit image";
   }

  

  
   if (mysqli_query($conn, $sql)  ){

      echo "<div class= 'bg-secondary text-light pt-2 pb-2'>";
      echo "<div class= 'd-flex justify-content-center'>";
      echo "<a href='create.php'><button type='button' class= 'btn btn-outline-info'>Home </button></a>";
      echo "</div>";
      header ("refresh:2; url=eventsAdmin.php"); 
      echo "<center>Weiterleitung erfolgt in 2 Sekunden.</center>";
      echo "</div>";

   //  echo "Event successfully updated <br> <a href='eventsAdmin.php' type='button' class= 'btn btn-outline-info'>Back to Home</a><br>";
   //  header ("refresh:2; url=eventsAdmin.php" ); 
   //  echo "Sie werden in 2 Sekunden weitergeleitet.";
}else {
    echo "Error while updating record : ". $conn->error;
}



   $conn->close();

}
