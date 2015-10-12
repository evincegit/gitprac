<?php

$test = "HDPE NOWPAK®";
$cont_type = str_replace(utf8_decode("®"),"", $test);
$cont_type = str_replace(utf8_decode("Â"),"", $cont_type);					
echo $cont_type;