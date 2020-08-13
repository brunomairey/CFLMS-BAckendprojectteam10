<?php 
// $url = "../index.php";
//   $url2 = "../create.php";
require_once '../db_connect.php';


if (isset($_POST['but_update'])) {

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

   $titel = addslashes($_POST["titel"]);
   $vorname = $_POST['vorname'];
   $nachname = $_POST['nachname'];
  $email = $_POST['email'];
  $unternehmen = $_POST['unternehmen'];
  // if ($image !=="") {$firmenlogo=$image}
  // $firmenlogo = $_POST['firmenlogo'];
  $funktion = $_POST['funktion'];
  $website_facebook = $_POST['website_facebook'];
    $plz = (int)$_POST['plz'];
    $ort = $_POST['ort'];
    $land = $_POST['land'];
       $description = $_POST['description'];
         $public = $_POST['public'];
        $contact = $_POST['contact'];

   $id = $_POST['id'];

   if($image=="") {$sql = "UPDATE `companies` SET `titel` = '$titel', `vorname` = '$vorname', `nachname` = '$nachname', 
        `email` = '$email', `unternehmen` = '$unternehmen', 
        `funktion` = '$funktion', `website_facebook` = '$website_facebook', `plz` = '$plz',
       `ort` = '$ort', `land` = '$land',`description` = '$description', 
       `public` = '$public',  `contact` = '$contact' WHERE id = {$id}" ;
       echo"you know the image is empty";}


       else {$sql = "UPDATE `companies` SET `titel` = '$titel', `vorname` = '$vorname', `nachname` = '$nachname', 
        `email` = '$email', `unternehmen` = '$unternehmen', 
        `funktion` = '$funktion', `website_facebook` = '$website_facebook', `plz` = '$plz',
       `ort` = '$ort', `land` = '$land',`description` = '$description', 
       `public` = '$public',  `contact` = '$contact', `firmenlogo` = '$image' WHERE id = {$id}" ;
       echo "perfect we will update the image";}



   if($conn->query($sql) === TRUE) {
       echo  "<h4 class=\"text-success mx-5 my-3\">Successfully Updated</h4>";
        echo  "<a href='admin.php'><button type='button' class=\"btn btn-dark\">Home</button></a>";
   } else {
        echo "Error while updating record : ". $conn->error;
   }

   $conn->close();

}

?>
<?php echo $footer; ?>