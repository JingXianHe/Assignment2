
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
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.slidertron-1.3.js"></script>
<script type="text/javascript" src="js/jquery.scrollUp.min.js"></script>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<script>
$(document).ready(
	function(){
	
	var s=new Array();
		$("a.aa").click(function(){
			
			$(this).parent().parent().find('input').each(function(i){
			
			s[i]=$(this).val();
		});
		alert("Address is :"+s[1]+"\n"+"Telephone is :"+s[0]);
		$("#header1 a").text(s[0]).attr("href","tel:+"+s[0]);
		$("#label1").text(s[1]);
		}
		)
	
	}
);
</script>
<style>

tr > td{
width:20%;
text-align:center;
}
</style>
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Fetchingly</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="Home.html" title="">Homepage</a></li>
				<li class="icon icon-ok"><a href="index1.html" accesskey="2" title="">About Me</a></li>
				<li class="icon icon-ok"><a href="index2.html" accesskey="3" title="">Projects</a></li>
				<li class="icon icon-ok"><a href="index3.html" accesskey="4" title="">Service</a></li>
                <li class="icon icon-ok"><a href="https://github.com/JingXianHe/port-folio-web" accesskey="4" title="">GitHub</a></li>
				<li class="icon icon-ok"><a href="index4.html" accesskey="5">Contact Me</a></li>
				<li class="icon icon-ok"><a href="signin.htm" accesskey="6"><img src="images1/cloud_64x64.png" width="20" height="20"/>Business Contact</a></li>
			</ul>
		</div>
	</div>
</div>

<div id="header1" style="background-color:white;">
	<label>Address:</label><label id="label1"></label><br/>
	<label>Telephone:</label><a></a>
</div>
<div style="background-color:white;">
<input type="button" value="Back" onclick="window.history.back()">
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
$sql = "SELECT * FROM web_business_contact ORDER BY name";
$result = mysqli_query($conn, $sql) or die('Error querying database.');



echo '<div>';

//create our table and header row with html tags
echo'<table Border="2"><tr><td>Name</td><td width=5%>Edit</td><td width=5%>Delete</td></tr>';


//loop through the results from our query and out put them 1 at a time to the page
//<tr>creates a new row
//<td>creates a new field
while($row=mysqli_fetch_array($result))
{
	echo '<tr><td><a class="aa">'.$row['name'].'</a><input type="hidden" value="'.$row['contactNumbers'].'" /><input type="hidden" value="'.$row['address'].'" /></td><td><a href="administer11.php?id='.$row['id'].'">Edit</td><td><a onclick="return confirm(\'Are you sure?\');" href="delete.php?id='.$row['id'].'">Delete</a></td></tr>' ;
}
//close the table
echo '</table>';

//disconnect
mysqli_close($conn);
echo'</div>';
echo'<br />';
?>
<a href="administer21.php">Add Information</a>

<span class="footer">
 <a href="logout.php">Logout</a>
</span>
</div>
</body></html>
