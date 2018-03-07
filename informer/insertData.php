<?php

include ('db_function.php');
$response = array();

//Getting post data
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$latitude = $_REQUEST['latitude'];
$longitude = $_REQUEST['longitude'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$country = $_REQUEST['country'];
$image = $_REQUEST['image'];
$date_time = $_REQUEST['date_time'];

if (isset($_REQUEST['phone']) && isset($_REQUEST['message'])){

	$result=insertData($phone,$email,$message,$latitude,$longitude,$address,$city,$country,$image,$date_time);
	if ($result) {
        $response["success"] = 1;
        $response["message"] = "Successfully saved";
        echo json_encode($response);
    }
	else {
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
        echo json_encode($response);
    }

}
else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
    echo json_encode($response);
}
?>