<?php 

require_once '../db_connect.php';


if (isset($_POST['grad'])) {

  
   $titel = addslashes($_POST["titel"]);
   $vorname = $_POST['vorname'];
   $nachname = $_POST['nachname'];
  $email = $_POST['email'];
  $unternehmen = $_POST['unternehmen'];
  $firmenlogo = $_POST['firmenlogo'];
  $funktion = $_POST['funktion'];
  $website_facebook = $_POST['website_facebook'];
    $plz = (int)$_POST['plz'];
    $ort = $_POST['ort'];
    $land = $_POST['land'];
       $description = $_POST['description'];
         $public = $_POST['public'];
        $contact = $_POST['contact'];

  
  $sql = "INSERT INTO `companies` (`titel`, `vorname`, `nachname`, `email`, `unternehmen`,  `firmenlogo`, `funktion`, `website_facebook`, `plz`, `ort`,`land`, `description`, `public`, `contact`) 
  VALUES ('$titel', '$vorname', '$nachname', '$email', '$unternehmen',  '$image', '$funktion', '$website_facebook', $plz, '$ort', '$land', '$description', '$public', '$contact')";
    if($conn->query($sql) === TRUE) {
       echo "<p class=\"text-success mx-5 my-3\">Sie sind erfolgreich registriert</p>" ;
         echo "<a href='../index.php'><button type='button' class=\"btn btn-dark\">Home</button></a>";
         // header("Refresh: 5; url= index.php");
   } else  {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }

   $conn->close();
}

?>
