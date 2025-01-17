<?php 

class Student{
    var $name;
    var $counry = 'none';
}

$customer1 = new Student;
$customer2 = new Student;

$customer1->name = 'Hakim';
$customer2->name = 'Luna';

echo $customer1->name . "<br>";
echo $customer2->name . "<br>";

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