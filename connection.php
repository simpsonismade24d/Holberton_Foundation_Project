<?php
$HOSTNAME = "sql106.infinityfree.com";
$USERNAME = "if0_34550582";
$PASSWORD="rL8tqP69pr";
$DATABaSE = "if0_34550582_songs_recommender";

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);
if(!$con){

	die(mysqli_error($con));
}

?>
