<?php  
$urlimage="../images/logo_entre.png";
$urlindex="../index.php";
$urlsign="../companies/create.php";
$urlcompanies="../companies/index.php";
$urlevents ="../events/events.php";

$urlfriends="../friends.php";
$urlcontact="../contact.php";
$urlvideos="../stories.php";



$urladmin="../login/login.php";

$admincompanies="../companies/admin.php";
$adminevents="../events/eventsAdmin.php";
$admincreateevents="../events/create.php";
$adminRSSfeeds="../events/createRss.php";
$logout="../Login/logout.php?logout";
  include '../db_connect.php';
  include('../navbar.php');
    
  

?>


<!DOCTYPE html>
<html>
<head>
  

   <title>Memebered companies</title>

   
</head>
<body style="background-color: #DEEAE3">


<div class="container-fluid my-2">

	<table class="table table-striped" style="background-color: #CAf0F8">
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
      <td scope="row"><?= $row['titel']. " " .$row['vorname'] ." ". $row['nachname'] ?></td>
      <td><a href="<?= $row['website_facebook'] ?>"><img src="<?= $row['firmenlogo'] ?>" alt="no image" style="max-width:5vw"><?= $row['unternehmen'] ?></a></td>
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
</div>
</body>
<?php  
 
 $facebookfooter="../Images/facebook.png";
  $instafooter="../Images/insta.png";
   $twitterfooter="../Images/twitter.png";
    $youtubefooter="../Images/youtube.png";
    $linkedinfooter="../Images/linkedin.png";
    $impressum="../impressum.php";
    $datenschutz="../datenschutz.php";
    $loginadmin="../login/login.php";
  include('../footer.php');

?> 

</html>