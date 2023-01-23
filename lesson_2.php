<?php
$name = "string";
$age = 33;
$a = 3.5;
$rain = false;
$var = null;
$arr_number = [1,2,3,4,5];
$arr_user = ["name" => "William", "age" => 33]; // ассоциативный массив
$book = fopen("./text.txt", "r"); // Resource - содержит ссылку на внешний ресурс
$mysql = new Mysqli("localhost", "root", "root123", "darkproger"); // object

// неявное приведение типа
$b = 5;
echo gettype($b) . "<br/>"; // integer
$b = $b * 1.5;
echo gettype($b) . "<br/>"; // double
$b = $b . " is string";
echo gettype($b) . "<br/>"; // string 

// принудительное приведение типов
$c = 3;
$c = (string) $c;
echo gettype($c) . "<br/>"; // string
$c = (float) $c;
echo gettype($c) . "<br/>"; // float

echo PHP_INT_MAX; // максимальное число 

$num1 = 0b1010; // число в двоичной системе
$num2 = 012; // запись числа в восьмиричной системе
$num3 = 0xA; // запись числа в шестнадцатиричной системе

echo $num1;
echo $arr_number["0"];
echo $arr_user["name"];

print_r($arr_user); // Array ( [name] => William [age] => 33 )

echo gettype($name); // возвращает тип

echo is_string($name); // проверяет тип на строковый (1)
echo is_int($num1); // проверяет тип на числовой
echo is_float($a); // проверяет тип на float
echo is_bool($rain); // проверяет тип на boolean
echo is_null($var); // проверяет тип на null
echo is_array($array_number); // проверяет тип на массив
echo is_resource($book); // проверяет тип на resource

echo var_dump($name); // информация о переменной

if (is_string($name)) {
	echo "$name - это строка";
}
?>

<!--
Array
(
	[name] => William
	[age] => 33
)
-->
<pre><?php print_r($arr_user);?></pre> 