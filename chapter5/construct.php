<?php 

class Student
{
    public static $instanceCount= 0;
    public function __construct()
    {
        self::$instanceCount++;
    }
}

class Elementary extends Student
{
    public $total = 3;
}

class Junior extends Student
{
    public $total = 2;
}

class Senior extends Student
{
    public $total = 4;
}

$elementary = New Elementary;
echo "Elementary: {$elementary->total} <br>";

$junior = New Junior;
echo "Junior: {$junior->total} <br>";

$senior = New Senior;
echo "Senior: {$senior->total} <br>";

echo "Instance Count: " . Student::$instanceCount;