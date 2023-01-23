<nav>
	<a href="?name=blog">Blog</a>
	<a href="?name=about">About</a>
</nav>

<!-- в action записывать имя файла, в котором будет происходить логика по запросу -->
<form action="#" method="POST">
	<input
		type="text"
		placeholder="Введите имя"
		name="name"
	/>
	<input
		type="email"
		placeholder="Введите почту"
		name="email"
	/>
	<label for="age">Мне уже есть 18 лет</label>
	<input type="checkbox" id="age" name="age" />
	<input type="submit" value="Sign" name="submit" />
</form>

<main>
	<div>
		<?php
		$site_name = $_GET["name"] ?? "0";
		switch($site_name) {
			case "blog":
				require_once "./pages/blog.php";
				break;
			case "about":
				require_once "./pages/about.php";
				break;
			default:
				echo "Default page";
				break;
		}
		?>
	</div>
</main>

<?php

if (isset($_POST["submit"])) {
	$name = trim($_POST["name"]);
	$age_check = $_POST["age"] ?? "0";

	if (!preg_match("&^[a-zA-Za-яА-ЯёЁ]+$&u", $name)) {
		exit("name is not valid");
	}

	if ($age_check === "on") {
		echo "$name access success";
	} else {
		echo "access closed";
	}
}

?>