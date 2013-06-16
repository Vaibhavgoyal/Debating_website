<?php

include 'connection.php';
var_dump($_POST);
if( isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['dob']) && isset($_POST['profession']) && isset($_POST['organisation']) && 			    isset($_POST['contact']) && isset($_POST['city']) && isset($_POST['email']) && isset($_POST['user_id']) && isset($_POST['password']) )
{
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$profession = $_POST['profession'];
	$organisation = $_POST['organisation'];
	$contact = $_POST['contact'];
	$city = $_POST['city'];
	$email = $_POST['email'];
	$user_id = $_POST['user_id'];
	$password = $_POST['password'];

  	$insert = "INSERT INTO `website`.`signup`(`name`,`gender`,`dob`,`profession`,`organisation`,`contact`,`city`,`email`,`user_id`,`password`)                          		VALUES('$name','$gender','$dob','$profession','$organisation','$contact','$city','$email','$user_id','$password')";
		 
		 if(!mysql_query($insert)){die('Could not insert query.Please try again');}
		 else{echo 'Insertion complete.A record has been added';}
	}
	
	



else{echo 'Fill in all the fields';};

	


?>