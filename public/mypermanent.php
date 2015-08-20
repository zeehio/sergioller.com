<?php

$listofslugs = array(
   "pgp_key" => "/download/0x6BEB2330.asc",
   "urbanterror" => "/download/ut/",
   "q3ut4"       => "/download/ut/q3ut4",
   "ut4_facultat_base2.pk3" => "/download/ut/q3ut4/ut4_facultat_base2.pk3",
   "espaidual" => "/download/articles/espaidual.pdf",
   "fala2010" => "/download/articles/Fala2010.pdf",
   "face" => "/download/face.jpg",
   "estatsolid" => "/download/formularis/formulariES.pdf",
   "mecanicaquantica" => "/download/formularis/formulariMQ.pdf");

if (isset($_GET["id"])) {
   echo "Please notify me of this broken link!";
} else if (isset($_GET["slug"])) {
   $newpath = $listofslugs[$_GET["slug"]];
}

if (isset($newpath)) {
header("Location: $newpath");
} else {
echo "Wrong download resource";
}
?>
