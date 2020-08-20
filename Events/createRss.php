<?php
$urlimage = "../images/logo_entre.png";
$urlindex = "../index.php";
$urlsign = "../companies/create.php";
$urlcompanies = "../companies/index.php";
$urlevents = "../events/events.php";

$urlfriends = "../friends.php";
$urlcontact = "../contact.php";
$urlvideos = "../stories.php";



$urladmin = "../login/login.php";

$admincompanies = "../companies/admin.php";
$adminevents = "../events/eventsAdmin.php";
$admincreateevents = "../events/create.php";
$adminRSSfeeds = "../events/createRss.php";
$logout = "../Login/logout.php?logout";
include '../db_connect.php';
include('../navbar.php');



?>

<?php


include '../db_connect.php';

if (!isset($_SESSION['admin'])) {
    header("Location: events.php");
    exit;
}

// select logged-in users details
$res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['admin']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);


?>



<!DOCTYPE html>
<html>

<head>
    <title>Add RSS-Feed</title>
    <link rel="stylesheet" href="../style_MANUELA.css">

</head>

<body style="background-color: #DEEAE3">
   <div style="height: 65vh">
    <div class='d-flex justify-content-center'>
        <h1 class="text-info mt-2 mb-2">RSS-Feed erstellen</h1>
    </div>

    <div class='d-flex justify-content-center'>

        <div class="contactForm">
            <form action="a_createRss.php" method="POST" enctype='multipart/form-data'>
                <div class="container font-weight-bold">



                    <label for="feedurl"> Url des RSS-Feeds eingeben: </label>
                    <input type="text" class="form-control mb-3" name="feedurl" placeholder="RSS Feed Url" />

                    <br>
                    <div class="d-flex justify-content-center">
                        <div>
                            <input class="btn btn-info mr-2" type="submit" name="submit" value="RSS Feed erstellen" />
                        </div>
                        <div>
                            <a href="eventsAdmin.php" class="btn btn-block btn-info">Zurück</a>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
<!--    <div class='d-flex justify-content-center'>
        <h1 class="text-info mt-2 mb-2">RSS-Feed verwalten</h1>

    </div>
  
      

 -->
    <?php
    // }

    // Close connection
    echo mysqli_close($conn);
    ?>
</div>
</body>

</html>

<?php

$facebookfooter = "../Images/facebook.png";
$instafooter = "../Images/insta.png";
$twitterfooter = "../Images/twitter.png";
$youtubefooter = "../Images/youtube.png";
$linkedinfooter = "../Images/linkedin.png";
$impressum = "../impressum.php";
$datenschutz = "../datenschutz.php";
$loginadmin = "../login/login.php";
include('../footer.php');

?>