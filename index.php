<?php
require_once('include/theme.php');

echo create_header("zeehio - Web personal","include","");

echo "<h1>Darreres entrades</h1>";
echo "<ul>\n";
echo list_posts(".");
echo "</ul>\n";
echo "<ul>";
if ($handle = opendir('.')) {
    while (false !== ($entry = readdir($handle))) {
		if (preg_match("/^[0-9].*\.md$/",$entry)) {
			echo '<li><a href="' . $entry . '">' . $entry . "</a></li>\n";
		}
    }
    closedir($handle);
}
echo "</ul>\n";
echo create_footer();
?>
