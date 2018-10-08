<?php
	if (!file_exists("private"))
		mkdir("private");
	
	if (!$_POST['passwd'] || !$_POST['login'] || $_POST['submit'] != "OK")
		echo "ERROR\n";
	else 
	{
		$usr = array("login" => $_POST['login'],"passwd" => hash('whirlpool',$_POST['passwd']));
		file_put_contents("private/passwd",serialize($usr),FILE_APPEND);
	}

?>