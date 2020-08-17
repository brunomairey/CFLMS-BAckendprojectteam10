<?php
$urlimage = "../images/logo_entre.png";
$urlindex = "../index.php";
$urlsign = "../companies/create.php";
$urlcompanies = "../companies/index.php";
$urlevents = "../events/events.php";
$urlabout = "../aboutus.php";
$urlfriends = "../friends.php";
$urlcontact = "../contact.php";
$urlvideos = "../stories.php";


include '../db_connect.php';
include '../navbar.php' ?>


<!-- require_once '../db_connect.php'; ?> -->



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../style_MANUELA.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Events</title>

    <style>
      

        /* Styling Events  */
    </style>

</head>

<body>
    <?php require_once '../header.php'; ?>




    <div id="wrapper1" class="mt-2">



        <!-- SECTION BLOG START -->


        <div class="container_blog row row-cols-1  mx-auto">
            <h1 class="bg-secondary">BLOG SECTION</h1>
            <?php
            $sql = "SELECT * FROM events inner join users on users.userID = events.userID where category = 'blog' ORDER by eventDate DESC";


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
                $author = $row['userName'];


            ?>



                <div class="col col_event mb-3 ">
                    <div class="card card_event px-1 py-1 bg-light">
                    <h4 class="card-text text-info font-weight-bold"><?= $eventName ?> <span></span> </h4>
                    <h7>gepostet am <?= $eventDate ?> </h7> von <?= $author ?>
                        <img class="card-img-top pt-2" src="<?= $row['image'] ?>" alt="" width="100%" height="250vw" class="rounded">
                        <!-- <h5 class="card-title text-secondary"><?= $eventID ?></h5> -->

                        <div class="card-body">
 
                            <h6 class='card-text'><span class='font-weight-bold'> </span> <?= $description ?>
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
        <!-- END SECTION BLOG -->

        <!-- START SECTION EVENT -->
        <div class="container_event">
        <h1 class="bg-warning">EVENTS SECTION</h1>
            <div class="row rounded">
                <div class="[ row-cols-1  ]">
                    <ul class="event-list ">


                    <?php
                    include '../db_connect.php';
            $sql = "SELECT * FROM events where category = 'event' order by eventDate";


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
                $zeit = strtotime($eventDate);
                $monate = array("empty", "JAN", "FEB", "MAR", "APR", "MAI", "JUN", "JUL", "AUG", "SEP", "OKT", "NOV", "DEZ");
                $wochentage = array("Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag");

            ?>

<li class="pb-2">

<details>
<h7><?= $description ?></h7>
</details>
<time datetime=$eventDate>
    <span class="day"><?= date("j", $zeit) ?></span>
    <span class="month"><?= $monate[date("n", $zeit)] ?></span>
    <span class="year"><?= date('y', $zeit) ?></span>
    <span class="time"><?= date("H:i", $zeit) ?></span>
</time>
<img src="<?= $row['image'] ?>">
<div class="info">
    <h3 class="title"><?= $eventName ?></h3>
    <h7 class="desc"> <span class="text-info">Ort:</span> <?= $location ?> <span class="text-info">Uhrzeit:</span> <?= date("H:i", $zeit) ?> Uhr</h7>

</div>

</li>

                        <!-- <li class="pb-2">

                            <#?php
                            $eventDate = "2020-10-15 1600";
                            $zeit = strtotime($eventDate);
                            $monate = array("empty", "JAN", "FEB", "MAR", "APR", "MAI", "JUN", "JUL", "AUG", "SEP", "OKT", "NOV", "DEZ");
                            $wochentage = array("Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag");
                            ?>
                        <details>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </details>
                            <time datetime="2020-10-15 1600" >
                                <span class="day"><#?= date("j", $zeit) ?></span>
                                <span class="month"><#?= $monate[date("n", $zeit)] ?></span>
                                <span class="year"><#?= date('y', $zeit) ?></span>
                                <span class="time"><#?= date("H:i", $zeit) ?></span>
                            </time>
                            <img src="../images/hero.jpg" />
                            <div class="info">
                                <h2 class="title">Spaziergang mit Sebastian Kurz</h2>
                                <p class="desc"> <span class="text-info">Ort:</span> Wien, Rathausplatz <span class="text-info">Uhrzeit:</span> <?= date("H:i", $zeit) ?> Uhr</p>

                            </div>

                        </li> -->


                        <!-- <li>
						<time datetime="2014-07-20">
							<span class="day">4</span>
							<span class="month">Jul</span>
							<span class="year">2014</span>
							<span class="time">ALL DAY</span>
						</time>
						<img alt="Independence Day" src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" />
						<div class="info">
							<h2 class="title">Independence Day</h2>
							<p class="desc">United States Holiday</p>
						</div>
						<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
							</ul>
						</div>
                    </li> -->
                    <?php
            }

            // Free result set
            mysqli_free_result($result);
            // Close connection
            mysqli_close($conn);
            ?>
                    
                    </ul>
                </div>
            </div>
        </div>


        <!-- END BLOG -->

        <!-- START RSS -->
        <div class="container_rss">
        <h1 class="bg-secondary">RSS SECTION</h1>
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

</body>

</html>