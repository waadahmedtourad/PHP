<?php
/** OOP   => object oriented programming
 * Esay maintainance
 * 
 * 4-pillars
 * 1-Encapsulation  // Hide Data  (set,get)
 * 2-Abdtraction    // what object Dose 
 * 3-inheritance    // More reusable
 * 4-ploymorphism   // overloading (paramerter) or overriding (implemention)    // Filexibilty
 */


 /**
  * Login / Logout / Register / Token / Forget Password


  */


  class student {
    //attributes , data member ,fields =>variables
    //access every where
    public int $stdId;
    public string $stdName;
    public string $stdEmail;
    public string $stdPhone;
    public float $stdGrade;

  }
     // Take A New Object
  $std = new student();  // constractor
  $std->stdId = 1;
  $std->stdName = "waad";
  $std->stdEmail = "waadahmed@gmail.com";
  $std->stdPhone = "01033251393";
  $std->stdGrade = 90.0;
  var_dump($std);

 echo "<br>";
  //1-Encapsulation
      /*  class employee{
           private int $empId;
           private string $empName;
           private float $empSalary;
           //step 2  initialization 
           // magic Method __constractor
             // paramerter 
             public function __constractor(int $id , string $name , float $salary){
                $this->empId = $id; // تجي من constractur اللي اتفتح جوه class بس انت مش شايفه 
                $this->$empName = $name;
                $this->empSalary = $salary;
             }
             //setter  
             public function setName($name) :void{     
                $this->empName = $name;
             }
            //getter
           public function getName() :string{
            return $this->empName;
           }
           public function showEmployee(){
            echo "Employee Id = " . $this->empId ."<br>" ."Employee Name = " . $this->empName ."<br>" ."Employee salary = " . $this->empSalary ;
           }
       }
       $emp = new employee(1 , "mahmoud" ,12000000);
        $emp->showEmployee(); */




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
                echo "Length = " . $this->length . "<br>" ."Width = " . $this->width . "<br>" ."Area = " . $this->getArea() . "<br>" ."Perimeter = " . $this->getPerimeter() . "<br>";
            }
        }
        
       
        $rectangle = new Rectangle(5.0, 3.0);
        $rectangle->showRectangle();
        

?>