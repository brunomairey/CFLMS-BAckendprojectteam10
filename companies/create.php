



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
    background-color: #d7e1cc;
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
<body style="background-color: #DEEAE3">



<nav class="navbar navbar-expand-lg text-white" style="background-color: #135887">
  <a class="navbar-brand text-white" href="#">Navbar w/ text</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse text-white" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
    <span class="navbar-text">
      Navbar text with an inline element
    </span>
  </div>
</nav>

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
 <div class="form-group col-md-12">
      <label for="publisher_size">Funktion</label>
    <select class="form-control" id="exampleFormControlSelect1" name="funktion">
      <option selected>InhaberIn</option>
      <option>GesellschafterIn</option>
      <option>GeschäftsführerIn</option>
      <option>ProkuristIn</option>
    </select>
  </div>

  <div class="form-group required col-md-12">
    <label for="img">Website/Facebook</label>
    <input type="text" class="form-control" name="website_facebook" placeholder="Website/Facebook">
    </div>



<div class="form-row col-md-12">
      <div class="form-group col-md-2 mr-5">
      <label for="plz">Postleitzahl</label>
      <input type="number" class="form-control" name="plz" placeholder="1000" step="1">
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

 <div class="form-group col-md-12">
      <label for="publisher_size">KlimaVersprechen veröffentlichen?</label>
    <select class="form-control" id="exampleFormControlSelect1" name="public">
      <option selected value="ja">ja</option>
      <option value="nein">nein</option>
    </select>
  </div>


 <div class="form-group col-md-12">
      <label for="publisher_size">Kein weiterer Kontakt?  <br> <i>    Möchten Sie weiterhin von uns hören?</i></label>
        
    <select class="form-control" id="exampleFormControlSelect1" name="contact">
      <option selected value="ja">Ich möchte nur unterschreiben und anschließend nicht mehr kontaktiert werden.</option>
      <option value="nein">Halten Sie mich weiterhin auf dem Laufenden über die Initiative.</option>
    </select>
  </div>




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

