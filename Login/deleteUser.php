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



if (!isset($_SESSION['superadmin'])) {
    header("Location: events.php");
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
        <title>User Löschen </title>

        <link rel="stylesheet" href="style.css">
    </head>

    <body style="background-color: #DEEAE3">



        <hr>
        <div class='text-dark font-weight-bold pt-2 pb-2' style="height: 65vh">
            <h3>
                <center>User wirklich löschen?</center>
            </h3>
            <form action="a_deleteUser.php" method="post">

                <input type="hidden" name="userID" value="<?php echo $data['userID'] ?>" />
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-info mr-2">Löschen</button>
                    <a href="superadmin.php"><button type="button" class="btn btn-info">Zurück</button></a>
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