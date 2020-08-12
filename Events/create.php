<?php
// ob_start();
// session_start();

include '../db_connect.php';

if (!isset($_SESSION['admin'])) {
    header("Location: events.php");
    exit;
}
// if (isset($_SESSION["user"])) {
//     header("Location: home.php");
//     exit;
// }
// if (isset($_SESSION["superadmin"])) {
//     header("Location: superadmin.php");
//     exit;
// }
// select logged-in users details
$res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['admin']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);


?>



<!DOCTYPE html>
<html>

<head>
    <title>Add Event</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="jquery.datetimepicker.min.css" > -->

</head>

<body>
    <nav class="navbar sticky-top navbar-dark bg-dark">
        <div>
            <p class="text-white"> Hi <?php echo $userRow['userName']; ?> !</p>
        </div>

        <div class="mx-auto">
            <a class="btn btn-outline-success" href="eventsAdmin.php" role="button">Home</a>
            <a class="btn btn-outline-warning" href="create.php" role="button">Add Event</a>
            <a class="btn btn-outline-success" href="logout.php?logout" role="button">Logout</a>
        </div>

        <div class="mr-3 text-white">
            <?php echo $userRow['userEmail']; ?>
        </div>
        <!-- <div class="image">
            <img class="icon" src="img/icon/<?php echo $userRow['foto']; ?>" />
        </div> -->
    </nav>

    <div>
        <h1 class="text-success">Neues Event erstellen</h1>
    </div>

    <form action="actions/a_create.php" method="POST" enctype='multipart/form-data'>
        <div class="container font-weight-bold">


            <input type="text" class="form-control" name="name" placeholder="name Event" />
            <input type="text" class="form-control mt-3 mb-3" name="location" placeholder="event Location" />
  <!-- <input type="file" class="custom-file" name="file" accept="image/jpeg,image/png" (change)="convertImage($event)" placeholder="image" />
           -->
           <label for="fileInput">EventFoto hochladen</label>
            <div id="thumbnail"></div>
            <input type="file" name="fileInput" accept="image/*" multiple onChange="fileThumbnail(this.files);" (change)="convertImage($event)">
            
            
            <input type="datetime-local" class="form-control mt-3" name="date" placeholder="event Date" />
           
          
        <!-- <label for="datetime">Event Datum und Uhrzeit</label>
        <input type="text" class="form-control" id="picker"> -->
    

            <input type="text" class="form-control mt-3 mb-3" name="description" placeholder="event Description" rows="6" />

            <br>

            <input class="form-control btn btn-outline-success mt-3 mb-3" type="submit" name="but_upload" value="Create Event" />

            <a href="eventsAdmin.php" class="btn btn-block btn-outline-warning">Back</a>


    </form>
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


    </script>




    <?php
    // }

    // Close connection
    echo mysqli_close($conn);
    ?>

        <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="jquery.datetimepicker.full.min.js"></script> -->
</body>

</html>