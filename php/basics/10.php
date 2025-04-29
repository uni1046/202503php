<?php

require_once "../helpers.php";

//定义抽象类
abstract class Shape {
    protected string $color;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getColor(): string {
        return $this->color;
    }

    //定义抽象方法
    abstract public function calculateArea():float;
}

//定义子类继承shape
class Circle extends Shape { 
    private float $radius;
    //子类构造函数
    public function  __construct(string $color, float $radius)
    {
        parent::__construct($color);
        $this->radius = $radius;
    }
    //写入父类抽象方法的子类具体实现
    public function calculateArea(): float
    {
        return pi() * $this->radius * $this->radius;
    }
}

// 定义子类 
class Rectangle extends Shape {
    private float $width;
    private float $height;
    
    public function __construct(string $color, float $width, float $height) {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }
    
    public function calculateArea(): float {
        return $this->width * $this->height;
    }
    }

    $circle = new Circle('红色', 5);
echo "圆形颜色: " . $circle->getColor() . ", 面积: " . $circle->calculateArea() . "\n";

$rectangle = new Rectangle('蓝色', 4, 6);
echo "矩形颜色: " . $rectangle->getColor() . ", 面积: " . $rectangle->calculateArea() . "\n";

//定义记录日志的接口
interface Loggable {
    //定义log方法签名
    public function log(string $message) : void; 
}

interface StringSerializable {
    public function __toString(): string;
}

//实现接口
class FileLogger implements Loggable {
    private $logFile;
    public function __construct(string $filename)
    {
        $this->logFile = $filename;
    }
    //使用接口中的log方法
    public function log(string $message) : void{
        $timestamp = date('Y-m-d H:i:s');
    file_put_contents($this->logFile, "[{$timestamp}] " . $message . PHP_EOL, FILE_APPEND);
    echo "消息已记录到文件 {$this->logFile}\n";
    }
}


class DatabaseLogger implements Loggable {
private $pdo; // 假设有 PDO 连接

public function __construct(PDO $pdo) {
    $this->pdo = $pdo;
}

// 实现 log 方法，将日志写入数据库
public function log(string $message): void {
    try {
        $stmt = $this->pdo->prepare("INSERT INTO logs (message, created_at) VALUES (:msg, NOW())");
        $stmt->execute([':msg' => $message]);
        echo "消息已记录到数据库\n";
    } catch (PDOException $e) {
        echo "数据库日志记录失败: " . $e->getMessage() . "\n";
    }
}
}

interface ProductResource{
    //获取产品信息
    //id、、
    //return
    public function show(int $id) : mixed;
    //获取产品列表
    //return
    public function index(): mixed;
    //展示创建产品的表单页面
    //return
    public function create(): mixed;
    //新增产品到数据库
    //return 
    public function store(array $product): mixed;
    //展示编辑产品的表单页面
    //return
}

class Product implements ProductResource
{
    public function show(int $id): string
    {
        return "Showing product with ID: $id<br>";
    }

    public function index(): string
    {
        return "Listing all products<br>";
    }

    public function create(): string
    {
        return "Creating a new product<br>";
    }

    public function store(array $product): string
    {
        return "Storing product: " . json_encode($product) . "<br>";
    }

}

$product = new Product("Sample Product");
$productInfo = $product->show(1);
echoWithBr($productInfo);

class Database
{
    public static string $host = "localhost";

    public string $dbName = "school";

    public static string $username;

    public static string $password;

    private static ?object $instance = null;

    /**
     * @param $username
     * @param $password
     */
    private function __construct($username, $password)
    {
        self::$username = $username;
        self::$password = $password;
    }

    /**
     * @param $username
     * @param $password
     * @return self
     */
    public static function connect($username, $password): object
    {
        //数据库连接
        return self::$instance = new self($username, $password);
    }
    public static function query(string $sql): string
    {
        return "Executing query: $sql<br>";
    }

    /**
     * 禁止克隆
     *
     * @throws Exception
     */
    private function __clone()
    {
        throw new Exception("Cannot clone a singleton class");
    }
}
$connection = Database::connect('root', 'password');
varDumpWithBr($connection);
echoWithBr(Database::$host);

class ParentClass {
    protected static string $name = 'Parent';
    
    public static function whoAreYouSelf(): void {
        echo self::$name . "\n"; // self:: 总是指向 ParentClass
    }
    
