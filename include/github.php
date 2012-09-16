<?php

$remoteIP	= $_SERVER['REMOTE_ADDR'];

if ( $remoteIP == "207.97.227.253" || 
     $remoteIP == "50.57.128.197" ||
     $remoteIP == "108.171.174.178" ) {
    exec("git pull");
 } else {
    echo "Not pulling";
}
?>
