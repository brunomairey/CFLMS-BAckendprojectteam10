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

include '../db_connect.php';
include('../navbar_superadmin.php');



?>

<?php
// ob_start();
// session_start();

require_once '../db_connect.php';

// if session is not set this will redirect to login page
if (!isset($_SESSION['superadmin'])) {
    header("Location: index.php");
    exit;
}
// select logged-in users details
$res = mysqli_query($conn, "SELECT * FROM users WHERE userID=" . $_SESSION['superadmin']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

if ($_GET['id']) {
    $userID = $_GET['id'];

    $sql = "SELECT * FROM users WHERE userID = $userID";

    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    $conn->close();

?>

<!DOCTYPE html>
<html>

<head>
    <title>User bearbeiten</title>


    <style>
        body {
            background-color: #DEEAE3;
        }
    </style>

</head>

<body>



    <div class="form-group row justify-content-center">

        <form class="contactForm" action="a_updateUser.php" method="post">

        <h2>User Profil aktualisieren</h2>

            <div class="form-group">
                <label>
                    UserName:
                    <input type="text" class="form-control" name="name" value="<?php echo $data['userName'] ?>" autofocus>
                </label>
            </div>

            <div class="form-group">
                <label>
                    Email:
                    <input type="text" class="form-control" name="email" value="<?php echo $data['userEmail'] ?>">
                </label>
            </div>


            <div class="form-group">
                <label for="status">aktuelles Benutzerprofil: (user / admin / superadmin): </label><br>
                <input type="text" class="form-control" name="status" value="<?php echo $data['status'] ?>">
               

            </div>


            <input type="hidden" name="userID" value="<?php echo $data['userID'] ?>" />

            <div class="col-md-12">
                <button type="submit" class="btn btn-info btn-lg  mr-5 my-2" name="submit" value=" Senden" style="background-color: #135887; border: #135887;">User aktualisieren</button>

                <a class="btn btn-info btn-lg" href="superadmin.php" type="button" role="button" style="background-color: #135887; border: #135887;">
                    Zurück
                </a>
            </div>

        </form>



    </div>



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