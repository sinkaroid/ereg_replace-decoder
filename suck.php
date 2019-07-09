<?php
$contents = "suck";
$contents = base64_decode($contents);
$contents = "<textarea rows=\"6\" cols=\"25\">".strtr($contents, "123456aouie", "aouie123456")."</textarea>";
echo $contents;
?>
