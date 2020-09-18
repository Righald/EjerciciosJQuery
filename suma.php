<?php
	
	//echo $_POST['num'];

	if(isset($_POST['num']) && isset($_POST['nume']))
	{
		$ed = $_POST['nume'] + $_POST['num'];
		echo $ed;
	}
	else
	{
		echo 'Ingrese ambos números';
	}
?>