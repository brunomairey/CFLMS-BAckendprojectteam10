<?php
$urlimage="../images/logo_entre.png";
$urlindex="../index.php";
$urlsign="../companies/create.php";
$urlcompanies="../companies/index.php";
$urlevents ="../events/events.php";

$urlfriends="../friends.php";
$urlcontact="../contact.php";
$urlvideos="../stories.php";



$urladmin="../login/login.php";

$admincompanies="../companies/admin.php";
$adminevents="../events/eventsAdmin.php";
$admincreateevents="../events/create.php";
$adminRSSfeeds="../events/createRss.php";
$logout="../Login/logout.php?logout";
  include '../db_connect.php';
  include('../navbar.php'); ?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../style_MANUELA.css">
    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <title>Veranstaltungen und News</title>

    <style>
        /* Styling Events  */
    </style>

</head>

<body style="background-color: #DEEAE3">

<main style="background-color: #DEEAE3">



    <div id="wrapper1" class="mt-2">
  <div id="menumobile" class="mb-2">
   <a href="#container_blog"><button type="button" class="btn btn-info" style="background-color: #135887; border: #135887;">Beiträge</button></a>
      <a href="#container_event"><button type="button" class="btn btn-info" style="background-color: #135887; border: #135887;">Veranstaltungen</button></a>
         <a href="#container_rss"><button type="button" class="btn btn-info" style="background-color: #135887; border: #135887;">News</button></a>
  </div>


        <!-- SECTION BLOG START -->


            <div id="container_blog">
                <h2 class="header_blog">Beiträge</h2>
                <?php
                $sql = "SELECT * FROM events inner join users on users.userID = events.userID where category = 'blog' ORDER by eventDate DESC";


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
                        <img class="card-img-top pt-2 blogImg" src="<?= $row['image'] ?>" alt="" width="100%" height="250vw" class="rounded">
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
        <div id="container_event">
            <h2 class="header_events">Veranstaltungen</h2>
            
            <div class="row rounded">
           
                <div class="[ row-cols-1  ]">
                    <ul class="event-list ">


                        <?php
                        include '../db_connect.php';
                        $sql = "SELECT * FROM events where category = 'event' and eventDate >= DATE(NOW()) order by eventDate";


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

                            <li class="pb-2 eventblock">

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
                                    
                                    <h7 class="desc"> <span class="text-info">Ort:</span> <?= $location ?> <br> </h7>
                                    <h7 class="desc"><span class="text-info">Uhrzeit:</span> <?= date("H:i", $zeit) ?> Uhr</h7>
                                </div>
                                <div class="event_panel">
                                    

                                </div>
                            </li>


                        <?php
                        }

                        // Free result set
                        mysqli_free_result($result);
                        // Close connection
                        // mysqli_close($conn);
                        ?>

                    </ul>
                </div>
            </div>
        </div>

        
        <!-- END BLOG -->

        <!-- START RSS -->
        <div id="container_rss">

            <h2 class="header_news">News</h2>

            <?php
            $sql = "SELECT * FROM feeds";

            $result = mysqli_query($conn, $sql);
            // fetch the next row (as long as there are any) into $row
            while ($row = mysqli_fetch_assoc($result)) {
                $feedID = $row['feedID'];
                $url = $row['url'];
            ?>


                <div class="content">


                    <?php

                    $url = $url;
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
            <?php
            }

           
            ?>

        </div>
</div>
        <!-- END RSS -->

 <!-- RSS Tablet -->
              <div id="container_rss_tablet">

            <h2 class="header_news">News</h2>
<div class="content">
            <?php
            $sql = "SELECT * FROM feeds";

            $result = mysqli_query($conn, $sql);
            // fetch the next row (as long as there are any) into $row
            while ($row = mysqli_fetch_assoc($result)) {
                $feedID = $row['feedID'];
                $url = $row['url'];
            ?>


                


                    <?php

                    $url = $url;
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
                        echo "<div id='articlefortablets' class='mb-3'>";

                        foreach ($feeds->channel->item as $item) {

                            $title = $item->title;
                            $link = $item->link;
                            $description = $item->description;
                            $postDate = $item->pubDate;
                            $pubDate = date('D, d M Y', strtotime($postDate));


                            if ($i >= 5) break;
                    ?>
                            <div class="post mx-1">
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
            <?php
            } 

            // Free result set
            mysqli_free_result($result);
            // Close connection
            mysqli_close($conn);
            ?>
</div>
        </div>





</main>
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