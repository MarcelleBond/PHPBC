<?php
	session_start();
	if($_GET['login'] != NULL && $_GET['passwd'] != NULL && $_GET['submit'] == "OK")
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script>
</head>
<body>
	<form action = "index.php" method = "GET">
		Username: <input name="login" type="text" value="<?php echo $_SESSION['login']?>"/><br/>
		Password: <input name="passwd" type="text" value="<?php echo $_SESSION['passwd']?>"/><br/>
		<input type="submit" value="OK" name="submit"/>
	</form>
</body>
</html>
