<?php

$content = '';
if ($_SERVER['CONTENT_TYPE'] == 'application/json') {
    $content = file_get_contents('php://input');
}

$data = serialize($_SERVER);

$hnd = fopen('test.txt', 'w');
fwrite($hnd, $content);
fclose($hnd);

//echo shell_exec('cd ../');
//echo shell_exec('git pull');
//echo shell_exec('whoami');
