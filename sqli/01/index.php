<?php
	session_start();
	
	if(! empty($_SESSION['email'])) {
		$name = $_SESSION['name'];
		echo '<h1>Welcome, ' . $name . '</h1>';
		echo '<a href="login.php?act=logout">Logout?</a>';
	} else {
		if($_GET['msg']) { 
			echo "<h2>" . $_GET['msg'] . "</h2>";
		}
?>
<h1>Welcome!</h1>
<b>Please Login</b>

<form action="login.php" method="post"><br />
	Email: <input type="text" name="email"><br /><br />
	Password: <input type="password" name="password"><br /><br />

	<input type="submit" value="Login">
</form>
<?php 
	}
?>

