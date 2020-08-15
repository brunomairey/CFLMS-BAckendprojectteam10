<?php  
$urlimage="images/logo_entre.png";
$urlindex="index.php";
$urlsign="companies/create.php";
$urlcompanies="companies/index.php";
$urlevents ="events/events.php";
$urlabout="aboutus.php";
$urlfriends="friends.php";
$urlcontact="contact.php";
$urlvideos="stories.php";



$urladmin="events/login.php";
  include('navbar.php');
  
  

?>



<!DOCTYPE html>
<html>
<head>
  <title>Contact us</title>
  <style type="text/css">
    

    .contactForm {
    margin: 2vw; 
    padding: 2vw; 
     background-color: #d7e1cc;
    border-radius: 10px; 
    box-shadow: 5px 10px 18px #888888; }

h1 {
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

  </style>
</head>
<body>
<main class="p-3" style="background-color: #DEEAE3">



  <div class="container">
  <form [formGroup]="info" (ngSubmit)="onSubmit()" class="contactForm">
      <h1 class="text-center">SIE HABEN FRAGEN ZU <br>
ENTREPRENEURS FOR FUTURE?</h1>
      <div class="form-group">
<h2>Wir freuen uns auf Ihre Anregungen </h2>        
          <label>
              Vorname:
              <input type="text" class="form-control" formControlName="firstName" autofocus>
          </label>
      </div>
     <div class="form-group">
          <label>
              Nachname:
              <input type="text" class="form-control" formControlName="lastName">
          </label>
      </div>
      <div class="form-group">
          <label>
              Email:
              <input type="email" class="form-control" formControlName="email">
          </label>
      </div>
      <label>
          Ihre Nachricht:
          <textarea class="form-control" rows="5" formControlName="message"></textarea>
      </label>
      <br>
     <div class="my-5">
          <input type="submit" class="btn btn-dark" value="Senden" style="background-color: #135887; border: solid #135887">
      </div>
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