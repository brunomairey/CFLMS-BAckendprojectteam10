<?php
ob_start();
session_start();
require_once 'db_connect.php';

// if session is not set this will redirect to login page
// if (!isset($_SESSION['admin']) && !isset($_SESSION['user'])) {
//     header("Location: events.php");
//     exit;
// }

// select logged-in users details
$res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['admin']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Events</title>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

   <!-- bootstrap version -->
   <nav class="navbar sticky-top navbar-dark bg-dark">

<div class="mx-auto">
    <p class="text-warning">Administratorpanel</p>
    <!-- <a class="btn btn-outline-success" href="index.php" role="button">Home</a> -->
    <a class="btn btn-outline-success" href="create.php" role="button">Create New Event</a>
    <a class="btn btn-outline-success" href="logout.php?logout" role="button">Logout</a>
</head>

</div>
</nav>

<div class="jumbotron jumbotron-fluid bg-dark text-white">
<div class="container">
    <h1 class="display-4 text-success">Our Events</h1>
    <p class="lead">Mission: Business for Climate Protection</p>
</div>
</div>

<nav class="navbar navbar-dark bg-white">



<div>
    <form>
        <p class="text-success">SEARCH</p>
        <input type="text" name="search" id="search">
    </form>

    <p id="result"></p>
</div>
</nav>

<!-- <div class="container autos row row-cols-1 row-cols-md-2 row-cols-lg-3 mx-auto"> -->
<div class="container row row-cols-1 row-cols-md-2 row-cols-lg-3 mx-auto">

<?php
$sql = "SELECT * FROM events";


//nicer version
$result = mysqli_query($conn, $sql);
// fetch the next row (as long as there are any) into $row
while ($row = mysqli_fetch_assoc($result)) {
    $eventID = $row['eventID'];
    $eventName = $row['eventName'];
    $eventDate = $row['eventDate'];
    $location = $row['eventLocation'];
    $description = $row['eventDescription'];


?>

    <div class="col mb-3 ">
        <div class="card px-1 py-1 bg-light">
            <h5 class="card-title text-secondary"><?= $eventID ?></h5>

            <div class="card-body">
                <h3 class="card-text text-success font-weight-bold"><?= $eventName ?> <span></span></h3>
                
                <h6 class='card-text'><span class='font-weight-bold'>WHEN: </span> <?= $eventDate ?>
                </h6>
                <h6 class='card-text'><span class='font-weight-bold'>WHAT: </span> <?= $description ?>
                </h6>
                <h7 class="card-text"><span class="font-weight-bold">WHERE:</span> <?= $location ?></h7>

            </div>
            <div class="card-footer text-center">
                    <a href="delete.php?id=<?= $eventID ?>" class="btn btn-outline-danger  mx-auto">Delete </a>
                <a href="update.php?id=<?= $eventID ?>" class="btn btn-outline-success mx-auto">Update </a>
                    </div>


        </div>
    </div>




<?php
}

// Free result set
mysqli_free_result($result);
// Close connection
mysqli_close($conn);
?>




</div>

</body>

</html>

