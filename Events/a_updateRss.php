<?php 

require_once '../db_connect.php';

if (!isset($_SESSION['admin']) ) {
   header("Location: events.php");
   exit;
}
 // select logged-in users details
 $res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['admin']);
 $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
 

 


    $feedID = $_POST['feedID'];
    $url = $_POST['url'];


      $sql = "UPDATE feeds SET `url` = '$url' WHERE feedID = $feedID" ;


  

  
   if (mysqli_query($conn, $sql)  ){

      echo "<div class= 'bg-secondary text-light pt-2 pb-2'>";
      echo "<div class= 'd-flex justify-content-center'>";
      echo "<a href='createRss.php'><button type='button' class= 'btn btn-outline-info'>Home </button></a>";
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
