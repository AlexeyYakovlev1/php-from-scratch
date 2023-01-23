<?php
// математические функции
echo abs(-20); // модуль числа
echo sqrt(9); // корень
echo pow(9, 3); // степень
echo M_PI; // PI
echo M_E; // E

echo round(12.55, 1); // 12.6
echo floor(33.99); // 33
echo ceil(33.01); // 34
echo mt_rand(1, 1000); // random
echo min(5, 10, -4, 2); // min
echo max([4, 1, 2]); // max

echo base_convert(12321, 10, 2); // из 10 системы в 2

// функции для строк
$str = "hello";

echo strlen($str); // длина
// echo mb_strlen($str); // для кирилицы

echo ucfirst("london"); // первый символ в большой
echo lcfirst("London"); // первый символ в маленький
echo ucwords("ha ha ha"); // для каждого слова верхний регистр (первая буква)
echo strtoupper("witcher"); // верхний регистр
echo strtolower("WITCHER"); // нижний регистр

$data = "23.01.2023";

echo str_replace(".", "-", $date); // 23-01-2023
echo substr_replace($date, "2021", -4, 4); // 23.01.2021 (4 - сколько символов)

trim("Alexey     "); // удалит пробелы
trim("!!!Alexey!!!", "!"); // удалит !
strrev("boom"); // moob (не работает с кирилицей)
strip_tags("<p>text</p>", ["<b>"]); // удаляет теги, кроме b
htmlspecialchars("<p>text</p>", ENT_QUOTES); // преобразует теги в нетеги) и строчки

// хеширование
echo md5("123456");
echo password_hash("123456", PASSWORD_DEFAULT);
?>