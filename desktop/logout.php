<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>logout</title>
</head>

<body>

<?php

//access the existing session object
session_start();

//evaluate the user_id stored in the session that was set on validate.php
if (empty($_SESSION['user_id'])) {
	header('Location: signin.html');
}

else {
//remove all the variables from the existing session
session_unset();

//get rid of the current session
session_destroy();

//redirect to login page
header('location: signin.html');
}

?>

</body>

</html>
