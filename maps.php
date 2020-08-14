<!DOCTYPE html>
<html>

<head>
    <title>Simple Google Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
        #map {
            height: 90%;
        }

        /* Optional: Makes the sample page fill the window. */
        html,
        body {
            height: 100%;
            width: 80%;
            margin: auto;
            padding: 0;
        }
    </style>
</head>

<body>
    <div id="map"></div>
    <input type="text" id="address">
    <input type="button" value="Encode" onclick="getLocation()"/>

    <script>
        var geocoder;
        var pinpoints = [{ lt: 48.20849, lg: 16.37208 }, { lt: 48.147608, lg: 17.106294 }, { lt: 48.45455, lg: 14.37208 }];
        console.log(pinpoints.length);
        function initMap() {
            geocoder = new google.maps.Geocoder();
            var mlocation = {
                lat: 48.20849,
                lng: 16.37208
            };
            var nlocation = {
                lat: 48.20849,
                lng: 15.37208
            };
            map = new google.maps.Map(document.getElementById('map'), {
                center: mlocation,
                zoom: 8
            });
            /*for (i = 0; i < pinpoints.length; i++) {
                console.log(i);
                var pinpoint = new google.maps.Marker({
                    position: { lat: pinpoints[i].lt, lng: pinpoints[i].lg },
                    map: map
                });
            }*/
        }
            function getLocation() {
                var address = document.getElementById('address').value;
                console.log(address);
                geocoder.geocode({ 'address': address }, function(results, status) {
                    if (status == 'OK') {
                        map.setCenter(results[0].geometry.location);
                        var marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location
                        });
                        console.log(results);
                    } else {
                        console.table(results);
                        alert('It was not possible to perform your request due to ' + status);
                    }

                })
            };
            /*var pinpoint = new google.maps.Marker({
              position: mlocation,
              map: map
            });
            var pinpoint2 = new google.maps.Marker({
                position: nlocation,
                map: map
              });*/
                 
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap"
        async defer></script>
</body>

</html>