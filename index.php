<?php
/** OOP   => object oriented programming
 * Esay maintainance
 * 
 * 4-pillars
 * 1-Encapsulation  // Hide Data  (set,get)
 * 2-Abdtraction    // what object Dose 
 * 3-inheritance    // More reusable
 * 4-ploymorphism   // overloading (implemention) or overriding (parameter)    // Filexibilty
 * constructor   =>spical kind of method 
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


/* 

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
        $rectangle->showRectangle(); */


    /**polymorphaism
     * 1- over ride => parameter =>static polymorphism [compile time ploymorphism] ,Early_bilding
     * ex 1- int mvl(int x ,int y)
     * 2- int mvl(int x, int y ,int z)
     * 2- over load => implemention ==>Dynamic polymorphism [run time ploymorphism] ,late bilding
     * ex function display(){ echo "S1_E";} , function display(){ echo "M1_E";}
     */     
  
     /*constructor => Special kind method 

     /* inhertence     
       * abstract class مش بقدر اخد منه object , مش مسموح انك تعمل منه extends لاكتر من parent , hide nesssacry details
     */
    abstract class shape {
        protected string $color;
        
        public function __construct(string $color) {
            $this->color = $color;
        }
        
        public function getColor() : string {
            return $this->color;
        }
        
        public function setColor(string $color) : void {
            $this->color = $color;
        }
        
        public abstract function getArea(): float;
        public abstract function getParimeter(): float;
        public abstract function display(): void;
    }
    
    class rectangle extends shape {
        private float $length;
        private float $width;
        
        public function __construct(float $length, float $width, string $color) {
            parent::__construct($color);
            $this->length = $length;
            $this->width = $width;
        }
        
        public function setLength(float $length): void {
            $this->length = $length;
        }
        
        public function setWidth(float $width): void {
            $this->width = $width;
        }
        
        public function getLength(): float {
            return $this->length;
        }
        
        public function getWidth(): float {
            return $this->width;
        }
        
        public function getArea(): float {
            return $this->length * $this->width;
        }
        
        public function getParimeter(): float {
            return ($this->length + $this->width) * 2;
        }
        
        public function display(): void {
            echo "rectangle color is : " . $this->getColor() . "<br>" ."rectangle Area is : " . $this->getArea() ."<br>" ."rectangle perimeter is : " . $this->getParimeter();
        }
    }
    
    $rect = new rectangle(10.5, 15.5, "red");
    $rect->display();
    
    class Circle extends shape {
        private float $radius;
    
        public function __construct(float $radius, string $color) {
            parent::__construct($color);
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
    
        public function getParimeter(): float {
            return 2 * pi() * $this->radius;
        }
    
        public function display(): void {
            echo "circle color is : " . $this->getColor() . "<br>" . "circle Area is  : " . $this->getArea() . "<br>" . "circle perimeter is :" . $this->getParimeter();
        }
    }
    
    $circle = new Circle(5.5, "blue");
    $circle->display();
    /* interface   --> iemplement   مسموح ليك انك تعمل implement لاكتر من interface 
    */
    interface crud{
        public function create();
        public function getAll();
        public function getOne(int $id);
        public function update(int $id);
        public function delete(int $id);
        public function edit(int $id);
          
    }
    interface x{}
    class post implements crud,x{
        public function create(){}
        public function getAll(){}
        public function getOne(int $id){}
        public function update(int $id){}
        public function delete(int $id){}
        public function edit(int $id){}
    }
    // over load
    class Anmial{
        protected string $name ;

        public function __constractor(string $name){
            $this->name = $name ;
        }
        public function greets():void{}
    }
        class cat extends Anmial{
            public function __constractor(string $name){
                parent::__constractor($name);
            }
            public function greets():void{
                echo "Meo";
            }
        }
        $cat = new cat('tom');
        $cat->greets();

        class dog extends Anmial{
            public function __constractor(string $name){
                parent::__constractor($name);
            }
            public function greets():void{
                echo "woo";
            }
        }
        $dog = new dog('tommm');
        $dog->greets();

      

      
?>