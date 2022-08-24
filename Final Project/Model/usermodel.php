<?php 

	require_once('db.php');

	function validate($userid,$password){
		$con = getConnection();
		$sql = "select * from user where userid='{$userid}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result);
		if($data != null){
			return true;
		}else{
			return false;
		}
	}

	function addUser($user){
		$con = getConnection();
		$sql = "insert into user values('{$user['userid']}', '{$user['fname']}', '{$user['lname']}', '{$user['email']}', '{$user['password']}', '{$user['address']}', '{$user['gender']}', '{$user['mobile']}', '{$user['type']}')";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from user order by userid";
		$result = mysqli_query($con, $sql);
		return $result;
	}	

	function getUserById($id){
		$con = getConnection();
		$sql = "select * from users where id={$id}";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result); 
		return $data;
	}

	function editUser($user){
		$con = getConnection();
		$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$con = getConnection();
		$sql = "delete from users where id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>