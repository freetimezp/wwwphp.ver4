<!doctype html>
<html lang="ru">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- main CSS -->
<link rel="stylesheet" href="css/style.css">

<title>Форма регистрации</title>
</head>
<body>
<div class="container mt-4">
	<?php 
		if ($_COOKIE['user'] == ''):
	?>
	<div class="row">
		<div class="col">
			<h1>Форма регистрации</h1>
			<form action="validation-form/check.php" method="post">
				<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"></br> 
				<input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"></br> 
				<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"></br> 
				<button class="btn btn-success" type="submit">Зарегистрировать</button>
			</form>
		</div>
		<div class="col">
			<h1>Форма авторизациии</h1>
			<form action="validation-form/auth.php" method="post">
				<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"></br> 
				<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"></br> 
				<button class="btn btn-success" type="submit">Войти</button>
			</form>
		</div>
	</div>
	<!-- /.row -->
	<?php 
		else:
	?>
	<p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">здесь</a></p>
	<?php 
		endif;
	?>

</div>
<!-- /.container -->



<!-- Optional JavaScript -->

<!-- main JS -->
<script src="js/script.js" ></script>


</body>
</html>