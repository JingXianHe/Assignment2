<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Fetchingly 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130903

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" />
<link href="css2/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>


<body>
<input type="button" value="Back" onclick="window.history.back()">
<?php

$username = $_POST['email'];
$p=$_POST['password'];
$password = sha1($_POST['password']);

$complete=true;
//check for password 
if (empty($p)){
	echo'Password is required<br />';
	$complete=false;
}

//check for address 
if (empty($username)){
	echo'Email-address is required<br />';
	$complete=false;
}
else
{
	//check for email address 
	if (filter_var($username, FILTER_VALIDATE_EMAIL)) 
	{
		$complete=true;		
	}
	else
	{
		echo'<h1>Email-address is wrong</h1><br />';
		$complete=false;
	}
}

if($complete)
{
	//connect to admin table to check if there is a match
	$conn = mysqli_connect('localhost', 'db200238257', '10425', 'db200238257') or die('Error connecting to MySQL server');
	$sql = "SELECT id FROM admin WHERE email = '$username' AND password = '$password';";
	$result = mysqli_query($conn, $sql) or die('Error querying database.');
	
	//retrieve data 
	
	
		$count = mysqli_num_rows($result);
		if ($count !=0) 
		{
			echo 'Logged in Successfully.';	
			//even one line while is important, othewise noting is fetched
			while($row=mysqli_fetch_array($result))
			{
				session_start();//access the sexisting session created by the web server,not start just connect
				//store the user id in the session boject
				$_SESSION['user_id']=$row['id'];
				//redirect the user
				header('Location:administer1.php');
			}	
		}
	
	else
		{
			echo '<h1>Invalid Login</h1>';
		}	
	
}
?>

</body>
</html>


