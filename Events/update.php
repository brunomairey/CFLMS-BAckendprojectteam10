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
// select logged-in users details
$res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['admin']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

if ($_GET['id']) {
   $animalID = $_GET['id'];

   $sql = "SELECT * FROM animals 
   inner join address on address.addressID = animals.addressID
   WHERE animalID = $animalID" ;

    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    $conn->close();

?>

    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">     
        <title>Edit </title>
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

    <nav class="navbar sticky-top navbar-dark bg-dark">
        <div><p class="text-white"> <?php echo $userRow['userName']; ?> </p></div>

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

        <div class= "mx-auto">
         <h1 class= "mx-auto text-success">Update </h1>
    </div>
        <!-- <fieldset>
            <legend>Update medium</legend> -->
            <!-- bootstrap version -->
            <form action="actions/a_update.php" method="post">
                <div class="container font-weight-bold">

                    <div class="form-group">
                        <label for="firstname">Name: </label>
                        <input type="text" class="form-control" name="name" value="<?php echo $data['name'] ?>" />

                        <label for="title">Hobbies: </label>
                        <input type="text" class="form-control" name="hobbies" rows="2"  value="<?php echo $data['hobbies'] ?>"  />

                        <label for="image">Image: </label>
                        <input type="text" class="form-control" name="image"  value="<?php echo $data['image'] ?>" />

                        <label for="type">Type: </label>
                        <input type="text" class="form-control" name="type"  value="<?php echo $data['type'] ?>" />

                        <label for="publishDate">Age: </label>
                        <input type="text" class="form-control" name="age"  value="<?php echo $data['age'] ?>" />

                        <label for="description">Description: </label>
                        <input type="text" class="form-control" name="description" rows="6"  value="<?php echo $data['description'] ?>" />

                        <label for="address">Location: </label>
                        <input type="text" class="form-control" name="street" value="<?php echo $data['street'] ?>" />
                        <input type="text" class="form-control" name="zipcode" value="<?php echo $data['zipcode'] ?>" />
                        <input type="text" class="form-control" name="city" value="<?php echo $data['city'] ?>" />

                        <input type="hidden" name="animalID" value="<?php echo $data['animalID'] ?>" />
                        <input type="hidden" name="addressID" value="<?php echo $data['addressID'] ?>" />


                        <input class="form-control btn btn-outline-success mt-3 mb-3" type="submit" name="submit" value= "Save changes" />

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