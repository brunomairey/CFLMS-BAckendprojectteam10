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
<?php
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$sql = "SELECT * FROM companies WHERE `public`= 'ja' ORDER BY id ASC LIMIT $start_from, ".$results_per_page;
$rs_result = $conn->query($sql);
// var_dump($rs_result); 
?> 
<table class="table table-bordered table-striped">
<!--   style="background-color: #CAf0F8" -->
  <thead>
    <tr>
      <th scope="col">Unterzeichner*In</th>
        <th scope="col">Logo</th>
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
 while($row = $rs_result->fetch_assoc()) {
?> 
     <tr>
      <td scope="row"><?= $row['titel']. " " .$row['vorname'] ." ". $row['nachname'] ?></td>
      <td><img src="<?= $row['firmenlogo'] ?>" alt="" style="max-width:5vw"></a></td>
      <td><a href="<?= $row['website_facebook'] ?>"><?= $row['unternehmen'] ?></a></td>
      <!-- <img src="<?= $row['firmenlogo'] ?>" alt="no image" style="max-width:5vw"> -->
      <td><?= $row['ort'] ?></td>
      <td><?= $row['land'] ?></td>
      <td><?= $row['public'] ?></td>
      <td><a href="update.php?id=<?= $row['id']?>"><button class="btn btn-info mx-3" type='button'>Aktualisieren</button></a></td>
      <td><a href="delete.php?id=<?= $row['id']?>"><button  class="btn btn-danger mx-3" type='button'>Löschen</button></a></td>
    </tr>
              
<?php 
}; 
?> 
 </tbody>
</table>

<?php 
$sql = "SELECT COUNT(id) AS total FROM companies";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
  
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<a href='index.php?page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i."</a> "; 
}; 
?>

 </div>


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