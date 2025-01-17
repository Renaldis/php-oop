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

$class = get_class_vars("Student");
echo "<pre>";
print_r($class);
echo "</pre>";

if(property_exists('Student','name')){
    echo "Properti name Tersedia";
}else{
    echo "Properti name Tidak Tersedia";
}

?>