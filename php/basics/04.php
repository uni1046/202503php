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

$text = "The quick brown fox jumps over the lazy dog.";
$newText1 = str_replace("quick", "PHP", $text);
echo $newText1; 
echo "<br>";

$search = ["fox", "dog"];
$replace = ["cat", "bear"];
$newText2 = str_replace($search, $replace, $text, $count);
echo "\n" . $newText2; 
echo "\n替换次数: " . $count; 
echo "<br>";

$string = "abcdefgh";
echo substr_replace($string, "XYZ", 3, 2);
echo "<br>";
$url = 'https://lustormstout.com/avatar/default.png?userId=123';
echo substr_replace($url, 'https://', strpos($url, 'https://'), strlen('http://'));
echo "<br>";
$email = 'lustormstout@gmail.com';
echo strstr($email, '@');
echo "<br>";
echo substr_replace($string, "XYZ", 3, 0); // 从索引3开始插入
echo "<br>";
echo substr_replace($string, "XYZ", -3, 2); 
echo "<br>";
echo substr($email, strpos($email, '@') + 1);//不替换，+1是往后挪一位开始拿
echo "<br>";


$url = 'https://www.mhlw.go.jp/search.html?q=123&ie=UTF-8&sa=';
$awsUrl = 'https://aws.amazon.com/cn/s3/?nc2=h_ql_prod_fs_s3';
echo substr($url, strpos($url, '?') + 1);
echo "<br>";
echo substr($url, 0, -(strlen($url) - strrpos($url, '?')));
echo "<br>";
echo substr($awsUrl, 0, -(strlen($awsUrl) - strrpos($awsUrl, '?')));
echo "<br>";


$code = 'XfTd42';
echo strtolower($code);
echo "<br>";
echo strtoupper($code);
echo "<br>";

$fileName = 'learning_php_construct.php';
$fileName = substr($fileName, 0, -(strlen($fileName) - strpos($fileName, '.')));
$fileName = str_replace('_', ' ', $fileName);
echo ucwords($fileName);
echo "<br>";


$string = ' PHP ';
echo strlen($string);
echo "<br>";
$trimString = trim($string);
echo strlen($trimString);
echo "<br>";

$str2 = "/path/to/file/";
echo trim($str2, "/"); 
echo "<br>";
echo ltrim($str2, "/"); 
echo "\n";
echo "<br>";
echo rtrim($str2, "/"); 
echo "<br>";

$name = "Alice";
$age = 30;
$score = 85.7;

$outputString = sprintf("姓名: %s, 年龄: %d, 分数: %.1f%%", $name, $age, $score);
echo $outputString; 
echo "\n";
printf("ID: %05d", 123); //00123补零五位数
echo "<br>";

$csvLine = "apple,banana,orange,grape";
$fruits = explode(",", $csvLine);
print_r($fruits); 
echo "<br>";
$parts = explode(",", $csvLine, -1);
print_r($parts); 
echo "<br>";


$keywordsArr = ["黑色", "足球鞋", "男款"];
$keywordsStr = implode(', ', $keywordsArr);
echo $keywordsStr;
echo "<br>";

echo '&nbsp;你好 ';
echo "<br>";
echo "<h1>这是一个 h1 标签</h1>";
echo "&lt;h1&gt;这是一个 h1 标签&lt;/h1&gt;";
echo "<br>";
// echo "<script>alert('你的网站被我黑了!')</script>";
echo htmlspecialchars("<script>alert('你的网站被我黑了!')</script>");
echo "<br>";
echo strip_tags("<h1>这是一个 h1 标签</h1>");
echo "<br>";
$str = strip_tags("<?php echo 123; ?>ss");
echo $str;
echo "<br>";
$html = "<p><i>这是</i>一段<b>加粗</b>的<script>alert('oops');</script>文本。</p>";
echo strip_tags($html); 
echo "\n";
echo strip_tags($html, '<p><b><i>');
$query = "搜索 词";
$url = "https://example.com/search?q=" . urlencode($query);
echo $url; 
$path = "文件 名.txt";
$urlPath = "https://example.com/files/" . rawurlencode($path);
echo "\n".$urlPath;
echo "<br>";
parse_str('key1=value1&key2=value2', $result);
var_dump($result);
echo "<br>";
$params = [
    'search' => 'PHP 教程',
    'page' => 1,
    'filters' => ['free', 'beginner'] 
];
$queryString = http_build_query($params);
echo $queryString;
