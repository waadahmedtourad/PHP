<?php
class Person {
    protected string $name ;
    protected string $address;

    public function __construct(string $name,string $address){
        $this->name = $name;
        $this->address = $address;
    }
    public function getName(): string{
        return $this->name;
    }
    public function setName(string $name): void{
        $this->name = $name;
    }
    public function getAddress(): string{
        return $this->address;
    }
    public function setAddress(string $address):void{
        $this->address = $address;
    }
    
    public function display():void{
        echo "Person "."<br>". "name :". $this->getName() ."<br>"."address :".$this->getAddress() ;
    }
}
$person = new Person("Yara","Cairo,Eygpt");
$person->display();
echo "<br>";
class Student extends Person{
    private string $program ;
    private int $year;
    private float $fee;

    public function __construct(string $name,string $address,string $program,int $year,float $fee){
        parent::__construct($name,$address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }
    public function getProgram(): string{
        return $this->program ;
    }
    public function setProgram(string $program):void{
        $this->program = $program;
    }
    public function getYear(): int{
        return $this->year;
    }
    public function setYear(int $year):void{
        $this->year = $year;
    }
    public function getFee():float{
        return $this->fee;
    }
    public function setFee(float $fee):void{
        $this->fee = $fee;
    }
    public function display():void{
        echo "Student "."<br>". "name :". $this->getName() ."<br>"."address :".$this->getAddress() ."<br>"."program :".$this->getProgram()."<br>"."year :".$this->getYear()."<br>"."fee :".$this->getFee();
    }
}
$std = new Student("waad","Cairo,Eygpt","Computer Science",2024,15000.00);
$std->display();

class Staff extends Person{
  private string $school;
  private float $pay;
  public function __construct(string $name,string $address,string $school,float $pay){
    parent::__construct($name,$address);
    $this->school = $school;
    $this->pay = $pay;
  }
  public function getSchool():string{
    return $this->school;
  }
  public function setSchool(string $school):void{
    $this->school = $school;
  }
  public function getPay():float{
    return $this->pay;
  }
  public function setPay(float $pay):void{
    $this->pay = $pay;
  }
  public function display():void{
    echo "<br>"."Staff "."<br>". "name :". $this->getName() ."<br>"."address :".$this->getAddress()."<br>"."school :".$this->getSchool()."<br>"."Pay :".$this->getPay();
  }
}
$staff = new Staff("Mazen","Cairo,Eygpt","Cairo University",50000.00);
$staff ->display();

echo "<br>";
 class Shape{
    protected string $color;
    protected bool $filled;
    public function __construct(string $color,bool $filled){
        $this->color = $color;
        $this->filled = $filled;
    }
    public function getColor():string{
        return $this->color;
    }
    public function setColor(string $color):void{
        $this->color = $color;
    }
    public function getFilled():bool{
        return $this->filled;
    }
    public function setFilled(bool $filled):void{
        $this->filled = $filled;
    }
    public function display():void{
        echo "<br>"."Shape"."<br>"."color :".$this->getColor()."<br>"."filled :".$this->getFilled();
    }

}
$shape = new Shape("orange",true);
class Rectangle extends Shape{
    private float $length;
    private float $width;

    public function __construct(string $color,bool $filled,float $length,float $width){
        parent::__construct($color, $filled);
        $this->length = $length;
        $this->width = $width;
    }
    public function getLength():float{
        return $this->length;
    }
    public function setLength(float $length):void{
        $this->length = $length;
    }
    public function getWidth():float{
        return $this->width;
    }
    public function setWidth(float $width):void{
        $this->width = $width;
    }
    public function getArea():float{
        return $this->length * $this->width;
    }
    public function getPerimeter():float{
        return ($this->length + $this->width) * 2;
    }
    public function display():void{
        echo "<br>"."Rectangle"."<br>"."color :".$this->getColor()."<br>"."filled :".$this->getFilled()."<br>"."rectangle Area : ".$this->getArea()."<br>"."rectangle Perimeter : ".$this->getPerimeter();
    }
  
}
$rect = new Rectangle("red",true,15.5,10.5);
$rect->display();
echo "<br>";

class Circle extends Shape {
    private float $radius;

