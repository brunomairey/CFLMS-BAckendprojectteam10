
<?php 
$url = "../index.php";
  $url2 = "../create.php";
require_once '../db_connect.php';

if ($_POST) {
   $id = $_POST['id'];

   $sql = "DELETE FROM `companies` WHERE id = {$id}";
    if($conn->query($sql) === TRUE) {
       echo "<h4 class=\"text-success mx-5 my-3\">Erfolgreich gelöscht!!</h4>" ;
       echo "<a href='admin.php'><button type='button' class=\"btn btn-dark mx-5\">Zurück auf Admin Menu</button></a>";
   } else {
       echo "Error updating record : " . $conn->error;
   }

   $conn->close();
}

?>
<?php echo $footer; ?>