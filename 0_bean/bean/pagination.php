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

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$sql = "SELECT * FROM ".$datatable." ORDER BY id ASC LIMIT $start_from, ".$results_per_page;
$rs_result = $conn->query($sql);

?> 
<table border="1" cellpadding="4">
<tr>
    <td bgcolor="#CCCCCC"><strong>ID</strong></td>
    <td bgcolor="#CCCCCC"><strong>Vorname</strong></td><td bgcolor="#CCCCCC"><strong>Nachname</strong></td>
</tr>

<?php 
	while( $row = $rs_result->fetch_assoc() ) {
?> 
            <tr>
            <td><?php echo $row["titel"]; ?></td>
            <td><?php echo $row["vorname"]; ?></td>
            <td><?php echo $row["nachname"]; ?></td>
            </tr>
<?php 
}; 
?> 
</table>
 
 
 
<?php 
$sql = "SELECT COUNT(id) AS total FROM ".$datatable;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page); 

for($i=1 ; $i <= $total_pages ; $i++ ){
	echo "<a href='pagination.php?page=" . $i . "'";

    if ($i==$page){
		echo " class='curPage'";
}
    echo ">".$i."</a> "; 
}; 
?>