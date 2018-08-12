<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Order summar</title>
</head>

<body>

<?php 
	 
	session_start();

	$rose = $_POST['rose'];
	$tulip = $_POST['tulip'];

	if(isset($_POST['rose'])){

		

		if(is_numeric($rose) && is_numeric($tulip)){

		
			
		$amount = 4.99 * $rose + 6.45 * $tulip;

		}else{

		
		$_SESSION['error_number_r'] = $_POST['rose'];
		$_SESSION['error_number_t'] = $_POST['tulip'];
		$_SESSION['error'] = true;
		header('Location: index.php');
		exit();
		}

	}	

?>	

	<h2>Order summar</h2>
	
	<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<td>Rose (4.99 $): </td> <td><?php echo $rose ?></td>
	</tr>
	<tr>
		<td>Tulip (6.45 $)</td> <td><?php echo $tulip ?></td>
	</tr>
	<tr>
		<td>SUM</td> <td><?php echo $amount ?> $</td>
	</tr>	
	</table>
	<br /><a href="index.php">Back to shopping</a>




</body>
</html>