    public function __construct(string $color, bool $filled, float $radius) {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * $this->radius * $this->radius;
    }

    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }
    public function display():void{
        echo "<br>"."Circle"."<br>"."color :".$this->getColor()."<br>"."Filled :".$this->getFilled()."<br>"."Circle Area :".$this->getArea()."<br>"."Circle Perimeter :".$this->getPerimeter();
    }
}
$cir = new Circle("green",true,5.0);
$cir->display();
echo "<br>";
class Square extends Rectangle {
    public function __construct(string $color, bool $filled, float $side) {
        parent::__construct($color, $filled, $side, $side);
    }

    public function getSide(): float {
        return $this->getLength(); 
    }

    public function setSide(float $side): void {
        $this->setLength($side);
        $this->setWidth($side);
    }

    public function getArea(): float {
        $side = $this->getSide();
        return $side * $side;
    }

    public function getPerimeter(): float {
        $side = $this->getSide();
        return 4 * $side;
    }
    public function display():void{
        echo "<br>"."Square"."<br>"."color :".$this->getColor()."<br>"."Filled :".$this->getFilled()."<br>"."Square Area:".$this->getArea()."<br>"."Square Perimeter :".$this->getPerimeter();
    }

}
$square = new Square("blue",true, 5);
$square->display();

echo "<br>";


abstract class Theshape{
    protected string $color;
    protected bool $filled;
    public function __construct(string $color,bool $filled){
        $this->color = $color;
        $this->filled = $filled;
    }
    public function getColor():string{
        return $this->color;
    }
    public function setColor(string $color):void{
        $this->color = $color;
    }
    public function getFilled():bool{
        return $this->filled;
    }
    public function setFilled(bool $filled):void{
        $this->filled = $filled;
    }
    public abstract function getArea():float;
    public abstract function getPerimeter():float;
    public abstract function display():void;

}
class Therectangle extends Theshape{
    private float $length;
    private float $width;

    public function __construct(string $color,bool $filled,float $length,float $width){
        parent::__construct($color, $filled);
        $this->length = $length;
        $this->width = $width;
    }
    public function getLength():float{
        return $this->length;
    }
    public function setLength(float $length):void{
        $this->length = $length;
    }
    public function getWidth():float{
        return $this->width;
    }
    public function setWidth(float $width):void{
        $this->width = $width;
    }
    public function getArea():float{
        return $this->length * $this->width;
    }
    public function getPerimeter():float{
        return ($this->length + $this->width) * 2;
    }
    public function display():void{
        echo "<br>"."Rectangle"."<br>"."color :".$this->getColor()."<br>"."filled :".$this->getFilled()."<br>"."rectangle Area : ".$this->getArea()."<br>"."rectangle Perimeter : ".$this->getPerimeter();
    }
  
}
$rectangle = new Therectangle("Black",true,5.5,12.5);
$rectangle->display();
echo "<br>";

class Thecircle extends Theshape {
    private float $radius;

    public function __construct(string $color, bool $filled, float $radius) {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * $this->radius * $this->radius;
    }

    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }
    public function display():void{
        echo "<br>"."Circle"."<br>"."color :".$this->getColor()."<br>"."Filled :".$this->getFilled()."<br>"."Circle Area :".$this->getArea()."<br>"."Circle Perimeter :".$this->getPerimeter();
    }
}
$circle = new Thecircle("Yellow",true,4.0);
$circle->display();
echo "<br>";
class Thesquare extends Therectangle {
    public function __construct(string $color, bool $filled, float $side) {
        parent::__construct($color, $filled, $side, $side);
    }

    public function getSide(): float {
        return $this->getLength(); 
    }

    public function setSide(float $side): void {
        $this->setLength($side);
        $this->setWidth($side);
    }

    public function getArea(): float {
        $side = $this->getSide();
        return $side * $side;
    }

    public function getPerimeter(): float {
        $side = $this->getSide();
        return 4 * $side;
    }
    public function display():void{
        echo "<br>"."Square"."<br>"."color :".$this->getColor()."<br>"."Filled :".$this->getFilled()."<br>"."Square Area:".$this->getArea()."<br>"."Square Perimeter :".$this->getPerimeter();
    }

}
$square = new Thesquare("White",true,3.0);
$square->display();
?>