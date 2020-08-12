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
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

        <nav class="navbar sticky-top navbar-dark bg-dark">
            <div>
                <p class="text-white"> <?php echo $userRow['userName']; ?> </p>
            </div>

            <div class="mx-auto">
                <a class="btn btn-outline-success" href="admin.php" role="button">Home</a>
                <a class="btn btn-outline-warning" href="create.php" role="button">Add Animal</a>
                <a class="btn btn-outline-success" href="logout.php?logout" role="button">Logout</a>
            </div>

            <div class="mr-3 text-white">
                <?php echo $userRow['userEmail']; ?>
            </div>
            <!-- <div class="image">
            <img class="icon" src="img/icon/<?php echo $userRow['foto']; ?>" />
        </div> -->
        </nav>

        <div class="mx-auto">
            <h1 class="mx-auto text-success">Update Event </h1>
        </div>
        <!-- <fieldset>

            <!-- bootstrap version -->
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


                    <!-- <input type="file" class="form-control" name="type"  value="<?php echo $data['image'] ?>" /> -->
                    <label for="type">Bild aktualisieren: </label>
                    <div>
                        <img src="<?= $data['image'] ?>" alt="Event image" width="200px" height="100px" class="rounded">
                        <input type="file" class="custom-file" name="file" accept="image/jpeg,image/png" (change)="convertImage($event)" placeholder="image" />

                        <input type="hidden" name="eventID" value="<?php echo $data['eventID'] ?>" />

                    </div>



                    <input class="form-control btn btn-outline-success mt-3 mb-3" type="submit" name="but_upload" value="Save changes" />

                    <a href="admin.php" class="btn btn-block btn-outline-warning">Back</a>

                </div>



            </div>
        </form>


        <!-- </fieldset> -->

    </body>

    </html>

<?php
}
?>