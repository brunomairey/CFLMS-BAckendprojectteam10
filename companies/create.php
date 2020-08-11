
<?php 

  include '../db_connect.php'; ?>
<!DOCTYPE html>

<html>
<head>
   <title>Become a member</title>

   <style type= "text/css">

    #contactForm {
    margin: 2vw; 
    padding: 2vw; 
    background-color: #f5f5f5 ;
    border-radius: 10px; 
    box-shadow: 5px 10px 18px #888888; 
    /*width: 100vw;
    position: relative;
    left: 20vw;*/
  }
.required > label:after {
  content:"*";
  color:red;
}

.required > legend:after {
  content:"*";
  color:red;
}

</form>



      </style>

</head>
<body>
  <div id="contactForm">
<form class="mx-5" action="a_create.php" method= "post" enctype='multipart/form-data'>
  

  
    <div class="form-group col-md-12">
      <label for="title">Akademischer Titel</label>
      <input type="text" class="form-control" name="titel" placeholder="Ing. Msc.">
    </div>
    <div class="form-row col-md-12">
    <div class="form-group required col-md-5 mr-5">
      <label for="vorname">Vorname</label>
      <input type="text" class="form-control" name="vorname" placeholder="Hartmann">
    </div>
  
      <div class="form-group required col-md-5 ml-5">
      <label for="nachname">Nachname</label>
      <input type="text" class="form-control" name="nachname" placeholder="Tina">
     </div>
    </div>
  <div class="form-group required col-md-12">
      <label for="email">Emails</label>
      <input type="email" class="form-control" name="email" placeholder="a@a.at">
    </div>
     <div class="form-group required col-md-12">
      <label for="title">Unternehmen</label>
      <input type="text" class="form-control" name="unternehmen" placeholder="Entrepreneurs4future">
    </div>

      <div class="form-group col-md-12">
        <label for="firmenlogo">Firmenlogo</label>
      <div class="custom-file">
      <input type="file" accept="image/jpeg,image/png"  formControlName="image" (change)="convertImage($event)" class="form-control-file"  name="file">



      </div>
</div>

   <fieldset class="form-group required col-md-12">
       <legend class="col-form-label pt-0">Funktion</legend>
          <div class="form-check">
          <input class="form-check-input" type="radio" name="funktion" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Inhaberin/Inhaber
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="funktion" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
           Gesellschafterin/Gesellschafter
          </label>
        </div>
          <div class="form-check">
          <input class="form-check-input" type="radio" name="funktion" id="gridRadios3" value="option3">
          <label class="form-check-label" for="gridRadios3">
            Geschäftsführerin/Geschäftsführer
          </label>
        </div>
          <div class="form-check">
          <input class="form-check-input" type="radio" name="funktion" id="gridRadios4" value="option4">
          <label class="form-check-label" for="gridRadios4">
            Prokuristin/Prokurist
          </label>
        </div>
     
  </fieldset>

  <div class="form-group required col-md-12">
    <label for="img">Website/Facebook</label>
    <input type="text" class="form-control" name="website_facebook" placeholder="Website/Facebook">
    </div>



<div class="form-row col-md-12">
      <div class="form-group col-md-2 mr-5">
      <label for="plz">Postleitzahl</label>
      <input type="number" class="form-control" name="pzl" placeholder="1000" step="1">
    </div>

     <div class="form-group col-md-4 mr-5">
       <label for="ort">Stadt/Ort</label>
      <input type="text" class="form-control" name="ort" placeholder="wien">
  </div>
    <div class="form-group required col-md-4">
     <label for="land">Land</label>
    <input type="text" class="form-control" name="land" placeholder="Österreich">
  </div>
</div>




   <div class="form-group col-md-12">
    <label for="description">Klimaschutz-Versprechen</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>

 <fieldset class="form-group required col-md-12">
       <legend class="col-form-label pt-0">KlimaVersprechen veröffentlichen?</legend>
          <div class="form-check">
          <input class="form-check-input" type="radio" name="public" id="gridRadios1" value="ja" checked>
          <label class="form-check-label" for="gridRadios1">
            Ja
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="public" id="gridRadios2" value="nein">
          <label class="form-check-label" for="gridRadios2">
           Nein
          </label>
        </div>
  </fieldset>

 <fieldset class="form-group required col-md-12">
       <legend class="col-form-label pt-0">Kein weiterer Kontakt? </legend>
       Möchten Sie weiterhin von uns hören?
          <div class="form-check">
          <input class="form-check-input" type="radio" name="contact" id="gridRadios1" value="nein" checked>
          <label class="form-check-label" for="gridRadios1">
            Ich möchte nur unterschreiben und anschließend nicht mehr kontaktiert werden.
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="contact" id="gridRadios2" value="ja">
          <label class="form-check-label" for="gridRadios2">
           Halten Sie mich weiterhin auf dem Laufenden über die Initiative.
          </label>
        </div>
  </fieldset>


  <div class="col-md-12">
  <button type="submit" class="btn btn-info btn-lg mx-5" name="but_upload">Unterzeichnen!</button>
   <a class="btn btn-info btn-lg" href="index.php" type="button" role="button">
    Züruck
  </a>
</div>
</form>
</div>
<?php $conn->close(); ?>
</body>

</html>

