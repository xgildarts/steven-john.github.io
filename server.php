<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $response = file_get_contents("php://input"); // get the request data

    $data = json_decode($response, true); // convert to json

    $send_back = array("firstname" => $data['firstname'], "lastname" => $data['lastname']); // prepare for response using json

    echo json_encode($send_back); // send back a response
}


?>