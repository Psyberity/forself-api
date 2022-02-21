<?php

print_r(shell_exec('cd ../'));
print '<br>--<br>';
print_r(shell_exec('git pull'));
print '<br>--<br>';
print_r(shell_exec('composer install'));
