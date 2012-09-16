<?php


$idtoslug = array("urbanterror", "q3ut4","ut4_facultat_base2.pk3","espaidual", "fala2010",
                  "face", "estatsolid", "estatsolid-src", "mecanicaquantica", "mecanicaquantica-src");

$listofslugs = array(
   "urbanterror" => "/download/ut/",
   "q3ut4"       => "/download/ut/q3ut4",
   "ut4_facultat_base2.pk3" => "/download/ut/q3ut4/ut4_facultat_base2.pk3",
   "espaidual" => "/download/articles/espaidual.pdf",
   "fala2010" => "/download/articles/Fala2010.pdf",
   "face" => "/download/face.jpg",
   "estatsolid" => "/download/formularis/formulariES.pdf",
   "estatsolid-src" => "/download/formularis/formulariES.odt",
   "mecanicaquantica" => "/download/formularis/formulariMQ.pdf",
   "mecanicaquantica-src" => "/download/formularis/formulariMQ.odt");

if isset($_GET["id"]) {
   $newpath = $listofslugs[$idtoslug[$_GET["id"]]];
} else if isset($_GET["slug"]) {
   $newpath = $listofslugs[$_GET["slug"]];
}

if (isset($newpath)) {
header("Location: $newpath");
} else {
echo "Wrong download resource";
}
?>
