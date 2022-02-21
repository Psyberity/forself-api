<?php

print_r(shell_exec('cd ../'));
print '<br>--<br>';
print_r(shell_exec('git pull'));
print '<br>--<br>';
print_r(shell_exec('composer'));
print '<br>--<br>';
print mt_rand(1, 999);
