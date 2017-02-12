<?php

$c_SQL = "SELECT * FROM comment WHERE comment_aprov = 1";
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


<h5>Este tópico ainda não tem comentários. Seja o primeiro a comentar.</h5>


<?php	

}

?>