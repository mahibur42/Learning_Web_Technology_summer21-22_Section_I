<?php 
	require_once('../Model/usermodel.php');

	if(isset($_POST['submit']))
    {
        
        $userid =$_POST['userid'];
        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $email =$_POST['email'];
        $password =$_POST['password'];
        $conpass =$_POST['conpass'];
        $mobile =$_POST['mobile'];
        $address =$_POST['address'];
        $gender =$_POST['gender'];
        $users=$_POST['type'];


        $user = ['userid'=>$userid, 'fname'=> $fname, 'lname'=> $lname, 'email'=>$email, 'password'=>$password, 'address'=>$address, 'gender'=>$gender,  'mobile'=>$mobile, 'type'=>$users];
		$status = addUser($user);
        if($status){
            header('location: ../view/login.html');
        }
		
	}
?>