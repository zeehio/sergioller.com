<?php
require_once('include/theme.php');

$metas=array ("description" => "El meu calaix de sastre. Formularis de física, GNU/Linux, i tot amb el que em vagi trobant per la xarxa.",
       "author" => "Sergio Oller");

echo create_header("Sergio Oller","include","",$metas);

echo "<h1>Darreres entrades</h1>";
echo "<ul>\n";
echo list_posts(".");
echo "</ul>\n";
echo create_footer();
?>
