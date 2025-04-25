<?php
$api_url = 'http://127.0.0.1/202503php/php/basics/08recive.php';  
$data_to_send = [
    'name' => 'uni1046',
    'message' => '我从 08post.php 发送的 POST 请求！'
];

$json_payload = json_encode($data_to_send);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);  
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json', 
    'Content-Length: ' . strlen($json_payload) 
]);


curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); 
curl_setopt($ch, CURLOPT_TIMEOUT, 30);        


echo "正在向 {$api_url} 发送 JSON POST 请求...<br>";
$response = curl_exec($ch);


if ($response === false) {
    $error_no = curl_errno($ch);
    $error_msg = curl_error($ch);
    echo "<b class='text-red-600'>cURL Error ({$error_no}): {$error_msg}</b><br>";
} else {
   
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    echo "HTTP 状态码: {$http_code}<br>";

    echo "<h4>响应内容:</h4>";
    echo "<pre>" . htmlspecialchars($response) . "</pre>";

    $decoded_response = json_decode($response, true);
    if ($decoded_response && isset($decoded_response['message'])) {
        echo "<h4>服务器响应的消息:</h4>";
        print_r($decoded_response['message']);
    }
}

curl_close($ch);
echo "cURL 连接已关闭。";

