<html>
	<head>
		<title>User List</title>
		<script>

$(document).ready(function(){
    $.ajax({
        url: 'userlist.php',
        type: 'get',
        dataType: 'JSON',
        success: function(response){
            var len = response.length;
            for(var i=0; i<len; i++){
                var id = response[i].id;
                var userid = response[i].userid;
                var fname = response[i].fname;
                var lname = response[i].lname;
                var mobile= response[i].mobile;
                var email = response[i].email;
                var gender = response[i].gender;
                var address = response[i].address;
                var type = response[i].type;

                var tr_str = "<tr>" +
                    "<td align='center'>" + (i+1) + "</td>" +
                    "<td align='center'>" + userid + "</td>" +
                    "<td align='center'>" + fname + "</td>" +
                    "<td align='center'>" + lname + "</td>" +
                    "<td align='center'>" + mobile + "</td>" +
                    "<td align='center'>" + email + "</td>" +
                    "<td align='center'>" + gender + "</td>" +
                    "<td align='center'>" + address + "</td>" +
                    "<td align='center'>" + type + "</td>" +
                    "</tr>";

                $("#userTable tbody").append(tr_str);
            }

        }
    });
});
		</script>
	</head>

	<body>

	<div class="container">
   <table id="userTable" border="1" >
      <thead>
        <tr>
          <th width="5%">S.no</th>
          <th width="20%">Userid</th>
          <th width="20%">First Name</th>
		  <th width="20%">Last Name</th>
		  <th width="20%">Mobile No</th>
          <th width="30%">Email</th>
		  <th width="20%">Gender</th>
		  <th width="20%">Address</th>
		  <th width="20%">User Type</th>
        </tr>
      </thead>
      <tbody></tbody>
   </table>
</div>


<?php
require_once('../Model/db.php');
require_once('../Model/usermodel.php');


$return_arr = array();
$status=getAllUsers();

while($row = mysqli_fetch_array($status)){
    $userid = $row['userid'];
    $fname = $row['fname'];
	$lname = $row['lname'];
	$mobile= $row['mobile'];
    $email = $row['email'];
	$gender = $row['gender'];
	$address = $row['address'];
	$type= $row['type'];

    $return_arr[] = array("userid" => $userid,
                    "fname" => $fname,
                    "lname" => $lname,
					"mobile" => $mobile,
                    "email" => $email,
					"gender" => $gender,
					"address" => $address,
					"type" => $type);
}
echo json_encode($return_arr);


?>

	</body>



</html>