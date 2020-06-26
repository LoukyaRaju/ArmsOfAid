<?php

$address = "1600 Pennsylvania Ave NW Washington DC 20500";
$address = str_replace(" ", "+", $address);
$region = "USA";

$json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=$region");
$json = json_decode($json);

$lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
$long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
echo $lat."
".$long;

?> 