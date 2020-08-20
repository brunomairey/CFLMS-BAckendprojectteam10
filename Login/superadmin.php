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

$superadmin = "superadmin.php";
include '../navbar_superadmin.php';
include '../db_connect.php';




// if session is not set this will redirect to login page
if (!isset($_SESSION['admin']) && !isset($_SESSION['user']) && !isset($_SESSION['superadmin'])) {
    header("Location: index.php");
    exit;
}
if (isset($_SESSION["admin"])) {
    header("Location: eventsAdmin.php");
    exit;
}
if (isset($_SESSION["user"])) {
    header("Location: events.php");
    exit;
}

// select logged-in users details
$res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['superadmin']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Title Page-->
    <title>Superadmin Page</title>

    <style type="text/css">
        body {
            background-color: #d7e1cc;
        }
    </style>



</head>

<body>

    <!-- <nav class="navbar sticky-top navbar-dark bg-dark">
        <div>
            <p class="text-white"> Hi <?php echo $userRow['userName']; ?> !</p>
        </div>

        <div class="mx-auto">
            <a class="btn btn-outline-info" href="superadmin.php" role="button">Home</a>
            <a class="btn btn-outline-warning" href="createUser.php" role="button">Neuen User anlegen</a>
            <a class="btn btn-outline-info" href="logout.php?logout" role="button">Logout</a>
        </div>

        <div class="mr-3 text-white">
            <#?php echo $userRow['userEmail']; ?>
        </div>
       <div class="image">
            <img class="icon" src="img/icon/<#?php echo $userRow['foto']; ?>" />
        </div> -->
    <!-- </nav> -->


    <hr>

    <!-- ADMIN PANEL start  -->
    <div class="mx-auto">
        <div>
            <h1>Super-Admin Panel</h1>
        </div>
    </div>







    <?php


    $sql = "SELECT * FROM users";
    $res = $conn->query($sql);
    ?>


    <table class="table table-striped .table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>status</th>
            </tr>
        </thead>
        <?php
        while ($row = $res->fetch_assoc()) : ?>
            <tr>
                <td><?= $row['userID']; ?></td>
                <td><?= $row['userName']; ?></td>
                <td><?= $row['userEmail']; ?></td>
                <td><?= $row['status']; ?></td>
                <td>
                    <!-- later update when time -->
                    <a href="updateUser.php?id=<?= $row['userID']; ?>" class="btn btn-info" name="update">Update</a>

                    <a href="deleteUser.php?id=<?= $row['userID']; ?>" class="btn btn-danger" name="delete">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>




    <hr>

    </div>
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