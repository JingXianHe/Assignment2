

<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Fetchingly 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130903

-->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Dialog - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
  var s=new Array();
  $(".aa").click(function(){
  $(this).parent().parent().find('input').each(function(i){
			
			s[i]=$(this).val();
		});
		$("#dialog a").attr("href","tel:"+s[0]).text("Telephone number is "+s[0]);
		$("#dialog p").text("Address is "+s[1]);
  $("#dialog").dialog();
	
  });
    
  });
  </script>
</head>
<body>
<div id="dialog" title="Information">
  <a href=""></a>
  <p></p>
</div>


<div style="background-color:white;">
<input type="button" value="Back" onclick="window.history.back()">
<?php

//access the current session
session_start();

//evaluate the user_id stored in the session that was set on validate.php
if (empty($_SESSION['user_id'])) {
	header('Location: signin.html');
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
</div>
<div data-role="footer" data-position="fixed">
             <div data-role="navbar">
				<ul>
					<li><a>&#169; 2013 JingXian He</a></li>
					<li><a href="administer21.php">Add Information</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
         </div>
     </div>
</body>
</html>
