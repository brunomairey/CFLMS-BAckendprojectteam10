<!DOCTYPE html>
<html>
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>



	<title></title>
</head>
<body>
<?php
require_once '../db_connect.php';
//    ob_start();
// session_start();
    
 ?>



<?php 
   

// // this will avoid mysql_connect() deprecation error.
// error_reporting( ~E_DEPRECATED & ~E_NOTICE );

// $localhost = "localhost";
// $username = "root";
// $password = "";
// $dbname = "backendproject_bemm";



// check connection
if($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
} else { 

 $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];

//passwort und nicht password in database

 echo $sql = "INSERT INTO `signthepetition` (`firstName`, `lastName`, `gender`, `email`, `passwort`,  `number`) VALUES ('$firstName', '$lastName', '$gender', '$email', '$password',  '$number')";
    if($conn->query($sql) === TRUE) {
       echo "<p class=\"text-success mx-5 my-3\">Sie sind erfolgreich registriert</p>" ;
         echo "<a href='../index.php'><button type='button' class=\"btn btn-dark\">Home</button></a>";
         // header("Refresh: 5; url= index.php");
   } else  {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }

   $conn->close();











//Parse error: syntax error, unexpected '$firstName' (T_VARIABLE), expecting ')' in C:\xampp2\htdocs\01_codefactory\15_Backend\CFLMS-Backendprojectteam10\Fridaysforfuture\db_conn.php on line 78


// $stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, passwort, number) values("$firstName", "$lastName", "$gender", "$email", "$passwort", $number))";
//         $stmt->bind_param($firstName, $lastName, $gender, $email, $password, $number);
//         $execval = $stmt->execute();
//         echo $execval;
//         echo "Registration successfully...";
//         $stmt->close();
//         $conn->close();
    
}



?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   

</body>
</html>