<?php
session_start();
if ((isset($_POST['adm_user'])) && (isset($_POST['adm_password'])))
{	

$adm_user = $_POST['adm_user'];
$adm_password = $_POST['adm_password'];

$l_SQL = "SELECT * FROM admin WHERE admin_user = '$adm_user' AND admin_password = '$adm_password'";
$result = mysql_query($l_SQL);
$l_Number = mysql_num_rows($result);

	if ($l_Number > 0)
	{

		$_SESSION['adm_user'] = $adm_user;
		header('Location: admin-panel.php');
	}
	else
{
?>
<h5>Os dados de acesso estão incorrectos. Tente outra vez.</h5>
<?php	
}

}




?>


