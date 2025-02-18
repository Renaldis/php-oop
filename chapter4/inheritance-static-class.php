<?php 

class Student{
    public static $grades = ['SD', 'SMP', 'SMA'];
    private static $totalStudent = 0;

    public static function motto()
    {
        return "Learn PHP OOP";
    }

    public static function count()
    {
        return self::$totalStudent;
    }

    public static function addStudent()
    {
        return self::$totalStudent++;
    }
}

echo Student::$grades[1] . "<br>";
echo Student::motto() . "<br>";
echo Student::count() . "<br>";
Student::addStudent();
echo Student::count() . "<br>";
Student::addStudent();
echo Student::count() . "<br>";

class PartTimeStudent extends Student
{

}
echo PartTimeStudent::$grades[1] . "<br>";
echo PartTimeStudent::motto() . "<br>";

PartTimeStudent::$grades[] ="ALUMNI";
echo implode(", ", Student::$grades);

Student::addStudent();
Student::addStudent();
PartTimeStudent::addStudent();

echo Student::count() . "<br>";
echo PartTimeStudent::count() . "<br>";
