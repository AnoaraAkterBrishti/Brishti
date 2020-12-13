<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["id"])) {
			echo "id is empty";		
		}
		else {
			echo "id is: " . $_REQUEST["id"];
		}
	} 

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["firstname"])) {
			echo "firstname is empty";		
		}
		else {
			echo "firstname is: " . $_REQUEST["firstname"];
		}
	} 
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["lastname"])) {
			echo "lastname is empty";		
		}
		else {
			echo "lastname is: " . $_REQUEST["lastname"];
		}
	} 
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["username"])) {
			echo "username is empty";		
		}
		else {
			echo "username is: " . $_REQUEST["username"];
		}
	}
if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["password"])) {
			echo "password is empty";		
		}
		else {
			echo "password is: " . $_REQUEST["password"];
		}
	} 	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["email"])) {
			echo "email is empty";		
		}
		else {
			echo "email is: " . $_REQUEST["email"];
		}
	} 
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["dob"])) {
			echo "dob is empty";		
		}
		else {
			echo "dob is: " . $_REQUEST["dob"];
		}
	} 
?>