<?php
class student{

    public $name;
    public $age;
    public $course;
    
    function __construct($name,$age,$course) {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
        
    }
    public function introduce() {
        return "Name: {$this->name}<br> Age:{$this->age}<br> Course:{$this->course}";
    }
}

$student1 = new student('Mheil ',19, ' Comsci');

$student2 = new student('Ryan ',19, ' Comsci');

$student3 = new student('Yosh ',19, ' Comsci');

echo $student1->introduce() . "<br><br>";

echo $student2->introduce() . "<br><br>";

echo $student3->introduce() . "<br><br>";

?>