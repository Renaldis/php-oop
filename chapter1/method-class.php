<?php 

class Student{
    var $name;
    var $counry = 'none';

    function sayHello()
    {
        return "Hello World";
    }

}

$student1 = new Student;
$student2 = new Student;

$student1->name = 'Hakim';
$student2->name = 'Luna';

echo $student1->name . "<br>";
echo $student2->name . "<br>";

echo $student1->sayHello() . "<br>";
echo $student2->sayHello() . "<br>";

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