
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

	//connect to the db
	$conn = mysqli_connect('localhost', 'db200238257', '10425', 'db200238257') or die('Error connecting to MySQL server');
	//Set up the SQL and query the database
   $sql="insert into web_business_contact(name, contactNumbers, address) values('$_POST[name]', '$_POST[contactNumbers]','$_POST[address]')"; 
	 mysqli_query($conn, $sql) or die('Error querying database.');
	 mysqli_close($conn);
	 
	//redirect the user
	header('Location:administer1.php');
	
?>


<span class="footer">
 <a href="logout.php">Logout</a>
</span>

</body></html>
