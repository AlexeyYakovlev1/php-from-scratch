<?php
for ($i = 1; $i <= 9; $i++) {
	if ($i === 5) {
		continue;
	} elseif ($i === 3){
		break;
	}

	echo $i;
}

while ($i <= 9) {
	echo $i . " ";
	// if ($i === 3) // infinity
	// 	continue;
	$i++;
}

do {
	$i++;
	echo $i . " ";
} while ($i <= 9);

$week = [1,2,3,4,5,6,7];

foreach ($week as $key => $day) {
	echo $key . ":";
	echo $day . "<br/>";
}

$console = [
	0 => ["name" => "xbox", "price" => 32423],
	1 => ["name" => "ps5", "price" => 494949]
];

foreach($console as $value) {
	echo $value["name"];
}
?>