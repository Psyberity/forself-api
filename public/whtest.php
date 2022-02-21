<?php

print_r(shell_exec('cd ../ && git pull'));
print '<br>--<br>';
print_r(shell_exec('cd ../ && composer install'));
print '<br>--<br>';
print mt_rand(1, 999);
