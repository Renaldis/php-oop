<?php 

class Student{
    var $firstName;
    var $lastName;
    var $country = "none";

    function sayHello()
    {
        return "Hello World";
    }
    function fullName()
    {
        return $this->firstName . " " . $this->lastName;
    }
}

$student1 = new Student;
$student2 = new Student;

$student1->firstName = 'Hakim';
$student1->lastName = 'Sembiring';

echo $student1->firstName . "<br>";
echo $student1->lastName . "<br>";

echo $student1->sayHello() . "<br>";
echo $student1->fullName() . "<br>";

$methods = get_class_methods("Student");
echo "<pre>";
print_r($methods);
echo "</pre>";

if(method_exists('Student','sayHello')){
    echo "Method sayHello Tersedia";
}else{
    echo "Method sayHello Tidak Tersedia";
}

?>