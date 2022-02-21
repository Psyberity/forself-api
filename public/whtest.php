<?php

print_r(shell_exec('ls'));
print '<br>--<br>';
print_r(shell_exec('cd ../ && ls'));
print '<br>--<br>';
print_r(shell_exec('ls'));
print '<br>--<br>';
print_r(shell_exec('git pull'));
print '<br>--<br>';
print_r(shell_exec('ls'));
print '<br>--<br>';
print_r(shell_exec('composer install'));
print '<br>--<br>';
print mt_rand(1, 999);
