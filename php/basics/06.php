<?php

$var1 = 123;
$var2 = "Hello";
$var3 = 3.14;
$var4 = true;
$var5 = null;
$var6 = ["a", "b"];
$var7 = fopen("php://memory", "r"); 
$var8 = function() {}; 
$var9 = "456"; 

echo '$var1 (123): ';
var_dump(is_int($var1));   
var_dump(is_numeric($var1)); 
var_dump(is_scalar($var1)); 
echo "<br>";

echo '$var2 ("Hello"): ';
var_dump(is_string($var2));
var_dump(is_numeric($var2)); 
var_dump(is_scalar($var2));  
echo "<br>";

echo '$var3 (3.14): ';
var_dump(is_float($var3));  
var_dump(is_numeric($var3));
echo "<br>";

echo '$var4 (true): ';
var_dump(is_bool($var4));   
var_dump(is_scalar($var4)); 
echo "<br>";

echo '$var5 (null): ';
var_dump(is_null($var5));   
var_dump(is_scalar($var5));  
echo "<br>";

echo '$var6 (["a", "b"]): ';
var_dump(is_array($var6));  
var_dump(is_scalar($var6));  
echo "<br>";

echo '$var7 (resource): ';
var_dump(is_resource($var7));
var_dump(is_scalar($var7));   
if(is_resource($var7)) fclose($var7); 
echo "<br>";

echo '$var8 (closure): ';
var_dump(is_callable($var8)); 
echo "<br>";

echo '$var9 ("456"): ';
var_dump(is_string($var9));  
var_dump(is_numeric($var9));
var_dump(is_int($var9));     
echo "<br>";

$data = 100;
$typeString = gettype($data);

echo("变量 $data 的类型是: {$typeString}\n"); 
echo "<br>";

switch ($typeString) {
    case 'integer':
        echo "这是一个整数。\n";
        break;
    case 'string':
        echo "这是一个字符串。\n";
        break;

    default:
        echo "这是一个其他类型。\n";
}
if ($typeString == 'integer') {
    echo("这是一个整数。\n");
} elseif ($typeString == 'string') {
    echo "这是一个字符串。\n";
} else {
    echo("这是一个其他类型。\n");
}


$value = "123.45"; 
var_dump(intval($value)); 
var_dump((int)$value); 
var_dump((float)$value); 

var_dump(empty($student));
//if (!empty($student)) {
//    # todo do something
//}
$classes = [
    'class1' => ['student1', 'student2'],
    'class2' => ['student3', 'student4'],
];
unset($classes['class1']);
var_dump($classes); 


$str_num = "123 apples";
$str_float = "3.14159 is pi";
$str_hex = "0xFF"; // 十六进制字符串
$float_num = 99.9;
$is_valid = true;
$nothing = null;
$my_array = [1];

// intval 转整
echo "intval('{$str_num}'): "; var_dump(intval($str_num));        
echo "<br>";
echo "intval('{$str_hex}', 16): "; var_dump(intval($str_hex, 16));
echo "<br>";
echo "intval({$float_num}): "; var_dump(intval($float_num));     
echo "<br>";
echo "intval({$is_valid}): "; var_dump(intval($is_valid));        
echo "<br>";

// floatval 转浮点
echo "floatval('{$str_float}'): "; var_dump(floatval($str_float)); 
echo "<br>";

// strval 转字符串
echo "strval({$float_num}): "; var_dump(strval($float_num));      
echo "<br>";
echo "strval({$is_valid}): "; var_dump(strval($is_valid));        
echo "<br>";
echo "strval({$nothing}): "; var_dump(strval($nothing));       
echo "<br>";
echo "strval($my_array): "; var_dump(strval($my_array));        
echo "<br>";

// boolval 转布尔
$zero_str = "0";
$empty_str = "";
echo "boolval({$zero_str}): "; var_dump(boolval($zero_str));     
echo "<br>";
echo "boolval({$empty_str}): "; var_dump(boolval($empty_str));    
echo "<br>";
echo "boolval('hello'): "; var_dump(boolval('hello'));          
echo "<br>";


$pi = 3.1415926;
echo(round($pi, 2));
echo(round($pi, 3)); 
echo(mt_rand(1, 100)); 

echo(mt_rand(1, 100)); // 输出: 随机数, 1 到 100 之间

try {
    $password = random_int(100000, 999999) . bin2hex(random_bytes(10));
} catch (\Random\RandomException $e) {
    echo "生成随机密码失败: " . $e->getMessage();
    exit;
}
echo($password); 

echo(time()); 
echo(microtime(true)); 
echo("请求开始时间 (秒): " . ($_SERVER['REQUEST_TIME'] ?? 'N/A') . "\n");
echo("请求开始时间 (带微秒): " . ($_SERVER['REQUEST_TIME_FLOAT'] ?? 'N/A') . "\n");
echo(date("L", strtotime(date('Y-m-d', strtotime('-1 year')))));

// 获取当前时间戳
$now = time();

