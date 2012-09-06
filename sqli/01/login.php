<?php
	/**
	 * For Database schema, import file sql01.sql
	 */
	session_start();

	mysql_connect("localhost", "root", "password");
	mysql_select_db("sql01");

	if($_GET['act'] == "logout") { session_destroy();header("Location:index.php"); return; }

	if($_POST) {
		$query = "SELECT id, email, name FROM users WHERE email='" . $_POST['email'] . "' AND password='" . md5($_POST['password']) . "'";

		$result = mysql_query($query);
		$row = mysql_fetch_row($result);
		
		if($row) {
			$_SESSION['id'] = $row[0];
			$_SESSION['email'] = $row[1];
			$_SESSION['name'] = $row[2];
			header("Location: index.php");
		} else {
			header("Location: index.php?msg=Sorry, Invalid Username or Password");
		}
	}
?>
