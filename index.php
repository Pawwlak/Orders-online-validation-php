<?php 
	session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Simply shop</title>
</head>

<body>

	<h1>Orders online</h1>
	<form action="order.php" method="post"> 
		Rose (4.99 $): 
		<lable><input type="text" name="rose" <?= isset($_SESSION['error_number_r']) ? 'value="'.$_SESSION['error_number_r'].'"' : ''?>></lable>	
			<br /><br />
		Tulip (6.45 $): 
		<lable><input type="text" name="tulip" <?= isset($_SESSION['error_number_t']) ? 'value="'.$_SESSION['error_number_t'].'"' : ''?>></lable>	
			<br /><br />
		<input type="submit" value="Send" />
	</form>

	<?php 
                        
	if(isset($_SESSION['error'])){
	echo '<p>Please correct form. Only numbers are correct.</p>';
    unset($_SESSION['error']);
    }                    
                        
 ?>
	
</body>
</html>