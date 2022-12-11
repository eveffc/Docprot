<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | DOCprot</title>
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/base.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css"> 
	<link rel="preconnect" href="https://fonts.googleapis.com"/>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
</head>
<body>
	<div id="login">
		<div class="logo"> 
			<img src="assets/img/doc.prot.png" width="500px"></h1>
		</div>
		<form class="card">
			<div class="usser">
				<h2>Login</h2>
				<div class="inputs">
					<label for="Usuario">Usuário:</label>
					<input type="text" id="usuario" name="usuario" autocomplete="off" required>
				</div>
				<div class="inputs">
					<label for="password">Senha:</label>
					<input type="password" id="password" name="password" autocomplete="off" required>
				</div>
				<div class="botao">
					<input type="submit" class="submit" value="Entrar" name="submit">
				</div>
				<div class="link"><a href="../assets/php/Recsenha.php" class="recuperar">esqueceu a senha?</a></div>
				<div class="link"><a href="../assets/php/cadastro.php" class="cadastro">criar conta</a></div>
			</div>
		</form>
	</div>
</body>
</html>