<?php

print shell_exec('cd ../');
print '<br>';
print shell_exec('git pull');
print '<br>';
print shell_exec('composer install');
