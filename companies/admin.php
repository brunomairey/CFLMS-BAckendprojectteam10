<?php 
  //  $url = "index.php";
  // $url2 = "create.php";
include '../db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
  

   <title>Memebered companies</title>

   
</head>
<body>


<div class="container-fluid">

	<table class="table table-info table-striped">
  <thead>
    <tr>
      <th scope="col">Unterzeichner</th>
      <th scope="col">Unternehmen</th>
      <th scope="col">Stadt/Ort</th>
      <th scope="col">Land</th>
       <th scope="col">Veröffentlichen</th>
      <th scope="col">Aktualisieren</th>
      <th scope="col">Löschen</th>
    </tr>
  </thead>
  <tbody>
    
<?php
           $sql = "SELECT * FROM companies";
           $result = $conn->query($sql);

if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {


                   ?>
      <tr>
      <th scope="row"><?= $row['titel']. " " .$row['vorname'] ." ". $row['nachname'] ?></th>
      <td><img src="<?= $row['firmenlogo'] ?>" alt="wahtever" style="max-width:5vw"><?= $row['unternehmen'] ?></td>
      <td><?= $row['ort'] ?></td>
      <td><?= $row['land'] ?></td>
      <td><?= $row['public'] ?></td>
      <td><a href="update.php?id=<?= $row['id']?>"><button class="btn btn-info mx-3" type='button'>Aktualisieren</button></a></td>
      <td><a href="delete.php?id=<?= $row['id']?>"><button  class="btn btn-danger mx-3" type='button'>Löschen</button></a></td>
    </tr>
                 
    
	



                   <?php ;
               }
           } else  {
               echo  "No result";
           } 

           ?>


 </tbody>
</table>

</body>
</div>
