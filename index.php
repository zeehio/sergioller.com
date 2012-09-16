<?php
require_once('include/theme.php');

create_header("zeehio - Web personal","include","");

echo "<ul>\n";
if ($handle = opendir('.')) {
    while (false !== ($entry = readdir($handle))) {
		if (preg_match("/^[0-9].*\.md$/",$entry)) {
			echo '<li><a href="' . $entry . '">' . $entry . "</a></li>\n";
		}
    }
    closedir($handle);
}
echo "</ul>\n";
create_footer();
?>
