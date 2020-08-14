<?php 
$url = "index.php";
  $url2 = "create.php";
require_once '../db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM `companies` WHERE id = {$id}" ;
   $result = $conn->query($sql);
   $data = $result->fetch_assoc();

   $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Unternehmen löschen</title>
</head>
<body>

<h3 class="text-warning m-5">Wollen Sie dieses Unternehmen wirklich löschen?</h3>
<form action ="a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $data['id'] ?>">
   <button type="submit" class="btn btn-dark mx-5">Ja, bitte!</button>
   <a href="admin.php"><button type="button" class="btn btn-dark">Nein, geh zurück!</button></a>
</form>

</body>
<?php
}
?>
<?php echo $footer; ?>
</html>

