
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
	

<?php
   ob_start();
session_start();
    
  if ( isset($_SESSION['user'])!="" || isset($_SESSION['admin'])!="" || isset($_SESSION['superadmin'])!="") {
 $logoutlink= "<form class=\"form-inline m-2 my-lg-0\">
           <a href=\"".$url6."\"><button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"button\">Search</button></a>
        <a href=\"actions/logout.php?logout\"><button class=\"btn btn-outline-light m-2 my-sm-0\" type=\"button\">Logout</button></a>
    </form>";

}


else {$logoutlink="<form class=\"form-inline my-2 my-lg-0\">
      <a href=\"index.php\"><button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"button\">Login</button></a>
          </form>";


} ?>



	
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
		        <a class="nav-link" href="<?php echo $urlabout ?>">Über uns</a>
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
	  	 <?php echo $logoutlink ?>
	  <!-- 	 <form class="form-inline mr-5">
    		
   			 <button class="btn my-5 btn-outline-light my-sm-0" href="<?php echo $urlsign ?>">Jetzt unterschreiben</button>
  			</form> -->
	</nav>

<?php if ( isset($_SESSION['admin'])!="" || isset($_SESSION['superadmin'])!="" ) { ?>
<br><br>
      <nav class="navbar navbar_admin sticky-top">
        <div class="mr-3 text-white">
            Hallo <?php echo $userRow['userName'] . "!"; ?>
        </div>

        <div class="mx-auto">
        <a class="btn btn-outline-warning" href="../companies/admin.php" role="button">Unternehmen bearbeiten</a>
            <a class="btn btn-outline-warning" href="create.php" role="button">Neuen Beitrag erstellen</a>
            <a class="btn btn-outline-info" href="../Login/logout.php?logout" role="button">Logout</a>

        </div>
        <div class="mr-3 text-white">
            <?php echo $userRow['userEmail']; ?>
        </div>


    </nav>

      <?php ;} else {"";} ?>