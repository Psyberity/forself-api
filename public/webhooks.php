<?php

$data = serialize($_POST) . '
' . serialize($_GET) . '
' . mt_rand(1, 99999);

$hnd = fopen('test.txt', 'w');
fwrite($hnd, $data);
fclose($hnd);

//echo shell_exec('cd ../');
//echo shell_exec('git pull');
//echo shell_exec('whoami');
