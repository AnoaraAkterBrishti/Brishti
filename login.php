<?php 
$id=$password="";
if (isset ($_POST['formLogin']) )
{
	if(empty($_POST['id']))
	{
		$idErr = "id is Requierd";
	}
	else{
		$id=$_POST['id'];
	}
	if(empty($_POST['psw']))
	{
		$passwordErr = "Password is Requierd";
	}
	else{
		$password=$_POST['psw'];
	}
	$myfile = fopen("../data/user.txt",'r') or die("Unable to open file!");
	while( $line=fgets($myfile))
	{
		$words = explode(",",$line);
		$id=$words[1];
		$pass=$words[2];
		
	}
	fclose($myfile);
	if ($id==$id && $password=$pass){
		session_start();
		$_SESSION['name'] = "resdnt";
		$_SESSION['id'] =$id;
		header ("location: ../view/home.php");
	}
	else{
		 $error = "Invaild Username or password";
	}
	


}
else{
	//echo "Can no found";
}

?>
<style>
.error{
	color:red;
}
</style>
<!DOCTYPE html>
<html>
<title>Login</title>
<body>

<h1>Login</h1>
<h4 style="color:red;"><?php if(isset($error)){ echo $error; }  ?></h4>
<form action="" method="POST" >
  <label for="id">User ID: </label>
  <input type="number_format" id="id" name="id" placeholder="Enter your id" >
  <span class="error"><?php if(isset($idErr)) { echo $idErr; }  ?></span><br><br>
  <label for="pwd">Password: </label>
  <input type="password" id="pwd" name="pwd" placeholder="Enter your password" >
  <span class="error"><?php if(isset($passwordErr)){ echo $passwordErr; }  ?></span>
  <br><br>
  <input type="submit" name="formLogin" value="Login" >
</form>

</body>
</html>