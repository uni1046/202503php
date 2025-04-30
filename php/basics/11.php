<?php

require_once "../helpers.php";

$dsn = "mysql:host=127.0.0.1;dbname=testphp;port=3306;charset=utf8mb4";
$username = "rot";
$password = ""; 

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try{
    
    $pdo = new PDO($dsn, $username, $password, $options);
    echo "数据库连接成功!"; 

} catch (PDOException $e) {
     // 如果连接失败，PDO 会抛出 PDOException 异常

    echoWithBr("错误信息: " . $e->getMessage()); 
    echoWithBr("错误代码: " . $e->getCode());   
    echoWithBr("错误文件: " . $e->getFile());   
    echoWithBr("错误行号: " . $e->getLine());   
    echoWithBr("服务器网络异常, 请稍后再试!");

}finally {
    // 这里是无论是否发生异常都会执行的代码
    echoWithBr("数据库连接结束");
    exit(0);
}

// 我们可以使用 throw 语句来抛出异常
if (!isset($_POST['token'])) {
throw new Exception("没有权限访问该页面", 403);
}