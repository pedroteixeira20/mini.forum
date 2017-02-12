<?php

$c_SQL = "SELECT * FROM comment WHERE comment_aprov = 0";
$result = mysql_query($c_SQL);
$c_Number = mysql_num_rows($result);

if ($c_Number > 0)
{
  while ($linha = mysql_fetch_object($result))
  {
  	$nome = $linha->comment_name;
  	$email = $linha->comment_email;
  	$comment = $linha->comment;
?>
<div class="comentario">
	
	<div class="com_content">
	<p><a class="admin_aprov" target="_blank" href="comentario-aprov.php?comment_id=<?php echo $linha->comment_id;?>">Aprovar</a> || 
	   <a class="admin_remov" target="_blank" href="comentario-remov.php?comment_id=<?php echo $linha->comment_id;?>">Remover</a></p>
	<p>Comentário de <b><?php echo $nome;?></b></p>
	<p>Email: <b><?php echo $email;?></b></p>
	<p><?php echo $comment;?></p>
	</div>
</div>
<?php 
}}
else
{
	

?>


<h5>Não há nenhum comentário na base de dados.</h5>


<?php	

}

?>