    public static function whoAreYouStatic(): void {
        echo static::$name . "\n"; // static:: 指向调用时的类
    }
    }
    
    class ChildClass extends ParentClass {
    protected static string $name = 'Child'; // 子类覆盖了静态属性
    }
    
    ChildClass::whoAreYouSelf();  // 输出: Parent  whoAreYouSelf 在 ParentClass 定义
    ChildClass::whoAreYouStatic(); // 输出: Child  static 指向运行时调用的类 ChildClass已覆盖ParentClass

    trait Shareable
    {
        public function share(string $name): string
        {
            return "Sharing this $name<br>";
        }
    
        protected function log(string $message): string
        {
            return "Logging message: $message<br>";
        }
    
        abstract protected function getShareTitle(): string;
    }
    
    class Controller
    {
        // 类内容
    
        public function responseJson(array $data, int $status = 200, string $message = 'success'): string
        {
            return json_encode([
                'status' => 200,
                'message' => 'success',
                'data' => $data
            ]);
        }
    }
    
    class Post extends Controller
    {
        use Shareable;
    
        public function getShareTitle(): string
        {
            return "Sharing a post<br>";
        }
    
        public function getShare(): string
        {
            return $this->share('食品衛生法の改正について');
        }
    
        /**
         * 获取 Post 详情
         *
         * @return string
         */
        public function show(): string
        {
            $post = [
                'id' => 1,
                'title' => 'Hello World',
                'content' => 'This is a sample post'
            ];
    
            return $this->responseJson($post);
        }
    }
    
    $post = new Post();
    echoWithBr($post->getShare());
    echoWithBr($post->show());


    trait share {
        // 公共方法，用于执行分享
        public function share(string $platform): bool {
        // 检查平台是否支持等逻辑...
        $message = "正在分享 '" . $this->getShareTitle() . "' 到 " . $platform;
        $this->log($message); 

        return true;
    }
}

    class BlogPost {
        use Share;
    
        public string $title;
    
        public function __construct(string $title) {
            $this->title = $title;
        }
    
        // 必须实现 Trait 中定义的抽象方法
        protected function getShareTitle(): string {
            return $this->title;
        }
    
        // 类可以有自己的其他方法
        public function display(): void {
            echo "文章标题: " . $this->title . "\n";
        }

        public function log(string $message) {
            echo "[Log - BlogPost] " . $message . "\n";
       }
    }
    
    class Image {
        use Share;
    
        public string $filename;
        public string $caption;
    
        public function __construct(string $filename, string $caption) {
            $this->filename = $filename;
            $this->caption = $caption;
        }
    
        protected function getShareTitle(): string {
            return $this->caption ?: $this->filename;
        }
    
         public function log(string $message) {
             echo "[Log - Image] " . $message . "\n";
        }
    }
    
    $post = new BlogPost("PHP Trait 详解");
    $post->display();
    $post->share("Twitter"); // 调用来自 trait
    
    echo "\n";
    
    $image = new Image("cat.jpg", "可爱的小猫");
    $image->share("Facebook");
    




class TestMagic
{
    public string $name = "TestMagic";

    public function __construct()
    {
        echo "Constructor called<br>";
    }

    /**
     * 当 PHP 试图访问一个不存在的方法时, 会自动调用 __call() 方法
     *
     * @param string $name
     * @param mixed $arguments
     */
    public function __call(string $name, mixed $arguments)
    {
        echoWithBr("你正在尝试访问一个不存在的方法: $name 方法名是:" . __FUNCTION__ . "<br>");
        echo "Method $name does not exist. Arguments: " . implode(", ", $arguments) . "<br>";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Static method $name does not exist. Arguments: " . implode(", ", $arguments) . "<br>";
    }

    public function __get($name)
    {
        echo "Getting property '$name'<br>";
        return $this->name;
    }

    public function __set($name, $value)
    {
        echo "Setting property '$name' to '$value'<br>";
        $this->name = $value;
    }

    public function __isset($name)
    {
        echo "Checking if property '$name' is set<br>";
        return isset($this->$name);
    }

    public function __unset($name)
    {
        echo "Unsetting property '$name'<br>";
        unset($this->$name);
    }
}

echoHr();
$testMagic = new TestMagic();
$testMagic->nonExistentMethod("arg1", "arg2");
$testMagic->nonExistentProp = "这里是东京啊!";
unset($testMagic->nonExistentProp);