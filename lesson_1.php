<?php
$username = "Alexey";
$age = 18;
	
echo "Hello, $username your age is". $age ."!";	

// const
define("DB_LOGIN", "root");
define("COLORS", ["red", "green", "blue"]);

echo DB_LOGIN;
echo COLORS[0];

// проверка на существование константы
defined("COLORS"); // 1 или пустота

// встроенные константы
echo __DIR__; // путь до текущего файла
echo __FILE__; // путь до самого файла 
echo __LINE__; // текущая линия в редакторе
echo PHP_VERSION; // версия языка
echo E_ALL; // все ошибки
?>

<div>
	<span>Current date: <?php echo "23.01.2023" ?> year.</span>
</div>