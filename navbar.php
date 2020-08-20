
<!DOCTYPE html>
<html lang="en">
<head>
	
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Entrepeneurs For Future</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styleB.css">
</head>
<body>
	

	
<nav class="navbar navbar navbar-expand-lg navbar-dark" style="background-color: #135887">
	  <a class="navbar-brand mx-5" href="<?php echo $urlindex ?>">
    <img src="<?php echo $urlimage ?>" width="100" height="85" alt="" loading="lazy">  </a>
  		 <button class="navbar-toggler navbar-toggler-left btn-lg" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  	
  		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	
		    <ul class="navbar-nav">
		 
		      <li class="nav-item">
		        <a class="nav-link active" href="<?php echo $urlsign ?>">Stellungnahme</a>
		      </li>
		      <!-- Hier kommen wir zu Unterschrift von companies - seite create
		      https://entrepreneurs4future.de/stellungnahme/stellungnahme-at/ -->
		      <li class="nav-item">
		        <a class="nav-link active" href="<?php echo $urlcompanies ?>">Entrepreneur</a>
		      </li>
		      <!-- Hier kommen wir zu Unterschrift von companies - seite index 
		      https://entrepreneurs4future.de/entrepreneure/-->
		     <li class="nav-item">
		        <a class="nav-link active" href="<?php echo $urlevents ?>">Aktivität und Termine</a>
		           <!-- Hier kommen wir zu Unterschrift von companies - seite index 
		      https://entrepreneurs4future.de/entrepreneure/-->
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo $urlfriends ?>">Unsere Freund*innen</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo $urlvideos ?>">Erfolgsgeschichten</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo $urlcontact ?>">Kontakt</a>
		      </li>
				     
		    </ul>
	  	</div>
	
	  <!-- 	 <form class="form-inline mr-5">
    		
   			 <button class="btn my-5 btn-outline-light my-sm-0" href="<?php echo $urlsign ?>">Jetzt unterschreiben</button>
  			</form> -->
	</nav>

<?php 

   ob_start();
session_start();

if ( isset($_SESSION['admin'])!="" || isset($_SESSION['superadmin'])!="" ) { 

$res = mysqli_query($conn, "SELECT * FROM users WHERE userID=" . $_SESSION['admin']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

	?>
<div class="container-fluid" style="background-color: #DEEAE3"><br><br></div>
      <nav class="navbar navbar_admin sticky-top" style="background-color: #135887;">
        <div class="mr-3 text-white">
            Hallo <?php echo $userRow['userName'] . "!"; ?>
        </div>

        <div class="mx-auto">
        
              <a class="btn btn-outline-light" href="<?php echo $adminevents ?>" role="button">Beiträge verwalten</a>
            <a class="btn btn-outline-light" href="<?php echo $admincreateevents ?>" role="button">Neuen Beitrag erstellen</a>
           
			<a class="btn btn-outline-light" href="<?php echo $adminRSSfeeds ?>" role="button">RSS-Feeds verwalten</a>
			<a class="btn btn-outline-light" href="<?php echo $admincompanies ?>" role="button">Unternehmen bearbeiten</a>
		<!-- 	<button type="button" onclick="aktivieren()" class="btn btn-info" style="background-color: #135887; border: #135887;">RSS-Feeds aktivieren</button>
      <button type="button" onclick="deaktivieren()" class="btn btn-info" style="background-color: #135887; border: #135887;">RSS-Feeds deaktivieren</button> -->
        </div>
        <div class="mr-3 text-white">
        	<?php echo $userRow['userEmail']; ?>
        	 <a class="btn btn-outline-light" href="<?php echo $logout ?>" role="button">Logout</a>
        </div>


    </nav>

      <?php ;} else {"";} ?>

 <!--      <script>
function aktivieren() {
  var container_rss = document.getElementById("container_rss");
  var container_rss_tablet = document.getElementById("container_rss_tablet");
  container_rss_tablet.style.display = "block";
  container_rss.style.display = "block"
}
function deaktivieren() {
  var container_rss = document.getElementById("container_rss");
  var container_rss_tablet = document.getElementById("container_rss_tablet");
  container_rss_tablet.style.display = "none";
  container_rss.style.display = "none"
}


</script> -->