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
// ob_start();
// session_start();
require_once '../db_connect.php';

if (!isset($_SESSION['admin'])) {
    header("Location: events.php");
    exit;
}
// select logged-in users details
$res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['admin']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

if ($_GET['id']) {
    $eventID = $_GET['id'];

    $sql = "SELECT * FROM events WHERE eventID = $eventID";

    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    $conn->close();

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Edit Event</title>
        <link rel="stylesheet" href="../style_MANUELA.css">

    </head>

    <body>

        <nav class="navbar sticky-top navbar-dark bg-dark">
            <div>
                <p class="text-white"> <?php echo $userRow['userName']; ?> </p>
            </div>

            <div class="mx-auto">
                <a class="btn btn-outline-info" href="eventsAdmin.php" role="button">Home</a>
                <a class="btn btn-outline-warning" href="create.php" role="button">Beitrag hinzufügen</a>
                <a class="btn btn-outline-info" href="logout.php?logout" role="button">Logout</a>
            </div>

            <div class="mr-3 text-white">
                <?php echo $userRow['userEmail']; ?>
            </div>
            <!-- <div class="image">
            <img class="icon" src="img/icon/<?php echo $userRow['foto']; ?>" />
        </div> -->
        </nav>

        <div class="d-flex justify-content-center">
            <h1 class="text-info">Beitrag aktualisieren </h1>
        </div>

        <div class="d-flex justify-content-center">
            <div class="contactForm">
                <form action="a_update.php" method="post" enctype='multipart/form-data'>
                    <div class="container font-weight-bold">
                        


                        <div class="form-group">


                        <?php 
                        $category =  $data['category'];

                         if ($category == 'event'){
                           echo  "<input type='radio' id='event' name='category' value='event' checked >";
                           echo " <label for='event' class='mr-5'>Event </label>";
                           echo " <input type='radio' id='blog' name='category' value='blog'>";
                           echo " <label for='blog'> Artikel/Blog</label> ";
                         }
                         else{
                            echo  "<input type='radio' id='event' name='category' value='event' >";
                            echo " <label for='event' class='mr-5'>Event </label>";
                            echo " <input type='radio' id='blog' name='category' value='blog' checked>";
                            echo " <label for='blog'> Artikel/Blog</label> ";
                         }

                        ?>


                            <br>
                            <label for="firstname">Name Beitrag: </label>
                            <input type="text" class="form-control" name="name" value="<?php echo $data['eventName'] ?>" />

                            <label for="title">Ort: </label>
                            <input type="text" class="form-control" name="location" rows="2" value="<?php echo $data['eventLocation'] ?>" />

                            <label for="image">Datum: </label>
                            <input type="text" class="form-control" name="date" value="<?php echo $data['eventDate'] ?>" />

                            <label for="description">Beschreibung: </label>
                            <input type="text" class="form-control" name="description" rows="6" value="<?php echo $data['eventDescription'] ?>" />


                            <label for="type">Bild aktualisieren: </label>
                            <div>
                                <p>aktuelles Bild</p>
                                <?php

                                if ($data['image'] == "" ){
                                    echo "<p>kein Bild vorhanden</p>";
                                }
                                // else {
                                //     echo "<img src='($data['image'])'>";
                                //     echo "<img src= 'deer.jpg'>";
                                //     //  alt='Event image' width='200px' height='100px' class='rounded'>";
                                // }

                                ?>
                                <img src='<?= $data['image'] ?>' alt='Event image' width='100' class="rounded mb-2">
                                <p>neues Bild</p>
                                <div id="thumbnail"></div>
                                <input type="file" name="fileInput" accept="image/*" multiple onChange="fileThumbnail(this.files);" (change)="convertImage($event)">
                                <!-- <input type="file" class="custom-file" name="file" accept="image/jpeg,image/png" (change)="convertImage($event)" placeholder="image" /> -->

                                <input type="hidden" name="eventID" value="<?php echo $data['eventID'] ?>" />

                            </div>

                            <div class="d-flex justify-content-center">
                                <div>
                                    <input class="btn btn-outline-info" type="submit" name="but_upload" value="Beitrag aktualisieren" />
                                </div>
                                <div>
                                    <a href="eventsAdmin.php" class="btn btn-block btn-outline-info">Zurück</a>
                                </div>
                            </div>


                        </div>
                    </div>



            </div>
            </form>
        </div>


        <script>
        //function thumbnails
        function fileThumbnail(files) {
            var thumb = document.getElementById("thumbnail");

            thumb.innerHTML = "";

            if (!files)
                return;

            for (var i = 0; i < files.length; i++) {
                var file = files[i];

                if (!file.type.match(/image.*/))
                    continue;

                var img = document.createElement("img");

                img.src = window.URL.createObjectURL(file);
                img.width = 100;

                img.onload = function(e) {
                    window.URL.revokeObjectURL(this.src);
                };

                thumb.appendChild(img);
            }
        }
    </script>

    </body>

    </html>

<?php
}
?>


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