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
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">      -->
        <title>Edit Event</title>
        <link rel="stylesheet" href="events.css">

    </head>

    <body>

        <nav class="navbar sticky-top navbar-dark bg-dark">
            <div>
                <p class="text-white"> <?php echo $userRow['userName']; ?> </p>
            </div>

            <div class="mx-auto">
                <a class="btn btn-outline-info" href="eventsAdmin.php" role="button">Home</a>
                <a class="btn btn-outline-warning" href="create.php" role="button">Event hinzufügen</a>
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
            <h1 class="text-info">Event aktualisieren </h1>
        </div>

        <div class="d-flex justify-content-center">
            <div class="contactForm">
                <form action="actions/a_update.php" method="post" enctype='multipart/form-data'>
                    <div class="container font-weight-bold">



                        <div class="form-group">
                            <label for="firstname">Name Event: </label>
                            <input type="text" class="form-control" name="name" value="<?php echo $data['eventName'] ?>" />

                            <label for="title">Location: </label>
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
                                <img src='<?= $data['image'] ?>' alt='Event image' width='100px' class='rounded'>
                                <p>neues Bild</p>
                                <div id="thumbnail"></div>
                                <input type="file" name="fileInput" accept="image/*" multiple onChange="fileThumbnail(this.files);" (change)="convertImage($event)">
                                <!-- <input type="file" class="custom-file" name="file" accept="image/jpeg,image/png" (change)="convertImage($event)" placeholder="image" /> -->

                                <input type="hidden" name="eventID" value="<?php echo $data['eventID'] ?>" />

                            </div>

                            <div class="d-flex justify-content-center">
                                <div>
                                    <input class="btn btn-outline-info" type="submit" name="but_upload" value="Event erstellen" />
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