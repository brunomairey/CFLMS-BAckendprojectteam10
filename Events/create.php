<?php
// ob_start();
// session_start();
require_once '../db_connect.php';

if (!isset($_SESSION['admin']) && !isset($_SESSION['user'])) {
    header("Location: index.php");
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


</head>

<body>
<nav class="navbar sticky-top navbar-dark bg-dark">
        <div><p class="text-white"> Hi <?php echo $userRow['userName']; ?> !</p></div>

        <div class="mx-auto">
            <a class="btn btn-outline-success" href="eventsAdmin.php" role="button">Home</a>
            <a class="btn btn-outline-warning" href="create.php" role="button">Add Event</a>
            <a class="btn btn-outline-success" href="logout.php?logout" role="button">Logout</a>
        </div>

        <div class="mr-3 text-white">
            <?php echo $userRow['userEmail']; ?>
        </div>
        <div class="image">
            <img class="icon" src="img/icon/<?php echo $userRow['foto']; ?>" />
        </div>
    </nav>

    <div>
        <h1 class="text-success">New Green Event</h1>
    </div>

    <form action="actions/a_create.php" method="POST">
        <div class="container font-weight-bold">            


                <input type="text" class="form-control" name="name" placeholder="name Event" />
                <input type="text" class="form-control mt-3 mb-3" name="location" placeholder="event Location" />

                <!-- <label for="image">Image: </label> -->
                <input type="text" class="form-control" name="image" placeholder="image" />

                <input type="text" class="form-control mt-3" name="date" placeholder="event Date" />


                <!-- <label for="genre">Genre: </label> -->
                <input type="text" class="form-control mt-3 mb-3" name="description" placeholder="event Description" rows="6" />

                    <br>
                    <!-- <label for="description">Description: </label> -->


                    <input class="form-control btn btn-outline-success mt-3 mb-3" type="submit" name="submit" value="Create Event" />

                    <a href="eventsAdmin.php" class="btn btn-block btn-outline-warning">Back</a>

        </div>




    </form>
    </div>

    <?php
    // }

    // Close connection
    mysqli_close($conn);
    ?>
    </div>




</body>

</html>