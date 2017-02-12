<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<title>Mini - Fórum - Acesso de Administrador</title>
</head>

<body>

	<header class="heading">
	<h1>Acesso de Administrador</h1>
	</header>
	<br>
	<br>
	<div class="content">
		<div class="admin-login" align="center">
				<?php include "includes/db/db_connect.inc.php"; ?>
				<form method="post" id="login">
					
					<input class="login_field" type="text" id="adm_user" name = "adm_user" placeholder = "Utilizador*"><br>
					<input class="login_field" type="password" id="adm_password" name = "adm_password" placeholder = "Senha*"><br>
					<input type="submit" value = "Entrar">		
					<?php include "includes/queries/login.inc.php";?>
				</form>	
		</div>		

	</div>

</body>

</html>