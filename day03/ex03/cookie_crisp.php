<?php
	if($_GET)
	{
		if ($_GET['action'] === "set")
			setcookie($_GET['name'], $_GET['value'], time() + (86400 * 30), "/");
		else if ($_GET['action'] === "get" && $_COOKIE[$_GET['name']] != NULL)
			echo $_COOKIE[$_GET['name']];
		else if ($_GET['action'] === "del")
			setcookie($_GET['name'], "", time() - 3600);
	}
?>
