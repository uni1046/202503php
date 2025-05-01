<?php

require_once '../helpers.php';


$dsn = "mysql:host=127.0.0.1;dbname=testphp;port=3306;charset=utf8mb4";
$username = "root";
$password = ""; 


$options = [
    
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];


try {
    $pdo = new PDO($dsn, $username, $password, $options);
    echo "数据库连接成功!";
} catch (PDOException $e) {
    echo "数据库连接失败: " . $e->getMessage();
   
}

try {
    $sql = "SELECT age FROM studentage WHERE age = '27'";
    $stmt = $pdo->query($sql);

    echo "<h4>Students age 27:</h4>";
    echo "<ul>";
    foreach ($stmt as $row) {
        echo "<li>ID: {$row['id']}, Name:" . htmlspecialchars($row['user']) . ", Age: {$row['age']}, Grade: {$row['grade']}</li>";
    }
    echo "</ul>";
} catch (PDOException $e) {
    echo "查询失败: " . $e->getMessage();
}



