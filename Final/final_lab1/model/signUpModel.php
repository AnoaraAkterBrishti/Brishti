<?php
    function signUpReg($userId, $name, $pass, $balance){
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "bank";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO userinfo (userId, name, pass, balance)
    VALUES ('$userId', '$name', '$pass', '$balance')";
    
    if ($conn->query($sql) === TRUE) {
      echo "Created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    }
?>