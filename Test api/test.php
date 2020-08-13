<?php

require_once '../db_connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<input id="address" type="text"><div id="find">Geocoding</div><div id="map"></div>


<?php

$code= 'AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M';
$strasse= 'Landstrasse 14';
$city = 'Wien';
$country = 'Austria';

$address_start = 'https://maps.googleapis.com/maps/api/geocode/json?address=';

$URL= $address_start.$strasse."-".$city."-".$country."&key=".$code;

echo $URL;

echo "<br>";

echo " https://maps.googleapis.com/maps/api/geocode/json?address=alexanderplatz-berlin-deutschland&key=YOUR_API_KEY";

?>

<script>
                                                                                                                                    alert(xhr.status);					alert(thrownError);				}			});		}	}}
</script>  

<script href="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&libraries=places&callback=initAutocomplete"></script>
</body>
</html>