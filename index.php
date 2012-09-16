<!DOCTYPE HTML>
<html>
<head>
<title>zeehio - Web personal</title>
</head>
<body>
<?php
if ($handle = opendir('.')) {
    while (false !== ($entry = readdir($handle))) {
		if (preg_match("\.md$",$entry) {
			echo "<a href=\"$entry\">$entry</a>\n";
		}
    }
    closedir($handle);
}
?>

</body>
</html>
