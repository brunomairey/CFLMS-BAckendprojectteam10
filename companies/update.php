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



<?php 
// $url = "index.php";
//   $url2 = "create.php";
require_once '../db_connect.php';

if (isset($_GET['id'])) {
   $id = $_GET['id'];

    $sql = "SELECT * FROM `companies` WHERE id = {$id}" ;
   $result = $conn->query($sql);
   
   $data = $result->fetch_assoc();

   $conn->close();
// echo $data;

?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit Media</title>

   <style type= "text/css">
          #contactForm {
    margin: 2vw; 
    padding: 2vw; 
    background-color: #d7e1cc ;
    border-radius: 10px; 
    box-shadow: 5px 10px 18px #888888; 
    width: 60vw;
    position: relative;
    left: 20vw;
     }
   </style>

</head>
<body style="background-color: #DEEAE3">

<div id="contactForm">
<form class="mx-5" action="a_update.php" method= "post" enctype='multipart/form-data'>
  

  
    <div class="form-group col-md-12">
      <label for="title">Akademischer Titel</label>
      <input type="text" class="form-control" name="titel" value="<?php echo $data['titel'] ?>">
    </div>
    <div class="form-row col-md-12">
    <div class="form-group required col-md-5 mr-5">
      <label for="vorname">Vorname</label>
      <input type="text" class="form-control" name="vorname" value="<?php echo $data['vorname'] ?>">
    </div>
  
      <div class="form-group required col-md-5 ml-5">
      <label for="nachname">Nachname</label>
      <input type="text" class="form-control" name="nachname" value="<?php echo $data['nachname'] ?>">
     </div>
    </div>
  <div class="form-group required col-md-12">
      <label for="email">Emails</label>
      <input type="email" class="form-control" name="email" value="<?php echo $data['email'] ?>">
    </div>
     <div class="form-group required col-md-12">
      <label for="title">Unternehmen</label>
      <input type="text" class="form-control" name="unternehmen" value="<?php echo $data['unternehmen'] ?>">
    </div>

      <div class="form-group col-md-12">
        <label for="firmenlogo">Firmenlogo</label>
      <div class="custom-file">
      <input type="file" accept="image/jpeg,image/png"  formControlName="image" (change)="convertImage($event)" class="form-control-file"  name="file">
      </div>
      </div>
       <div class="form-group col-md-12">
      <label for="publisher_size">Funktion</label>
    <select class="form-control" id="exampleFormControlSelect1" name="funktion">
      <option hidden selected><?php echo $data['funktion'] ?></option>
      <option>InhaberIn</option>
      <option>GesellschafterIn</option>
      <option>GeschäftsführerIn</option>
      <option>ProkuristIn</option>
    </select>
  </div>
<!-- 
   <fieldset class="form-group required col-md-12">
       <legend class="col-form-label pt-0">Funktion</legend>
          <div class="form-check">
          <input class="form-check-input" type="radio" name="funktion" id="gridRadios1" value="Inhaberin" checked>
          <label class="form-check-label" for="gridRadios1">
            Inhaberin/Inhaber
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="funktion" id="gridRadios2" value="Gesellschafterin">
          <label class="form-check-label" for="gridRadios2">
           Gesellschafterin/Gesellschafter
          </label>
        </div>
          <div class="form-check">
          <input class="form-check-input" type="radio" name="funktion" id="gridRadios3" value="Geschäftsführerin">
          <label class="form-check-label" for="gridRadios3">
            Geschäftsführerin/Geschäftsführer
          </label>
        </div>
          <div class="form-check">
          <input class="form-check-input" type="radio" name="funktion" id="gridRadios4" value="Prokuristin">
          <label class="form-check-label" for="gridRadios4">
            Prokuristin/Prokurist
          </label>
        </div>
     
  </fieldset> -->

  <div class="form-group required col-md-12">
    <label for="img">Website/Facebook</label>
    <input type="text" class="form-control" name="website_facebook" value="<?php echo $data['website_facebook'] ?>">
    </div>



<div class="form-row col-md-12">
      <div class="form-group col-md-2 mr-5">
      <label for="plz">Postleitzahl</label>
      <input type="number" class="form-control" name="plz" value="<?php echo $data['plz'] ?>" step="1">
    </div>

     <div class="form-group col-md-4 mr-5">
       <label for="ort">Stadt/Ort</label>
      <input type="text" class="form-control" name="ort" value="<?php echo $data['ort'] ?>">
  </div>
    <div class="form-group required col-md-4">
     <label for="land">Land</label>
    <input type="text" class="form-control" name="land" value="<?php echo $data['land'] ?>">
  </div>
</div>




   <div class="form-group col-md-12">
    <label for="description">Klimaschutz-Versprechen</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"><?php echo $data['description'] ?></textarea>
  </div>

<!-- <fieldset value="" checked class="form-group required col-md-12">
       <legend class="col-form-label pt-0">KlimaVersprechen veröffentlichen?</legend>
           <div class="form-check">
          <input hidden class="form-check-input" type="radio" name="public" id="gridRadios1" value="" checked>
        <label class="form-check-label" for="gridRadios1">
          
          </label>    
        </div>
          <div class="form-check">
          <input class="form-check-input" type="radio" name="public" id="gridRadios1" value="ja">
          <label class="form-check-label" for="gridRadios1">
            Ja
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="public" id="gridRadios2" value="nein">
          <label class="form-check-label" for="gridRadios2">
           Nein
          </label>
        </div> -->
<!--   </fieldset>  -->

 <div class="form-group col-md-12">
      <label for="publisher_size">KlimaVersprechen veröffentlichen?</label>
    <select class="form-control" id="exampleFormControlSelect1" name="public">
       <option hidden selected><?php echo $data['public'] ?></option>
      <option value="ja">ja</option>
      <option value="nein">nein</option>
    </select>
  </div>



 <div class="form-group col-md-12">
      <label for="publisher_size">Kein weiterer Kontakt?  <br> <i>    Möchten Sie weiterhin von uns hören?</i></label>
 <select class="form-control" id="exampleFormControlSelect1" name="contact">
     <option hidden selected><?php echo $data['contact'] ?></option>
      <option value="ja">Ich möchte nur unterschreiben und anschließend nicht mehr kontaktiert werden.</option>
      <option value="nein">Halten Sie mich weiterhin auf dem Laufenden über die Initiative.</option>
    </select>
  </div>


  <div class="col-md-12">
     <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
  <button type="submit" class="btn btn-dark mr-5 my-2" name="but_update" style="background-color: #135887; border: #135887;">Unternehmen Daten aktualisieren</button>
   <a class="btn btn-dark" href="admin.php" type="button" role="button" style="background-color: #135887; border: #135887;">
   Zurück zum Menu
  </a>
</div>


</form>

</div>




</body>
<?php
} else{ echo"there is no id";}
?>
<?php echo $footer; ?>
</html>

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