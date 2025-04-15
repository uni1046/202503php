<?php

echo "Hello, World!";
echo '<br>';
echo "Hello, World!";
$a = "Hello, World!";
echo "<br>";

$userName = "小明";
function getUserInfo()
{

}
// 类名推荐使用大驼峰命名
class UserInfo
{

}

$city = "东京";
$year = 5;
$year = 10;
echo "<br>";
echo "我在{$city}生活了{$year}年, 转义符号\\, \$a";
//echo '我在' . $city . '生活了' . $year . '年';


echo "<br>";
$username = "小明"; 
$username1 = 'lu'; 
$username2 = '盧'; 
$age = 18; 
$height = 1.75; 
$isStudent = true; 
$userOrders = null; 
//unset($isStudent); 
var_dump($username); 
echo "<br>";
var_dump($username1);
echo "<br>";
var_dump($username2);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($isStudent);


const PI = 3.14; 
const SITE_NAME = "PHP 开发者社区";
var_dump(SITE_NAME);


$variableName = 'message';
$message = 'Hello from variable variable!';
echo $$variableName; 


// 变量引用, 传值赋值和引用赋值
echo "<br>";
$var1 = "Hello";
//$var2 = $var1; 
$var3 = &$var1; 
var_dump($var3); 

$users = [
    'user1' => 'active',
    'user2' => 'inactive',
    'user3' => 'inactive',
    'user4' => 'active',
];
foreach ($users as &$status) {
    if ($status === 'inactive') {
        $status = 'active'; // 修改为活跃
    }
}
unset($status);// 释放引用
echo "<br>";
print_r($users);

// 魔术常量
echo "<br>";
echo __FILE__; 
echo "<br>";
echo __LINE__; 
echo "<br>";
echo __DIR__; 
echo "<br>";

class MyClass
{
    public function myMethod(): void
    {
        echo __CLASS__; // 当前类名
        echo "<br>";
        echo __METHOD__; // 当前方法名
        echo "<br>";
        echo __FUNCTION__; // 当前函数名
    }
}

$myClass = new MyClass();
$myClass->myMethod(); // 输出: MyClass::myMethod()

echo "<br>";
echo defined('PI') ? 'PI is defined' : 'PI is not defined'; 
if (!defined('PI')){
    define('PI', 3.14);
}

$a = [];
if ($a) {
    echo "a is true";
} else {
    echo "a is false"; // 变量为空就是false
}
echo "<br>";
$a[0] = 1;
if ($a) {
    echo "a is true"; 
} else {
    echo "a is false";
}

echo "<br>";
$stringA = "Hello";
echo $stringA[4]; //0开始

$fruits = ["apple", "banana", "orange"];
$fruits[0] = "pear";

$person = [
    "name" => "小明",
    "age" => 18,
    "city" => "东京"
];
$person["age"] = 20; 
echo "<br>";
echo $fruits[0]; 
echo "<br>";
echo $person["age"]; 
echo "<br>";

// 类型强制转换
$price = "100"; // 字符串类型
var_dump((int)$price); // 输出: int(100)

echo "<br>";
 var_dump(is_int($price)); 
echo "<br>";
var_dump(is_bool($isStudent)); 
echo "<br>";
var_dump(is_numeric($price)); 
echo "<br>";
$b = null;
var_dump(isset($b)); 
echo "<br>";
var_dump(empty($b)); 
echo "<br>";
var_dump(gettype($person)); 
echo "<br>";

// 赋值运算符
$str = "Hello";
$str .= " World";  
echo $str; 
