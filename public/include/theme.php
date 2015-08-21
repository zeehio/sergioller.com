<?php

function list_files($directory,$pattern,$preitem,$postitem,$haslink,$removeext) {
	if ($handle = opendir($directory)) {
	    $output = "";
	    while (false !== ($entry = readdir($handle))) {
			if (preg_match($pattern,$entry)) {
				if ($removeext) {
					$name = preg_replace('/\.[^.]+$/','',$entry);
				} else {
					$name = $entry;
				}
				if ($haslink) {
					$output .= $preitem.'<a href="/' . $entry . '">' . $name . "</a>" . $postitem . "\n";
				} else {
					$output .= $preitem.           ""                . $name .   ""   . $postitem . "\n";
				}				
			}
	    }
	    closedir($handle);
	}
	return $output;
}

function list_posts($directory) {
	return list_files($directory,"/^[0-9].*\.md$/","<li>","</li>",true,true);
}

function list_pages($directory) {
	$output = "";
	$file = fopen("../pages.txt","r");
	while($line = fgetcsv($file, 0, '|')) {
		$output .= "<li><a href=\"$line[1]\">$line[0]</a></li>";
	}
	fclose($file);

	return $output;
	//return list_files($directory,"/^[^0-9].*\.md$/","<li>","</li>",true,true);

}


function create_header($title,$ht_path,$toc_display,$meta) {

if ($_SERVER['REQUEST_URI'] == "/") {
 $title = "Sergio Oller - zeehio";
}

$output = <<< HTML
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="${ht_path}/markdown-screen.css" type="text/css" media="screen">
  <link rel="stylesheet" href="${ht_path}/markdown-print.css" type="text/css" media="print" >
  <title>$title</title>
  <script type="text/javascript">
    function toggleVisibility(theButton, targetName) {
      var target = document.getElementById(targetName);
      if ( target.style.opacity == '0' ) {
        // show
        target.style.left = '0px';
        target.style.position = 'relative';
        target.style.opacity = '1';
        theButton.innerHTML = "Hide Table of Contents";
      } else {
        // hide
        target.style.left = '-4000px';
        target.style.position = 'absolute';
        target.style.opacity = '0';
        theButton.innerHTML = "Show Table of Contents";
      }
      return true;
    }
  </script>
</head>
<body${toc_display}>
<h1><a href="/">Sergio Oller - zeehio</a></h1>
<ul id="nav">
HTML;
$output .= list_pages(".");

return $output . "</ul>";
}

function create_footer() {
$output = <<< HTML
<div id="footer">
<p style="font-size:small;text-align:center"><a href="/">Main 
page</a></p>
</div>
<!-- A decent amount of empty space was added so the browser can jump to anchors near the bottom of the page. -->
<!--
<div id="bigfoot">
  &nbsp;
</div>
-->

</body>
</html>
HTML;
return $output;
}

?>
