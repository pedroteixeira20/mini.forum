<?php
include "includes/db/db_connect.inc.php";
$str = $_SERVER['REQUEST_URI'];
preg_match_all('!\d+!', $str, $matches);
$comment_id = $matches[0][0];


$rSQL = "DELETE FROM comment WHERE comment_id = $comment_id ";
$r_query = mysql_query($rSQL);

?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<title>Mini - Fórum - Comentário Aprovado</title>
</head>

<body>

	<header class="heading">
	<h1>Comentário Removido</h1>
	<h3>O comentário foi removido da base de dados.</h3>
	</header>
	<br>
	<br>
	<div class="content">
		<div class="admin-login" align="center">
				<?php include "includes/db/db_connect.inc.php"; ?>
				
		</div>
			

	</div>
</body>

</html>