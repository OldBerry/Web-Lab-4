<?php

$f = 121;
echo "Some text $f";
echo "<br />";

$a = 'Some more text';
$b = 'a';
echo $$b;
echo "<br />";

$num1 = 1;
$num2 = 2;
echo $num1+$num2;
echo "<br />";
echo $num1.$num2;
echo "<br />";

$num21 = '36';
$num22 = '00000';
echo $num21+$num22;
echo "<br />";
echo $num21.$num22;
echo "<br />";

$num31 = 33;
$num32 = '00000';
echo $num31+$num32;
echo "<br />";
echo $num31.$num32;
echo "<br />";

$intnumb = 123;
$strnumb = '123';
if ($intnumb == $strnumb)
{
echo 'Test 1 passed';
echo "<br />";
}
else
{
    echo 'Test 1 failed';
    echo "<br />";
}
if ($intnumb === $strnumb)
{
    echo 'Test 2 passed';
    echo "<br />";
}
else
{
    echo 'Test 2 failed';
    echo "<br />";
}


$users = [1 => "Tom", 4 => "Sam", 5 => "Bob", 21 => "Alice"];
$num = count($users);
foreach($users as $element)
{
    echo "$element<br />";
}


$tom = new Employee("Tom");
$tom -> displayInfo();


class Person
{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function displayInfo()
    {
        echo "Name: $this->name<br>";
    }
}
class Employee extends Person
{}