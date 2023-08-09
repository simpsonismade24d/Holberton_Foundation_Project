<?php
$HOSTNAME = "localhost";
$USERNAME = "simtechn_music_recommend_db";
// $USERNAME = "root";
$PASSWORD= "Mysql8394@NG";
// $DATABaSE = "music_recommend_db";
$DATABaSE = "simtechn_music_recommend_db";

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);
if(!$con){
	die(mysqli_error($con));
}

?>
