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
        <!-- <link rel="stylesheet" href="../style_MANUELA.css"> -->
        <script src="https://cdn.tiny.cloud/1/zmvdg0nz5rrmxbcvtzfsgb1nmc7iuq8uotrbbxfxt5iu5yol/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: '#mytextarea'

            });
        </script>
        <style>
            body {
                background-color: #DEEAE3;
            }
        </style>

    </head>

    <body>

        <div class="d-flex justify-content-center">
            <div class="contactForm">
                <form action="a_update.php" method="post" enctype='multipart/form-data'>
                    <div class="container font-weight-bold">



                        <div class="form-group pl-5 pr-5 rounded formular">
                            <div class="d-flex justify-content-center">
                                <h2 class="text-info mt-2 mb-2">Beitrag aktualisieren </h2>
                            </div>

                            <?php
                            $category =  $data['category'];

                            if ($category == 'event') {
                                echo  "<input type='radio' id='event' name='category' value='event'  checked >";
                                echo " <label for='event' class='mr-5'>Event </label>";
                                echo " <input type='radio' id='blog' name='category' value='blog'>";
                                echo " <label for='blog'> Artikel/Blog</label> ";
                            } else {
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
                            <textarea class="form-control" id="mytextarea" rows="3" name="description"><?php echo $data['eventDescription'] ?></textarea>
                            <br>
                            <!-- <label for="type">Bild aktualisieren: </label> -->


                            <?php
                            $picture = $data['image'];

                            if ($picture == "") {
                                echo "<span class='mt-2'><p>Bild hinzufügen</p></span>";
                                // echo "<div id='thumbnail' class='mb-2'></div>";
                                // echo "<input type='file' name='fileInput' accept='image/*' multiple onChange='fileThumbnail(this.files);' (change)='convertImage($event)'>";
                            } else {
                                echo "<p>aktuelles Bild: </p>";
                                echo "<span><img src= '$picture' alt='Event image' width='100' class='rounded mb-2'></span><br>";
                                echo  "<input type='radio' id='update' name='todo' value='update' onclick='toggleOptions();' checked >";
                                echo " <label for='event' class='mr-5'>Bild aktualisieren </label>";
                                echo " <input type='radio' id='delete' name='todo' onclick='toggleOptions();' value='delete'>";
                                echo " <label for='blog'> Bild löschen</label> ";
                            }

                            ?>

                            <!-- <label for="fileInput">Foto hochladen</label> -->
                            <br>
                            <!-- <label for="fileInput">Foto hochladen</label> -->
                            <div id="thumbnail"></div>
                            <input type="file" id="up" name="fileInput" id="up" accept="image/*" multiple onChange="fileThumbnail(this.files);" (change)="convertImage($event)">

                            <input type="hidden" name="eventID" value="<?php echo $data['eventID'] ?>" />
                 





                            <div class="d-flex justify-content-center mt-3">
                                <div>
                                    <input class="btn btn-info rounded mr-2" type="submit" name="but_upload" value="Beitrag aktualisieren" />
                                </div>
                                <div>
                                    <a href="eventsAdmin.php" class="btn btn-block btn-info rounded">Zurück</a>
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

            function toggleOptions() {
                if (document.getElementById('update').checked) {
                    document.getElementById('up').style.display = '';
                    document.getElementById('thumbnail').style.display = '';
                    // document.getElementById('lab_loc').style.display = '';
                    // document.getElementById('lab_time').style.display = '';
                } else {
                    document.getElementById('up').style.display = 'none';
                    document.getElementById('thumbnail').style.display = 'none';
                    // document.getElementById('lab_loc').style.display = 'none';
                    // document.getElementById('lab_time').style.display = 'none';
                }
            }
        </script>

    </body>

    </html>

<?php
}
?>


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