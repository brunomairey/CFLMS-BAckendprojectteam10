
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

<!DOCTYPE html>

<html>
<head>
   <title>Become a member</title>

   <style type= "text/css">

    #contactForm {
    margin: 2vw; 
    padding: 2vw; 
     background-color: #d7e1cc;
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

footer
{
  width: 100%; 
  display: flex;
  flex-direction: column;
  

}

footer #socialbuttons
{   display: flex;
  flex-direction: row;
  justify-content: center;
}

footer #footertext {
display: flex;
flex-direction: column;
text-align: center;}



      </style>

</head>
<body style="background-color: #DEEAE3">

<div class="container">
<h2 class="fl-heading">
<span class="fl-heading-text">Stellungnahme von Unternehmerinnen & Unternehmern aus Österreich zu den Protesten für mehr Klimaschutz (#EntrepreneursForFuture):</span>
</h2>


<h3><span style="font-size: 32px;"><strong>#FridaysForFuture sind dringender Weckruf </strong><strong>– Wirtschaft will endlich mehr Klimaschutz umsetzen</strong></span></h3>


<p>Inzwischen streiken und demonstrieren weltweit junge Menschen für ambitionierten Klimaschutz, für das Benennen der Klimakrise als echte Krise und für die Rettung unseres Planeten. Die historische Mobilisierungskraft der Bewegung zeigt die Dringlichkeit des Anliegens. Auch die Wissenschaft hat mit tausenden Unterzeichnenden der Initiative #Scientists4Future.org erklärt, dass die derzeitigen Maßnahmen zum Klima-, Arten-, Wald-, Boden- und Meeresschutz bei weitem nicht ausreichen. Als Unternehmerinnen und Unternehmer erklären wir uns mit den Streikenden solidarisch.</p>
<p>Aus unserem eigenen tagtäglichen unternehmerischen Handeln wissen wir: <strong>Klimaschonendes Wirtschaften funktioniert heute schon. Viele innovative Technologien, Produkte, Dienstleistungen und Geschäftsmodelle für einen besseren Klimaschutz gibt es bereits. Aber weitergehende politische Rahmenbedingungen sind endlich nötig, damit faire Wettbewerbsbedingungen für klimaschonende Technologien und Geschäftsmodelle hergestellt werden und die Wirtschaft insgesamt umsteuert.</strong></p>
<p>Die Staaten der Weltgemeinschaft haben sich mit dem Pariser Klimaschutzabkommen von 2015 völkerrechtlich verbindlich dazu verpflichtet, die globale Erwärmung deutlich unter 2°C zu halten. Alle Länder haben außerdem Anstrengungen versprochen, die Erwärmung auf 1,5°C zu begrenzen.</p>
<p>Als unterzeichnende Unternehmerinnen und Unternehmer stehen wir hinter dem Pariser Klima­schutz­abkommen und unterstützen diese Forderungen:</p>
<ol>
    <li><strong>Eine wirksame und planbar steigende CO<sub>2</sub>-Bepreisung für alle Sektoren. </strong>Investitionen werden so in eine kohlenstoffarme Infrastruktur, Technologien und Produkte gelenkt.</li>
    <li><strong>Energiewende beschleunigen.</strong> Schneller, gesetzlich verankerter Ausstieg aus den fossilen Energien. Österreich, Europa und die Welt können technisch zu 100% aus erneuerbaren Energien versorgt werden. Eine umfassende Energieeffizienzstrategie zur Verankerung von Efficiency First in allen Bereichen, insbesondere Förderungen für Gebäudesanierungen sowie ambitionierte gesetzliche Vorgaben mit Vorbildrolle der öffentlichen Hand.</li>
    <li><strong>Divestment und Abschaffung klimaschädlicher Subventionen </strong>bis zum Jahr 2025, wie z.B. von den G7-Staaten beschlossen.</li>
    <li><strong>Eine Mobilitätswende</strong>, die auf Verkehrsvermeidung, öffentlichen Verkehr, umweltfreundliche und geteilte Verkehrsmittel sowie C02-freie Antriebssysteme setzt. Wir brauchen die Besteuerung des Flugverkehrs (Kerosinsteuer) und reduzierte Umsatzsteuern auf Produkte und Dienstleistungen des Radverkehrs.</li>
    <li><strong>Eine Agrar- und Ernährungswende</strong>. Die Subventionspolitik in der Landwirtschaft und die Rahmenbedingungen für die Ernährungswirtschaft müssen in Einklang mit den Klimaschutzzielen stehen – und mit wirksamen Maßnahmen wie der Ausdehnung einer ökologischen und klimaschonenden Landwirtschaft und der Förderung entsprechender Ernährungs- und Konsumstile unterstützt werden.</li>
    <li><strong>Kreislaufwirtschaft forcieren. </strong>In der Regel ist die Nutzung von Sekundärrohstoffen der Nutzung von Primärrohstoffen ökologisch überlegen, da sie mit weniger Energieaufwand hergestellt werden können und auf geringere Transportwege angewiesen sind. Rücknahme-, Recycling-, und insbesondere die Wiederverwertungsquoten müssen nicht nur gesetzt, sondern auch durchgesetzt werden.</li>
    <li><strong>Aufbau eines Klima-Innovationsfonds für etablierte Unternehmen und Startups, </strong>die innovative Lösungen für die Steuerung/ Bewältigung der Klimakrise realisieren.</li>
    <li><strong>Ein ambitioniertes Klimaschutzgesetz, </strong>das eine dekarbonisierte Wirtschaft im Einklang mit dem in Paris vereinbarten 1,5°C Ziel erreicht.</li>
    <li><strong>Ein nachhaltiges Finanzsystem. </strong>Die von der EU-Kommission für Europa geschätzten Kosten von 180 Mrd. Euro jährlich zur Erreichung der Klima- und Energieziele können aufgebracht werden. Dazu bedarf es auch eines nachvollziehbaren Labels für nachhaltige Investitionen sowie gesetzlicher Regelungen – sei es durch steuerliche Anreize oder Vorschriften über die Mittelverwendung -, um privaten und institutionellen Investoren einen Rahmen zu bieten, ihren Beitrag bei der Mittelaufbringung zu leisten.</li>
</ol>
<p>Wir setzen voller Überzeugung auf Klimaschutz!</p>
<p>Als Profis aus der Wirtschaft wissen wir um die Kraft innovativer Geschäftsmodelle und Technologien, die das Klima schützen und profitabel sind. Die konsequente und schnelle Einführung erneuerbarer Energien, einer ökologischen Landwirtschaft, einer Kreislauf­wirtschaft und einer neuen Mobilität schaffen und sichern zukunftsfähige Arbeitsplätze. Klimaschützende Technologien und Geschäftsmodelle scheitern häufig an politischen Rahmenbedingungen, die Geschäftsmodelle und Technologien der Vergangenheit schützen. Die vergangenen 20 Jahre haben gezeigt, dass die technologische Entwicklung und Möglichkeiten für den Klimaschutz rasant gestiegen und die Kosten immens gesunken sind.</p>
<p>Um die gesamte Wirtschaft zu transformieren, benötigen wir dringend andere politische Rahmenbedingungen.</p>
<p>Wenn wir jetzt handeln, ist eine geregelte Dekarbonisierung der Wirtschaft möglich. Nur dann schaffen wir eine enkeltaugliche Wirtschaft. Nur dann können wir die Klimakrise noch steuern und unsere natürlichen Lebensgrundlagen erhalten. <strong>Dafür streiken die Kinder und Jugendlichen von „Fridays for Future“; ihnen gebührt unsere Achtung und unsere volle Unterstützung.</strong></p>
<p>&nbsp;</p>
<p><em><strong>#EntrepreneursForFuture</strong></em></p>
<p><a href="../images/Entrepreneurs4Future-Oesterreich.pdf" target="_blank" rel="noopener noreferrer">Laden Sie unsere Stellungnahme Österreich hier als PDF-Datei (237 kb) herunter. </a></p>





<!----------------- -------------------->

  <div id="contactForm">
<form  name="create" action="a_create.php" method= "post" enctype='multipart/form-data'>
  

  
    <div class="form-group col-md-12">
      <label for="title">Akademischer Titel</label>
      <input type="text" class="form-control" name="titel" placeholder="Ing. Msc.">
    </div>
   
    <div class="form-row col-md-12">
    <div class="form-group required col-md-5 mr-5">
      <label for="vorname">Vorname</label>
      <input type="text" class="form-control" name="vorname" placeholder="Hartmann" required="true">
    </div>
     <span  class="text-danger" id="vorname"></span>
      <div class="form-group required col-md-5 ml-5">
      <label for="nachname">Nachname</label>
      <input type="text" class="form-control" name="nachname" placeholder="Tina" required="true">
     </div>
       <span  class="text-danger" id="nachname"></span>
    </div>
  <div class="form-group required col-md-12">
      <label for="email">Emails</label>
      <input type="email" class="form-control" name="email" placeholder="a@a.at" required="true">

    </div>
     <span  class="text-danger" id="email"></span>
     <div class="form-group required col-md-12">
      <label for="title">Unternehmen</label>
      <input type="text" class="form-control" name="unternehmen" placeholder="Entrepreneurs4future" required="true">
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
     
  </fieldset> 

<!--  <div class="form-group col-md-12">
      <label for="publisher_size">Funktion</label>
    <select class="form-control" id="exampleFormControlSelect1" name="funktion">
      <option selected>InhaberIn</option>
      <option>GesellschafterIn</option>
      <option>GeschäftsführerIn</option>
      <option>ProkuristIn</option>
    </select>
  </div> -->

  <div class="form-group required col-md-12">
    <label for="img">Website/Facebook</label>
    <input type="text" class="form-control" name="website_facebook" placeholder="Website/Facebook" required="true">
    </div>



<div class="form-row col-md-12">
      <div class="form-group required col-md-2 mr-5">
      <label for="plz">Postleitzahl</label>
      <input type="number" class="form-control" name="plz" placeholder="1000" step="1" required="true">
    </div>

     <div class="form-group required col-md-4 mr-5">
       <label for="ort">Stadt/Ort</label>
      <input type="text" class="form-control" name="ort" placeholder="wien" required="true">
  </div>
    <div class="form-group required col-md-4">
     <label for="land">Bundesland</label>
      <select class="form-control" id="exampleFormControlSelect1" name="land" required="true">
        <option value="Burgenland">Burgenland</option>
      <option value="Niederösterreich">Niederösterreich</option>
      <option value="Oberösterreich">Oberösterreich</option>
      <option value="Kärnten">Kärnten</option>
      <option value="Salzburg">Salzburg</option>
       <option value="Steiermark">Steiermark</option>
        <option value="Tirol">Tirol</option>
         <option value="Voralberg">Voralberg</option>
          <option value="Wien">Wien</option>
           <option value="">Andere-Ausland</option>
    </select>
   <!--  <input type="text" class="form-control" name="land" placeholder="Österreich"> -->
  </div>
</div>




 <div class="form-group col-md-12">
    <label for="description">Klimaschutz-Versprechen</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
</div>

<fieldset value="" checked class="form-group required col-md-12">
       <legend class="col-form-label pt-0">KlimaVersprechen veröffentlichen?</legend>
       
          <div class="form-check">
          <input class="form-check-input" type="radio" name="public" id="gridRadios5" value="ja" checked>
          <label class="form-check-label" for="gridRadios5">
            Ja
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="public" id="gridRadios6" value="nein">
          <label class="form-check-label" for="gridRadios6">
           Nein
          </label>
        </div>
  </fieldset> 

 <!-- <div class="form-group col-md-12">
      <label for="publisher_size">KlimaVersprechen veröffentlichen?</label>
    <select class="form-control" id="exampleFormControlSelect1" name="public">
      <option selected value="ja">ja</option>
      <option value="nein">nein</option>
    </select>
  </div> -->

<fieldset value="" checked class="form-group required col-md-12">
       <legend class="col-form-label pt-0">Kein weiterer Kontakt?  <br> <i>    Möchten Sie weiterhin von uns hören?</i></legend>
       
                  <div class="form-check">
          <input class="form-check-input" type="radio" name="contact" id="gridRadios7" value="nein">
          <label class="form-check-label" for="gridRadios7">
          Ich möchte nur unterschreiben und anschließend nicht mehr kontaktiert werden.
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="contact" id="gridRadios8" value="ja" checked>
          <label class="form-check-label" for="gridRadios8">
           Halten Sie mich weiterhin auf dem Laufenden über die Initiative.
          </label>
        </div>
  </fieldset> 



<!--  <div class="form-group col-md-12">
      <label for="publisher_size">Kein weiterer Kontakt?  <br> <i>    Möchten Sie weiterhin von uns hören?</i></label>
        
    <select class="form-control" id="exampleFormControlSelect1" name="contact">
      <option selected value="ja">Ich möchte nur unterschreiben und anschließend nicht mehr kontaktiert werden.</option>
      <option value="nein">Halten Sie mich weiterhin auf dem Laufenden über die Initiative.</option>
    </select>
  </div>
 -->



  <div class="col-md-12">
  <button type="submit" class="btn btn-info btn-lg  mr-5 my-2" name="but_upload" onclick="return validateage()" style="background-color: #135887; border: #135887;">Unterzeichnen!</button>
   <a class="btn btn-info btn-lg" href="../index.php" type="button" role="button" style="background-color: #135887; border: #135887;">
    Zurück
  </a>
</div>
</form>
</div>
</div>
<?php $conn->close(); ?>



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

</body>

</html>