<?php

print_r(shell_exec('cd ../ && git pull'));
print '<br>--<br>';
//print_r(shell_exec('cd ../ && ls && composer install'));
//print '<br>--<br>';
print_r(system('cd ../ && php /usr/local/bin/composer/composer.phar install'));
print_r(system('cd ../ && php /usr/local/bin/composer/composer.phar install -d /var/www/api.forself.ru/'));
print '<br>--<br>';
print mt_rand(1, 999);
