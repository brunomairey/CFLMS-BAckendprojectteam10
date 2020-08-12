<?php require_once '../db_connect.php'; ?>



<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Events</title>
    <!-- <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
</head>

<body>
<?php require_once '../header.php'; ?>
    <!-- bootstrap version -->
    <nav class="navbar sticky-top navbar-light bg-light">

        <div class="mx-auto">
            <!-- <a class="btn btn-outline-success" href="index.php" role="button">Home</a> -->
            <a class="btn btn-outline-success" href="../Login/login.php" role="button">Login to Administrator Panel</a>
            <!-- <a class="btn btn-outline-success" href="../Login/logout.php?logout" role="button">Logout</a> -->
            <!-- <a class="btn btn-outline-success" href="register.php" role="button">Signup</a> -->
        </div>
    </nav>

    <!-- <div class="jumbotron jumbotron-fluid bg-dark text-white">
        <div class="container">
            <h1 class="display-4 text-success">Our Events</h1>
            <p class="lead">Mission: Business for Climate Protection</p>
        </div>
    </div> -->

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
            $image = $row['image'];


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
                    <img src="<?= $row['image'] ?>" alt="Event image" width="100%" max-height="200" class="rounded">
                </div>
            </div>




        <?php
        }

        // Free result set
        mysqli_free_result($result);
        // Close connection
        mysqli_close($conn);
        ?>


<script>
        //Search function AJAX
        var request;

        //PART SEARCH
        // Bind to the submit event of our form
        $("#search").keyup(function(event) {

            // Prevent default posting of form - put here to work in case of errors
            event.preventDefault();

            // Abort any pending request
            if (request) {
                request.abort();
            }
            // setup some local variables
            var $form = $(this);

            // Let's select and cache all the fields
            var $inputs = $form.find("input, select, button, textarea");

            // Serialize the data in the form
            var serializedData = $form.serialize();

            // console.log(serializedData);
            var search = document.getElementById("search").value;
            if (search.length > 0) {
                $inputs.prop("disabled", true);

                // Fire off the request to /form.php
                request = $.ajax({
                    url: "search.php",
                    type: "post",
                    data: serializedData
                });

                // Callback handler that will be called on success
                request.done(function(response, textStatus, jqXHR) {
                    // Log a message to the console
                    document.getElementById("result").innerHTML = response;
                    // console.log(response);
                });

                // Callback handler that will be called on failure
                request.fail(function(jqXHR, textStatus, errorThrown) {
                    // Log the error to the console
                    console.error(
                        "The following error occurred: " +
                        textStatus, errorThrown
                    );
                });

                // Callback handler that will be called regardless
                // if the request failed or succeeded
                request.always(function() {
                    // Reenable the inputs
                    $inputs.prop("disabled", false);
                });
            } else {
                document.getElementById("result").innerHTML = "";
            }
            // search => 
            // Let's disable the inputs for the duration of the Ajax request.
            // Note: we disable elements AFTER the form data has been serialized.
            // Disabled form elements will not be serialized.

        });
    </script>

    </div>

</body>

</html>