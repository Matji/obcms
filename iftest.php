<?php

$str = file_get_contents('comm.php', true);
$content = eval("?>$str");
echo $content;
 