<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Delete</title>
</head>

<body>

<?php

//access the current session
session_start();

//evaluate the user_id stored in the session that was set on validate.php
if (empty($_SESSION['user_id'])) {
	header('Location: signin.htm');
}


//connect to the db
$conn = mysqli_connect('localhost', 'db200238257', '10425', 'db200238257') or die('Connect error');

//grab the id from the url
$id = $_GET['id'];

//write the sql
$sql = "DELETE FROM web_business_contact WHERE id = '$id'";

//run the deletion
mysqli_query($conn, $sql);

//disconnect
mysqli_close($conn);

//redirect the user
header('location: administer1.php');


?>

</body>

</html>
