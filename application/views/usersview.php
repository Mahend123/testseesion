
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="<?php echo base_url('login/logout') ?>">logout</a>
	<?php  echo  "Username = ". $_SESSION['email']."<br>";
		 	echo  "Role = ". $_SESSION['role'];
	?>
	<h1>Users View Page</h1>
</body>
</html>