<?php
include("db_config.php");



function insertData($phone,$email,$message,$latitude,$longitude,$address,$city,$country,$image,$date_time){
	global $db;
	$result=mysqli_query($db , "INSERT INTO informer(phone,email,message,latitude,longitude,address,city,country,image,date_time) VALUES('$phone','$email','$message','$latitude','$longitude','$address','$city','$country','$image','$date_time')")or die(mysqli_error($db));
	return $result;
}

function displayAll(){
	global $db;
	$result=mysqli_query($db , "SELECT * FROM informer")or die(mysqli_error($db));
	return $result;
}

function deleteData($id){
	global $db;
	$result=mysqli_query($db , "DELETE FROM informer WHERE id = '$id'")or die(mysqli_error($db));
	return $result;
}

function updateData($id,$phone,$email,$message,$latitude,$longitude,$address,$city,$country,$image,$date_time){
	global $db;
	$result=mysqli_query($db , "UPDATE `informer` SET `phone`='$phone',
	`email`='$email', `message`='$message', `latitude`='$latitude',`longitude`='$longitude',`address`='$address',`city`='$city',`country`='$country',`image`='$image',`date_time`='$date_time' WHERE id = '$id'")or die(mysqli_error($db));
	return $result;
}

?>