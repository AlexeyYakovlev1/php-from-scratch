<?php
$rain = 1; // 0, "0", "", false, NULL

if ($rain) {
	echo "Идет дождь<br>";
}elseif ($rain >= 5) {
	echo "Идет ливень";
} else {
	echo "Погода ясная<br>";
}

echo $rain ? "Идет дождь<br/>" : "Погода ясная<br/>";

if (isset($rain)) { // существует ли переменная
	echo "$rain not null";
}

$_SESSION["user"] = "DARK";
$user = $_SESSION["user"] ?? 0; // $user хранит в себе $_SESSION["user"] или 0

if (empty($user)) {
	echo "Гость";
} else {
	echo "$user";
}

$lang = $_GET["lang"] ?? "ru";

switch ($lang) {
	case "en":
		echo "Hello world!";
		break;
	case "ru":
		echo "Привет мир!";
		break;
	default:
		echo "Данный язык не поддерживается!";
		break;	
}
?>

<div>
	<a href="?lang=ru">Русский</a>
	<a href="?lang=en">Английский</a>
</div>