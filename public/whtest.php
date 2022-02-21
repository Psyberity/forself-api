<?php

//print_r(shell_exec('cd ../ && git pull'));
//print '<br>--<br>';
//print_r(shell_exec('cd ../ && ls && composer install'));
//print '<br>--<br>';
print_r(system('cd ../ && composer install 2>&1'));
print '<br>--<br>';
print mt_rand(1, 999);
