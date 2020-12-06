<?php
        function balanceRetrive($userId,&$name,&$balance){
            $servername = "localhost";
            $username = "root";
            $password = " ";
            $dbname = "bank";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
            }
        
        
            $sql = "SELECT name,balance
			FROM userinfo 
			WHERE userId='".$userId."'";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
          
                while($row = $result->fetch_assoc()){
                    $name = $row["name"];
                    $balance = $row["balance"] ; 
                }
                $conn->close();
            } 
            else {
                echo "0 results";
                $conn->close();
            }
        }

        function updateBalance($amount,$id){
            $servername = "localhost";
            $username = "root";
            $password = " ";
            $dbname = "bank";
        
            $conn = new mysqli($servername, $username, $password, $dbname);
           
            if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
            }
        
            $sql = "UPDATE userinfo 
			SET balance='".$amount."' 
			WHERE userId='".$id."'";
        
            if ($conn->query($sql) === TRUE) {
            echo "Updated successfully";
            } else {
            echo "Updating record: " . $conn->error;
            }
        
            $conn->close();
        }

        function deleteUserId($userId){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bank";
  
            $conn = new mysqli($servername, $username, $password, $dbname);
 
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "DELETE FROM userinfo
			WHERE userId='".$userId."'";
            
            if ($conn->query($sql) === TRUE) {
              echo "Delete successfully";
            } else {
              echo "Deleting record: " . $conn->error;
            }
            
            $conn->close();
        }


?>