<?php
// 太空船运算符
$a = 10; $b = 20;
var_dump($a <=> $b);
var_dump($a <=> 10);
var_dump($b <=> $a);

echo "<br>";
$x = 5;
echo ++$x;
echo "<br>";
echo $x;

$y = 5;
echo $y++;
echo $y;  

$m = 5;
echo --$m; 
echo $m;   

$n = 5;
echo $n--; 
echo $n;   

$firstName = "张";
$lastName = "三";
$fullName = $firstName . $lastName;

$greeting = "你好，";
$greeting .= $fullName;

echo $greeting;


$arr1 = ['a' => 1, 'b' => 2];
$arr2 = ['b' => 20, 'c' => 3];

$union = $arr1 + $arr2;//只加入左边没有的key
var_dump($union);
$arr3 = ['a' => 1, 'b' => '2']; // '2' 是字符串
$arr4 = ['b' => 2, 'a' => 1]; // 'b' 的值是整数

var_dump($arr1 == $arr3); // 真
var_dump($arr1 === $arr3); //  假 类型x
var_dump($arr1 == $arr4); //  真  
var_dump($arr1 === $arr4); //  假 顺序x

$result = array_merge($arr1, $arr2);//常用这个
print_r($result);

//(条件) ? (条件为真时的值) : (条件为假时的值)
$age = 20;
$statua = ($age >= 18) ? '成年':'未成年';
echo $statua;

// PHP 5.3+ 支持省略中间部分: (表达式1) ?: (表达式2)
// 如果表达式1的值为 true (转换后)，则结果是表达式1的值，否则是表达式2的值。
$username = $_GET['user']?:'guest';//找有没有用户名，没有就是游客
$nickname = $userNickname ?? $userPhone ?? $userEmail ?? '匿名用户'; // 如果 $userNickname, $userPhone, $userEmail 都不存在，则输出 '匿名用户'
echo "<br>";

$result = 2 + 3 * 4; // 14 (乘法优先)
$result_grouped = (2 + 3) * 4; // 20 (括号优先)

$a = 5; $b = 10; $c = 15;
$check = ($a < $b) && ($b < $c); 
$x = $y = $z = 10; // 赋值运算符是右结合，等同于 $x = ($y = ($z = 10));
echo "<br>";

//if (条件表达式) {
    // 条件为真时执行的代码
//}
//if (条件表达式); // 条件为真时执行的一条语句;

if ($age >= 18) {
    echo "已经成年\n";
    
}

$username = "alice";
if ($username) {
   echo "用户存在。\n";
}

$count = 0;
if ($count) { // 整数 0 被认为是 false，所以这块代码不会执行
    echo "计数大于0. \n";
}


$score=20;

if ($score >= 60) {
    echo "及格";
} else {
    echo "不及格";
}

$score = 85;

if ($score >= 90) {
echo "优秀";
} elseif ($score >=80) {
echo "中等";
}elseif ($score >=70) {
echo "及格";
}

$role = 'editor';

switch ($role) {
    case 'admin':
        echo "显示：用户管理、文章管理、系统设置\n";
        break;

    case 'editor':
         echo "显示：文章管理\n";
        //无break;继续执行case

    case 'author':
        echo "显示：写新文章\n";
        break; // 执行完 author 的就跳出 (editor 角色也会执行到这里)    
    
    default:
        echo "无效登录\n";
        break;
}

for ($i = 0; $i < 5; $i++) {
    echo "当前数字是: " . $i . "\n";
} //输出01234

$i = 0; 
while ($i < 5) { 
    echo "当前数字是: " . $i . "\n";
    $i++; 
}
//输出01234

$attempts = 0;
$success = false;

do {
    $attempts++;
    echo "尝试第 " . $attempts . " 次连接...\n";
    if ($attempts >= 3) { 
        if(rand(0,1)){ 
            $success = true;
            echo "连接成功！\n";
        } else if ($attempts >= 3) {
            echo "尝试次数过多，放弃。\n";
            break; 
        }
    }
    if (!$success) sleep(1); // 如果失败，可以等待一下再试

} while (!$success); 
echo "总共尝试了 " . $attempts . " 次。\n";

echo"<br>";
$colors = ['red', 'green', 'blue'];

echo "颜色列表 (只有值):\n";
foreach ($colors as $color) {
    echo "- " . $color . "\n";
}
echo"<br>";
echo "\n颜色列表 (包含索引):\n";
foreach ($colors as $index => $color) {
    echo "索引 " . $index . " 是颜色 " . $color . "\n";
}

$user = [
    'name' => 'Alice',
    'age' => 30,
    'city' => 'New York'
];

echo "\n用户信息:\n";
foreach ($user as $key => $value) {
    echo $key . ": " . $value . "\n";
}

$numbers = [1, 2, 3];
foreach ($numbers as &$num) { 
    $num = $num * 2; // 将数组中的每个元素乘以 2
}
unset($num); // 重要： 循环结束后，建议 unset(&$value) 或 unset(&$num)断开引用关系，避免后续意外修改最后一个元素。
var_dump($numbers); 

for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        echo "找到 5 了，停止循环！\n";
        break; 
    }
    echo "当前数字: " . $i . "\n";
   }
   echo "循环结束。\n";

   for ($i = 0; $i < 5; $i++) {
    if ($i == 2) {
        echo "(跳过数字 2)\n";
        continue; 
    }
    echo "处理数字: " . $i . "\n";
}






