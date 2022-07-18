<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User list</title>
</head>
<body>
<?php 

$conn = mysqli_connect('localhost', 'root', '', 'webtech');

// if($conn){
//     echo "Success";
// }else{
//     echo "DB Error...";
// }

$sql = "select * from user";
$result = mysqli_query($conn, $sql);
$row= mysqli_fetch_assoc($result);

?>

		<table border="1">
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>PASSWORD</th>
				<th>EMAIL</th>
			</tr>
			<tr>
				<th><?=$row["id"]?></th>
				<th><?=$row["name"]?></th>
				<th><?=$row["password"]?></th>
				<th><?=$row["email"]?></th>
			</tr>
			
		</table>
</body>
</html>