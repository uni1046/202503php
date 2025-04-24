<?php
require_once '..\helpers.php';

header('Content-Type: text/html; charset=utf-8');


printRWithBr($_POST);  
echoHr();
printRWithBr($_COOKIE);

session_start();
printRWithBr($_SESSION);

echoHr();
printRWithBr($_FILES);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echoHr();
    echoWithBr('只有 POST 请求才会输出以下内容:');
   
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $message = $_POST['message'] ?? '';

    printRWithBr($_POST);

    
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "gender: $gender<br>";
    echo "message: $message";
}

echo"<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
    
        echo "收到的文件信息：<br>";
        echo "临时路径: " . htmlspecialchars($fileTmpPath) . "<br>";
        echo "原始文件名: " . htmlspecialchars($fileName) . "<br>";
        echo "文件大小: " . $fileSize . " bytes<br>";
        echo "浏览器报告类型: " . htmlspecialchars($fileType) . "<br>";
        echo "文件扩展名: " . htmlspecialchars($fileExtension) . "<br>";
    
        // 安全检查
    
        $maxFileSize = 5 * 1024 * 1024; 
        if ($fileSize > $maxFileSize) {
            die("错误：文件大小超过限制 (" . ($maxFileSize / 1024 / 1024) . "MB)");
        }
    
        $allowedfileExtensions = ['jpg', 'gif', 'png', 'jpeg', 'zip', 'txt', 'pdf'];
        if (!in_array($fileExtension, $allowedfileExtensions)) {
            die("错误：不允许的文件扩展名。");
        }
    
    
    
    } else {
        // 处理上传错误
        $errorMessage = "未知上传错误。";
        if (isset($_FILES['uploadedFile']['error'])) {
            switch ($_FILES['uploadedFile']['error']) {
                case UPLOAD_ERR_INI_SIZE:
                    $errorMessage = "错误：上传的文件超过了的限制。";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $errorMessage = "错误：上传的文件超过了的限制。";
                    break;
                }
        }
        die($errorMessage);
    }
    } else {
    echo "请通过 POST 方法提交文件上传表单。";
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        header('Location: https://fontmeme.com/ziti/memoir-font/');
        exit;
    }
    
