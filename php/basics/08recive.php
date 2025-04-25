<?php
header('Content-Type: application/json');

//$input_data = file_get_contents("php://input");

$data = json_decode($input_data, true);


$response = [
    'status' => 'success',
    'message' => '收到您的请求！',
    ];

echo json_encode($response);

