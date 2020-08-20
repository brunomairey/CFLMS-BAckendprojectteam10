
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
<style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
        #map {
            height: 60vh;
            margin: auto;
            padding: 0;
        }

.titleofcompanies {
    background-color: #135887;
    color: white; 
    width: 100%;
    padding: 20px;
    margin: 40px 0;
    border-radius: 10px; }
        /* Optional: Makes the sample page fill the window. */


@media screen and (max-width: 600px) {
  .big_screen{
  display: none;
}
}
@media screen and (min-width: 601px) {
  .small_screen{
         display: none;
  }
}
    </style>
   
</head>
<body style="background-color: #DEEAE3">

<?php
           $sql = "SELECT * FROM companies";
           $result = $conn->query($sql);
  $row_cnt = $result->num_rows;
  // WHILE($row = mysql_fetch_array($result, MYSQL_NUM)) { echo $row; } ?>

<div class="container">
 <div class="big_screen">
 <h1 class="titleofcompanies text-center">DIESE ENTREPRENEURS FOR FUTURE HABEN BEREITS UNTERZEICHNET:</h1>


  <div class="row mb-3">
      <div class="col-3 pt-2">
  <h2 class="text-center" style="color: #40B2C3"> <strong> 

<?php echo $row_cnt; ?>

       </strong>
</h2>
</div>
    <div class="col-9">

  
  <h3>Diese UnternehmerInnen haben die Stellungnahme bereits unterzeichnet.</h3>
</div></div></div>

<div class="small_screen">
 <h3 class="titleofcompanies text-center">DIESE ENTREPRENEURS FOR FUTURE HABEN BEREITS UNTERZEICHNET:</h3>

  <h3 class="text-center" style="color: #40B2C3"> <strong> 

<?php echo $row_cnt; ?>

       </strong>
</h3>
 
  <h4>Diese UnternehmerInnen haben die Stellungnahme bereits unterzeichnet.</h4>


</div>


  <div id="map"></div>
<div class="big_screen">
<h3 class="my-3">Diese UnternehmerInnen sind bereits Teil von #EntrepreneursForFuture:</h3>
</div>
<div class="small_screen">
  <h4 class="my-3">Diese UnternehmerInnen sind bereits Teil von #EntrepreneursForFuture:</h4>
</div>
<!-- pagination -->
<?php
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_pagemob;
$sql = "SELECT * FROM companies WHERE `public`= 'ja' ORDER BY id ASC LIMIT $start_from, ".$results_per_pagemob;
$rs_result = $conn->query($sql);
// var_dump($rs_result); 
?> 

<div class="small_screen">
<div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">



<?php 
 while($row = $rs_result->fetch_assoc()) {
?> 



<div class="card-deck m-1">
  <ul class="list-group list-group-flush" >
    <li class="list-group-item" style="background-color: #DEEAE3;"><b>Unterzeichner: </b> <?= $row['titel']. " " .$row['vorname'] ." ". $row['nachname'] ?></li>
    <li class="list-group-item" style="background-color: #DEEAE3;"><b>Unternehmen: </b> <a href="<?= $row['website_facebook'] ?>"><?= $row['unternehmen'] ?></a></li>
    <li class="list-group-item" style="background-color: #DEEAE3;"><b>Stadt/Ort: </b><?= $row['ort'] ?></li>
      <li class="list-group-item" style="background-color: #DEEAE3;"><b>Land: </b><?= $row['land'] ?></li>
  </ul>
</div>
<?php 
}; 
?> 
</div>

<?php 
$sql = "SELECT COUNT(id) AS total FROM companies";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_pagemob); // calculate total pages with results
  
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<a href='index.php?page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i."</a> "; 
}; 
?>


</div>

<?php
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$sql = "SELECT * FROM companies WHERE `public`= 'ja' ORDER BY id ASC LIMIT $start_from, ".$results_per_page;
$rs_result = $conn->query($sql);
// var_dump($rs_result); 
?> 


<div class="big_screen">

<table class="table table-bordered table-striped">
<!--   style="background-color: #CAf0F8" -->
  <thead>
    <tr>
      <th scope="col">Unterzeichner</th>
      <th scope="col">Unternehmen</th>
      <th scope="col">Stadt/Ort</th>
      <th scope="col">Land</th>
    </tr>
  </thead>
  <tbody>
<?php 
 while($row = $rs_result->fetch_assoc()) {
?> 
             <tr>
      <th scope="row"><?= $row['titel']. " " .$row['vorname'] ." ". $row['nachname'] ?></th>
      <td><a href="<?= $row['website_facebook'] ?>"><?= $row['unternehmen'] ?></a></td>
      <td><?= $row['ort'] ?></td>
      <td><?= $row['land'] ?></td>
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






<!-- end of pagination -->



 
</div>



<script>
    var geocoder;
        var pinpoints = [{ lt: 48.20849, lg: 16.37208 }, { lt: 48.147608, lg: 17.106294 }, { lt: 48.45455, lg: 14.37208 }];
        console.log(pinpoints.length);
           function initMap() {
            geocoder = new google.maps.Geocoder();
            var mlocation = {
                lat: 48.20849,
                lng: 16.37208
            };
            var nlocation = {
                lat: 48.20849,
                lng: 15.37208
            };
            map = new google.maps.Map(document.getElementById('map'), {
                center: mlocation,
                zoom: 8
            });
            /*for (i = 0; i < pinpoints.length; i++) {
                console.log(i);
                var pinpoint = new google.maps.Marker({
                    position: { lat: pinpoints[i].lt, lng: pinpoints[i].lg },
                    map: map
                });
            }*/
        }

</script>



  <?php
           $sql = "SELECT * FROM companies";
           $result = $conn->query($sql);

if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {


                   ?>
                   <script type="text/javascript">
  $(document).ready (function getLocation() {
                var address = "<?php echo $row['ort'] ." ". $row['land'] ?>";
                console.log(address);
                geocoder.geocode({ 'address': address }, function(results, status) {
                    if (status == 'OK') {
                        map.setCenter(results[0].geometry.location);
                        var marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location
                        });
                        console.log(results);
                    } 
                    // else {
                    //     console.table(results);
                    //     alert('It was not possible to perform your request due to ' + status);
                    // }

                })
            });
    
</script>

 <?php ;
               }
           } else  {
               echo  "No result";
           } 

 ?>
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
 
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap"
        async defer></script>

        </body>