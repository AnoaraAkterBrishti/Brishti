<?php
        function loginCheck($id, $pass){
            $servername = "localhost";
            $username = "root";
            $password = " ";
            $dbname = "bank";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
            }
        
        
            $sql = "SELECT userId
			FROM userinfo 
			WHERE userId='".$id."'
			AND pass= '".$pass."' ";
			
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0)
				{
                $conn->close();
                return true;
            } 
            else {
                $conn->close();
                echo "0 results";
                return false; 
            }
        }


?>