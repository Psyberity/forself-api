<?php

$data = serialize($_POST) . '
' . serialize($_GET);

$hnd = fopen('test.txt', 'w');
fwrite($hnd, $data);
fclose($hnd);

//echo shell_exec('cd ../');
//echo shell_exec('git pull');
//echo shell_exec('whoami');
