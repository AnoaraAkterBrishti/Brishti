<?php

include "connection.php";
$id=$_GET ["id"];
$firstname="";
$lastname="";
$username="";
$password="";
$email="";
$dob="";

$res=mysqli_query($link,"select* from user where id=$id");
while($row=mysqli_fetch_array($res))
{
	$firstname=$row["firstname"];
	$lastname=$row["lastname"];
	$username=$row["username"];
	$password=$row["password"];
	$email=$row["email"];
	$dob=$row["dob"];
	


}



?>
<html lang="en">
<head>
  <title>User Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="col-lg-4">
  <h1>User information Form</h1>
  <form action="" name="form1" method="post">
  
  <div class="form-group">
      <label for="id">id:</label>
      <input type="id" class="form-control" id="id" placeholder="Enter id" name="id">
    </div>
	<div class="form-group">
      <label for="firstname">First name:</label>
      <input type="firstname" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" value="<?php echo $firstname; ?>">
    </div>
	<div class="form-group">
      <label for="lastname">Last name:</label>
      <input type="lastname" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" value="<?php echo $lastname; ?>">
    </div>
    
	<div class="form-group">
      <label for="username">User name:</label>
      <input type="username" class="form-control" id="username" placeholder="Enter username" name="username"value="<?php echo $username; ?>">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"value="<?php echo $password; ?>">
    </div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
    </div>
	<div class="form-group">
      <label for="dob">DOB:</label>
      <input type="date_format" class="form-control" id="dob" placeholder="Enter dob" name="dob" value="<?php echo $dob; ?>">
    </div>
	
   
	<button type="submit" name="update" class="btn btn-default">Update</button>
	
  </form>
</div>
</div>

</body>

<?php
if(isset($_POST["update"]))
{
	mysqli_query($link,"update user set firstname='$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]'
	,'$_POST[dob]' where id=$id");

?>
<script type=""text/javascript">
window.location="index.php";
</script>
<?php
}
?>

</html>
