<?php
include "includes/db/db_connect.inc.php";
$str = $_SERVER['REQUEST_URI'];
preg_match_all('!\d+!', $str, $matches);
$comment_id = $matches[0][0];


$aSQL = "UPDATE comment SET comment_aprov=1 WHERE comment_id = $comment_id ";
$a_query = mysql_query($aSQL);

?>

<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<title>Mini - Fórum - Comentário Removido</title>
</head>

<body>

	<header class="heading">
	<h1>Comentário Aprovado</h1>
	<h3>O comentário irá agora aparecer na página inicial.</h3>
	</header>
	<br>
	<br>
	<div class="content">
		<div class="admin-login" align="center">
				
				
		</div>
				

	</div>
</body>

</html>