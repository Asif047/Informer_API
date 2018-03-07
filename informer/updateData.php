<?php

include ('db_function.php');
$response = array();

//Getting post data
$id = $_REQUEST["id"];
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

if (isset($id) && isset($phone) && isset($email) && isset($message) && isset($latitude)&& isset($longitude)&&isset($address)&&isset($city)&&isset($country)&&isset($image)&&isset($date_time)){

	$result=updateData($id,$phone,$email,$message,$latitude,$longitude,$address,$city,$country,$image,$date_time);
	if ($result) {
        $response["success"] = 1;
        $response["message"] = "Successfully updated";
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