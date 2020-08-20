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


<!DOCTYPE html>
<html>
<head>
  <title>Contact us</title>
  <style type="text/css">
 
@media screen and (max-width: 600px) {
  .big_screen{
  display: none;
}

.contactForm {
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

@media screen and (min-width: 601px) {
  .small_screen{
         display: none;
  }
 .contactForm {
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



}

  </style>
</head>
<body>
<main class="p-3" style="background-color: #DEEAE3">



  <div class="container">
  <form class="contactForm" action="a_contact.php" method="post">
    <div class="small_screen">  
      <h4 id="contacttitle" class="text-center">HABEN SIE FRAGEN ZU <br>
          ENTREPRENEURS FOR FUTURE?</h4>
      <h5>Wir freuen uns auf Ihre Anregungen </h5> 
        </div>
       <div class="big_screen">
         <h2 id="contacttitle" class="text-center">HABEN SIE FRAGEN ZU <br>
          ENTREPRENEURS FOR FUTURE?</h2>
        <h3>Wir freuen uns auf Ihre Anregungen </h3> 
      </div>
  <div class="form-group">
          <label>
              Vorname:
              <input type="text" class="form-control" name="vorname" autofocus required>
          </label>
      </div>
     <div class="form-group">
          <label>
              Nachname:
              <input type="text" class="form-control" name="nachname" required>
          </label>
      </div>
      <div class="form-group">
          <label>
              Email:
              <input type="email" class="form-control" name="email" required>
          </label>
      </div>
      <label>
          Ihre Nachricht:
          <textarea class="form-control" rows="5" name="comment" required></textarea>
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
</div>

</main>
</body>
</html>



<?php  
$facebookfooter="Images/facebook.png";
  $instafooter="Images/insta.png";
   $twitterfooter="Images/twitter.png";
    $youtubefooter="Images/youtube.png";
    $linkedinfooter="Images/linkedin.png";
      $impressum="impressum.php";
    $datenschutz="datenschutz.php";
    $loginadmin="login/login.php";
  include('footer.php');

?> 