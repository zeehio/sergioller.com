<!DOCTYPE HTML>
<html>
<head>
<title>zeehio - Web personal</title>
</head>
<body>
<ul>
<?php
if ($handle = opendir('.')) {
    while (false !== ($entry = readdir($handle))) {
		if (preg_match("\.md$",$entry)) {
			echo '<li><a href="' . $entry . '">' . $entry . "</a></li>\n";
		}
    }
    closedir($handle);
}
?>
</ul>
</body>
</html>