// 常用格式
echo "标准日期时间 (Y-m-d H:i:s): " . date("Y-m-d H:i:s", $now) . "\n";
echo "仅日期 (Y/m/d): " . date("Y/m/d", $now) . "\n";
echo "仅时间 (H:i): " . date("H:i", $now) . "\n";
echo "带 AM/PM 的时间 (h:i:s a): " . date("h:i:s a", $now) . "\n";
echo "星期几 (l): " . date("l", $now) . "\n"; // 例如 "Monday"
echo "月份全称 (F): " . date("F", $now) . "\n"; // 例如 "April"

// 组合格式
echo "易读格式: " . date("l, F jS, Y \a\t g:i A", $now) . "\n"; // \a\t 用于转义 a 和 t
// 输出类似: Monday, April 14th, 2025 at 8:14 AM

// ISO 8601 格式 (推荐用于交换)
echo "ISO 8601 (c): " . date("c", $now) . "\n";



$path1 = "/var/www/html/images/logo.png";
$path2 = "C:\\Users\\John\\Documents\\report.pdf";
$path3 = "myfile.txt"; 
$path4 = "/etc/php/";    

echo basename($path1);
echo "<br>";
echo basename($path1, ".png");
echo "<br>";
echo basename($path2); 
echo "<br>";
echo basename($path3); 
echo "<br>";
echo basename($path4);//提取结尾


$path = "/var/www/html/images/logo.png";
echo dirname($path);      
echo "<br>";
echo dirname($path, 2); // 向上两层
echo "<br>";
echo dirname("/var/www/html"); 
echo "<br>";
echo dirname("myfile.txt"); 

$path = "/var/www/html/images/logo.PNG";

$infoAll = pathinfo($path);
echo "<pre>All info: ";
print_r($infoAll);
echo "</pre>";

echo(DIRECTORY_SEPARATOR); // 输出: 

$file = './06.php';
$dir = 'E:\laragon\www\202503php\php\basics';
if (file_exists($file)) {
    echo("文件 $file 存在。");
} else {
    echo("文件 $file 不存在。");
}

if (is_dir($dir)) {
    echo("目录 $dir 存在。");
} else {
    echo("目录 $dir 不存在。");
}

if (is_file($file)) {
    echo("文件 $file 是一个文件。");
} else {
    echo("文件 $file 不是一个文件。");
}

echo(filetype($file)); 
echo "<br>";
echo(disk_free_space($dir));
echo "<br>"; 
echo(disk_total_space($dir)); 
echo "<br>";

$childes = scandir($dir);
print_r($childes); 

$userInfo = [
    'name' => 'Elon Musk',
    'nickname' => '马书记',
    'age' => 30,
    'avatar' => 'https://example.com/avatar.jpg',
    'email' => 'test@example.com',
    'phone' => '1234567890',
    'address' => '123 Main St, City, Country',
    'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'website' => 'https://example.com',
    'social' => [
        'facebook' => 'https://facebook.com/elonmusk',
        'twitter' => 'https://twitter.com/elonmusk',
        'linkedin' => 'https://linkedin.com/in/elonmusk',
    ],
    'skills' => [
        'PHP',
        'JavaScript',
        'HTML',
        'CSS',
        'MySQL',
    ],
    'projects' => [
        [
            'title' => 'Project 1',
            'description' => 'Description of project 1.',
            'url' => 'https://example.com/project1',
        ],
        [
            'title' => 'Project 2',
            'description' => 'Description of project 2.',
            'url' => 'https://example.com/project2',
        ],
    ],
    'education' => [
        [
            'degree' => 'Bachelor of Science in Computer Science',
            'institution' => 'University of Example',
            'year' => 2015,
        ],
        [
            'degree' => 'Master of Science in Software Engineering',
            'institution' => 'Example University',
            'year' => 2017,
        ],
    ],
];

// 使用 json_encode() 将数组转换为 JSON 字符串
echo(json_encode($userInfo));
$jsonString = json_encode($userInfo, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
echo("<pre>$jsonString</pre>");

$userInfoJson = '{"name":"Elon Musk","nickname":"\u9a6c\u4e66\u8bb0","age":30,"avatar":"https:\/\/example.com\/avatar.jpg","email":"test@example.com","phone":"1234567890","address":"123 Main St, City, Country","bio":"Lorem ipsum dolor sit amet, consectetur adipiscing elit.","website":"https:\/\/example.com","social":{"facebook":"https:\/\/facebook.com\/elonmusk","twitter":"https:\/\/twitter.com\/elonmusk","linkedin":"https:\/\/linkedin.com\/in\/elonmusk"},"skills":["PHP","JavaScript","HTML","CSS","MySQL"],"projects":[{"title":"Project 1","description":"Description of project 1.","url":"https:\/\/example.com\/project1"},{"title":"Project 2","description":"Description of project 2.","url":"https:\/\/example.com\/project2"}],"education":[{"degree":"Bachelor of Science in Computer Science","institution":"University of Example","year":2015},{"degree":"Master of Science in Software Engineering","institution":"Example University","year":2017}]}';
// 使用 json_decode() 将 JSON 字符串转换为 PHP 数组
$userInfoArray = json_decode($userInfoJson, true);
echo "<pre>";
print_r($userInfoArray); 
echo "</pre>";
echo($userInfoArray['nickname']); 

