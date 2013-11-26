
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
<link href="css2/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<style>
ul
{

list-style-type:none;
margin:0;
padding:0;
}

li
{
float:left;
}
a
{
display:block;
width:100px;
}
</style>
<script type="text/javascript">
function validateTitle(field) {
	if (field == "") return "No title was entered."
	return ""
}

function validateDescription(field) {
	if (field == "") return " No contactNumbers was entered."
	return ""
}

function validatePassage(field) {
	if (field == "") return " No address was entered."
	return ""
}

function validateName(field){
	if (field == "") return " No Name was entered."
	return ""
}



function validate(form)
{

	fail=validateName(form.name.value)
	fail += validateDescription(form.contactNumbers.value)
	fail+=validatePassage(form.address.value)
	if(fail=="")return true
	else {alert(fail); return false}
}
</script>
<style>

tr > td{
width:20%;
text-align:center;
}
</style>
</head>
<body>
<div>
       <div data-role="header">
		<h1>My Portfolio</h1>
		<div data-role="navbar">
			<ul>
				 <li><a href="Home.html">Home</a></li>
				 <li><a href="aboutMe.html">About	Me</a></li>
				 <li><a href="ContactMe.html">Contact	Me</a></li>
				 <li><a href="project.html">
                       
                      Project
                   </a>
               </li>
			   <li>
                   <a href="Service.html">
                       
                       Service
                   </a>
               </li>
			   <li>
                   <a href="signin.htm">
                       
                       Business Contact<
                   </a>
               </li>
			</ul>
		</div>
	   </div>
       <div data-role="content">
         <div id="app-pic"><img src="images/LOGO2.png" alt="My logo" style="width:80px;height:100px;"/></div>
         <div id="app-name"><h4>Portfolio Programmer</h4></div>
           <div id="app-work">
		   <input type="button" value="Back" onclick="window.history.back()">
<div style="background-color:white;">
<?php

//access the current session
session_start();

//evaluate the user_id stored in the session that was set on validate.php
if (empty($_SESSION['user_id'])) {
	header('Location: signin.htm');
}


echo '<div>';

//create our table and header row with html tags
echo'<form method="post" action="administer22.php" onSubmit="return validate(this)">';
echo'<table Border="2"><tr><td>Name:</td><td>Contact Number:</td><td>address:</td></tr>';


//loop through the results from our query and out put them 1 at a time to the page
//<tr>creates a new row
//<td>creates a new field

	echo '<tr><td><input type="text" name="name" value="" /></td><td><input type="text" name="contactNumbers" value="" /></td><td><input name="address" type="text" value="" /></td></tr>' ;

//close the table
echo '</table>';
echo '<input type="submit" value="Submit" />';
echo '</form>';		
		
//disconnect

echo'</div>';
echo'<br />';
?>


</div>
<div data-role="footer" data-position="fixed">
             <div data-role="navbar">
				<ul>
					<li><a>&#169; 2013 JingXian He</a></li>
				</ul>
			</div>
         </div>
     </div>
</body>
</html>
