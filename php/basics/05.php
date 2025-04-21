<?php

$userInfo = [
    'username' => 'lustormstout',
    'age' => 20
];
var_dump($userInfo);
echo "<br>";
$emptyArr = [];
var_dump($emptyArr);
echo "<br>";

$fruits = ["apple", "banana", "orange"];
echo count($fruits)."<br>";

$nested = [1, 2, [3, 4], 5];
echo count($nested) . "<br>"; 
echo count($nested, COUNT_RECURSIVE) . "<br>"; 

$arr = [];
$arr = [1, 2, 3];
$assoc = ['a' => 1, 'b' => 2];

$arr = [];
$str = "hello";
var_dump(is_array($arr)); 
var_dump(is_array($str)); 

$orders = [
    [
        "id" => 1,
        'amount' => 300,
        'product_name' =>'iphone',
        'status' => 2,
    ],
    [
        "id" => 1,
        'amount' => 300,
        'product_name' => 'iphone',
        'status' => 2,
    ],
];

foreach ($orders as $order) 
if(is_array($orders)&& array_key_exists('status',$order))
{
    if ($order['status'] === 1) $order['status'] = '已支付';
    if ($order['status'] === 2) $order['status'] = '已发货';
   
} 
var_dump($orders);
echo "<br>";

$stack = ["a", "b"];
$count = array_push($stack, "c","d");
print_r($stack);
echo "New count;" . $count; 

$stack[] = "e";
print_r($stack);//常用
echo "<br>";

$stack = ["a", "b", "c"];
$last = array_pop($stack);
echo "popped:" . $last . "\n";
print_r($stack);
echo "<br>";

$queue = ["b", "c"];
$count = array_unshift($queue, "a", "x");
print_r($queue);
echo "<br>";

$queue =["a", "b", "c"];
$first = array_shift($queue);
echo "shified:". $first . "\n";
echo "<br>";

// 排队逻辑
$buyXiaomiQueue = [];
$user1 = '张三';
$user2 = '李四';
$user3 = '王五';
array_unshift($buyXiaomiQueue,$user2);
// ...
array_unshift($buyXiaomiQueue, $user1);
// ...
array_unshift($buyXiaomiQueue, $user3);
var_dump($buyXiaomiQueue);
echo "<br>";

// 生成购买订单
$userOrder1 = array_pop($buyXiaomiQueue);
echo $userOrder1 . "<br>";
$userOrder2 = array_pop($buyXiaomiQueue);
echo $userOrder2 . "<br>";
var_dump($buyXiaomiQueue);
echo "<br>";

$arr = [0 => "apple", 1 => "banana", 2 => "cherry"];
unset($arr[1]); // 删除索引为 1 的元素
print_r($arr); 
echo "<br>";
$reindexed = array_values($arr);
print_r($reindexed); 
echo "<br>";


$os = ['Mac', 'Windows', 'Linux', 0];

var_dump(in_array('Linux',$os));
var_dump(in_array('linux', $os));
var_dump(in_array(0, $os));       
var_dump(in_array('0', $os));     
var_dump(in_array('0', $os, true)); // bool(false) (严格比较 int(0) !== string('0'))
echo "<br>";

$roleRelationPermissions = [
    1 => ['create', 'update', 'view'],
    2 => ['create', 'update', 'view', 'delete'],
];
$userCanOptionsArticleRoles = [1, 2];
$userRole = 4;
$can = in_array($userRole, $userCanOptionsArticleRoles);
var_dump($can);
echo "<br>";

$key1 = array_search('Windows', $os);
var_dump($key1);
echo "<br>";


$arr1 = ['color' => 'red', 0 => 'a', 1 => 'b'];
$arr2 = ['color' => 'green', 'shape' => 'circle', 1 => 'c', 2 => 'd'];

$merged = array_merge($arr1, $arr2);
print_r($merged);
echo "<br>";

$base = ['color' => 'red', 'shape' => 'square', 0 => 10, 1 => 20];
$replacements = ['color' => 'blue', 1 => 25, 'border' => 'dotted'];
$replaced = array_replace($base, $replacements);
print_r($replaced);
echo "<br>";

$input = ['a', 'b', 'c', 'd', 'e'];
$slice1 = array_slice($input, 2);
$slice2 = array_slice($input, 2, 2);
$slice3 = array_slice($input, 1, -1);
$slice4 = array_slice($input, -2, 1);

$assoc = ['x' => 10, 'y' => 20, 'z' => 30];
$slice5 = array_slice($assoc, 1, null, true);

$input = ["red", "green", "blue", "yellow"];
$removed1 = array_splice($input, 2, 2);
var_dump($input);   
var_dump($removed1); 
echo "<br>";

$input = ["red", "green", "blue", "yellow"];
$removed2 = array_splice($input, 1, 1, ["orange", "purple"]);
var_dump($input);   
var_dump($removed2);
echo "<br>";


//$numbers = [1, 2, 3, 4];
//squares = array_map('square', $numbers);
//var_dump($squares);
//echo "<br>";


$lower = ['a', 'b', 'c'];
$upper = array_map('strtoupper', $lower); 
var_dump($upper);
echo "<br>";

$nums1 = [1, 2, 3];
$nums2 = [10, 20, 30];
$sums = array_map(fn($n1, $n2) => $n1 + $n2, $nums1, $nums2); 
var_dump($sums);
echo "<br>";

$numbers = [1, 2, 3, 4, 5, 6];
$even = array_filter($numbers, fn($n) => $n % 2 == 0);
print_r($even); 
echo "<br>";

$assoc = ['a' => 1, 'b' => 2, 'c' => 3];
$onlyA = array_filter($assoc, fn($key) => $key === 'a', ARRAY_FILTER_USE_KEY);
print_r($onlyA); 


$users = [
    ['id' => 1, 'username' => '张三', 'is_admin' => 1, 'register_from' => 1],
    ['id' => 1, 'username' => '张三', 'is_admin' => 0, 'register_from' => 2]
];
$usersData = array_map(function($user) {
    $user['is_admin'] = $user['is_admin'] ? '管理员':'用户';
    if($user['register_from'] === 1) $user['register_from'] = 'Google';
    if($user['register_from'] === 1) $user['register_from'] = 'Apple';
    return $user;},$users);


    
    
    
    
$city = 'Melbourne';
$date = '2022-04-08';
$weather = '晴天';  

 $anounce = function ($city, $date, $weather) {
        echo "The next F1 race will be in " . $city . "on" . $date . " ssas " . $weather;
};
    $anounce($city, $date, $weather);
    echo "<br>";

$text = 'The next F1 race will be in {{ city }} on {{ date }}.';
$search = ["{{ city }}", "{{ date }}"];
$replace = ["Melbourne", "2022-04-08"];
$newText2 = str_replace($search, $replace, $text, $count);
echo $newText2; 
echo "<br>";

