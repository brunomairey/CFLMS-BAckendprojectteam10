<?php
ob_start();
session_start();
require_once 'actions/db_connect.php';

if (!isset($_SESSION['admin']) && !isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
if (isset($_SESSION["user"])) {
    header("Location: home.php");
    exit;
}
if (isset($_SESSION["superadmin"])) {
    header("Location: superadmin.php");
    exit;
}
// select logged-in users details
$res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['admin']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<html>

<head>
    <title>Add Animal</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


</head>

<body>
<nav class="navbar sticky-top navbar-dark bg-dark">
        <div><p class="text-white"> Hi <?php echo $userRow['userName']; ?> !</p></div>

        <div class="mx-auto">
            <a class="btn btn-outline-success" href="admin.php" role="button">Home</a>
            <a class="btn btn-outline-warning" href="create.php" role="button">Add Animal</a>
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
        <h1 class="text-success">Input new Animal Card</h1>
    </div>

    <form action="actions/a_create.php" method="POST">
        <div class="container font-weight-bold">            


                <input type="text" class="form-control" name="name" placeholder="name" />
                <input type="text" class="form-control mt-3 mb-3" name="hobbies" placeholder="hobbies" />

                <!-- <label for="image">Image: </label> -->
                <input type="text" class="form-control" name="image" placeholder="image" />


                <select name="type" id="type" class="mt-3">
                <option> ---- SELECT TYPE ----- </option>
                <option value= "small" name= 'type' class='form-control'> small</option>
                <option value= "large"" name= 'type' class='form-control'> big</option>
                </select>

                <!-- <label for="genre">Genre: </label> -->
                <input type="text" class="form-control mt-3 mb-3" name="age" placeholder="age" />

                <!-- <label for="type">Type: </label> -->
                <!-- <input type="text" class="form-control" name="type" placeholder="type" /> -->

                <!-- <label for="publishDate">Publish Date: </label> -->
                <!-- <input type="text" class="form-control mt-3 mb-3" name="publishDate" placeholder="publishDate" /> -->

                <!-- <label for="publisherID">Publisher: </label> -->
                <select name="addressID">
                    <?php
                    $sql2 = "SELECT * FROM address";
                    $result2 = mysqli_query($conn, $sql2);


                    echo "<option> ---- SELECT ADDRESS ----- </option>";
                    while ($row = mysqli_fetch_array($result2)) {
                        $street = $row['street'];
                        $zipcode = $row['zipcode'];
                        $city = $row['city'];
                        $addressID = $row['addressID'];


                        //echo "<option> $row[authorID] $row['firstname'] | $row ['lastname']</option>";
                        echo "<option value= $addressID name='addressID' class='form-control'> $street,  $city ( $zipcode)</option>";
                    }
                    // echo "</select>";



                    ?>
                </select>
                    <br>
                    <!-- <label for="description">Description: </label> -->
                    <input type="text" class="form-control mt-3 mb-3" name="description" placeholder="description of the animal..." rows="6" />



                    <input class="form-control btn btn-outline-success mt-3 mb-3" type="submit" name="submit" value="Insert Medium" />

                    <a href="admin.php" class="btn btn-block btn-outline-warning">Back</a>

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