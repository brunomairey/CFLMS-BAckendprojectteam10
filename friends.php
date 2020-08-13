

<!DOCTYPE html>
<html>
<head>
  <title>Our friends</title>
</head>
<style>
    .media:hover {
          box-shadow: 0 0 0.5vw 0.5vw #D7E1CC;
          transition: 0.3s;
      }
  </style>
<body>
  <?php 

include 'db_connect.php'; ?>
<div class="jumbotron" style="background-color: #DEEAE3">

<ul class="list-unstyled">
 <a href="https://fridaysforfuture.at/" style="text-decoration: none; color:black">
  <li class="media" style="border: solid #D7E1CC 2.5px">
    <img src="images/logo_fffuture.png" class="mr-3 img-thumbnail rounded-circle" width="20%" alt="fridays for future">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Fridays for future</h5>
      <p> What do we want ? Climate Justice!<br>
       Wir fordern eine Klimapolitik in Einkang mit dem 1,5°C-Ziel</p>
    </div>
  </li></a>
  
  <a href="https://www.gruenewirtschaft.at/" style="text-decoration: none; color:black">
  <li class="media my-4" style="border: solid #D7E1CC 2.5px">
       <img src="images/greeneco.png" class="img-thumbnail mr-3" width="20%"  alt="Die Grüne Wirtschaft">
    <div class="media-body">
      <h5 class="mt-0 mb-1">grüne Wirtschaft.at</h5>
      Wir sind deine Stimme <br> Auch in der Krise. <br> Schreib und dein Anliegen & Lass und #deinestimme sein! 

</li>
  </li></a>
    
  <a href="https://www.lebensart.at/" style="text-decoration: none; color:black">
    <div style="border: solid #D7E1CC 2.5px">
    <li class="media my-2">
    <img src="images/lebensart.png" class="img-thumbnail mr-3" width="20%" alt="lebensart">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Lebensart</h5>
Nachhaltig.gut.leben. Das ist unsere Vision. Alle Menschen sollen heute und in Zukunft ein gutes Leben führen können. Dazu tragen wir mit unserer Information und unseren Medien bei.
    </div>
  </li></a>



  <a href="https://www.businessart.at/" style="text-decoration: none; color:black">
    <li class="media">
    <img src="images/businessart.png" class="img-thumbnail mr-3" width="20%" alt="lebensart">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Businessart</h5>
nachhaltig.gut.leben. Das ist unsere Vision. Alle Menschen sollen heute und in Zukunft ein gutes Leben führen können. Dazu tragen wir mit unserer Information und unseren Medien bei.
    </div>
  </li></a>
</div>



</ul>
</div>

</body>
</html>
 <?php  $conn->close(); ?>