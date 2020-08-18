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
    $feedID = $_GET['id'];

    $sql = "SELECT * FROM feeds WHERE feedID = $feedID";

    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    $conn->close();

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Edit RSS Feed</title>
        <!-- <link rel="stylesheet" href="../style_MANUELA.css"> -->

    </head>

    <body>

        <nav class="navbar sticky-top navbar-dark bg-dark">
            <div>
                <p class="text-white"> <?php echo $userRow['userName']; ?> </p>
            </div>

            <div class="mx-auto">
                <a class="btn btn-outline-info" href="eventsAdmin.php" role="button">Home</a>
                <a class="btn btn-outline-warning" href="../companies/admin.php" role="button">Unternehmen bearbeiten</a>
                <a class="btn btn-outline-warning" href="create.php" role="button">Beitrag hinzufügen</a>
                <a class="btn btn-outline-warning" href="createRss.php" role="button">RSS Feed hinzufügen</a>
                <a class="btn btn-outline-info" href="logout.php?logout" role="button">Logout</a>
            </div>

            <div class="mr-3 text-white">
                <?php echo $userRow['userEmail']; ?>
            </div>
            <!-- <div class="image">
            <img class="icon" src="img/icon/<#?php echo $userRow['foto']; ?>" />
        </div> -->
        </nav>

        <div class="d-flex justify-content-center">
            <h1 class="text-info">RSS-Feed aktualisieren </h1>
        </div>

        <div class="d-flex justify-content-center">
            <div class="contactForm">
                <form action="a_updateRss.php" method="post" enctype='multipart/form-data'>
                    <div class="container font-weight-bold">
                        


                        <div class="form-group">


                        
                            <label for="url"> Feed URL </label>
                            <input type="text" class="form-control" name="url" value="<?php echo $data['url'] ?>" />

                                <input type="hidden" name="feedID" value="<?php echo $data['feedID'] ?>" />

                            </div>

                            <div class="d-flex justify-content-center">
                                <div>
                                    <input class="btn btn-outline-info" type="submit" name="submit" value="RSS-Feed aktualisieren" />
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