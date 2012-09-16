<?php

function create_header($title,$ht_path,$toc_display) {

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

HTML;

return $output;
}

function create_footer() {
$output = <<< HTML
<div id="bigfoot">
  <!-- A decent amount of empty space was added so the browser can jump to anchors near the bottom of the page. -->
  &nbsp;
</div>

</body>
</html>
HTML;
return $output;
}

?>
