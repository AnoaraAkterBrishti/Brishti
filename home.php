<?php
	ob_start();
	session_start();
	if($_SESSION['id']!='resdnt'){
		header("location: login.php");
	}
	else{
	$id= $_SESSION['id'];
	
	}

?>
<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
</head>
<body>
<center><?php include('header.php'); ?></center>

<center><?php include('footer.php'); ?></center>

</body>
</html>