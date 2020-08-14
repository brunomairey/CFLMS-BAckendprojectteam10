<?php require_once '../db_connect.php'; ?>



<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../style_MANUELA.css">
    <title>Events</title>

    <style>
        body {
            font-family: "Roboto", sans-serif;
        }
    </style>

</head>

<body>
    <?php require_once '../header.php'; ?>


    <!-- bootstrap version -->
    <!-- <nav class="navbar sticky-top navbar-light bg-light">

        <div class="mx-auto">

            <a class="btn btn-outline-info" href="../Login/login.php" role="button">Admin</a>

        </div>
    </nav> -->



    <!-- <nav class="navbar navbar-dark bg-white">


<div>
            <form>
                <p class="text-success">SEARCH</p>
                <input type="text" name="search" id="search">
            </form>

            <p id="result"></p>
        </div>
</nav> -->


    <div id="wrapper1" class="mt-2">



        <!-- SECTION EVENTS START -->

        <!-- <div class="container autos row row-cols-1 row-cols-md-2 row-cols-lg-3 mx-auto"> -->
        <div class="container row row-cols-1 row-cols-md-2 row-cols-lg-2 mx-auto">

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

                <div class="col col_event mb-3 ">
                    <div class="card card_event px-1 py-1 bg-light">
                        <img class="card-img-top pt-2" src="<?= $row['image'] ?>" alt="" width="100%" height="250vw" class="rounded">
                        <!-- <h5 class="card-title text-secondary"><?= $eventID ?></h5> -->

                        <div class="card-body">
                            <h4 class="card-text text-info font-weight-bold"><?= $eventName ?> <span></span> </h4>

                            <h6 class='card-text'><span class='font-weight-bold'>WHEN: </span> <?= $eventDate ?><span class="font-weight-bold"> WHERE:</span> <?= $location ?>
                            </h6>
                            <h6 class='card-text'><span class='font-weight-bold'>WHAT: </span> <?= $description ?>
                            </h6>

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
        <!-- END SECTION EVENTS -->


        <!-- START RSS -->
        <div class="container_rss">

            <div class="content">

                <!-- <form method="post" action="">
                    <input type="text" name="feedurl" placeholder="Enter website feed URL">&nbsp;<input type="submit" value="Submit" name="submit">
                </form> -->
                <?php

                $url = "https://fridaysforfuture.de/feed/";
                if (isset($_POST['submit'])) {
                    if ($_POST['feedurl'] != '') {
                        $url = $_POST['feedurl'];
                    }
                }

                $invalidurl = false;
                if (@simplexml_load_file($url)) {
                    $feeds = simplexml_load_file($url);
                } else {
                    $invalidurl = true;
                    echo "<h2>Invalid RSS feed URL.</h2>";
                }


                $i = 0;
                if (!empty($feeds)) {

                    $site = $feeds->channel->title;
                    $sitelink = $feeds->channel->link;

                    echo "<div class='color2'><h2>" . $site . "</h2></div>";
                    foreach ($feeds->channel->item as $item) {

                        $title = $item->title;
                        $link = $item->link;
                        $description = $item->description;
                        $postDate = $item->pubDate;
                        $pubDate = date('D, d M Y', strtotime($postDate));


                        if ($i >= 5) break;
                ?>
                        <div class="post">
                            <div class="post-head bg-light">
                                <h6><a class="feed_title text-info" href="<?php echo $link; ?>"><?php echo $title; ?></a></h6>
                                <span><?php echo $pubDate; ?></span>
                            </div>
                            <div class="post-content">
                              <?php echo implode(' ', array_slice(explode(' ', $description), 0, 20)) . "..."; ?> <a href="<?php echo $link; ?>">Read more</a>
                            </div>
                        </div>

                <?php
                        $i++;
                    }
                } else {
                    if (!$invalidurl) {
                        echo "<h2>No item found</h2>";
                    }
                }
                ?>
            </div>
        </div>

        <!-- END RSS -->

    </div>

</body>

</html>