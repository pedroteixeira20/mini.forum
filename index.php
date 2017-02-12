<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<title>Mini - Fórum</title>
</head>

<body>

	<header class="heading">
	<h1>Bem vindo ao Nosso Fórum</h1>
	<h2>Desfrute da sua estadia</h2>
	<a href="admin_login.php" target="_blank">Acesso de Administrador</a>
	</header>
	<br>
	<br>
	<div class="content">
		<h3>Será que as políticas de imigração de Trump vão prevalecer?</h3>
			<div class="sub_content">
				<div class="comentarios">
				<?php include "includes/db/db_connect.inc.php"; ?>
				<?php include "includes/queries/comentarios.inc.php";?>	
				</div>
				<h4>Opine sobre este assunto (os comentários estão sujeitos a aprovação de um administrador):</h4>
				<form method="post">
					
					<input class="comment" type="text" name = "com_name" placeholder = "Nome*"><br>
					<input class="comment" type="email" name = "com_email" placeholder = "Email*"><br>
					<textarea class="comment" name="comment" maxlength="500" placeholder = "Comentário*"></textarea>
					<input type="submit" value = "Comentar">
				<?php include_once "includes/queries/inserir_comentario.inc.php";?>		

				</form>	
			</div>

	</div>
</body>

</html>