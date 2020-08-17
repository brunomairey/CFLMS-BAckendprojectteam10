


<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backendproject_bemm";
$datatable = "companies"; // MySQL table name
$results_per_page = 5; // number of results per page
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>


<?php
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$sql = "SELECT * FROM ".$datatable." ORDER BY id ASC LIMIT $start_from, ".$results_per_page;
$rs_result = $conn->query($sql);
// var_dump($rs_result); 
?> 
<table border="1" cellpadding="4">
<tr>
    <td bgcolor="#CCCCCC"><strong>ID</strong></td>
    <td bgcolor="#CCCCCC"><strong>titel</strong></td><td bgcolor="#CCCCCC"><strong>vorname nachname</strong></td></tr>
<?php 
 while($row = $rs_result->fetch_assoc()) {
?> 
            <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["titel"]; ?></td>
            <td><?php echo $row["vorname"]; ?> <? echo $row['nachname']; ?></td>
            </tr>
<?php 
}; 
?> 
</table>
 

 
<?php 
$sql = "SELECT COUNT(id) AS total FROM ".$datatable;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
  
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<a href='test.php?page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i."</a> "; 
}; 
?>
 
