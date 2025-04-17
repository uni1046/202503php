<?php

$userAge = 25;
function getUserinfo($userAge): void{
   echo $userAge . '<br>'; 
   global $username; 
   $username = 'uni1046'; 
}
getUserinfo($userAge);
echo $username;

function callTracker() {
    static $calls = 0;
    $calls++;
    echo "这个函数已经被调用了 " . $calls . " 次。\n";
}
callTracker();
callTracker(); 
callTracker(); 

function helloWorld(): void{
    echo "Hello, World!<br>";
}
$sayHello = 'helloWorld'; 
$sayHello(); //这两步是用来把函数变成变量，方便调用的

$greet = function ($name) {
    echo "你好, " . $name . "！<br>";
};
$greet('taki'); 

$messagePrefix = "重要消息: ";
$sendMessage = function ($text) use ($messagePrefix) { 
    echo $messagePrefix . $text . "<br>";
};
echo $messagePrefix . "<br>";
$sendMessage("会议推迟了"); 

$count = 0;
$increment = function () use (&$count) { // 按引用改变外部$count
    $count++;
};
$increment();
$increment();
echo "Count is now: " . $count . '<br>'; 

// 作为回调函数传递给 array_map(调用数组里的每个数据再修改得到新数组，但不改变原来的)
$numbers = [1, 2, 3, 4];
$squares = array_map(function ($iem) {
    return $iem * $iem;
}, $numbers);
print_r($squares); 
echo "<br>";

$numbers = [1, 2, 3, 4];
$factor = 3;
$multiplied = array_map(fn($n) => $n * $factor, $numbers);
print_r($multiplied); 

//递归




echo strlen("Hello World!");
echo "<br>";

echo "「你好」所占的字节数是: " . strlen("你好");
echo "<br>";

// mb_strlen() - 获取多字节字符串的长度
echo mb_strlen("你好"); 
echo "<br>";
echo mb_strlen("こんにちは朝日");
echo "<br>";

$string = "Hello world, hello PHP!";
$find = "hello";
$pos1 = strpos($string, $find); 
if ($pos1 === false) {
    echo "'$find' not found (case-sensitive).\n";
} else {
    echo "'$find' found at index: $pos1\n";
}
echo "<br>";

$findUpper = "Hello";
$pos2 = strpos($string, $findUpper);
if ($pos2 !== false) {
    echo "'$findUpper' found at index: $pos2\n";
     //要区分大小写
}
echo "<br>";

// 不用!==用别的错误用法示例
if (strpos($string, $findUpper) == false) { 
    echo "错误判断：'$findUpper' not found.\n"; 
}
echo "<br>";

// 从第 7 个字符开始搜索 "hello"
$pos3 = strpos($string, $find, 7);
if ($pos3 !== false) {
    echo "从索引 7 开始，'$find' found at index: $pos3\n";
}
echo "<br>";

$lastPos = strripos($string, $find);
if ($lastPos !== false) {
    echo "Last '$find' found at index (case-insensitive): $lastPos\n";
}
echo "<br>";

$email = "taki@gmail.com";
$domain = strstr($email, '@');
echo $domain . "<br>"; 

$user = strstr($email, '@', true); 
echo $user . "<br>";   

$url = "https://example.com";
if (str_contains($url, "example")) {
    echo "URL contains 'example'.<br>"; 
}

if (str_starts_with($url, "https://")) {
    echo "URL uses HTTPS.<br>";
}

$filename = "document.pdf";
if (str_ends_with($filename, ".pdf")) {
    echo "File is a PDF.<br>";
}
