<?php  
$urlimage="images/logo_entre.png";
$urlindex="index.php";
$urlsign="companies/create.php";
$urlcompanies="companies/index.php";
$urlevents ="events/events.php";

$urlfriends="friends.php";
$urlcontact="contact.php";
$urlvideos="stories.php";



$urladmin="login/login.php";

$admincompanies="companies/admin.php";
$adminevents="events/eventsAdmin.php";
$admincreateevents="events/create.php";
$adminRSSfeeds="events/createRss.php";
$logout="Login/logout.php?logout";
	include 'db_connect.php';
	include('navbar.php');
	  
	

?>
<style>
	.bluebackground
{
	background-image: url("Images/headerindex.png");
	background-repeat: no-repeat;
	background-size: cover;
	width: 100%;
	height: 13vw;
}


 



@media screen and (max-width: 600px) {
  .big_screen{
  display: none;
}

#contactForm {
  width: 100%;
    margin: 2vw; 
    padding: 2vw; 
     background-color: #d7e1cc;
    border-radius: 1vw; 
    box-shadow: 0.5vw 1vw 2vw #888888; }

#contacttitle {
    background-color: #135887;
    color: white; 
    width: 100%;
    padding: 1vw;
    margin: 2vw 0;
    border-radius: 1vw; }

}
  .footerlink{
 width:5vh; height:5vh;
}

@media screen and (min-width: 601px) {
  .small_screen{
         display: none;
  }
 #contactForm {
    margin: 2vw; 
    padding: 2vw; 
     background-color: #d7e1cc;
    border-radius: 10px; 
    box-shadow: 5px 10px 18px #888888; }

#contacttitle {
    background-color: #135887;
    color: white; 
    width: 100%;
    padding: 20px;
    margin: 40px 0;
    border-radius: 10px; }

label, input, textarea { 
    width: 100%; 
    border: none;}

label {
    font-size: 1.3em; }

input {
    height: 50px;
    font-size: 1.3em; }

 .footerlink{
    width:3.25vw;
    height:3.25vw;
  }

}


  .social:hover > a {
  opacity: 0.5}

.social:hover img:hover {
  opacity: 1; 
  background: white;
 /* width: 100%;*/
  margin: 0 auto}

	</style>

<header class="main-header">
		
	</header>

	<main style="background-color: #DEEAE3">

		<div class="bluebackground">
		
	</div>

	
<div class="jumbotron" style="background-color: #DEEAE3">
	<h2>Entrepreneurs for Future</h2>
<p>Wir sind Unternehmerinnen und Unternehmer, die heute schon Klimaschutz voranbringen bzw. sich dafür einsetzen, dass die Wirtschaft mit innovativen Produkten, Technologien, Dienstleistungen und Geschäftsmodellen einen schnelleren Klimaschutz voranbringt.</p>
<p>&nbsp;</p>
<p><strong>Unsere Initiative steht inzwischen für mehr als 180.000 Arbeitsplätze und mehr als 30 Mrd. EUR Umsatz.</strong></p>
<h3>Wir laden</h3>
<ul>
<li>aktive Unternehmerinnen, Unternehmer, Gründerinnen, Gründer und Selbständige</li>
<li>aus allen Branchen,</li>
<li>die heute schon Klimaschutz mit ihren Unternehmungen voranbringen oder die davon überzeugt sind, dass schnellere und bessere Klimaschutzmaßnahmen nötig sind</li>
</ul>
<p>ein, die Stellungnahme von #EntrepreneursForFuture zu unterschreiben.</p>
	</div> <!-- closing of jumbotron -->

<div class="big_screen">
<div class="container-fluid p-5" style="background-color: #D7E1CC">
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
</div>
</div>
<div style="display: flex; flex-flow: row wrap; justify-content: center;">
  <a href="<?php echo $urlcompanies ?>"><button type="submit" class="btn btn-info btn-lg  mr-5 my-2"  style="background-color: #40B2C3; border: #135887;">Alle Entrepreneure ansehen</button></a>
</div>
	</div> <!--close of container -->

<div class="container-fluid p-5" style="background-color: #135887">
<div class="row mb-3">
     <div class="col-9 py-4">
      <h3 style="color: white">Werden auch Sie Teil der Initiative #EntrepreneursForFuture und unterzeichnen Sie die Stellungnahme:</h3>
     </div>
      <div class="col-3 py-2">  
  <a href="<?php echo $urlsign ?>"><button type="submit" class="btn btn-info btn-lg  mr-5 my-2"  style="background-color: #40B2C3; border: #135887;">Jetzt Unterzeichnen !</button></a>
 </div>
</div>
</div><!--close of container -->

</div><!--close of bigscreen -->


<div class="small_screen">
<div class="container-fluid" style="background-color: #D7E1CC">

  <h3 class="text-center" style="color: #40B2C3"> <strong> 
<?php
           $sql = "SELECT * FROM companies";
           $result = $conn->query($sql);
  $row_cnt = $result->num_rows;
echo $row_cnt;
// WHILE($row = mysql_fetch_array($result, MYSQL_NUM)) { echo $row; }
?>
       </strong>
</h3>


  
  <h4>Unternehmerinnen & Unternehmer haben die Stellungnahme bereits unterzeichnet.</h4>

