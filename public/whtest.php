<?php

print_r(shell_exec('cd ../ && git pull'));
print '<br>--<br>';
//print_r(shell_exec('cd ../ && ls && composer install'));
//print '<br>--<br>';
print_r(system('php /usr/local/bin/composer install -d /var/www/api.forself.ru/'));
print '<br>--<br>';
print mt_rand(1, 999);
