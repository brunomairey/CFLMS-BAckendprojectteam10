<?php 
// ob_start();
// session_start();
require_once '../db_connect.php';

if (!isset($_SESSION['admin']) ) {
   header("Location: events.php");
   exit;
}

// select logged-in users details
$res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['admin']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);



if ($_GET['id']) {
   $eventID = $_GET['id'];

   $sql = "SELECT * FROM events WHERE eventID = $eventID" ;
   $result = $conn->query($sql);
   $data = $result->fetch_assoc();

   $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete </title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar sticky-top navbar-dark bg-dark">
        <div><p class="text-white"> Hi <?php echo $userRow['userName']; ?> !</p></div>

        <div class="mx-auto">
            <a class="btn btn-outline-warning" href="create.php" role="button">Add Event</a>
        </div>

        <div class="mr-3 text-white">
            <?php echo $userRow['userEmail']; ?>
        </div>
        <!-- <div class="image">
            <img class="icon" src="img/icon/<?php echo $userRow['foto']; ?>" />
        </div> -->
    </nav>


<hr>

<h3><center>Do you really want to delete this card?</center></h3>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "eventID" value="<?php echo $data['eventID'] ?>" />
   <div class= "d-flex justify-content-center">
   <button type="submit" class="btn btn-outline-info">Yes, delete it!</button >
   <a href="eventsAdmin.php"><button type="button" class="btn btn-outline-info">No, go back!</button ></a>
   </div>
</form>

</body>
</html>

<?php
}
?>