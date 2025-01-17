<?php 

class User
{
    var $firstName;
    var $lastName;
    var $userName;

    function fullName()
    {
        return $this->firstName . " " . $this->lastName;
    }
}

class Customer extends User
{
    var $city;
    var $country;

    function location()
    {
        return $this->city . ", " . $this->country;
    }

    function fullName()
    {
        return $this->firstName . " " . $this->lastName . "(Customer)" ;
    }
}

$u = new User;
$u->firstName="Renaldi";
$u->lastName="Saputra";
// $u->city="Cirebon";
// $u->country="Indonesia";

echo $u->fullName() . "<br>";

$c = new Customer;
$c->firstName="Customer";   
$c->lastName="Doe";
$c->city="Cirebon";
$c->country="Indonesia";


echo $c->fullName() . "<br>";
echo $c->location() . "<br>";

if(is_subclass_of($c, "User")){
    echo "Instance Customer merupakan subclass Class User <br />";
}

$parents = class_parents($c);
echo implode(", ", $parents);
?>