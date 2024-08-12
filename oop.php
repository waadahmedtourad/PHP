<?php
 /////////////////////////////////Rectangle////////////////////////////////////////////////////////////////////////////

  class Rectangle {
    private float $length ;
    private float $width ;

    
    public function __construct(float $len, float $wid) {
        $this->length = $len;
        $this->width = $wid;
    }

    
    public function setLength(float $len) : void {
        $this->length = $len;
    }

    public function getLength() : float {
        return $this->length;
    }

 
    public function setWidth(float $wid) : void {
        $this->width = $wid;
    }

    public function getWidth() : float {  
        return $this->width;
    }

    
    public function getArea() : float {
        return $this->length * $this->width;
    }

   
    public function getPerimeter() : float {
        return 2 * ($this->length + $this->width);
    }

   
    public function showRectangle() {
        echo "Rectangle Length = " . $this->length . "<br>" ."Rectangle Width = " . $this->width . "<br>" ."Rectangle Area = " . $this->getArea() . "<br>" ."Rectangle Perimeter = " . $this->getPerimeter() . "<br>";
    }
}


$rectangle = new Rectangle(5.0, 3.0);
$rectangle->showRectangle();

echo "<br>";
/////////////////////////////////Circle////////////////////////////////////////////////////////////////////////////

class Circle {
    private float $radius;
    private string $color;

    public function __construct(float $radius, string $color) {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }
    public function getRadius(): float {
        return $this->radius;
    }
    public function setColor(string $color): void {
        $this->color = $color;
    }
    public function getColor(): string {
        return $this->color;
    }
    public function getArea(): float { 
        return pi() * $this->radius * $this->radius;
    }

    public function __toString(): string {
        return "Circle Radius = " . $this->radius . "<br>" ."Circle Color = " . $this->color . "<br>" ."Circle Area = " . $this->getArea();
    }
}

$cir = new Circle(5.0, "red");
echo $cir;

echo "<br>";

/////////////////////////////////Employee////////////////////////////////////////////////////////////////////////////
echo "<br>";
class Employee {
    private int $empId;
    private string $firstName;
    private string $lastName;
    private float $empSalary;
    private float $oldSalary;

    public function __construct(int $id, string $firstName, string $lastName, float $salary) {
        $this->empId = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->empSalary = $salary;
        $this->oldSalary = $salary; 
    }

    public function setId(int $id): void {
        $this->empId = $id;
    }

    public function getId(): int {
        return $this->empId;
    }

    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function setEmpSalary(float $salary): void {
        $this->empSalary = $salary;
    }

    public function getEmpSalary(): float {
        return $this->empSalary;
    }

    public function getFullName(): string {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getAnnualSalary(): float {
        return $this->empSalary * 12;
    }

    public function raiseSalary(float $percent): void {
        $this->oldSalary = $this->empSalary; 
        $this->empSalary += $this->empSalary * ($percent / 100);
    }

    public function __toString(): string {
        return "Employee ID: " . $this->getId() . "<br>" ."First Name: " . $this->getFirstName() . "<br>" . "Last Name: " . $this->getLastName() . "<br>" . "Full Name: " . $this->getFullName() . "<br>" . "Old Salary: " . $this->oldSalary . "<br>" .
               "New Salary: " . $this->getEmpSalary() . "<br>" . "Annual Salary: " . $this->getAnnualSalary();
    }
}


$emp = new Employee(1, "Waad", "Ahmed", 1200);
$emp->raiseSalary(10);
echo $emp;

///////////////////////////////////////////Account////////////////////////////////////////////////////////////

echo "<br>";
echo "<br>";
class Account {
    private string $accId;
    private string $accName;
    private int $accBalance;

    public function __construct(string $id, string $name, int $balance ) {
        $this->accId = $id;
        $this->accName = $name;
        $this->accBalance = $balance;
    }

    public function setId(string $id) : void {
        $this->accId = $id;
    }
    public function getId() : string {
        return $this->accId;
    }


    public function setName(string $name) : void {
        $this->accName = $name;
    }
    public function getName() : string {
        return $this->accName;
    }


    public function setBalance(int $balance) : void {
        $this->accBalance = $balance;
    }
    public function getBalance() : int {
        return $this->accBalance;
    }

    public function credit(int $amount) : int {
        $this->balance += $amount;
        return $this->balance;
    }
    
    public function debit(int $amount) : int {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Amount exceeded balance<br>";
        }
        return $this->balance;
    }
    public function transferTo(Account $anotherAccount, int $amount) : int {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            $anotherAccount->credit($amount);
        } else {
            echo "Amount exceeded balance<br>";
        }
        return $this->balance;
    }
    public function __toString() : string {
        return "Account id=" . $this->accId . "<br>" ."Account name=" . $this->accName . "<br>" . "Account balance=" . $this->accBalance ;
    }
        


}
$account = new Account("M123", "Mazen", 1000);
echo $account;

?>