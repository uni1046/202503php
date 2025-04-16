<?php
function sayHello() {
    echo "你好\n";
}

function greetUser($name) {
 echo "你好" . $name . "!/n";
}

function sumNumbers($num1, $num2) {
    $sum = $num1 + $num2;
echo $sum;
}

sayHello(); 

greetUser("Alice"); 
greetUser("Bob");

sumNumbers(5, 3);   
sumNumbers(100, 200);


function incrementValue($number) {
    $number++; // 修改的是函数内部的副本 $number
    echo "函数内部的值: " . $number . "\n";
}

$value = 10;
incrementValue($value); 
echo "函数外部的值: " . $value . "\n"; 


function incrementReference(&$number) { 
    $number++; 
    echo "函数内部的值: " . $number . "\n";
}

$value = 10;
incrementReference($value);
echo "函数外部的值: " . $value . "\n"; 

function createUser(string $username, string $email, bool $isActive = true, bool $isAdmin = false): void
{
    echo "创建用户: <br>";
    echo "  用户名: " . $username . "<br>";
    echo "  邮箱: " . $email . "<br>";
    echo "  激活状态: " . ($isActive ? '是' : '否') . "<br>";
    echo "  管理员: " . ($isAdmin ? '是' : '否') . "<br>";
    echo "----<br>";
}

$name = 'uni1046';
createUser(username: $name, email: 'uni1046@example.com', isAdmin: 0);

$message; //是必需参数 
$name; //有默认值
function showMessage($message, $name = "访客") {
    echo "[" . $name . "] 说: " . $message . "\n";
}

showMessage("今天天气不错！");        
showMessage("该吃饭了！", "张三"); 
