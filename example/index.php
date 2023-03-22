<?php

include __DIR__.'/../vendor/autoload.php';
use Wepesi\App\PasswordGenerator;

$simple_string = PasswordGenerator::randomString();
$strong_string = PasswordGenerator::randomString(10,true);

echo $simple_string . PHP_EOL;
echo $strong_string . PHP_EOL;
//eg: Lfw8oPDUhl 
//eg: N[:Lspg+Lw

$salt = PasswordGenerator::salt();
echo $salt . PHP_EOL;
// eg: 505ff561ca2a0d846e5713b6b00f6b38

$simple_string_no_salt = PasswordGenerator::make($simple_string);
echo $simple_string_no_salt . PHP_EOL;
// eg: 1fbbd6ad4db19d296e6d9680f28829fbb23bb63b6447f8ace9596ce258a073ed

$simple_string_salt = PasswordGenerator::make($simple_string,$salt);
echo $simple_string_salt . PHP_EOL;
// eg: 8553b800cd2dcd2646c7535e8675c7892872edf508440e268c9017fd15dbc93a