<div style="display: flex; flex-flow: row wrap; justify-content: center;">
  <a href="<?php echo $urlcompanies ?>"><button type="submit" class="btn btn-info btn-lg  mr-5 my-2"  style="background-color: #40B2C3; border: #135887;">Alle Entrepreneure ansehen</button></a>
</div>
  </div> <!--close of container -->

<div class="container-fluid" style="background-color: #135887">

      <h4 style="color: white">Werden auch Sie Teil der Initiative #EntrepreneursForFuture und unterzeichnen Sie die Stellungnahme:</h4>
   <div style="display: flex; flex-flow: row wrap; justify-content: center;">
  <a href="<?php echo $urlsign ?>"><button type="submit" class="btn btn-info btn-lg  mr-5 my-2"  style="background-color: #40B2C3; border: #135887;">Jetzt Unterzeichnen !</button></a>
</div>
</div><!--close of container -->


</div><!--close of smallscreen -->




<?php  
$facebookfooter="Images/facebook.png";
  $instafooter="Images/insta.png";
   $twitterfooter="Images/twitter.png";
    $youtubefooter="Images/youtube.png";
    $linkedinfooter="Images/linkedin.png";
      $impressum="impressum.php";
    $datenschutz="datenschutz.php";
    $loginadmin="login/login.php";


?> 


<div class="container-fluid p-1" style="background-color: #DEEAE3">
	<div class="justify-content-center pt-4" >
	<h3 style="text-align: center; color: #135887">Folgen Sie uns in den Sozialen Medien!</h3>
	<h4 style="text-align: center; color: #40B2C3">Folgen Sie uns auf:</h4>
		<div id="socialbuttons" style="display: flex; flex-direction: row; justify-content: center;">
			<div class="social icon m-2">
				<a href="https://www.facebook.com/entrepeneursforfuture" title="facebook-icon">
					<img class="footerlink" src="<?php echo $facebookfooter ?>">
				</a>
			</div>
			<div class="social icon m-2">
				<a href="https://www.instagram.com/entrepeneursforfuture/" title="instagram-icon">
					<img class="footerlink" src="<?= $instafooter ?>">
				</a>
			</div>
			<div class="social icon m-2">
				<a href="https://www.twitter.com/eff_future" title="twitter-icon">
					<img class="footerlink" src="<?= $twitterfooter ?>">
				</a>
			</div>
			<div class="social icon m-2">
				<a href="https://www.youtube.com/channel/UCg9d_0n7Kt16JbBPZKvMacQ" title="youtube-icon">
					<img class="footerlink" src="<?= $youtubefooter ?>">
				</a>
			</div>
			<div class="social icon m-2">
				<a href="https://www.linkedin.com/company/entrepeneurs-for-future/" title="linkedin-icon">
					<img class="footerlink" src="<?= $linkedinfooter ?>">
				</a>
			</div>
			
		</div>
</div>
<div style="display: flex; flex-direction: row; justify-content: center;">
<div class="container" id="contactForm">
  <!-- <div class= style="background-color: #D7E1CC"> -->
  <form action="a_contact.php" method="post">
    <div class="small_screen">  
      <h4 id="contacttitle" class="text-center">SIE HABEN FRAGEN ZU <br>
          ENTREPRENEURS FOR FUTURE?</h4>
      <h5>Wir freuen uns auf Ihre Anregungen </h5> 
        </div>
       <div class="big_screen">
         <h2 id="contacttitle" class="text-center">SIE HABEN FRAGEN ZU <br>
          ENTREPRENEURS FOR FUTURE?</h2>
        <h3>Wir freuen uns auf Ihre Anregungen </h3> 
      </div>
      <div class="form-group">
          <label>
              Vorname:
              <input type="text" class="form-control" name="vorname">
              
          </label>
      </div>
     <div class="form-group">
          <label>
              Nachname:
              <input type="text" class="form-control" name="nachname">
          </label>
      </div>
      <div class="form-group">
          <label>
              Email:
              <input type="email" class="form-control" name="email">
          </label>
      </div>
      <label>
          Ihre Nachricht:
          <textarea class="form-control" rows="5" name="comment"></textarea>
      </label>
      <br>
     
     <div class="col-md-12">
  <button type="submit" class="btn btn-info btn-lg  mr-5 my-2" name="Submit" value="Senden" style="background-color: #135887; border: #135887;">Senden!</button>
   <button type="reset" class="btn btn-info btn-lg mr-5 my-2" value="Reset" style="background-color: #135887; border: #135887;">
    Reset
  </button>
   <a class="btn btn-info btn-lg"  href="index.php" type="button" role="button" style="background-color: #135887; border: #135887;">
    Zurück
  </a>
</div>
       <!--  <div class="col-md-12 my-5">
          <input type="submit" class="btn btn-info" value="Senden" style="background-color: #135887; border: solid #135887">
          <input type="Reset" class="btn btn-info" value="Reset" style="background-color: #135887; border: solid #135887">
      </div> -->
    </form>
  </div></div></div>
<!-- </div> -->
	<!-- <section class="showcase">
			<div class="container">
				<a class="btn btn-primary btn-lg" href="#">Read More</a>
			</div>
		</section> -->

	</main>

<?php  

	include('footer.php');

?> 