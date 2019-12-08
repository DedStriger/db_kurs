
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>db_kurs</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<section id="table">
	</section>
	<section id="buttons">
		<a href="#" class="btn" data-name="farmers">farmers</a>
		<a href="#" class="btn" data-name="cornfield">cornfield</a>
		<a href="#" class="btn" data-name="barn">barn</a>
		<a href="#" class="btn" data-name="animal">animal</a>
		<a href="#" class="btn" data-name="stern">stern</a>
		<a href="#" class="btn" data-name="buy">buy</a>
	</section>
	<section id="food">
		<h2>Покормить</h2>
		<h2 id='response'></h2>
		<form>
			<label for="animal">Введите id животного</label>
			<input type="text" placeholder="id" id="animal" name="animal" required>
			<label for="countFood">Введите колличество корма</label>
			<input type="text" placeholder="Например: 40" id="countFood" name="countFood" required>
			<button name="goFood" id="goFood">Покормить</button>
		</form>
	</section>
	<section id="add">
		<h2>Добавить фермера</h2>
			<h2 id='responseAdd'></h2>
				<form>
			<label for="name">Введите имя фермера</label>
			<input type="text" placeholder="name" id="name" name="name" required>
			<label for="barn">Введите название амбара</label>
			<input type="text" placeholder="амбар" id="barn" name="barn" required>
			<label for="cornfield">Введите название поля</label>
			<input type="text" placeholder="поле" id="cornfield" name="cornfield" required>
			<label for="anim">Введите название жиовтного</label>
			<input type="text" placeholder="животное" id="anim" name="anim" required>
				<label for="countA">Введите количество животных</label>
			<input type="text" placeholder="количество" id="countA" name="countA" required>
			<label for="stern">Введите название корма</label>
			<input type="text" placeholder="корм" id="stern" name="stern" required>
			<button name="addF" id="addF">Добавить</button>
		</form>
	</section>
	<script src="jquery-3.4.1.min.js"></script>
	<script src='main.js'></script>
</body>
</html>