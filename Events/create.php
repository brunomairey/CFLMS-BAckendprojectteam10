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
    <title>Add Event</title>
    <link rel="stylesheet" href="../style_MANUELA.css">

</head>

<body>
    <nav class="navbar sticky-top navbar-dark bg-dark">
        <div>
            <p class="text-white"> Hi <?php echo $userRow['userName']; ?> !</p>
        </div>

        <div class="mx-auto">
            <a class="btn btn-outline-info" href="eventsAdmin.php" role="button">Home</a>
            <!-- <a class="btn btn-outline-warning" href="create.php" role="button">Add Event</a> -->
            <a class="btn btn-outline-info" href="logout.php?logout" role="button">Logout</a>
        </div>

        <div class="mr-3 text-white">
            <?php echo $userRow['userEmail']; ?>
        </div>
    </nav>

    <div class='d-flex justify-content-center'>
        <h1 class="text-info mt-2 mb-2">Beitrag erstellen</h1>
    </div>

    <div class='d-flex justify-content-center'>

        <div class="contactForm">
            <form action="a_create.php" method="POST" enctype='multipart/form-data'>
                <div class="container font-weight-bold">

                    <input type="radio" id="event" name="category" value="event"  onclick="toggleOptions();" >  
                    <label for="event" class="mr-5">Event </label>
                    <input type="radio" id="blog" name="category" value="blog" onclick="toggleOptions();">
                    <label for="blog"> Artikel/Blog</label>   
                    <br>   

                    <label for="name"> Name</label>
                    <input type="text" class="form-control mb-3" name="name" placeholder="Name Beitrag" />

                    <label for="location" id="lab_loc">Ort</label>
                    <input type="text" class="form-control mb-3" id="loc" name="location" placeholder="event Location" />
                    <!-- <input type="file" class="custom-file" name="file" accept="image/jpeg,image/png" (change)="convertImage($event)" placeholder="image" />
           -->
                    <label for="fileInput">Foto hochladen</label>
                    <div id="thumbnail"></div>
                    <input type="file" name="fileInput" accept="image/*" multiple onChange="fileThumbnail(this.files);" (change)="convertImage($event)">

                    <br>
                    <label for="date" class="mt-3" id="lab_time">Datum und Uhrzeit:</label>
                    <input type="datetime-local" id="time" class="form-control" value="<?php echo date('Y-m-d h:i');?>"" name="date" placeholder="event Date" />

                    <label for="description" class="mt-3"> Beschreibung bzw. Blogtext</label>
                    <input type="text" class="form-control mb-3 " name="description" placeholder="event Description" rows="6" />

                    <input type="hidden" name="userID" value="<?php echo $userRow['userID']; ?>" />
                    <br>
                    <div class="d-flex justify-content-center">
                        <div>
                            <input class="btn btn-outline-info" type="submit" name="but_upload" value="Beitrag erstellen" />
                        </div>
                        <div>
                            <a href="eventsAdmin.php" class="btn btn-block btn-outline-info">Zurück</a>
                        </div>
                    </div>

            </form>
        </div>
    </div>
    </div>

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

        //display location, time in case of Blogarticle
        function toggleOptions() {
        if ( document.getElementById('event').checked ) {
        document.getElementById('loc').style.display = '';
        document.getElementById('time').style.display = '';
        document.getElementById('lab_loc').style.display = '';
        document.getElementById('lab_time').style.display = '';
        } else {
        document.getElementById('loc').style.display = 'none';
        document.getElementById('time').style.display = 'none';
        document.getElementById('lab_loc').style.display = 'none';
        document.getElementById('lab_time').style.display = 'none';
        }
    }

    </script>




    <?php
    // }

    // Close connection
    echo mysqli_close($conn);
    ?>

</body>

</html>