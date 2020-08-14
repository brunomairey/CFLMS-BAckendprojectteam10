
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Entrepeneurs For Future</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styleB.css">
</head>
<body>
	

	
<nav class="navbar navbar navbar-expand-xl navbar-dark" style="background-color: #135887;">
	  <a class="navbar-brand mx-5" href="<?php echo $urlindex ?>">
    <img src="<?php echo $urlimage ?>" width="100" height="85" alt="" loading="lazy">  </a>
  		 <button class="navbar-toggler navbar-toggler-left btn-lg" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  	<!-- 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button> -->
  		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
<!--   		<div class="collapse navbar-collapse" id="navbarNav"> -->
		    <ul class="navbar-nav">
		 <!--      <li class="nav-item active">
		        <a class="nav-link" href=""><img src="" alt="whatever" style="max-height:5vh"><span class="sr-only">(current)</span></a>
		      </li> -->
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
		        <a class="nav-link" href="<?php echo $urlfriends ?>">Freund:Innen</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo $urlvideos ?>">Erfolgsgeschichten</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo $urlcontact ?>">Kontakt</a>
		      </li>
				     
		    </ul>
	  	</div>
	  	 <form class="form-inline mr-5">
    		
   			 <button class="btn my-5 btn-outline-light my-sm-0" type="submit">Jetzt unterschreiben</button>
  			</form>
	</nav>

