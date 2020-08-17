<?php 
$urlimage="../images/logo_entre.png";
$urlindex="../index.php";
$urlsign="../companies/create.php";
$urlcompanies="../companies/index.php";
$urlevents ="../events/events.php";
$urlabout="../aboutus.php";
$urlfriends="../friends.php";
$urlcontact="../contact.php";
$urlvideos="../stories.php";


  include '../db_connect.php';
  include '../navbar.php' ?>



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

h1 {
    background-color: #135887;
    color: white; 
    width: 100%;
    padding: 20px;
    margin: 40px 0;
    border-radius: 10px; }
        /* Optional: Makes the sample page fill the window. */

    </style>
   
</head>
<body style="background-color: #DEEAE3">



<div class="container">
 
 <h1 class="text-center">ENTREPRENEURS FOR FUTURE HABEN UNTERZEICHNET:</h1>
  <div class="row mb-3">
      <div class="col-3 pt-2">
  <h2 class="text-center" style="color: #40B2C3"> <strong> 
<?php
           $sql = "SELECT * FROM companies";
           $result = $conn->query($sql);
  $row_cnt = $result->num_rows;
echo $row_cnt;
// WHILE($row = mysql_fetch_array($result, MYSQL_NUM)) { echo $row; }
?>
       </strong>
</h2>
</div>
    <div class="col-9">

  
  <h3>Unternehmerinnen & Unternehmer haben die Stellungnahme bereits unterzeichnet.</h3>
</div></div>
  <div id="map"></div>

<h3 class="my-3">Diese Unternehmerinnen & Unternehmer sind bereits Teil von #EntrepreneursForFuture:</h3>

<!-- -->
	<table class="table table-info table-striped" style="background-color: #CAf0F8">
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
           $sql = "SELECT * FROM companies WHERE `public`= 'ja' ";
           $result = $conn->query($sql);

if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {


                   ?>
      <tr>
      <th scope="row"><?= $row['titel']. " " .$row['vorname'] ." ". $row['nachname'] ?></th>
      <td><a href="<?= $row['firmenlogo'] ?>"><?= $row['unternehmen'] ?></a></td>
      <td><?= $row['ort'] ?></td>
      <td><?= $row['land'] ?></td>
    </tr>
                 
  



                   <?php ;
               }
           } else  {
               echo  "No result";
           } 

           ?>


 </tbody>
</table>
<!--- --->

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
                    } else {
                        console.table(results);
                        alert('It was not possible to perform your request due to ' + status);
                    }

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