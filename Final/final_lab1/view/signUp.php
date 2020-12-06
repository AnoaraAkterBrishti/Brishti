<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Mobile bank</title>
</head>
<body class="container">
            <?php
                require('../controller/signUpVerification.php');
            ?>
            <br><br>
            <h1>Sign Up</h1>
            <br><br>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="form-group">
                    <label for="userId">User ID</label>
                    <input type="text" class="form-control" id="userId" name="userId" placeholder="Enter Your User ID Here" value="<?php echo $userId; ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="pass"  name="pass"placeholder="Enter Your Password Here" value="<?php echo $pass;?>">
                </div>
            <div class="form-row">
                <div  class="form-group col-md-6" >
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name Here" value="<?php echo $name;?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="balance">Balance</label>
                    <input type="text" class="form-control" id="balance" name="balance" placeholder="Enter Your Balance Here" value="<?php echo $balance;?>">
                 </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
	crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
</body>
</html>