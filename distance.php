<?php 
	
	$ch = curl_init("https://maps.googleapis.com/maps/api/distancematrix/json?origins=Vancouver+BC|Seattle&destinations=San+Francisco|Victoria+BC&mode=bicycling&language=fr-FR&key=AIzaSyBFD1YqGRU5QpB-OEUPWRR37mTF0STh97k");

	$result = curl_exec($ch);
	curl_close($ch);

	echo $result;