<a href="index.php?file=names.txt">Names</a>
<a href="index.php?file=dogs.txt">Dogs</a>
<br /><br />
<em> Welcome to our site. Please take some time to browse around</em>
<?php
	if(isset($_GET['file'])) {
		$fname = 'data/' . $_GET['file'];
 		$f = fopen($fname, "r");
		$contents = fread($f, filesize($fname));
		echo $contents;
	}
?>
