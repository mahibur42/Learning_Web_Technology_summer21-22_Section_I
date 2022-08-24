<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
</head>
<body>

	<form method="post" action="../controller/new.php">
		
		  <table border="3" align="center" width="700px" height="330px">

           

                <tr>
                    <td align="center">
                        <legend><b>Create New User</b></legend>
			
			        <table>
			       
				       
				        <tr>
					      <td><b>UserID:</b></td>
				          <td><input type="text" name="userid" placeholder="userid" value=""></td>
				        </tr>
				        
				        
				       <tr>
					      <td><b>first name:</b></td>
				          <td><input type="text" name="fname" placeholder="Username" value=""></td>
				        </tr>

						<tr>
					      <td><b>Last name:</b></td>
				          <td><input type="text" name="lname" placeholder="Username" value=""></td>
				        </tr>
                
				        <tr>
					        <td><b>Email:</b></td>
					        <td><input type="email" name="email" placeholder="Email" value=""></td>
				        </tr>
                       
                        <tr>
					        <td><b>Gender:</b></td>
					        <td>
                                <input type="radio" name="gender" value="Male"><b>Male</b>
                                <input type="radio" name="gender" value="Female"><b>Female</b>								
                            </td>
				        </tr>
						
                        <tr>
					        <td><b>User Type:</b></td>
					        <td>
                                <input type="radio" name="type" value="Admin"><b>Admin</b>
                                <input type="radio" name="type" value="Accountant"><b>Accountant</b>
                                <input type="radio" name="type" value="Customer"><b>Customer</b>
								
                            </td>
				        </tr>
                        </tr>
                        <tr>
                           <td><b>Address:</b></td>
                           <td><input type="text" name="add" placeholder="Address" value=""></td>
                       </tr>
                       <tr>
                        <tr>
					        <td><b>Password:</b></td>
					        <td><input type="password" name="password" value=""></td>
				        </tr>
                        <tr>
					        <td><b>Confirm Password:</b></td>
					        <td><input type="password" name="confirmpassword" value=""></td>
				        </tr>
                        
				       
                        <tr>
					        <td colspan="2"><input type="submit" name="submit" value="submit">
                                <a href="Home.php">Back</a>
                            </td>
					        
				        </tr>
			         </table>
                    </td>
                </tr>
            </table>

	</form>
</body>
</html>