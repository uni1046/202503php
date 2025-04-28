<?php

require_once "../helpers.php";
class car {
 public $color = '白色';
 public $make;
 public $model;
 public $speed = 0;

 public function accelerate($amount) {
    $this->speed += $amount;
   echo $this->getInfo() . "加速 " . $amount . " km/h,当前速度:" . $this->speed. "km/h\n" ;
}

public function brake($amount) {
    $this->speed -= $amount;
    if ($this->speed < 0) {
        $this->speed = 0;}
    echo $this->getInfo() . "减速 " . $amount . " km/h,当前\n" . $this->speed. "km/h\n";
}


public function getInfo() {
    $make = $this->make ?? '未知品牌';
    $model = $this->model ?? '未知型号';
    return $make . " " . $model;
   }

public function __construct(string $make, string $model, string $color = '银色')
{ echo "一辆新车" . $make . " " . $model . "被创建了!\n";
    $this->make = $make;
    $this->model = $model;
    $this->color = $color;
    
    return $this->make . " " . $this->model . " (" . $this->color . ")";
}



public static string $power = "Engine";


}


$myCar = new Car('丰田', '凯美瑞', '黑色');
$yourCar = new Car('本田', '思域');

echo $myCar->getInfo(); 
echo "\n";
echo $yourCar->getInfo(); 

var_dump($myCar);
var_dump($yourCar);
echo"<br>";

$myCar->color = '红色';
$myCar->make = '特斯拉';
$myCar->model = 'Model 3';

echo "my car: \n";
echo "品牌: " . $myCar->make . "\n";   
echo "型号: " . $myCar->model . "\n";   
echo "颜色: " . $myCar->color . "\n";   
echo "速度: " . $myCar->speed . " km/h\n"; 

$yourCar->make = '宝马';
$yourCar->model = 'X5';

echo "your car:\n";
echo "品牌: " . $yourCar->make . "\n";   
echo "颜色: " . $yourCar->color . "\n";   

$myCar->make = '比亚迪';
$myCar->model = '汉';

echo"<br>";
$myCar->accelerate(60); 
$myCar->brake(30);      
$myCar->brake(40);   


class Animal
{
    public string $name = "Unknown";
    public int $age = 0;
    protected string $isFeed = "No";
    private ?string $idNumber = '001';
//预设
     
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function speak(): void
    {
        $name = $this->name ?? "Animal";
        echo "$name speaks<br>";
    }

      public function setAnimalIDNumber($idNumber): void
    {
        $this->idNumber = $idNumber;
    }

    public function getAnimalIDNumber(): ?string
    {
        return $this->idNumber;
    }
}

class Dog extends Animal 
//定义了一个 `Dog` 类, 它继承了 `Animal` 类, 也就是说 `Dog` 类可以使用 `Animal` 类的属性和方法
 
{
    
    public ?string $master = null;

    public static string $species = "Dog";

    public function __construct($name, $age, $master = null)
    {
        parent::__construct($name, $age);

        $this->master = $master;
    }

    public function run(): void
    {
        echo "Dog is running<br>";
    }

    public function speak(): void
    {
        echo "Dog barks<br>";
    }

    public function getParentPrivateProp(): ?string
    {
        
        // echoHr($this->idNumber); // 不可以直接访问父类的私有属性的, 会报错
        return $this->getAnimalIDNumber(); // 我们可以通过父类中的方法来访问父类的私有属性
    }

    public function showClassSelf(): static
    {
       return $this;
    }

    public static function getSelfStaticProp(): string
    {
        return self::$species;
    }
}

$luckyDog = new Dog("Lucky", 3);
$luckyDog->speak();
echo $luckyDog->name . "<br>";
echoWithBr("Animal's idNumber: " . $luckyDog->getParentPrivateProp());

$luckyDog->setAnimalIDNumber("002-lucky");
echoWithBr("Animal's idNumber: " . $luckyDog->getParentPrivateProp());

varDumpWithBr($luckyDog->showClassSelf());

echoWithBr("这是 LuckyDog 的物种1: " . $luckyDog::$species);

echoWithBr("这是 LuckyDog 的物种2: " . $luckyDog::getSelfStaticProp());

echoHr();

$animalLion = new Animal("辛巴", 5);
$animalTiger = new Animal("武松的兄弟", 4);
$animalLion->speak();
$animalTiger->speak();
echoWithBr("这是被修改之前的类的属性: name = " . $animalTiger->name);
$animalTiger->name = "悍娇虎";
echoWithBr("这里是被修改之后的类的属性: name = " . $animalTiger->name);

echoHr();

varDumpWithBr(gettype($animalLion));
varDumpWithBr($animalLion);

