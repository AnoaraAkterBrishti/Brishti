<?php

include "connection.php";

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
  <form action="/practice/Final/final_lab4/jsvalidation.php" name="form1" method="post">
  
  <div class="form-group">
      <label for="id">id:</label>
      <input type="id" class="form-control" id="id" placeholder="Enter id" name="id">
    </div>
	<div class="form-group">
      <label for="firstname">First name:</label>
      <input type="firstname" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname">
    </div>
	<div class="form-group">
      <label for="lastname">Last name:</label>
      <input type="lastname" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
    </div>
    
	<div class="form-group">
      <label for="username">User name:</label>
      <input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
	<div class="form-group">
      <label for="dob">DOB:</label>
      <input type="date_format" class="form-control" id="dob" placeholder="Enter dob" name="dob">
    </div>
	
   
    <button type="submit" name="insert" class="btn btn-default">Insert</button>
	
  </form>
</div>
</div>

<div class="col-lg-12">
<table class="table table-bordered">
    <thead>
      <tr>
	  <th>id</th>
        <th>firstname</th>
        <th>lastname</th>
		<th>username</th>
		<th>password</th>
        <th>email</th>
		<th>dob</th>
		<th>Update</th>
		<th>Delete</th>
      </tr>
    </thead>
   <tbody>
   
   <?php
   $res=mysqli_query($link,"select * from user");
   while($row=mysqli_fetch_array($res))
   {
	   echo "<tr>";
	   echo "<td>"; echo $row["id"]; echo "</td>";
	    echo "<td>"; echo $row["firstname"]; echo "</td>";
		echo "<td>"; echo $row["lastname"]; echo "</td>";
		echo "<td>"; echo $row["username"]; echo "</td>";
		echo "<td>"; echo $row["password"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["dob"]; echo "</td>";
		echo "<td>"; ?><a href="update.php?id=<?php echo $row["id"];?>"> <button type="button" class="btn btn-success">Update</button> </a><?php echo "</td>";
		echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"];?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
		echo "</tr>";
   
   
   }
   
   
   
   ?>
   </tbody>
  </table>

</div>

</body>

<?php
if(isset($_POST["insert"]))
{
	mysqli_query($link,"insert into user values(Null,'$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[dob]')");
	
?>
<?php
}
?>
<script type="text/javascript">
window.location.href=window.location.href;
</script>

</html>
