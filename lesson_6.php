<?php
$month = [1, 2, 3, 4, 5, 6];

print_r($month);

$nums = [12, 321, 42, 654];
$nums[] = 232; // добавление в конец массива

unset($month["1"]); // удаляет элемент по индексу 1

sort($nums); // сортировка по возрастанию

$nums2 = array_unique($nums); // только уникальные значения

array_sum($nums2); // сумма всех элементов 
array_product($nums2); // произведение всех чисел
count($num); // кол-во элементов

echo in_array("12", $nums); // ищем число 12 в массиве $nums

print_r(array_chunk($nums, 2)); // разбиваем массив на 2 части
print_r(array_slice($nums, 0, 3)); // возвращает элементы с индекса 0 по индекс 3
print_r(array_splice($nums, 0, 3, [42, 41, 23, 95])); // как slice, только заменяет удаленные элементы 3 аргументом

$fruit = ["apple" => 10, "banana" => 5, "mango" => 55];
asort($fruit); // сортировка для ассоциативных массивов

$food = [
	"fruits" => ["kiwi", "banana"],
	"veggie" => ["tomato", "potato", "pea"]
];

echo $food["fruits"]["1"];
echo count($food, 1); // пересчитать все ключи

foreach ($fruit as $key => $value) {
	echo "$key count: $value items. <br>";
}

$a1 = [1,2,3,4];
$b1 = [5, 6, 7, 8];
$a1_b1 = array_merge($a1, $b1); // объединение массивов
print_r(array_diff($a1, $b1)); // сравнивает массивы

$str = "one, two, three";
$arr = explode(", ", $str); // преобразование в массив

$arr1 = ["one", "two", "three"];
$str1 = implode(", ", $arr1); // преобразование массива в строку

list($one, $two, $three) = $arr1;
echo $one. $two. $three;
?>