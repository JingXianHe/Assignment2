
<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<title>Business Contact List</title>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<style>

tr > td{
width:20%;
text-align:center;
}
</style>
</head>
<body>


<?php

//access the current session
session_start();

//evaluate the user_id stored in the session that was set on validate.php
if (empty($_SESSION['user_id'])) {
	header('Location: signin.htm');
}
$id1=$_POST['id'];
if($id1!=""){

	$id1=$_POST['id'];
	// This is where I would enter the posted fields into a database
	//connect to the db
	$conn = mysqli_connect('localhost', 'db200238257', '10425', 'db200238257') or die('Error connecting to MySQL server');
	//Set up the SQL and query the database
   $sql="UPDATE web_business_contact SET name = '$_POST[name]', contactNumbers='$_POST[contactNumbers]',address='$_POST[address]' WHERE id = '$id1';"; 
	 mysqli_query($conn, $sql) or die('Error querying database.');
	 mysqli_close($conn);
	 
	//redirect the user
	header('Location:administer1.php');
	}
?>


<span class="footer">
 <a href="logout.php">Logout</a>
</span>

</body></html>
