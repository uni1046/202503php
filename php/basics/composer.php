<?php

require 'vendor/autoload.php';

use Cowsayphp\Cow;

$cow = new Cow();
echo $cow->say('Hello Composer!');

echo "\n\n";

$cow->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setWidth(40);
echo $cow->say('Another message with custom cow!');

