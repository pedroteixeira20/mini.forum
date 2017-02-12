<?php 
session_start();
if (isset($_SESSION['adm_user']))
{
?>

<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<title>Mini - Fórum - Painel de Administração de Comentários</title>
</head>

<body>

	<header class="heading">
	<h1>Painel de Administração de Comentários</h1>
	</header>
	<br>
	<br>
	<div class="content">
		<div class="admin-login" align="center">
				<?php include "includes/db/db_connect.inc.php"; ?>
				
		</div>
		<?php include "includes/queries/admin_comentarios.inc.php";?>		

	</div>
</body>

</html>
<?php

}
else
{
	header('Location: admin_login.php');
}
?>
