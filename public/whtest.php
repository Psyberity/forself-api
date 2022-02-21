<?php

print_r(shell_exec('cd ../ && git pull'));
print '<br>--<br>';
print_r(shell_exec('cd ../ && ls && composer install'));
print '<br>--<br>';
$output = [];
exec('which composer 2>&1', $output, $exitCode);
print_r($output);

print '<br>--<br>';
print mt_rand(1, 999);
