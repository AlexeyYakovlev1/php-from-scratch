<?php
function foo_sum(int $a, int $b = 3): int {
	return $a + $b;
}
function foo_change(int &$x): string { // меняем глобальную переменную
	global $x; // обращаемся к глобальной переменной
	$x .= " рублей";
	return $x;
}

define("LOGIN", "admin");
function show_login() {
	return LOGIN;
}
function count_up() {
	static $count = 0;
	$count++;
	return "count: $count";
}

$average = function (array $arr): int {
	return array_sum($arr) / count($arr);
};

function factorial($a) {
	if ($a === 0) return 1;
	return $a * factorial($a - 1);
}
?>