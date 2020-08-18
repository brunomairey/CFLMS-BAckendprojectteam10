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
                            <input class="btn btn-outline-info" type="submit" name="submit" value="RSS Feed erstellen" />
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