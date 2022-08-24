<?php
    
	session_start();
	require_once('../Model/db.php');
	require_once('../Model/usermodel.php');
	$userid = $_POST['userid'];
	$password = $_POST['password'];
	if(isset($_POST['submit']))
    {

		if($userid != ""){
			if($password != ""){
				
				$status = validate($userid, $password);
				
				if($status){
					setcookie('flag', 'true', time()+3600, '/');
					header('location: ../View/Home.php');
				}else{
					header('location: ../View/login.html');
				}

			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}

		
	
?>